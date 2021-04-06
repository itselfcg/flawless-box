<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateController extends Controller
{

    public function getMonthName($monthNum){
        $dateObj   = \DateTime::createFromFormat('!m', $monthNum);
        return $dateObj->format('F');
    }


    public function calculateDate($duration,$date){
        $string='+'.$duration.' month';
        $date->modify($string);
        return $date->format('Y-m-d H:i:s');
    }
}
