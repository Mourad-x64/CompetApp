<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission", indexes={@ORM\Index(name="fk_mi_idUtiCollab", columns={"idUtilisateurCollaborateur"}), @ORM\Index(name="fk_mi_idEnt", columns={"idEntreprise"}), @ORM\Index(name="fk_mi_idUtiCommer", columns={"idUtilisateurCommercial"})})
 * @ORM\Entity
 */
class Mission
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMission", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutMission", type="date", nullable=false)
     */
    private $datedebutmission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinMission", type="date", nullable=false)
     */
    private $datefinmission;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuDeMission", type="string", length=50, nullable=false)
     */
    private $lieudemission;

    /**
     * @var \Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEntreprise", referencedColumnName="idEntreprise")
     * })
     */
    private $identreprise;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUtilisateurCommercial", referencedColumnName="idUtilisateur")
     * })
     */
    private $idutilisateurcommercial;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUtilisateurCollaborateur", referencedColumnName="idUtilisateur")
     * })
     */
    private $idutilisateurcollaborateur;

    public function getIdmission(): ?int
    {
        return $this->idmission;
    }

    public function getDatedebutmission(): ?\DateTimeInterface
    {
        return $this->datedebutmission;
    }

    public function setDatedebutmission(\DateTimeInterface $datedebutmission): self
    {
        $this->datedebutmission = $datedebutmission;

        return $this;
    }

    public function getDatefinmission(): ?\DateTimeInterface
    {
        return $this->datefinmission;
    }

    public function setDatefinmission(\DateTimeInterface $datefinmission): self
    {
        $this->datefinmission = $datefinmission;

        return $this;
    }

    public function getLieudemission(): ?string
    {
        return $this->lieudemission;
    }

    public function setLieudemission(string $lieudemission): self
    {
        $this->lieudemission = $lieudemission;

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

    public function getIdutilisateurcommercial(): ?Utilisateur
    {
        return $this->idutilisateurcommercial;
    }

    public function setIdutilisateurcommercial(?Utilisateur $idutilisateurcommercial): self
    {
        $this->idutilisateurcommercial = $idutilisateurcommercial;

        return $this;
    }

    public function getIdutilisateurcollaborateur(): ?Utilisateur
    {
        return $this->idutilisateurcollaborateur;
    }

    public function setIdutilisateurcollaborateur(?Utilisateur $idutilisateurcollaborateur): self
    {
        $this->idutilisateurcollaborateur = $idutilisateurcollaborateur;

        return $this;
    }


}
