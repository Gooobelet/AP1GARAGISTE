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
     * @ORM\Column(type="text")
     */
    private $avis;

    /**
     * @ORM\OneToOne(targetEntity=UTILISATEUR::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUserAvis;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $prenom;

    public function setAvis(string $avis): self
    {
        $this->avis = $avis;

        return $this;
    }
    

    public function getAvis(): ?string
    {
        return $this->avis;
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
}
