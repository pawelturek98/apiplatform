<?php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @ORM\Entity
 */
#[ApiResource]
class Book
{
    /**
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(nullable=true)
     */
    public ?string $isbn = null;

    /**
     * @ORM\Column
     */
    public string $title = '';

    /**
     * @ORM\Column(type="text")
     */
    public string $description = '';

    /**
     * @ORM\Column
     */
    public string $author = '';

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    public ?\DateTimeInterface $publicationDate = null;

    /**
     * @var Review[] Available reviews for this book.
     *
     * @ORM\OneToMany(targetEntity="Review", mappedBy="book", cascade={"persist", "remove"})
     */
    public iterable $reviews;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }
}