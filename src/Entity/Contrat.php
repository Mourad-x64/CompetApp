<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat", indexes={@ORM\Index(name="idMission", columns={"idMission"})})
 * @ORM\Entity
 */
class Contrat
{
    /**
     * @var int
     *
     * @ORM\Column(name="idContrat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="tarifJour", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $tarifjour;

    /**
     * @var \Mission
     *
     * @ORM\ManyToOne(targetEntity="Mission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMission", referencedColumnName="idMission")
     * })
     */
    private $idmission;

    public function getIdcontrat(): ?int
    {
        return $this->idcontrat;
    }

    public function getTarifjour(): ?string
    {
        return $this->tarifjour;
    }

    public function setTarifjour(string $tarifjour): self
    {
        $this->tarifjour = $tarifjour;

        return $this;
    }

    public function getIdmission(): ?Mission
    {
        return $this->idmission;
    }

    public function setIdmission(?Mission $idmission): self
    {
        $this->idmission = $idmission;

        return $this;
    }


}
