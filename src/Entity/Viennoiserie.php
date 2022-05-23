<?php

namespace App\Entity;

use App\Repository\ViennoiserieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ViennoiserieRepository::class)]
class Viennoiserie
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
    private $allergene;

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
        return $this->allergene;
    }

    public function setAllergene(string $allergene): self
    {
        $this->allergene = $allergene;

        return $this;
    }
}
