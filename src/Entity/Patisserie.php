<?php

namespace App\Entity;

use App\Repository\PatisserieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatisserieRepository::class)]
class Patisserie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 2500)]
    private $description;

    #[ORM\Column(type: 'string', length: 1000)]
    private $Allergene;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
}
