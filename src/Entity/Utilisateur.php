<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="idUtilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="loginUtlilisateur", type="string", length=50, nullable=false)
     */
    private $loginutlilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mdpUtilisateur", type="string", length=128, nullable=false)
     */
    private $mdputilisateur;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sousContratUtilisateur", type="boolean", nullable=true)
     */
    private $souscontratutilisateur;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFinMissionUtilisateur", type="date", nullable=true)
     */
    private $datefinmissionutilisateur;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="enMissionUtilisateur", type="boolean", nullable=true)
     */
    private $enmissionutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="rolesUtilisateur", type="string", length=50, nullable=false)
     */
    private $rolesutilisateur;

    public function getIdutilisateur(): ?int
    {
        return $this->idutilisateur;
    }

    public function getLoginutlilisateur(): ?string
    {
        return $this->loginutlilisateur;
    }

    public function setLoginutlilisateur(string $loginutlilisateur): self
    {
        $this->loginutlilisateur = $loginutlilisateur;

        return $this;
    }

    public function getMdputilisateur(): ?string
    {
        return $this->mdputilisateur;
    }

    public function setMdputilisateur(string $mdputilisateur): self
    {
        $this->mdputilisateur = $mdputilisateur;

        return $this;
    }

    public function isSouscontratutilisateur(): ?bool
    {
        return $this->souscontratutilisateur;
    }

    public function setSouscontratutilisateur(?bool $souscontratutilisateur): self
    {
        $this->souscontratutilisateur = $souscontratutilisateur;

        return $this;
    }

    public function getDatefinmissionutilisateur(): ?\DateTimeInterface
    {
        return $this->datefinmissionutilisateur;
    }

    public function setDatefinmissionutilisateur(?\DateTimeInterface $datefinmissionutilisateur): self
    {
        $this->datefinmissionutilisateur = $datefinmissionutilisateur;

        return $this;
    }

    public function isEnmissionutilisateur(): ?bool
    {
        return $this->enmissionutilisateur;
    }

    public function setEnmissionutilisateur(?bool $enmissionutilisateur): self
    {
        $this->enmissionutilisateur = $enmissionutilisateur;

        return $this;
    }

    public function getRolesutilisateur(): ?string
    {
        return $this->rolesutilisateur;
    }

    public function setRolesutilisateur(string $rolesutilisateur): self
    {
        $this->rolesutilisateur = $rolesutilisateur;

        return $this;
    }


}
