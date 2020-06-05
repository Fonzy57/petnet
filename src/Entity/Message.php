<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 */
class Message
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
    private $subject;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sender;

    /**
     * @ORM\Column(type="date")
     */
    private $date_demande;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_rdv;



    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="messages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_iduser;

    /**
     * @ORM\ManyToOne(targetEntity=Animal::class, inversedBy="messages")
     */
    private $animal_idanimal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSender(string $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->date_demande;
    }

    public function setDateDemande(\DateTimeInterface $date_demande): self
    {
        $this->date_demande = $date_demande;

        return $this;
    }

    public function getDateRdv(): ?\DateTimeInterface
    {
        return $this->date_rdv;
    }

    public function setDateRdv(\DateTimeInterface $date_rdv): self
    {
        $this->date_rdv = $date_rdv;

        return $this;
    }

    public function getUserIduser(): ?User
    {
        return $this->user_iduser;
    }

    public function setUserIduser(?User $user_iduser): self
    {
        $this->user_iduser = $user_iduser;

        return $this;
    }

    public function getAnimalIdanimal(): ?Animal
    {
        return $this->animal_idanimal;
    }

    public function setAnimalIdanimal(?Animal $animal_idanimal): self
    {
        $this->animal_idanimal = $animal_idanimal;

        return $this;
    }

}
