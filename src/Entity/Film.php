<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmRepository::class)]
class Film
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $titre_film;

    #[ORM\Column(type: 'string', length: 255)]
    private $synopsis;

    #[ORM\Column(type: 'date')]
    private $date_sortie;

    #[ORM\ManyToOne(targetEntity: Realisateur::class, inversedBy: 'films')]
    #[ORM\JoinColumn(nullable: false)]
    private $Realisateur;

    #[ORM\ManyToOne(targetEntity: Genre::class, inversedBy: 'films')]
    #[ORM\JoinColumn(nullable: false)]
    private $Genre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreFilm(): ?string
    {
        return $this->titre_film;
    }

    public function setTitreFilm(string $titre_film): self
    {
        $this->titre_film = $titre_film;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->date_sortie;
    }

    public function setDateSortie(\DateTimeInterface $date_sortie): self
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }

    public function getRealisateur(): ?Realisateur
    {
        return $this->Realisateur;
    }

    public function setRealisateur(?Realisateur $Realisateur): self
    {
        $this->Realisateur = $Realisateur;

        return $this;
    }

    public function getGenre(): ?Genre
    {
        return $this->Genre;
    }

    public function setGenre(?Genre $Genre): self
    {
        $this->Genre = $Genre;

        return $this;
    }
}
