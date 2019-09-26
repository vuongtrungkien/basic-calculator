<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(Request $request)
    {
        $operandOne = +$request->numberOne;
        $operandTow = +$request->numberTow;
        $calculation = $request->calculation;
        $result = '';
        switch ($calculation) {
            case '+':
                $result = $this->summation($operandOne, $operandTow);
                break;
            case '-':
                $result = $this->subtraction($operandOne, $operandTow);
                break;
            case '*':
                $result = $this->multiplication($operandOne, $operandTow);
                break;
            default :
                $result = $this->division($operandOne, $operandTow);
        }

        return view('index',compact('result'));


    }

    public function summation($operandOne, $operandTow)
    {
        return $operandOne + $operandTow;
    }

    public function division($operandOne, $operandTow)
    {
        return $operandOne / $operandTow;
    }

    public function multiplication($operandOne, $operandTow)
    {
        return $operandOne * $operandTow;
    }

    public function subtraction($operandOne, $operandTow)
    {
        return $operandOne - $operandTow;
    }
}

