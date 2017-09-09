<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DiscountCode;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Discountcode controller.
 *
 * @Route("discountcode")
 */
class DiscountCodeController extends Controller
{
    /**
     * Lists all discountCode entities.
     *
     * @Route("/", name="discountcode_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $discountCodes = $em->getRepository('AppBundle:DiscountCode')->findAll();

        return $this->render('discountcode/index.html.twig', array(
            'discountCodes' => $discountCodes,
        ));
    }

    /**
     * Creates a new discountCode entity.
     *
     * @Route("/new", name="discountcode_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $discountCode = new Discountcode();

        // Get id of user connected
        $user = $this->getUser();
        $user = $user->getId();

        $em = $this->getDoctrine()->getManager();

        // find restaurant associated of user
        $restaurant = $em->getRepository('AppBundle:Restaurant')->find($user);

        //Set restaurant id of discount code created
        $discountCode->setIdRestaurant($restaurant);

        $form = $this->createForm('AppBundle\Form\DiscountCodeType', $discountCode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($discountCode);
            $em->flush();

            return $this->redirectToRoute('discountcode_show', array('idDiscountCode' => $discountCode->getIddiscountcode()));
        }

        return $this->render('discountcode/new.html.twig', array(
            'discountCode' => $discountCode,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a discountCode entity.
     *
     * @Route("/{idDiscountCode}", name="discountcode_show")
     * @Method("GET")
     */
    public function showAction(DiscountCode $discountCode)
    {
        $deleteForm = $this->createDeleteForm($discountCode);

        return $this->render('discountcode/show.html.twig', array(
            'discountCode' => $discountCode,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing discountCode entity.
     *
     * @Route("/{idDiscountCode}/edit", name="discountcode_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DiscountCode $discountCode)
    {
        $deleteForm = $this->createDeleteForm($discountCode);
        $editForm = $this->createForm('AppBundle\Form\DiscountCodeType', $discountCode);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('discountcode_edit', array('idDiscountCode' => $discountCode->getIddiscountcode()));
        }

        return $this->render('discountcode/edit.html.twig', array(
            'discountCode' => $discountCode,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a discountCode entity.
     *
     * @Route("/{idDiscountCode}", name="discountcode_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DiscountCode $discountCode)
    {
        $form = $this->createDeleteForm($discountCode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($discountCode);
            $em->flush();
        }

        return $this->redirectToRoute('discountcode_index');
    }

    /**
     * Creates a form to delete a discountCode entity.
     *
     * @param DiscountCode $discountCode The discountCode entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DiscountCode $discountCode)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('discountcode_delete', array('idDiscountCode' => $discountCode->getIddiscountcode())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
