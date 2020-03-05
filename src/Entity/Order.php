<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $order_date;

    /**
     * @ORM\Column(type="float")
     */
    private $total;

    /**
     * @ORM\Column(type="datetime")
     */
    private $shipping_date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $shipping_status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="orders")
     */
    private $id_client;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Address", inversedBy="orders")
     */
    private $id_address;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\OrderDetail", mappedBy="id_order", cascade={"persist", "remove"})
     */
    private $orderDetail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->order_date;
    }

    public function setOrderDate(\DateTimeInterface $order_date): self
    {
        $this->order_date = $order_date;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total ;
    }

    public function setTotal(float $total ): self
    {
        $this->total = $total ;

        return $this;
    }

    public function getShippingDate(): ?\DateTimeInterface
    {
        return $this->shipping_date;
    }

    public function setShippingDate(\DateTimeInterface $shipping_date): self
    {
        $this->shipping_date = $shipping_date;

        return $this;
    }

    public function getShippingStatus(): ?bool
    {
        return $this->shipping_status;
    }

    public function setShippingStatus(bool $shipping_status): self
    {
        $this->shipping_status = $shipping_status;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

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

    public function getIdAddress(): ?Address
    {
        return $this->id_address;
    }

    public function setIdAddress(?Address $id_address): self
    {
        $this->id_address = $id_address;

        return $this;
    }

    public function getOrderDetail(): ?OrderDetail
    {
        return $this->orderDetail;
    }

    public function setOrderDetail(?OrderDetail $orderDetail): self
    {
        $this->orderDetail = $orderDetail;

        // set (or unset) the owning side of the relation if necessary
        $newId_order = null === $orderDetail ? null : $this;
        if ($orderDetail->getIdOrder() !== $newId_order) {
            $orderDetail->setIdOrder($newId_order);
        }

        return $this;
    }
}
