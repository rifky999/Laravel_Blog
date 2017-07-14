<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrolUser extends Controller
{
    public function index(){

      $Rifky = ['0'=>[
                       'Hobi' => 'Learning',
                       'Hobi2' => 'Coding',
                       'Hobi3' => 'Speaking'
                     ],
                '1'=>[
                  'Hobi' => '2Learning',
                  'Hobi2' => '2Coding',
                  'Hobi3' => '2Speaking'
                     ]

               ];

         return view('Admin.R_99.index', compact('Rifky'));
    }
}
