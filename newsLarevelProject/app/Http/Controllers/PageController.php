<?php


namespace App\Http\Controllers;

class PageController extends Controller{
    public function getIndex(){

    }

    public function getAbout(){
        $first = "Aastha";
        $last = "Sharma";
        $full = $first . " " . $last;
        $email = "aas@gmail.com";
        $data = [];
        $data['gender'] = 'female';
        $data['year'] = 1999;
        return view('pages.demoo')->with("fullname",$full)->with("email",$email)->withData($data);   // First paremeter how we are going to access it in our view

    }
}

?>