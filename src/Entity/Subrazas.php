<?php

namespace App\Entity;

use App\Repository\SubrazasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubrazasRepository::class)]
class Subrazas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 999)]
    private ?string $Descripción = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Razas $raza_id = null;

    #[ORM\Column]
    private ?int $Fuerza = null;

    #[ORM\Column]
    private ?int $Destreza = null;

    #[ORM\Column]
    private ?int $Constitución = null;

    #[ORM\Column]
    private ?int $Inteligencia = null;

    #[ORM\Column]
    private ?int $Sabiduría = null;

    #[ORM\Column]
    private ?int $Carisma = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor = null;

    #[ORM\Column(length: 999)]
    private ?string $AtaqueDesarmado = null;

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

    public function getRazaId(): ?Razas
    {
        return $this->raza_id;
    }

    public function setRazaId(?Razas $raza_id): static
    {
        $this->raza_id = $raza_id;

        return $this;
    }

    public function getFuerza(): ?int
    {
        return $this->Fuerza;
    }

    public function setFuerza(int $Fuerza): static
    {
        $this->Fuerza = $Fuerza;

        return $this;
    }

    public function getDestreza(): ?int
    {
        return $this->Destreza;
    }

    public function setDestreza(int $Destreza): static
    {
        $this->Destreza = $Destreza;

        return $this;
    }

    public function getConstitución(): ?int
    {
        return $this->Constitución;
    }

    public function setConstitución(int $Constitución): static
    {
        $this->Constitución = $Constitución;

        return $this;
    }

    public function getInteligencia(): ?int
    {
        return $this->Inteligencia;
    }

    public function setInteligencia(int $Inteligencia): static
    {
        $this->Inteligencia = $Inteligencia;

        return $this;
    }

    public function getSabiduría(): ?int
    {
        return $this->Sabiduría;
    }

    public function setSabiduría(int $Sabiduría): static
    {
        $this->Sabiduría = $Sabiduría;

        return $this;
    }

    public function getCarisma(): ?int
    {
        return $this->Carisma;
    }

    public function setCarisma(int $Carisma): static
    {
        $this->Carisma = $Carisma;

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

    public function getAtaqueDesarmado(): ?string
    {
        return $this->AtaqueDesarmado;
    }

    public function setAtaqueDesarmado(string $AtaqueDesarmado): static
    {
        $this->AtaqueDesarmado = $AtaqueDesarmado;

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
