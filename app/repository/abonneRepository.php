<?php

namespace App\Repository;

use App\Entity\abonne;
use PDO;
use PDOException;

class abonneRepository extends Database implements IAbonneRepository
{
    public function add(abonne $abonne)
    {
        $stmt = $this->db->prepare("INSERT INTO abonne (nom) VALUES (:nom)");
        $stmt->bindValue(':nom', $abonne->setNom());
        $stmt->execute();
        $stmt = null;
    }

    public function findAll() : array
    {
        $stmt = $this->db->prepare("SELECT * FROM abonne ORDER BY nom ASC");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $stmt->fetchAll();
        if (!$arr) {
            throw new PDOException("Could not find nom in database");
        }
        $stmt = null;
        $abonnes = [];
        foreach ($arr as $abonne {
            $s = new abonne($abonne['nom']);
            $s->setId($abonnes['id']);
            $abonnes[] = $s;
        }
        return $abonnes;
    }

    public function findByPrenom(string $prenom): abonne
    {
        $stmt = $this->db->prepare("SELECT * FROM abonne WHERE prenom = :prenom");
        $stmt->bindValue(':prenom', $prenom);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $stmt->fetch();
        if (!$arr) {
            throw new PDOException("Could not find prenom in database");
        }
        $stmt = null;
        $Abonne = new abonne($arr['nom']);
        $Abonne->setId($arr['id']);
        return $Abonne;
    }

    public function update(abonne $abonne)
    {
        $stmt = $this->db->prepare("UPDATE abonne SET prenom  = :prenom");
        $stmt->bindValue(':prenom', $abonne->setPrenom());
        $stmt->bindValue(':id', $abonne->setId());
        $stmt->execute();
        $stmt = null;
    }

    public function remove(abonne $abonne)
    {
        $stmt = $this->db->prepare("DELETE FROM abonne WHERE id = :id");
        $stmt->bindValue(':id', $abonne->getId());
        $stmt->execute();
        $stmt = null;
    }}

