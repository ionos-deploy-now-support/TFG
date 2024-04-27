<?php

namespace App\Entity;

use App\Repository\DotesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DotesRepository::class)]
class Dotes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 999)]
    private ?string $Descripcion = null;

    #[ORM\Column(length: 100, nullable:true)]
    private ?string $Requisitos = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $Beneficios = null;

    #[ORM\Column]
    private ?bool $Validado = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): static
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripción(string $Descripción): static
    {
        $this->Descripción = $Descripción;

        return $this;
    }

    public function getRequisitos(): ?string
    {
        return $this->Requisitos;
    }

    public function setRequisitos(string $Requisitos): static
    {
        $this->Requisitos = $Requisitos;

        return $this;
    }

    public function getBeneficios(): ?string
    {
        return $this->Beneficios;
    }

    public function setBeneficios(?string $Beneficios): static
    {
        $this->Beneficios = $Beneficios;

        return $this;
    }

    public function isValidado(): ?bool
    {
        return $this->Validado;
    }

    public function setValidado(bool $Validado): static
    {
        $this->Validado = $Validado;

        return $this;
    }
}
