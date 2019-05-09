<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NavsRepository")
 */
class Navs
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
    private $field01;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $field02;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $field03;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $field04;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $field05;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $field06;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $field07;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $field08;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $field09;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $language;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getField01(): ?string
    {
        return $this->field01;
    }

    public function setField01(string $field01): self
    {
        $this->field01 = $field01;

        return $this;
    }

    public function getField02(): ?string
    {
        return $this->field02;
    }

    public function setField02(string $field02): self
    {
        $this->field02 = $field02;

        return $this;
    }

    public function getField03(): ?string
    {
        return $this->field03;
    }

    public function setField03(string $field03): self
    {
        $this->field03 = $field03;

        return $this;
    }

    public function getField04(): ?string
    {
        return $this->field04;
    }

    public function setField04(string $field04): self
    {
        $this->field04 = $field04;

        return $this;
    }

    public function getField05(): ?string
    {
        return $this->field05;
    }

    public function setField05(string $field05): self
    {
        $this->field05 = $field05;

        return $this;
    }

    public function getField06(): ?string
    {
        return $this->field06;
    }

    public function setField06(string $field06): self
    {
        $this->field06 = $field06;

        return $this;
    }

    public function getField07(): ?string
    {
        return $this->field07;
    }

    public function setField07(string $field07): self
    {
        $this->field07 = $field07;

        return $this;
    }

    public function getField08(): ?string
    {
        return $this->field08;
    }

    public function setField08(string $field08): self
    {
        $this->field08 = $field08;

        return $this;
    }

    public function getField09(): ?string
    {
        return $this->field09;
    }

    public function setField09(string $field09): self
    {
        $this->field09 = $field09;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

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
