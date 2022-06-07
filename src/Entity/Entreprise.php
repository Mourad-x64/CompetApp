<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity
 */
class Entreprise
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEntreprise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEntreprise", type="string", length=50, nullable=false)
     */
    private $nomentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEntreprise", type="string", length=50, nullable=false)
     */
    private $adresseentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse2Entreprise", type="string", length=50, nullable=false)
     */
    private $adresse2entreprise;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostalEntreprise", type="integer", nullable=false)
     */
    private $codepostalentreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="secteurEntreprise", type="string", length=50, nullable=true)
     */
    private $secteurentreprise;

    public function getIdentreprise(): ?int
    {
        return $this->identreprise;
    }

    public function getNomentreprise(): ?string
    {
        return $this->nomentreprise;
    }

    public function setNomentreprise(string $nomentreprise): self
    {
        $this->nomentreprise = $nomentreprise;

        return $this;
    }

    public function getAdresseentreprise(): ?string
    {
        return $this->adresseentreprise;
    }

    public function setAdresseentreprise(string $adresseentreprise): self
    {
        $this->adresseentreprise = $adresseentreprise;

        return $this;
    }

    public function getAdresse2entreprise(): ?string
    {
        return $this->adresse2entreprise;
    }

    public function setAdresse2entreprise(string $adresse2entreprise): self
    {
        $this->adresse2entreprise = $adresse2entreprise;

        return $this;
    }

    public function getCodepostalentreprise(): ?int
    {
        return $this->codepostalentreprise;
    }

    public function setCodepostalentreprise(int $codepostalentreprise): self
    {
        $this->codepostalentreprise = $codepostalentreprise;

        return $this;
    }

    public function getSecteurentreprise(): ?string
    {
        return $this->secteurentreprise;
    }

    public function setSecteurentreprise(?string $secteurentreprise): self
    {
        $this->secteurentreprise = $secteurentreprise;

        return $this;
    }


}
