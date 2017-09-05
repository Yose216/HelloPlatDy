<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurant
 *
 * @ORM\Table(name="Restaurant")
 * @ORM\Entity
 */
class Restaurant
{
    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_name", type="string", length=255, nullable=true)
     */
    private $restaurantName;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_pwd", type="string", length=255, nullable=true)
     */
    private $restaurantPwd;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_salt", type="string", length=255, nullable=true)
     */
    private $restaurantSalt;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_mail", type="string", length=50, nullable=true)
     */
    private $restaurantMail;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_street", type="string", length=150, nullable=true)
     */
    private $restaurantStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_town", type="string", length=50, nullable=true)
     */
    private $restaurantTown;

    /**
     * @var integer
     *
     * @ORM\Column(name="restaurant_zip_code", type="integer", nullable=true)
     */
    private $restaurantZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_horaire_monday", type="string", length=255, nullable=true)
     */
    private $restaurantHoraireMonday;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_horaire_tuesday", type="string", length=45, nullable=true)
     */
    private $restaurantHoraireTuesday;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_horaire_wednesday", type="string", length=45, nullable=true)
     */
    private $restaurantHoraireWednesday;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_horaire_thursday", type="string", length=45, nullable=true)
     */
    private $restaurantHoraireThursday;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_horaire_friday", type="string", length=45, nullable=true)
     */
    private $restaurantHoraireFriday;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_horaire_saturday", type="string", length=45, nullable=true)
     */
    private $restaurantHoraireSaturday;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_horaire_sunday", type="string", length=45, nullable=true)
     */
    private $restaurantHoraireSunday;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_category", type="string", length=100, nullable=true)
     */
    private $restaurantCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_description", type="text", nullable=true)
     */
    private $restaurantDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_restaurant", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRestaurant;


}

