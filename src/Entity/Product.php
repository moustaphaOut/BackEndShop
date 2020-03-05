<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $brand_product;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $product_features;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description_product;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_product;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_active;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $meta_description_product;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $meta_keywords_product;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $name_product;

    /**
     * @ORM\Column(type="float")
     */
    private $priceTaxExcl;

    /**
     * @ORM\Column(type="float")
     */
    private $priceTaxIncl;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity_product;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $sku_product;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_category;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Wishlist", mappedBy="id_product")
     */
    private $wishlists;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Image", mappedBy="product")
     */
    private $images;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $featuredImageId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $handle;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $comparedPrice;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $width;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $height;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $depth;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $weight;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $extraShippingFee;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $taxRate;

    public function __construct()
    {
        $this->wishlists = new ArrayCollection();
        $this->Images = new ArrayCollection();
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrandProduct(): ?string
    {
        return $this->brand_product;
    }

    public function setBrandProduct(?string $brand_product): self
    {
        $this->brand_product = $brand_product;

        return $this;
    }

    public function getProductFeatures(): ?string
    {
        return $this->product_features;
    }

    public function setProductFeatures(?string $product_features): self
    {
        $this->product_features = $product_features;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getDescriptionProduct(): ?string
    {
        return $this->description_product;
    }

    public function setDescriptionProduct(?string $description_product): self
    {
        $this->description_product = $description_product;

        return $this;
    }

    public function getImageProduct(): ?string
    {
        return $this->image_product;
    }

    public function setImageProduct(?string $image_product): self
    {
        $this->image_product = $image_product;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(?bool $is_active): self
    {
        $this->is_active = $is_active;

        return $this;
    }

    public function getMetaDescriptionProduct(): ?string
    {
        return $this->meta_description_product;
    }

    public function setMetaDescriptionProduct(?string $meta_description_product): self
    {
        $this->meta_description_product = $meta_description_product;

        return $this;
    }

    public function getMetaKeywordsProduct(): ?string
    {
        return $this->meta_keywords_product;
    }

    public function setMetaKeywordsProduct(?string $meta_keywords_product): self
    {
        $this->meta_keywords_product = $meta_keywords_product;

        return $this;
    }

    public function getNameProduct(): ?string
    {
        return $this->name_product;
    }

    public function setNameProduct(string $name_product): self
    {
        $this->name_product = $name_product;

        return $this;
    }

    public function getPriceTaxExcl(): ?float
    {
        return $this->priceTaxExcl;
    }

    public function setPriceTaxExcl(float $priceTaxExcl): self
    {
        $this->priceTaxExcl = $priceTaxExcl;

        return $this;
    }

    public function getPriceTaxIncl(): ?float
    {
        return $this->priceTaxIncl;
    }

    public function setPriceTaxIncl(float $priceTaxIncl): self
    {
        $this->priceTaxIncl = $priceTaxIncl;

        return $this;
    }

    public function getQuantityProduct(): ?int
    {
        return $this->quantity_product;
    }

    public function setQuantityProduct(int $quantity_product): self
    {
        $this->quantity_product = $quantity_product;

        return $this;
    }

    public function getSkuProduct(): ?string
    {
        return $this->sku_product;
    }

    public function setSkuProduct(string $sku_product): self
    {
        $this->sku_product = $sku_product;

        return $this;
    }

    public function getIdCategory(): ?Category
    {
        return $this->id_category;
    }

    public function setIdCategory(?Category $id_category): self
    {
        $this->id_category = $id_category;

        return $this;
    }

    /**
     * @return Collection|Wishlist[]
     */
    public function getWishlists(): Collection
    {
        return $this->wishlists;
    }

    public function addWishlist(Wishlist $wishlist): self
    {
        if (!$this->wishlists->contains($wishlist)) {
            $this->wishlists[] = $wishlist;
            $wishlist->addIdProduct($this);
        }

        return $this;
    }

    public function removeWishlist(Wishlist $wishlist): self
    {
        if ($this->wishlists->contains($wishlist)) {
            $this->wishlists->removeElement($wishlist);
            $wishlist->removeIdProduct($this);
        }

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setProduct($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->Images->contains($image)) {
            $this->Images->removeElement($image);
            // set the owning side to null (unless already changed)
            if ($image->getProduct() === $this) {
                $image->setProduct(null);
            }
        }

        return $this;
    }

    public function getFeaturedImageId(): ?int
    {
        return $this->featuredImageId;
    }

    public function setFeaturedImageId(?int $featuredImageId): self
    {
        $this->featuredImageId = $featuredImageId;

        return $this;
    }

    public function getHandle(): ?string
    {
        return $this->handle;
    }

    public function setHandle(string $handle): self
    {
        $this->handle = $handle;

        return $this;
    }

    public function getComparedPrice(): ?float
    {
        return $this->comparedPrice;
    }

    public function setComparedPrice(?float $comparedPrice): self
    {
        $this->comparedPrice = $comparedPrice;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getDepth(): ?float
    {
        return $this->depth;
    }

    public function setDepth(?float $depth): self
    {
        $this->depth = $depth;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getExtraShippingFee(): ?float
    {
        return $this->extraShippingFee;
    }

    public function setExtraShippingFee(?float $extraShippingFee): self
    {
        $this->extraShippingFee = $extraShippingFee;

        return $this;
    }

    public function getTaxRate(): ?float
    {
        return $this->taxRate;
    }

    public function setTaxRate(?float $taxRate): self
    {
        $this->taxRate = $taxRate;

        return $this;
    }
}
