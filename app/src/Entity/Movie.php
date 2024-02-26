<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $releaseYear = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $showDate = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY)]
    private array $languages = [];

    #[ORM\Column(length: 255)]
    private ?string $runingTime = null;

   

    #[ORM\Column(type: Types::SIMPLE_ARRAY)]
    private array $distributors = [];

    #[ORM\Column(type: Types::SIMPLE_ARRAY)]
    private array $directors = [];

    #[ORM\Column(type: Types::SIMPLE_ARRAY)]
    private array $stars = [];

    #[ORM\Column(type: Types::SIMPLE_ARRAY)]
    private array $writers = [];

    #[ORM\Column(length: 255)]
    private ?string $imageUrl = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReleaseYear(): ?\DateTimeInterface
    {
        return $this->releaseYear;
    }

    public function setReleaseYear(\DateTimeInterface $releaseYear): static
    {
        $this->releaseYear = $releaseYear;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getShowDate(): ?\DateTimeInterface
    {
        return $this->showDate;
    }

    public function setShowDate(?\DateTimeInterface $showDate): static
    {
        $this->showDate = $showDate;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function setLanguages(array $languages): static
    {
        $this->languages = $languages;

        return $this;
    }

    public function getRuningTime(): ?string
    {
        return $this->runingTime;
    }

    public function setRuningTime(string $runingTime): static
    {
        $this->runingTime = $runingTime;

        return $this;
    }

    public function getDistributors(): array
    {
        return $this->distributors;
    }

    public function setDistributors(array $distributors): static
    {
        $this->distributors = $distributors;

        return $this;
    }

    public function getDirectors(): array
    {
        return $this->directors;
    }

    public function setDirectors(array $directors): static
    {
        $this->directors = $directors;

        return $this;
    }

    public function getStars(): array
    {
        return $this->stars;
    }

    public function setStars(array $stars): static
    {
        $this->stars = $stars;

        return $this;
    }

    public function getWriters(): array
    {
        return $this->writers;
    }

    public function setWriters(array $writers): static
    {
        $this->writers = $writers;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): static
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }



}
