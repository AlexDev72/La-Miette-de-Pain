<?php

namespace App\Entity;

use App\Repository\TraiteurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TraiteurRepository::class)]
class Traiteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Name;

    #[ORM\Column(type: 'string', length: 255)]
    private $Description;

    #[ORM\Column(type: 'string', length: 1000)]
    private $Allergene;

    #[ORM\Column(type: 'integer', length: 10)]
    private $Prix;

    #[ORM\Column(type: 'string', length: 255)]
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getAllergene(): ?string
    {
        return $this->Allergene;
    }

    public function setAllergene(string $Allergene): self
    {
        $this->Allergene = $Allergene;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
