<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="User")
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=50, nullable=true)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_pwd", type="string", length=255, nullable=true)
     */
    private $userPwd;

    /**
     * @var string
     *
     * @ORM\Column(name="user_salt", type="string", length=255, nullable=true)
     */
    private $userSalt;

    /**
     * @var string
     *
     * @ORM\Column(name="user_mail", type="string", length=50, nullable=true)
     */
    private $userMail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_role", type="string", length=45, nullable=true)
     */
    private $userRole;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\DiscountCode", mappedBy="idUser")
     */
    private $idDiscountCode;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idDiscountCode = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

