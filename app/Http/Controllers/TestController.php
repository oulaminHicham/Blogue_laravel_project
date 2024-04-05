<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //the route function to afiched the contacte me page
    public  function firstAction(){
        return view('Testing.contactMe' , [
            'page_name'=>'Contact me page',
            'page_descreption' =>'this is descreption',
            'name'=>'hicham' ,
            'books'=>['html' , 'css' , 'js' , 'mysql' , 'php' , 'react' , 'laravel' , 'bootsrap' , 'mongodb' , 'python']
        ]);
    }
    public function greet(){
        return 'hello this is gree actions';
    }
}
