<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Restaurant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Restaurant controller.
 *
 * @Route("restaurant")
 */
class RestaurantController extends Controller
{
    /**
     * Lists all restaurant entities.
     *
     * @Route("/", name="restaurant_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $restaurants = $em->getRepository('AppBundle:Restaurant')->findAll();

        return $this->render('restaurant/index.html.twig', array(
            'restaurants' => $restaurants,
        ));
    }

    /**
     * Creates a new restaurant entity.
     *
     * @Route("/new", name="restaurant_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $restaurant = new Restaurant();

        // Set id of user connected on restaurant created
        $user = $this->getUser();
        $restaurant->setIdUser($user);

        $form = $this->createForm('AppBundle\Form\RestaurantType', $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($restaurant);
            $em->flush();

            return $this->redirectToRoute('restaurant_show', array('idRestaurant' => $restaurant->getIdrestaurant()));
        }

        return $this->render('restaurant/new.html.twig', array(
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a restaurant entity.
     *
     * @Route("/{idRestaurant}", name="restaurant_show")
     * @Method("GET")
     */
    public function showAction(Restaurant $restaurant)
    {
        $deleteForm = $this->createDeleteForm($restaurant);

        return $this->render('restaurant/show.html.twig', array(
            'restaurant' => $restaurant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing restaurant entity.
     *
     * @Route("/{idRestaurant}/edit", name="restaurant_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Restaurant $restaurant)
    {
        $deleteForm = $this->createDeleteForm($restaurant);
        $editForm = $this->createForm('AppBundle\Form\RestaurantType', $restaurant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('restaurant_edit', array('idRestaurant' => $restaurant->getIdrestaurant()));
        }

        return $this->render('restaurant/edit.html.twig', array(
            'restaurant' => $restaurant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a restaurant entity.
     *
     * @Route("delete/{idRestaurant}", name="restaurant_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Restaurant $restaurant)
    {
        $form = $this->createDeleteForm($restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($restaurant);
            $em->flush();
        }

        return $this->redirectToRoute('restaurant_index');
    }

    /**
     * Creates a form to delete a restaurant entity.
     *
     * @param Restaurant $restaurant The restaurant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Restaurant $restaurant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('restaurant_delete', array('idRestaurant' => $restaurant->getIdrestaurant())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
