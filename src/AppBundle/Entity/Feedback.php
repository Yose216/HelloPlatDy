<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedback
 *
 * @ORM\Table(name="Feedback", indexes={@ORM\Index(name="fk_Feedback_Restaurant1_idx", columns={"id_restaurant"}), @ORM\Index(name="fk_Feedback_User1_idx", columns={"id_user"})})
 * @ORM\Entity
 */
class Feedback
{
    /**
     * @var integer
     *
     * @ORM\Column(name="feedback_rating", type="integer", nullable=false)
     */
    private $feedbackRating;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback_title", type="string", length=50, nullable=false)
     */
    private $feedbackTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback_comments", type="text", nullable=false)
     */
    private $feedbackComments;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback_date", type="string", length=45, nullable=false)
     */
    private $feedbackDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_feedback", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFeedback;

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
     * @var \AppBundle\Entity\User
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;



    /**
     * Set feedbackRating
     *
     * @param integer $feedbackRating
     *
     * @return Feedback
     */
    public function setFeedbackRating($feedbackRating)
    {
        $this->feedbackRating = $feedbackRating;

        return $this;
    }

    /**
     * Get feedbackRating
     *
     * @return integer
     */
    public function getFeedbackRating()
    {
        return $this->feedbackRating;
    }

    /**
     * Set feedbackTitle
     *
     * @param string $feedbackTitle
     *
     * @return Feedback
     */
    public function setFeedbackTitle($feedbackTitle)
    {
        $this->feedbackTitle = $feedbackTitle;

        return $this;
    }

    /**
     * Get feedbackTitle
     *
     * @return string
     */
    public function getFeedbackTitle()
    {
        return $this->feedbackTitle;
    }

    /**
     * Set feedbackComments
     *
     * @param string $feedbackComments
     *
     * @return Feedback
     */
    public function setFeedbackComments($feedbackComments)
    {
        $this->feedbackComments = $feedbackComments;

        return $this;
    }

    /**
     * Get feedbackComments
     *
     * @return string
     */
    public function getFeedbackComments()
    {
        return $this->feedbackComments;
    }

    /**
     * Set feedbackDate
     *
     * @param string $feedbackDate
     *
     * @return Feedback
     */
    public function setFeedbackDate($feedbackDate)
    {
        $this->feedbackDate = $feedbackDate;

        return $this;
    }

    /**
     * Get feedbackDate
     *
     * @return string
     */
    public function getFeedbackDate()
    {
        return $this->feedbackDate;
    }

    /**
     * Get idFeedback
     *
     * @return integer
     */
    public function getIdFeedback()
    {
        return $this->idFeedback;
    }

    /**
     * Set idRestaurant
     *
     * @param \AppBundle\Entity\Restaurant $idRestaurant
     *
     * @return Feedback
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
     * Set idUser
     *
     * @param \AppBundle\Entity\User $idUser
     *
     * @return Feedback
     */
    public function setIdUser(\AppBundle\Entity\User $idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
