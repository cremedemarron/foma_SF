<?php

namespace App\Entity;

use App\Repository\PokemonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PokemonRepository::class)
 */
class Pokemon
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Pokemon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $yes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $no;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPokemon(): ?string
    {
        return $this->Pokemon;
    }

    public function setPokemon(string $Pokemon): self
    {
        $this->Pokemon = $Pokemon;

        return $this;
    }

    public function getYes(): ?string
    {
        return $this->yes;
    }

    public function setYes(string $yes): self
    {
        $this->yes = $yes;

        return $this;
    }

    public function getNo(): ?string
    {
        return $this->no;
    }

    public function setNo(string $no): self
    {
        $this->no = $no;

        return $this;
    }
}
