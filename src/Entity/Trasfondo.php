<?php

namespace App\Entity;

use App\Repository\TrasfondoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrasfondoRepository::class)]
class Trasfondo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 999)]
    private ?string $Descripción = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $Origen = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $Ocupación = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $Idiomas = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $ObjetosIniciales = null;

    #[ORM\Column(length: 999, nullable: true)]
    private ?string $Competencias = null;

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

    public function getDescripción(): ?string
    {
        return $this->Descripción;
    }

    public function setDescripción(string $Descripción): static
    {
        $this->Descripción = $Descripción;

        return $this;
    }

    public function getOrigen(): ?string
    {
        return $this->Origen;
    }

    public function setOrigen(?string $Origen): static
    {
        $this->Origen = $Origen;

        return $this;
    }

    public function getOcupación(): ?string
    {
        return $this->Ocupación;
    }

    public function setOcupación(?string $Ocupación): static
    {
        $this->Ocupación = $Ocupación;

        return $this;
    }

    public function getIdiomas(): ?string
    {
        return $this->Idiomas;
    }

    public function setIdiomas(?string $Idiomas): static
    {
        $this->Idiomas = $Idiomas;

        return $this;
    }

    public function getObjetosIniciales(): ?string
    {
        return $this->ObjetosIniciales;
    }

    public function setObjetosIniciales(?string $ObjetosIniciales): static
    {
        $this->ObjetosIniciales = $ObjetosIniciales;

        return $this;
    }

    public function getCompetencias(): ?string
    {
        return $this->Competencias;
    }

    public function setCompetencias(?string $Competencias): static
    {
        $this->Competencias = $Competencias;

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
