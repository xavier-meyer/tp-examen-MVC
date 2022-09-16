<?php

namespace app\controller;

class abonneController {

    public static function index() {

        $abonnes = abonne::all();
        include ('ouvrages/index.php');

    }

    public static function show($id) {

        $ouvrage = Ouvrage::find($id);
        include ('ouvrages/show.php');
    }
}