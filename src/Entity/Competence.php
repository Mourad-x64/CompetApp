<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="competence", indexes={@ORM\Index(name="fk_comp_idCatComp", columns={"idCategorieCompetence"})})
 * @ORM\Entity
 */
class Competence
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
     * @ORM\Column(name="nomCompetence", type="string", length=50, nullable=false)
     */
    private $nomcompetence;

    /**
     * @var \CategorieDeCompetence
     *
     * @ORM\ManyToOne(targetEntity="CategorieDeCompetence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategorieCompetence", referencedColumnName="idCategorieCompetence")
     * })
     */
    private $idcategoriecompetence;

    public function getIdcompetence(): ?int
    {
        return $this->idcompetence;
    }

    public function getNomcompetence(): ?string
    {
        return $this->nomcompetence;
    }

    public function setNomcompetence(string $nomcompetence): self
    {
        $this->nomcompetence = $nomcompetence;

        return $this;
    }

    public function getIdcategoriecompetence(): ?CategorieDeCompetence
    {
        return $this->idcategoriecompetence;
    }

    public function setIdcategoriecompetence(?CategorieDeCompetence $idcategoriecompetence): self
    {
        $this->idcategoriecompetence = $idcategoriecompetence;

        return $this;
    }


}
