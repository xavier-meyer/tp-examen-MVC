<?php

namespace app\entity;

class Ouvrage {

    private function bdd() {
        $bdd = new PDO();
        $bdd;
    }

    public static function all() {

      $bdd = $this->bdd();
      $request = 'SELECT * FROM abonne';
      $response = $bdd->query($request);

      $data = $response->fetchAll(PDO::FETCH_ASSOC);
      return $data;
    }

}
