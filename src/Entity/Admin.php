<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\AdminRepository")
 */
class Admin
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
    private $username_admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first_name_admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $last_name_admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password_admin;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $phone_admin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_admin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsernameAdmin(): ?string
    {
        return $this->username_admin;
    }

    public function setUsernameAdmin(string $username_admin): self
    {
        $this->username_admin = $username_admin;

        return $this;
    }

    public function getEmailAdmin(): ?string
    {
        return $this->email_admin;
    }

    public function setEmailAdmin(string $email_admin): self
    {
        $this->email_admin = $email_admin;

        return $this;
    }

    public function getFirstNameAdmin(): ?string
    {
        return $this->first_name_admin;
    }

    public function setFirstNameAdmin(string $first_name_admin): self
    {
        $this->first_name_admin = $first_name_admin;

        return $this;
    }

    public function getLastNameAdmin(): ?string
    {
        return $this->last_name_admin;
    }

    public function setLastNameAdmin(string $last_name_admin): self
    {
        $this->last_name_admin = $last_name_admin;

        return $this;
    }

    public function getPasswordAdmin(): ?string
    {
        return $this->password_admin;
    }

    public function setPasswordAdmin(string $password_admin): self
    {
        $this->password_admin = $password_admin;

        return $this;
    }

    public function getPhoneAdmin(): ?string
    {
        return $this->phone_admin;
    }

    public function setPhoneAdmin(string $phone_admin): self
    {
        $this->phone_admin = $phone_admin;

        return $this;
    }

    public function getImageAdmin(): ?string
    {
        return $this->image_admin;
    }

    public function setImageAdmin(?string $image_admin): self
    {
        $this->image_admin = $image_admin;

        return $this;
    }
}
