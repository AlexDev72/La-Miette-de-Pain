<?php

namespace App\Entity;

use App\Repository\BoulangerieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BoulangerieRepository::class)]
class Boulangerie
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
    private $allergerne;

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

    public function getAllergerne(): ?string
    {
        return $this->allergerne;
    }

    public function setAllergerne(string $allergerne): self
    {
        $this->allergerne = $allergerne;

        return $this;
    }
}
