<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogboekRepository")
 */
class Logboek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cover_letter;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="logboeks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $driver;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Truck", inversedBy="logboeks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $truck;

    /**
     * @ORM\Column(type="integer")
     */
    private $totalm3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $load_location;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $time_departure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destination;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="user_id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoverLetter(): ?string
    {
        return $this->cover_letter;
    }

    public function setCoverLetter(string $cover_letter): self
    {
        $this->cover_letter = $cover_letter;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDriver(): ?user
    {
        return $this->driver;
    }

    public function setDriver(?user $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    public function getTruck(): ?truck
    {
        return $this->truck;
    }

    public function setTruck(?truck $truck): self
    {
        $this->truck = $truck;

        return $this;
    }

    public function getTotalm3(): ?int
    {
        return $this->totalm3;
    }

    public function setTotalm3(int $totalm3): self
    {
        $this->totalm3 = $totalm3;

        return $this;
    }

    public function getLoadLocation(): ?string
    {
        return $this->load_location;
    }

    public function setLoadLocation(string $load_location): self
    {
        $this->load_location = $load_location;

        return $this;
    }

    public function getTimeDeparture(): ?string
    {
        return $this->time_departure;
    }

    public function setTimeDeparture(string $time_departure): self
    {
        $this->time_departure = $time_departure;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getEvent(): ?string
    {
        return $this->event;
    }

    public function setEvent(string $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getUserId(): ?user
    {
        return $this->user_id;
    }

    public function setUserId(?user $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
