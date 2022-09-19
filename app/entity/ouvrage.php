<?php

namespace app\entity;

use app\repository\ouvrageRepository;
use Exception;

class ouvrage
{
    private int $id;
    private string $titre;
    private string $auteur;
    private ouvrageRepository $ouvrageRepository;

    public function __construct(string $titre, string $auteur)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->ouvrageRepository = new ouvrageRepository();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }


    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): void
    {
        $this->auteur = $auteur;
    }
}