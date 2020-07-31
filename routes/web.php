<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::post('/email', function (){
    var_dump('email');
    exit();
});

Route::get('/gallery', function(){
    $inside = [
        [
            'title' => 'Computer Lab',
            'image' => "computer_lab.png"
        ],
        [
            'title' => 'Laboratories',
            'image' => 'laboratories.png'
        ],
        [
            'title' => 'Library',
            'image' => 'library.png'
        ],
        [
            'title' => 'Football Team',
            'image' => 'football_team.png'
        ],
        [
            'title' => 'Sports',
            'image' => 'sports.png'
        ],
        [
            'title' => 'Serene Atmosphere',
            'image' => 'atmosphere.png'
        ],
        [
            'title' => 'Fun Activities',
            'image' => 'fun.png'
        ],
        [
            'title' => 'Assembly',
            'image' => 'assembly.png'
        ]
    ];
    return view('gallery', compact('inside'));
});

Route::get('/team', function (){
    $team = [
        [
            'sl_no'                =>   1,
            'name'                 =>   'Mr. K R Praveen Sen',
            'designation'          =>   'Principal',
            'subject'              =>   'English',
            'qualification'        =>   'MA (Litt), M. Phil',
            'experience'           =>   '27 years',
        ],
        [
            'sl_no'                =>   2,
            'name'                 =>   'Mrs. Maya G Nair',
            'designation'          =>   'Vice Principal',
            'subject'              =>   'Malayalam',
            'qualification'        =>   'M A., B.Ed.',
            'experience'           =>   '16 years',
        ],
        [
            'sl_no'                =>   3,
            'name'                 =>   'Ms. Sindhu Sen',
            'designation'          =>   'Teacher',
            'subject'              =>   'Mathematics',
            'qualification'        =>   'M.Sc., B.Ed.',
            'experience'           =>   '19  years',
        ],
        [
            'sl_no'                =>   4,
            'name'                 =>   'Ms. Anusree S',
            'designation'          =>   'Teacher',
            'subject'              =>   'Physics',
            'qualification'        =>   'M.Sc.',
            'experience'           =>   '2 years',
        ]
    ];

    return view('team', compact('team'));
});