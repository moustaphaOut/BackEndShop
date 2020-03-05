<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $username_client;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $email_client;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $first_name_client;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $last_name_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password_client;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Address", mappedBy="id_client", cascade={"persist", "remove"})
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Order", mappedBy="id_client")
     */
    private $orders;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Wishlist", mappedBy="id_client", cascade={"persist", "remove"})
     */
    private $wishlist;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsernameClient(): ?string
    {
        return $this->username_client;
    }

    public function setUsernameClient(string $username_client): self
    {
        $this->username_client = $username_client;

        return $this;
    }

    public function getEmailClient(): ?string
    {
        return $this->email_client;
    }

    public function setEmailClient(string $email_client): self
    {
        $this->email_client = $email_client;

        return $this;
    }

    public function getFirstNameClient(): ?string
    {
        return $this->first_name_client;
    }

    public function setFirstNameClient(string $first_name_client): self
    {
        $this->first_name_client = $first_name_client;

        return $this;
    }

    public function getLastNameClient(): ?string
    {
        return $this->last_name_client;
    }

    public function setLastNameClient(string $last_name_client): self
    {
        $this->last_name_client = $last_name_client;

        return $this;
    }

    public function getPasswordClient(): ?string
    {
        return $this->password_client;
    }

    public function setPasswordClient(string $password_client): self
    {
        $this->password_client = $password_client;

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): self
    {
        $this->address = $address;

        // set (or unset) the owning side of the relation if necessary
        $newId_client = null === $address ? null : $this;
        if ($address->getIdClient() !== $newId_client) {
            $address->setIdClient($newId_client);
        }

        return $this;
    }

    /**
     * @return Collection|Order[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->setIdClient($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): self
    {
        if ($this->orders->contains($order)) {
            $this->orders->removeElement($order);
            // set the owning side to null (unless already changed)
            if ($order->getIdClient() === $this) {
                $order->setIdClient(null);
            }
        }

        return $this;
    }

    public function getWishlist(): ?Wishlist
    {
        return $this->wishlist;
    }

    public function setWishlist(?Wishlist $wishlist): self
    {
        $this->wishlist = $wishlist;

        // set (or unset) the owning side of the relation if necessary
        $newId_client = null === $wishlist ? null : $this;
        if ($wishlist->getIdClient() !== $newId_client) {
            $wishlist->setIdClient($newId_client);
        }

        return $this;
    }
}
