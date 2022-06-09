<?php

namespace App\Entity;

use App\Repository\DocumentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentsRepository::class)
 */
class Documents
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Many documents have one profil. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Profils", inversedBy="documents")
     * @ORM\JoinColumn(name="id_profil", nullable=false, referencedColumnName="id")
     */
    private $profil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_contenu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ext;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_fichier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeContenu(): ?string
    {
        return $this->type_contenu;
    }

    public function setTypeContenu(string $type_contenu): self
    {
        $this->type_contenu = $type_contenu;

        return $this;
    }

    public function getExt(): ?string
    {
        return $this->ext;
    }

    public function setExt(string $ext): self
    {
        $this->ext = $ext;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTypeFichier(): ?string
    {
        return $this->type_fichier;
    }

    public function setTypeFichier(string $type_fichier): self
    {
        $this->type_fichier = $type_fichier;

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
}
