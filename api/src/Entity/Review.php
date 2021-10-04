<?php
namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @ORM\Entity
 */
#[ApiResource]
class Review
{
    /**
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="smallint")
     */
    public int $rating = 0;

    /**
     * @ORM\Column(type="text")
     */
    public string $body = '';

    /**
     * @ORM\Column
     */
    public string $author = '';

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    public ?\DateTimeInterface $publicationDate = null;

    /**
     * @ORM\ManyToOne(targetEntity="Book", inversedBy="reviews")
     */
    public ?Book $book = null;
    
    public function getId(): ?int
    {
        return $this->id;
    } 
}