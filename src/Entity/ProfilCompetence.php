<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilCompetence
 *
 * @ORM\Table(name="profil_competence", indexes={@ORM\Index(name="fk_pc_idUti", columns={"idUtilisateur"}), @ORM\Index(name="fk_pc_idCan", columns={"IdCandidat"}), @ORM\Index(name="fk_pc_idNiComp", columns={"idNiveauCompetence"})})
 * @ORM\Entity
 */
class ProfilCompetence
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCompetence", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="libProfilCompetence", type="string", length=50, nullable=false)
     */
    private $libprofilcompetence;

    /**
     * @var \Candidat
     *
     * @ORM\ManyToOne(targetEntity="Candidat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdCandidat", referencedColumnName="IdCandidat")
     * })
     */
    private $idcandidat;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUtilisateur", referencedColumnName="idUtilisateur")
     * })
     */
    private $idutilisateur;

    /**
     * @var \NiveauDeCompetence
     *
     * @ORM\ManyToOne(targetEntity="NiveauDeCompetence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idNiveauCompetence", referencedColumnName="idNiveauCompetence")
     * })
     */
    private $idniveaucompetence;

    public function getIdcompetence(): ?int
    {
        return $this->idcompetence;
    }

    public function getLibprofilcompetence(): ?string
    {
        return $this->libprofilcompetence;
    }

    public function setLibprofilcompetence(string $libprofilcompetence): self
    {
        $this->libprofilcompetence = $libprofilcompetence;

        return $this;
    }

    public function getIdcandidat(): ?Candidat
    {
        return $this->idcandidat;
    }

    public function setIdcandidat(?Candidat $idcandidat): self
    {
        $this->idcandidat = $idcandidat;

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

    public function getIdniveaucompetence(): ?NiveauDeCompetence
    {
        return $this->idniveaucompetence;
    }

    public function setIdniveaucompetence(?NiveauDeCompetence $idniveaucompetence): self
    {
        $this->idniveaucompetence = $idniveaucompetence;

        return $this;
    }


}
