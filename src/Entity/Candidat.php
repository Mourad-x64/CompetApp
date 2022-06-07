<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidat
 *
 * @ORM\Table(name="candidat")
 * @ORM\Entity
 */
class Candidat
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdCandidat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCandidat", type="string", length=50, nullable=false)
     */
    private $nomcandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomCandidat", type="string", length=50, nullable=false)
     */
    private $prenomcandidat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailCandidat", type="string", length=50, nullable=true)
     */
    private $emailcandidat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateCandidatureCandidat", type="date", nullable=true)
     */
    private $datecandidaturecandidat;

    public function getIdcandidat(): ?int
    {
        return $this->idcandidat;
    }

    public function getNomcandidat(): ?string
    {
        return $this->nomcandidat;
    }

    public function setNomcandidat(string $nomcandidat): self
    {
        $this->nomcandidat = $nomcandidat;

        return $this;
    }

    public function getPrenomcandidat(): ?string
    {
        return $this->prenomcandidat;
    }

    public function setPrenomcandidat(string $prenomcandidat): self
    {
        $this->prenomcandidat = $prenomcandidat;

        return $this;
    }

    public function getEmailcandidat(): ?string
    {
        return $this->emailcandidat;
    }

    public function setEmailcandidat(?string $emailcandidat): self
    {
        $this->emailcandidat = $emailcandidat;

        return $this;
    }

    public function getDatecandidaturecandidat(): ?\DateTimeInterface
    {
        return $this->datecandidaturecandidat;
    }

    public function setDatecandidaturecandidat(?\DateTimeInterface $datecandidaturecandidat): self
    {
        $this->datecandidaturecandidat = $datecandidaturecandidat;

        return $this;
    }


}
