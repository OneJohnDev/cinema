<?php

namespace App\Entity;

use App\Repository\RealisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RealisateurRepository::class)]
class Realisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom_realisateur;

    #[ORM\Column(type: 'string', length: 255)]
    private $prenom_realisateur;

    #[ORM\Column(type: 'date')]
    private $date_naissance;

    #[ORM\OneToMany(mappedBy: 'Realisateur', targetEntity: Film::class)]
    private $films;

    public function __construct()
    {
        $this->films = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRealisateur(): ?string
    {
        return $this->nom_realisateur;
    }

    public function setNomRealisateur(string $nom_realisateur): self
    {
        $this->nom_realisateur = $nom_realisateur;

        return $this;
    }

    public function getPrenomRealisateur(): ?string
    {
        return $this->prenom_realisateur;
    }

    public function setPrenomRealisateur(string $prenom_realisateur): self
    {
        $this->prenom_realisateur = $prenom_realisateur;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    /**
     * @return Collection<int, Film>
     */
    public function getFilms(): Collection
    {
        return $this->films;
    }

    public function addFilm(Film $film): self
    {
        if (!$this->films->contains($film)) {
            $this->films[] = $film;
            $film->setRealisateur($this);
        }

        return $this;
    }

    public function removeFilm(Film $film): self
    {
        if ($this->films->removeElement($film)) {
            // set the owning side to null (unless already changed)
            if ($film->getRealisateur() === $this) {
                $film->setRealisateur(null);
            }
        }

        return $this;
    }
}
