<?php

namespace App\Repository;

use App\Entity\ouvrage;
use App\Service\Database;
use PDO;
use PDOException;

class ouvrageRepository extends Database implements IOuvrageRepository
{
    public function add(ouvrage $ouvrage)
    {
        $stmt = $this->db->prepare("INSERT INTO ouvrage (titre) VALUES (:titre)");
        $stmt->bindValue(':design', $ouvrage->setTitre());
        $stmt->execute();
        $stmt = null;
    }

    public function findAll() : array
    {
        $stmt = $this->db->prepare("SELECT * FROM ouvrage ORDER BY titre ASC");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $stmt->fetchAll();
        if (!$arr) {
            throw new PDOException("Could not find ouvrage in database");
        }
        $stmt = null;
        $ouvrages = [];
        foreach ($arr as $ouvrage) {
            $s = new ouvrage($ouvrage['titre']);
            $s->setId($ouvrage['id']);
            $ouvrage[] = $s;
        }
        return $ouvrages;
    }

    public function findByTitre(string $design): ouvrage
    {
        $stmt = $this->db->prepare("SELECT * FROM ouvrage");
        $stmt->bindValue(':design', $design);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $stmt->fetch();
        if (!$arr) {
            throw new PDOException("Could not find design in database");
        }
        $stmt = null;
        $sport = new ouvrage($arr['design']);
        $sport->setId($arr['id']);
        return $sport;
    }

    public function update(ouvrage $ouvrage)
    {
        $stmt = $this->db->prepare("UPDATE ouvrage SET design = :design WHERE id = :id");
        $stmt->bindValue(':design', $ouvrage->design);
        $stmt->bindValue(':id', $ouvrage->get(id));
        $stmt->execute();
        $stmt = null;
    }

    public function remove(ouvrage $ouvrage)
    {
        $stmt = $this->db->prepare("DELETE FROM ouvrage WHERE id = :id");
        $stmt->bindValue(':id', $ouvrage->get('id'));
        $stmt->execute();
        $stmt = null;
    }

    public function findById($params)
    {
        // TODO: Implement findById() method.
    }


    public function findByDesign(string $design): ouvrage
    {
        // TODO: Implement findByDesign() method.
    }
}

