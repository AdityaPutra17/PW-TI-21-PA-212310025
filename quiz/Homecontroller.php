<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return view('home');
    }

    public function quiz2(){
        return 'fkashdfksj';
    }
    public function index2(){
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310025;
        $students[] = array("npm"=>212310025, "name"=>"aditya putra", "gender"=>"Lakik", "alamat"=>"kopem");
        $students[] = array("npm"=>212310015, "name"=>"Dyas", "gender"=>"Lakik", "alamat"=>"kopem");
        $students[] = array("npm"=>212310035, "name"=>"adrian", "gender"=>"Lakik", "alamat"=>"kopem");
        $students[] = array("npm"=>212310017, "name"=>"aflan", "gender"=>"Lakik", "alamat"=>"kopem");
        $students[] = array("npm"=>212310006, "name"=>"mahe", "gender"=>"Lakik", "alamat"=>"kopem");
        $data['students'] = $students;
        return view('home')->with("data",$data);
    }
}
