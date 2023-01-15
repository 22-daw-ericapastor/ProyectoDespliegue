<?php

namespace Controllers;

use \DateTime;
use \DateTimeZone;

class BaseController
{
    public function __get($route)
    {
        $this->$route();
    }

    function index()
    {
        template('Body');
    }

    function tablaMultiplicar()
    {
        template('Pages/TablaMultiplicar', ['page' => 'tablas']);
    }

    function fechas()
    {
        if (isset($_POST['origin_date']) && isset($_POST['final_date'])) {
            $date1 = $_POST['origin_date'];
            $date2 = $_POST['final_date'];
            $data = [];
            if (strlen($date1) != 10 || strlen($date2) != 10 || substr($date1, 2, 1) != "/"
                || substr($date2, 2, 1) != "/" || substr($date1, 5, 1) != "/"
                || substr($date2, 5, 1) != "/") {
                $data ['error'] = 'invalid format';
            } else {
                $timezone = new DateTimeZone("Europe/Madrid");
                try {
                    $originDate = DateTime::createFromFormat("d/m/Y", $date1, $timezone);
                    try {
                        $finalDate1 = DateTime::createFromFormat("d/m/Y", $date2, $timezone);
                        $interval = date_diff($originDate, $finalDate1);
                        $datediff = $interval->d . " dias " . $interval->m . " meses y " . $interval->y . " años ";
                        $data = [
                            'datediff' => $datediff,
                            'date1' => $date1,
                            'date2' => $date2,
                        ];
                    } catch (\Exception $e) {
                        $data ['error'] = 'invalid format';
                    }
                } catch (\Exception $e) {
                    $data ['error'] = 'invalid format';
                }
            }
        }
        $data ['page'] = 'fechas';
        template('Pages/Fechas', $data);
    }

    function factoriales()
    {
        $factoriales = [];
        for ($a = 1; $a <= 10; $a++) {
            $res = 1;
            $funcion = "!$a = $res";
            for ($b = 1; $b <= $a; $b++) {
                $res = $res * $b;
                $funcion = $funcion . " * $b";
                $factoriales[$a] = $funcion . " = " . $res;
            }
        }
        $data = [
            'page' => 'factoriales',
            'factoriales' => $factoriales
        ];
        template('Pages/Factoriales', $data);
    }
}