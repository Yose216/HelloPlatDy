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
     * @ORM\Column(name="discount_code", type="string", length=50, nullable=true)
     */
    private $discountCode;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_code_offer", type="string", length=100, nullable=true)
     */
    private $discountCodeOffer;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_code_description", type="text", nullable=true)
     */
    private $discountCodeDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="discount_code_start", type="datetime", nullable=true)
     */
    private $discountCodeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="discount_code_finish", type="datetime", nullable=true)
     */
    private $discountCodeFinish;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_discount_code", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDiscountCode;

    /**
     * @var \AppBundle\Entity\Restaurant
     *
     * @ORM\Id
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
     *     @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     *   }
     * )
     */
    private $idUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUser = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

