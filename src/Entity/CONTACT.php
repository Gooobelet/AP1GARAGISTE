<?php

namespace App\Entity;

use App\Repository\CONTACTRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CONTACTRepository::class)
 */
class CONTACT
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
    private $idContact;

    /**
     * @ORM\Column(type="text")
     */
    private $contenu;

    /**
     * @ORM\OneToOne(targetEntity=UTILISATEUR::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUserContact;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdContact(): ?int
    {
        return $this->idContact;
    }

    public function setIdContact(int $idContact): self
    {
        $this->idContact = $idContact;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getIdUserContact(): ?UTILISATEUR
    {
        return $this->idUserContact;
    }

    public function setIdUserContact(UTILISATEUR $idUserContact): self
    {
        $this->idUserContact = $idUserContact;

        return $this;
    }
}
