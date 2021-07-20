<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personna;
class form extends Controller
{
    //
    function save(request $req){
        print_r($req->input());
        $personna = new personna;
        $personna->nom = $req->nom;
        $personna->email = $req->email;
        $personna->tel = $req->tel;
        $personna->age = $req->age;
        $personna->genre = $req->genre;
        $personna->ville = $req->ville;
        echo $personna->save();
    }
}
