<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex(){
        $name = "company";
        $records = 1;
         return view('pages.index')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getprimero(){
        $name = "company";
        $records = 1;
         return view('pages.primero')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getsegundo(){
        $name = "company";
        $records = 1;
         return view('pages.segundo')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function gettercero(){
        $name = "company";
        $records = 1;
         return view('pages.tercero')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getcuarto(){
        $name = "company";
        $records = 1;
         return view('pages.cuarto')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getquinto(){
        $name = "company";
        $records = 1;
         return view('pages.quinto')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getsexto(){
        $name = "company";
        $records = 1;
         return view('pages.sexto')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getseptimo(){
        $name = "company";
        $records = 1;
         return view('pages.septimo')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getoctavo(){
        $name = "company";
        $records = 1;
         return view('pages.octavo')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getnoveno(){
        $name = "company";
        $records = 1;
         return view('pages.noveno')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getdecimo(){
        $name = "company";
        $records = 1;
         return view('pages.decimo')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getonce(){
        $name = "company";
        $records = 1;
         return view('pages.once')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getdoce(){
        $name = "company";
        $records = 1;
         return view('pages.doce')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function gettrece(){
        $name = "company";
        $records = 1;
         return view('pages.trece')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getcatorce(){
        $name = "company";
        $records = 1;
         return view('pages.catorce')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getquince(){
        $name = "company";
        $records = 1;
         return view('pages.quince')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getdicesiseis(){
        $name = "company";
        $records = 1;
         return view('pages.dicesiseis')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getdiecisiete(){
        $name = "company";
        $records = 1;
         return view('pages.diecisiete')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
    public function getdieciocho(){
        $name = "company";
        $records = 1;
         return view('pages.dieciocho')
         ->with("name",$name)
         ->with("records",$records)
         ;
    }
}
