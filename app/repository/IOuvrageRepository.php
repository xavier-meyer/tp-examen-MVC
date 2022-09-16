<?php

namespace App\Repository;

use App\Entity\ouvrage;

interface IOuvrageRepository
{
    public function add(ouvrage $ouvrage);

    public function findAll() : array;

    public function findByDesign(string $design): ouvrage;

    public function update(ouvrage $ouvrage);

    public function remove(ouvrage $ouvrage);

    public function findById($params);
}