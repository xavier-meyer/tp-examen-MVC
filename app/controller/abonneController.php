<?php

namespace app\controller;

class abonneController {

    public static function index() {

        $abonnes = abonne::all();
        include ('abonnes/index.php');

    }

    public static function show($id) {

        $abonnes = abonne::find($id);
        include ('abonnes/show.php');
    }
}