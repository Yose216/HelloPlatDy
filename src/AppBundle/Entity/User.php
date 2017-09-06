<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;;

/**
 * User
 *
 * @ORM\Table(name="User")
 * @ORM\Entity
 */
class User extends BaseUser
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\DiscountCode", mappedBy="idUser")
     */
    protected $idDiscountCode;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idDiscountCode = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Add idDiscountCode
     *
     * @param \AppBundle\Entity\DiscountCode $idDiscountCode
     *
     * @return User
     */
    public function addIdDiscountCode(\AppBundle\Entity\DiscountCode $idDiscountCode)
    {
        $this->idDiscountCode[] = $idDiscountCode;

        return $this;
    }

    /**
     * Remove idDiscountCode
     *
     * @param \AppBundle\Entity\DiscountCode $idDiscountCode
     */
    public function removeIdDiscountCode(\AppBundle\Entity\DiscountCode $idDiscountCode)
    {
        $this->idDiscountCode->removeElement($idDiscountCode);
    }

    /**
     * Get idDiscountCode
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdDiscountCode()
    {
        return $this->idDiscountCode;
    }
}
