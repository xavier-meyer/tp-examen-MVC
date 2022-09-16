<?php

namespace app\controller;

class OuvrageController {

    public static function index() {

        $ouvrages = Ouvrage::all();
        include ('ouvrages/index.php');

    }

    public static function show($id) {

        $ouvrage = Ouvrage::find($id);
        include ('ouvrages/show.php');
    }
}