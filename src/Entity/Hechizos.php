<?php

namespace App\Entity;

use App\Repository\HechizosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HechizosRepository::class)]
class Hechizos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 999)]
    private ?string $Descripción = null;

    #[ORM\Column]
    private ?int $Nivel = null;

    #[ORM\Column(length: 100)]
    private ?string $Escuela = null;

    #[ORM\Column(length: 100)]
    private ?string $TiempoDeEjecución = null;

    #[ORM\Column]
    private ?int $Rango = null;

    #[ORM\Column(length: 999)]
    private ?string $Componentes = null;

    #[ORM\Column]
    private ?bool $Validado = null;

    #[ORM\Column(length: 100)]
    private ?string $Autor = null;

    #[ORM\Column(length: 100)]
    private ?string $Duración = null;

    #[ORM\Column(length: 200)]
    private ?string $Zona_Efecto = null;

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

    public function getNivel(): ?int
    {
        return $this->Nivel;
    }

    public function setNivel(int $Nivel): static
    {
        $this->Nivel = $Nivel;

        return $this;
    }

    public function getEscuela(): ?string
    {
        return $this->Escuela;
    }

    public function setEscuela(string $Escuela): static
    {
        $this->Escuela = $Escuela;

        return $this;
    }

    public function getTiempoDeEjecución(): ?string
    {
        return $this->TiempoDeEjecución;
    }

    public function setTiempoDeEjecución(string $TiempoDeEjecución): static
    {
        $this->TiempoDeEjecución = $TiempoDeEjecución;

        return $this;
    }

    public function getRango(): ?int
    {
        return $this->Rango;
    }

    public function setRango(int $Rango): static
    {
        $this->Rango = $Rango;

        return $this;
    }

    public function getComponentes(): ?string
    {
        return $this->Componentes;
    }

    public function setComponentes(string $Componentes): static
    {
        $this->Componentes = $Componentes;

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

    public function getAutor(): ?string
    {
        return $this->Autor;
    }

    public function setAutor(string $Autor): static
    {
        $this->Autor = $Autor;

        return $this;
    }

    public function getDuración(): ?string
    {
        return $this->Duración;
    }

    public function setDuración(string $Duración): static
    {
        $this->Duración = $Duración;

        return $this;
    }

    public function getZonaEfecto(): ?string
    {
        return $this->Zona_Efecto;
    }

    public function setZonaEfecto(string $Zona_Efecto): static
    {
        $this->Zona_Efecto = $Zona_Efecto;

        return $this;
    }
}
