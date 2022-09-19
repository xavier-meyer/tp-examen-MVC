<?php

namespace app\entity;

use app\repository\ouvrageRepository;
use Exception;

class abonne
{

    private int $id;
    private string $nom;
    private string $prenom;
    private abonneRepository $abonneRepository;

    public function __construct( string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->abonneRepository = new abonneRepository();
    }

    public function getId(): int
    {
        return $this->id;

    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNom(): string
    {
        return $this->nom;

    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrenom(): string
    {
    return $this->prenom;
    }

   public function setPrenom(string $prenom): void
   {
    $this->prenom = $prenom;
   }

}

