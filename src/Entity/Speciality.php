<?php

namespace App\Entity;

use App\Repository\SpecialityRepository;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\Traits\Timestampable;

/**
 * @ORM\Entity(repositoryClass=SpecialityRepository::class)
 */
class Speciality
{
    use Timestampable;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

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
}
