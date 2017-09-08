<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiscountCode
 *
 * @ORM\Table(name="Discount_code", indexes={@ORM\Index(name="fk_Discount_code_Restaurant1_idx", columns={"id_restaurant"})})
 * @ORM\Entity
 */
class DiscountCode
{
    /**
     * @var string
     *
     * @ORM\Column(name="discount_code", type="string", length=50, nullable=false)
     */
    private $discountCode;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_code_offer", type="string", length=100, nullable=false)
     */
    private $discountCodeOffer;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_code_description", type="text", nullable=false)
     */
    private $discountCodeDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="discount_code_start", type="datetime", nullable=false)
     */
    private $discountCodeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="discount_code_finish", type="datetime", nullable=false)
     */
    private $discountCodeFinish;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_discount_code", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDiscountCode;

    /**
     * @var \AppBundle\Entity\Restaurant
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Restaurant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_restaurant", referencedColumnName="id_restaurant")
     * })
     */
    private $idRestaurant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", inversedBy="idDiscountCode")
     * @ORM\JoinTable(name="discount_code_has_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_discount_code", referencedColumnName="id_discount_code")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id", referencedColumnName="id")
     *   }
     * )
     */
    private $id;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUser = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set discountCode
     *
     * @param string $discountCode
     *
     * @return DiscountCode
     */
    public function setDiscountCode($discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * Get discountCode
     *
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * Set discountCodeOffer
     *
     * @param string $discountCodeOffer
     *
     * @return DiscountCode
     */
    public function setDiscountCodeOffer($discountCodeOffer)
    {
        $this->discountCodeOffer = $discountCodeOffer;

        return $this;
    }

    /**
     * Get discountCodeOffer
     *
     * @return string
     */
    public function getDiscountCodeOffer()
    {
        return $this->discountCodeOffer;
    }

    /**
     * Set discountCodeDescription
     *
     * @param string $discountCodeDescription
     *
     * @return DiscountCode
     */
    public function setDiscountCodeDescription($discountCodeDescription)
    {
        $this->discountCodeDescription = $discountCodeDescription;

        return $this;
    }

    /**
     * Get discountCodeDescription
     *
     * @return string
     */
    public function getDiscountCodeDescription()
    {
        return $this->discountCodeDescription;
    }

    /**
     * Set discountCodeStart
     *
     * @param \DateTime $discountCodeStart
     *
     * @return DiscountCode
     */
    public function setDiscountCodeStart($discountCodeStart)
    {
        $this->discountCodeStart = $discountCodeStart;

        return $this;
    }

    /**
     * Get discountCodeStart
     *
     * @return \DateTime
     */
    public function getDiscountCodeStart()
    {
        return $this->discountCodeStart;
    }

    /**
     * Set discountCodeFinish
     *
     * @param \DateTime $discountCodeFinish
     *
     * @return DiscountCode
     */
    public function setDiscountCodeFinish($discountCodeFinish)
    {
        $this->discountCodeFinish = $discountCodeFinish;

        return $this;
    }

    /**
     * Get discountCodeFinish
     *
     * @return \DateTime
     */
    public function getDiscountCodeFinish()
    {
        return $this->discountCodeFinish;
    }

    /**
     * Get idDiscountCode
     *
     * @return integer
     */
    public function getIdDiscountCode()
    {
        return $this->idDiscountCode;
    }

    /**
     * Set idRestaurant
     *
     * @param \AppBundle\Entity\Restaurant $idRestaurant
     *
     * @return DiscountCode
     */
    public function setIdRestaurant(\AppBundle\Entity\Restaurant $idRestaurant)
    {
        $this->idRestaurant = $idRestaurant;

        return $this;
    }

    /**
     * Get idRestaurant
     *
     * @return \AppBundle\Entity\Restaurant
     */
    public function getIdRestaurant()
    {
        return $this->idRestaurant;
    }

    /**
     * Add idUser
     *
     * @param \AppBundle\Entity\User $id
     *
     * @return DiscountCode
     */
    public function addIdUser(\AppBundle\Entity\User $id)
    {
        $this->id[] = $id;

        return $this;
    }

    /**
     * Remove idUser
     *
     * @param \AppBundle\Entity\User $id
     */
    public function removeIdUser(\AppBundle\Entity\User $id)
    {
        $this->id->removeElement($id);
    }

    /**
     * Get idUser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdUser()
    {
        return $this->id;
    }
}
