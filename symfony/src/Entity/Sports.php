<?php

namespace App\Entity;

use App\Repository\SportsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SportsRepository::class)
 */
class Sports
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=CategoriesSports::class, inversedBy="sports")
     */
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity=Athletes::class, mappedBy="sports")
     */
    private $athletes;

    public function __construct()
    {
        $this->athletes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCategorie(): ?CategoriesSports
    {
        return $this->categorie;
    }

    public function setCategorie(?CategoriesSports $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, Athletes>
     */
    public function getAthletes(): Collection
    {
        return $this->athletes;
    }

    public function addAthletes(Athletes $athletes): self
    {
        if (!$this->athletes->contains($athletes)) {
            $this->athletes[] = $athletes;
            $athletes->setSports($this);
        }

        return $this;
    }

    public function removeAthletes(Athletes $athletes): self
    {
        if ($this->athletes->removeElement($athletes)) {
            // set the owning side to null (unless already changed)
            if ($athletes->getSports() === $this) {
                $athletes->setSports(null);
            }
        }

        return $this;
    }
}
