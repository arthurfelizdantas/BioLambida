<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProfileRepository")
 */
class Profile
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
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urlFacebook;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $urlRG;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $urlLinkedIn;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $urlInstagram;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logoLinkedIn;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logoRG;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logoFacebook;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logoInstagram;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $language;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getUrlFacebook(): ?string
    {
        return $this->urlFacebook;
    }

    public function setUrlFacebook(string $urlFacebook): self
    {
        $this->urlFacebook = $urlFacebook;

        return $this;
    }

    public function getUrlRG(): ?string
    {
        return $this->urlRG;
    }

    public function setUrlRG(?string $urlRG): self
    {
        $this->urlRG = $urlRG;

        return $this;
    }

    public function getUrlLinkedIn(): ?string
    {
        return $this->urlLinkedIn;
    }

    public function setUrlLinkedIn(?string $urlLinkedIn): self
    {
        $this->urlLinkedIn = $urlLinkedIn;

        return $this;
    }

    public function getUrlInstagram(): ?string
    {
        return $this->urlInstagram;
    }

    public function setUrlInstagram(?string $urlInstagram): self
    {
        $this->urlInstagram = $urlInstagram;

        return $this;
    }

    public function getLogoLinkedIn(): ?string
    {
        return $this->logoLinkedIn;
    }

    public function setLogoLinkedIn(string $logoLinkedIn): self
    {
        $this->logoLinkedIn = $logoLinkedIn;

        return $this;
    }

    public function getLogoRG(): ?string
    {
        return $this->logoRG;
    }

    public function setLogoRG(?string $logoRG): self
    {
        $this->logoRG = $logoRG;

        return $this;
    }

    public function getLogoFacebook(): ?string
    {
        return $this->logoFacebook;
    }

    public function setLogoFacebook(?string $logoFacebook): self
    {
        $this->logoFacebook = $logoFacebook;

        return $this;
    }

    public function getLogoInstagram(): ?string
    {
        return $this->logoInstagram;
    }

    public function setLogoInstagram(?string $logoInstagram): self
    {
        $this->logoInstagram = $logoInstagram;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }
}
