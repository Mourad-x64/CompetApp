<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieDeCompetence
 *
 * @ORM\Table(name="categorie_de_competence")
 * @ORM\Entity
 */
class CategorieDeCompetence
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCategorieCompetence", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategoriecompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCategorieCompetence", type="string", length=50, nullable=false)
     */
    private $nomcategoriecompetence;

    public function getIdcategoriecompetence(): ?int
    {
        return $this->idcategoriecompetence;
    }

    public function getNomcategoriecompetence(): ?string
    {
        return $this->nomcategoriecompetence;
    }

    public function setNomcategoriecompetence(string $nomcategoriecompetence): self
    {
        $this->nomcategoriecompetence = $nomcategoriecompetence;

        return $this;
    }


}
