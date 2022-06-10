<?php

namespace App\Entity;

use App\Repository\ProfilsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfilsRepository::class)
 */
class Profils
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * One profil has many documents. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Documents", mappedBy="profil")
     */
    private $documents;

    /**
     * Many profils have one utilisateur. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Utilisateurs", inversedBy="profils")
     * @ORM\JoinColumn(name="id_utilisateur", nullable=true, referencedColumnName="id")
     */
    private $utilisateur;

    /**
     * One profil has many experiences. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Experiences", mappedBy="profil")
     */
    private $experiences;

    /**
     * One profil has many historiqueProfil. This is the inverse side.
     * @ORM\OneToMany(targetEntity="HistoriqueProfil", mappedBy="profil")
     */
    private $historiques;

    /**
     * One profil has many profilCompetences. This is the inverse side.
     * @ORM\OneToMany(targetEntity="ProfilCompetences", mappedBy="profil")
     */
    private $profils_competences;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fonction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
        $this->experiences = new ArrayCollection();
        $this->historiques = new ArrayCollection();
        $this->profils_competences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Documents>
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Documents $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents[] = $document;
            $document->setProfil($this);
        }

        return $this;
    }

    public function removeDocument(Documents $document): self
    {
        if ($this->documents->removeElement($document)) {
            // set the owning side to null (unless already changed)
            if ($document->getProfil() === $this) {
                $document->setProfil(null);
            }
        }

        return $this;
    }

    public function getUtilisateur(): ?Utilisateurs
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateurs $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * @return Collection<int, Experiences>
     */
    public function getExperiences(): Collection
    {
        return $this->experiences;
    }

    public function addExperience(Experiences $experience): self
    {
        if (!$this->experiences->contains($experience)) {
            $this->experiences[] = $experience;
            $experience->setProfil($this);
        }

        return $this;
    }

    public function removeExperience(Experiences $experience): self
    {
        if ($this->experiences->removeElement($experience)) {
            // set the owning side to null (unless already changed)
            if ($experience->getProfil() === $this) {
                $experience->setProfil(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, HistoriqueProfil>
     */
    public function getHistoriques(): Collection
    {
        return $this->historiques;
    }

    public function addHistorique(HistoriqueProfil $historique): self
    {
        if (!$this->historiques->contains($historique)) {
            $this->historiques[] = $historique;
            $historique->setProfil($this);
        }

        return $this;
    }

    public function removeHistorique(HistoriqueProfil $historique): self
    {
        if ($this->historiques->removeElement($historique)) {
            // set the owning side to null (unless already changed)
            if ($historique->getProfil() === $this) {
                $historique->setProfil(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ProfilCompetences>
     */
    public function getProfilsCompetences(): Collection
    {
        return $this->profils_competences;
    }

    public function addProfilsCompetence(ProfilCompetences $profilsCompetence): self
    {
        if (!$this->profils_competences->contains($profilsCompetence)) {
            $this->profils_competences[] = $profilsCompetence;
            $profilsCompetence->setProfil($this);
        }

        return $this;
    }

    public function removeProfilsCompetence(ProfilCompetences $profilsCompetence): self
    {
        if ($this->profils_competences->removeElement($profilsCompetence)) {
            // set the owning side to null (unless already changed)
            if ($profilsCompetence->getProfil() === $this) {
                $profilsCompetence->setProfil(null);
            }
        }

        return $this;
    }
}
