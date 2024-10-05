<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public string $massage = 'hello';
    //
    public function getHelloMassage($massage): string|null
    {
        return $massage;

    }
}
