<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table(name="movie")
 * @ORM\Entity
 */
/**
 * @ORM\Entity(repositoryClass="App\Repository\MovieRepository")
 */ 

class Movie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_movie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMovie;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=120, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=25, nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="director", type="string", length=100, nullable=false)
     */
    private $director;

    /**
     * @var int
     *
     * @ORM\Column(name="rated", type="integer", nullable=false)
     */
    private $rated;

    /**
     * @var string
     *
     * @ORM\Column(name="studio", type="string", length=50, nullable=false)
     */
    private $studio;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=50, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="plot", type="text", length=65535, nullable=false)
     */
    private $plot;

    /**
     * @var string
     *
     * @ORM\Column(name="poster", type="string", length=255, nullable=false)
     */
    private $poster;

    public function getIdMovie(): ?int
    {
        return $this->idMovie;
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

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(string $director): self
    {
        $this->director = $director;

        return $this;
    }

    public function getRated(): ?int
    {
        return $this->rated;
    }

    public function setRated(int $rated): self
    {
        $this->rated = $rated;

        return $this;
    }

    public function getStudio(): ?string
    {
        return $this->studio;
    }

    public function setStudio(string $studio): self
    {
        $this->studio = $studio;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getPlot(): ?string
    {
        return $this->plot;
    }

    public function setPlot(string $plot): self
    {
        $this->plot = $plot;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->poster;
    }

    public function setPoster(string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }


}
