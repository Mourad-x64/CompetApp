<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience", indexes={@ORM\Index(name="fk_exp_idComp", columns={"idCompetence"}), @ORM\Index(name="fk_exp_idEnt", columns={"idEntreprise"})})
 * @ORM\Entity
 */
class Experience
{
    /**
     * @var int
     *
     * @ORM\Column(name="idExperience", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexperience;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPosteExperience", type="string", length=50, nullable=false)
     */
    private $nomposteexperience;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutExperience", type="date", nullable=false)
     */
    private $datedebutexperience;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinExperience", type="date", nullable=false)
     */
    private $datefinexperience;

    /**
     * @var \ProfilCompetence
     *
     * @ORM\ManyToOne(targetEntity="ProfilCompetence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCompetence", referencedColumnName="idCompetence")
     * })
     */
    private $idcompetence;

    /**
     * @var \Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEntreprise", referencedColumnName="idEntreprise")
     * })
     */
    private $identreprise;

    public function getIdexperience(): ?int
    {
        return $this->idexperience;
    }

    public function getNomposteexperience(): ?string
    {
        return $this->nomposteexperience;
    }

    public function setNomposteexperience(string $nomposteexperience): self
    {
        $this->nomposteexperience = $nomposteexperience;

        return $this;
    }

    public function getDatedebutexperience(): ?\DateTimeInterface
    {
        return $this->datedebutexperience;
    }

    public function setDatedebutexperience(\DateTimeInterface $datedebutexperience): self
    {
        $this->datedebutexperience = $datedebutexperience;

        return $this;
    }

    public function getDatefinexperience(): ?\DateTimeInterface
    {
        return $this->datefinexperience;
    }

    public function setDatefinexperience(\DateTimeInterface $datefinexperience): self
    {
        $this->datefinexperience = $datefinexperience;

        return $this;
    }

    public function getIdcompetence(): ?ProfilCompetence
    {
        return $this->idcompetence;
    }

    public function setIdcompetence(?ProfilCompetence $idcompetence): self
    {
        $this->idcompetence = $idcompetence;

        return $this;
    }

    public function getIdentreprise(): ?Entreprise
    {
        return $this->identreprise;
    }

    public function setIdentreprise(?Entreprise $identreprise): self
    {
        $this->identreprise = $identreprise;

        return $this;
    }


}
