<?php

namespace App\Entity;

use App\Repository\ProfilCompetencesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfilCompetencesRepository::class)
 */
class ProfilCompetences
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Many profilCompetences have one profil. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Profils", inversedBy="profils_competences")
     * @ORM\JoinColumn(name="id_profil", nullable=false, referencedColumnName="id")
     */
    private $profil;

    /**
     * @ORM\ManyToOne(targetEntity="Competences")
     * @ORM\JoinColumn(name="id_competence", referencedColumnName="id")
     */
    private $competence;



    /**
     * @ORM\Column(type="boolean")
     */
    private $attrait;

    /**
     * @ORM\Column(type="integer")
     */
    private $niveau;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isAttrait(): ?bool
    {
        return $this->attrait;
    }

    public function setAttrait(bool $attrait): self
    {
        $this->attrait = $attrait;

        return $this;
    }

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getProfil(): ?Profils
    {
        return $this->profil;
    }

    public function setProfil(?Profils $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    public function getCompetence(): ?Competences
    {
        return $this->competence;
    }

    public function setCompetence(?Competences $competence): self
    {
        $this->competence = $competence;

        return $this;
    }
}
