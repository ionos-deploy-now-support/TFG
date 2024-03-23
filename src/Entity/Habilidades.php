<?php

namespace App\Entity;

use App\Repository\HabilidadesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HabilidadesRepository::class)]
class Habilidades
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Nombre = null;

    #[ORM\ManyToMany(targetEntity: Clases::class)]
    private Collection $origen_id_clase;

    #[ORM\Column(length: 200)]
    private ?string $Descripción = null;

    #[ORM\Column(length: 200)]
    private ?string $Autor = null;

    #[ORM\Column]
    private ?bool $Validado = null;

    public function __construct()
    {
        $this->origen_id_clase = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Clases>
     */
    public function getOrigenIdClase(): Collection
    {
        return $this->origen_id_clase;
    }

    public function addOrigenIdClase(Clases $origenIdClase): static
    {
        if (!$this->origen_id_clase->contains($origenIdClase)) {
            $this->origen_id_clase->add($origenIdClase);
        }

        return $this;
    }

    public function removeOrigenIdClase(Clases $origenIdClase): static
    {
        $this->origen_id_clase->removeElement($origenIdClase);

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

    public function getAutor(): ?string
    {
        return $this->Autor;
    }

    public function setAutor(string $Autor): static
    {
        $this->Autor = $Autor;

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
