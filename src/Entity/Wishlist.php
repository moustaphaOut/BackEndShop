<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\WishlistRepository")
 */
class Wishlist
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity_wishlist;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Client", inversedBy="wishlist", cascade={"persist", "remove"})
     */
    private $id_client;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Product", inversedBy="wishlists")
     */
    private $id_product;

    public function __construct()
    {
        $this->id_product = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantityWishlist(): ?int
    {
        return $this->quantity_wishlist;
    }

    public function setQuantityWishlist(int $quantity_wishlist): self
    {
        $this->quantity_wishlist = $quantity_wishlist;

        return $this;
    }

    public function getIdClient(): ?Client
    {
        return $this->id_client;
    }

    public function setIdClient(?Client $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }

    /**
     * @return Collection|Product[]
     */
    public function getIdProduct(): Collection
    {
        return $this->id_product;
    }

    public function addIdProduct(Product $idProduct): self
    {
        if (!$this->id_product->contains($idProduct)) {
            $this->id_product[] = $idProduct;
        }

        return $this;
    }

    public function removeIdProduct(Product $idProduct): self
    {
        if ($this->id_product->contains($idProduct)) {
            $this->id_product->removeElement($idProduct);
        }

        return $this;
    }
}
