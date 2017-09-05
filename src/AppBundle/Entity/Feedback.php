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
     * @ORM\Column(name="feedback_rating", type="integer", nullable=true)
     */
    private $feedbackRating;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback_title", type="string", length=50, nullable=true)
     */
    private $feedbackTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback_comments", type="text", nullable=true)
     */
    private $feedbackComments;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback_date", type="string", length=45, nullable=true)
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
     * @ORM\Id
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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;


}

