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
     * @ORM\Column(name="restaurant_name", type="string", length=255, nullable=false)
     */
    private $restaurantName;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_mail", type="string", length=50, nullable=false)
     */
    private $restaurantMail;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_street", type="string", length=150, nullable=false)
     */
    private $restaurantStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_town", type="string", length=50, nullable=false)
     */
    private $restaurantTown;

    /**
     * @var integer
     *
     * @ORM\Column(name="restaurant_zip_code", type="integer", nullable=false)
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

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;



    /**
     * Set restaurantName
     *
     * @param string $restaurantName
     *
     * @return Restaurant
     */
    public function setRestaurantName($restaurantName)
    {
        $this->restaurantName = $restaurantName;

        return $this;
    }

    /**
     * Get restaurantName
     *
     * @return string
     */
    public function getRestaurantName()
    {
        return $this->restaurantName;
    }

    /**
     * Set restaurantMail
     *
     * @param string $restaurantMail
     *
     * @return Restaurant
     */
    public function setRestaurantMail($restaurantMail)
    {
        $this->restaurantMail = $restaurantMail;

        return $this;
    }

    /**
     * Get restaurantMail
     *
     * @return string
     */
    public function getRestaurantMail()
    {
        return $this->restaurantMail;
    }

    /**
     * Set restaurantStreet
     *
     * @param string $restaurantStreet
     *
     * @return Restaurant
     */
    public function setRestaurantStreet($restaurantStreet)
    {
        $this->restaurantStreet = $restaurantStreet;

        return $this;
    }

    /**
     * Get restaurantStreet
     *
     * @return string
     */
    public function getRestaurantStreet()
    {
        return $this->restaurantStreet;
    }

    /**
     * Set restaurantTown
     *
     * @param string $restaurantTown
     *
     * @return Restaurant
     */
    public function setRestaurantTown($restaurantTown)
    {
        $this->restaurantTown = $restaurantTown;

        return $this;
    }

    /**
     * Get restaurantTown
     *
     * @return string
     */
    public function getRestaurantTown()
    {
        return $this->restaurantTown;
    }

    /**
     * Set restaurantZipCode
     *
     * @param integer $restaurantZipCode
     *
     * @return Restaurant
     */
    public function setRestaurantZipCode($restaurantZipCode)
    {
        $this->restaurantZipCode = $restaurantZipCode;

        return $this;
    }

    /**
     * Get restaurantZipCode
     *
     * @return integer
     */
    public function getRestaurantZipCode()
    {
        return $this->restaurantZipCode;
    }

    /**
     * Set restaurantHoraireMonday
     *
     * @param string $restaurantHoraireMonday
     *
     * @return Restaurant
     */
    public function setRestaurantHoraireMonday($restaurantHoraireMonday)
    {
        $this->restaurantHoraireMonday = $restaurantHoraireMonday;

        return $this;
    }

    /**
     * Get restaurantHoraireMonday
     *
     * @return string
     */
    public function getRestaurantHoraireMonday()
    {
        return $this->restaurantHoraireMonday;
    }

    /**
     * Set restaurantHoraireTuesday
     *
     * @param string $restaurantHoraireTuesday
     *
     * @return Restaurant
     */
    public function setRestaurantHoraireTuesday($restaurantHoraireTuesday)
    {
        $this->restaurantHoraireTuesday = $restaurantHoraireTuesday;

        return $this;
    }

    /**
     * Get restaurantHoraireTuesday
     *
     * @return string
     */
    public function getRestaurantHoraireTuesday()
    {
        return $this->restaurantHoraireTuesday;
    }

    /**
     * Set restaurantHoraireWednesday
     *
     * @param string $restaurantHoraireWednesday
     *
     * @return Restaurant
     */
    public function setRestaurantHoraireWednesday($restaurantHoraireWednesday)
    {
        $this->restaurantHoraireWednesday = $restaurantHoraireWednesday;

        return $this;
    }

    /**
     * Get restaurantHoraireWednesday
     *
     * @return string
     */
    public function getRestaurantHoraireWednesday()
    {
        return $this->restaurantHoraireWednesday;
    }

    /**
     * Set restaurantHoraireThursday
     *
     * @param string $restaurantHoraireThursday
     *
     * @return Restaurant
     */
    public function setRestaurantHoraireThursday($restaurantHoraireThursday)
    {
        $this->restaurantHoraireThursday = $restaurantHoraireThursday;

        return $this;
    }

    /**
     * Get restaurantHoraireThursday
     *
     * @return string
     */
    public function getRestaurantHoraireThursday()
    {
        return $this->restaurantHoraireThursday;
    }

    /**
     * Set restaurantHoraireFriday
     *
     * @param string $restaurantHoraireFriday
     *
     * @return Restaurant
     */
    public function setRestaurantHoraireFriday($restaurantHoraireFriday)
    {
        $this->restaurantHoraireFriday = $restaurantHoraireFriday;

        return $this;
    }

    /**
     * Get restaurantHoraireFriday
     *
     * @return string
     */
    public function getRestaurantHoraireFriday()
    {
        return $this->restaurantHoraireFriday;
    }

    /**
     * Set restaurantHoraireSaturday
     *
     * @param string $restaurantHoraireSaturday
     *
     * @return Restaurant
     */
    public function setRestaurantHoraireSaturday($restaurantHoraireSaturday)
    {
        $this->restaurantHoraireSaturday = $restaurantHoraireSaturday;

        return $this;
    }

    /**
     * Get restaurantHoraireSaturday
     *
     * @return string
     */
    public function getRestaurantHoraireSaturday()
    {
        return $this->restaurantHoraireSaturday;
    }

    /**
     * Set restaurantHoraireSunday
     *
     * @param string $restaurantHoraireSunday
     *
     * @return Restaurant
     */
    public function setRestaurantHoraireSunday($restaurantHoraireSunday)
    {
        $this->restaurantHoraireSunday = $restaurantHoraireSunday;

        return $this;
    }

    /**
     * Get restaurantHoraireSunday
     *
     * @return string
     */
    public function getRestaurantHoraireSunday()
    {
        return $this->restaurantHoraireSunday;
    }

    /**
     * Set restaurantCategory
     *
     * @param string $restaurantCategory
     *
     * @return Restaurant
     */
    public function setRestaurantCategory($restaurantCategory)
    {
        $this->restaurantCategory = $restaurantCategory;

        return $this;
    }

    /**
     * Get restaurantCategory
     *
     * @return string
     */
    public function getRestaurantCategory()
    {
        return $this->restaurantCategory;
    }

    /**
     * Set restaurantDescription
     *
     * @param string $restaurantDescription
     *
     * @return Restaurant
     */
    public function setRestaurantDescription($restaurantDescription)
    {
        $this->restaurantDescription = $restaurantDescription;

        return $this;
    }

    /**
     * Get restaurantDescription
     *
     * @return string
     */
    public function getRestaurantDescription()
    {
        return $this->restaurantDescription;
    }

    /**
     * Get idRestaurant
     *
     * @return integer
     */
    public function getIdRestaurant()
    {
        return $this->idRestaurant;
    }

    /**
     * Set idUser
     *
     * @param \AppBundle\Entity\User $id
     *
     * @return Feedback
     */
    public function setIdUser(\AppBundle\Entity\User $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->id;
    }
}
