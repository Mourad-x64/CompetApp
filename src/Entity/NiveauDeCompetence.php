<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NiveauDeCompetence
 *
 * @ORM\Table(name="niveau_de_competence", indexes={@ORM\Index(name="fk_ndc_idUti", columns={"idUtilisateur"}), @ORM\Index(name="fk_ndc_idComp", columns={"idCompetence"})})
 * @ORM\Entity
 */
class NiveauDeCompetence
{
    /**
     * @var int
     *
     * @ORM\Column(name="idNiveauCompetence", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idniveaucompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="titreNiveauCompetence", type="string", length=50, nullable=false)
     */
    private $titreniveaucompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="attraitNiveauCompetence", type="string", length=50, nullable=false)
     */
    private $attraitniveaucompetence;

    /**
     * @var \Competence
     *
     * @ORM\ManyToOne(targetEntity="Competence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCompetence", referencedColumnName="idCompetence")
     * })
     */
    private $idcompetence;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUtilisateur", referencedColumnName="idUtilisateur")
     * })
     */
    private $idutilisateur;

    public function getIdniveaucompetence(): ?int
    {
        return $this->idniveaucompetence;
    }

    public function getTitreniveaucompetence(): ?string
    {
        return $this->titreniveaucompetence;
    }

    public function setTitreniveaucompetence(string $titreniveaucompetence): self
    {
        $this->titreniveaucompetence = $titreniveaucompetence;

        return $this;
    }

    public function getAttraitniveaucompetence(): ?string
    {
        return $this->attraitniveaucompetence;
    }

    public function setAttraitniveaucompetence(string $attraitniveaucompetence): self
    {
        $this->attraitniveaucompetence = $attraitniveaucompetence;

        return $this;
    }

    public function getIdcompetence(): ?Competence
    {
        return $this->idcompetence;
    }

    public function setIdcompetence(?Competence $idcompetence): self
    {
        $this->idcompetence = $idcompetence;

        return $this;
    }

    public function getIdutilisateur(): ?Utilisateur
    {
        return $this->idutilisateur;
    }

    public function setIdutilisateur(?Utilisateur $idutilisateur): self
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }


}
