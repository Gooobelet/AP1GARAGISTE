<?php

namespace App\Entity;

use App\Repository\AVISRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AVISRepository::class)
 */
class AVIS
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idAvis;

    /**
     * @ORM\Column(type="text")
     */
    private $avis;

    /**
     * @ORM\OneToOne(targetEntity=UTILISATEUR::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUserAvis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAvis(): ?int
    {
        return $this->idAvis;
    }

    public function setIdAvis(int $idAvis): self
    {
        $this->idAvis = $idAvis;

        return $this;
    }

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(string $avis): self
    {
        $this->avis = $avis;

        return $this;
    }

    public function getIdUserAvis(): ?UTILISATEUR
    {
        return $this->idUserAvis;
    }

    public function setIdUserAvis(UTILISATEUR $idUserAvis): self
    {
        $this->idUserAvis = $idUserAvis;

        return $this;
    }
}
