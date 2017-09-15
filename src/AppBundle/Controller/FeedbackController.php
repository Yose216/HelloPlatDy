<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Feedback;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Feedback controller.
 *
 * @Route("feedback")
 */
class FeedbackController extends Controller
{
    /**
     * Lists all feedback entities.
     *
     * @Route("/", name="feedback_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $feedbacks = $em->getRepository('AppBundle:Feedback')->findAll();

        return $this->render('feedback/index.html.twig', array(
            'feedbacks' => $feedbacks,
        ));
    }

    /**
     * Finds and displays a feedback entity.
     *
     * @Route("/{idFeedback}", name="feedback_show")
     * @Method("GET")
     */
    public function showAction(Feedback $feedback)
    {
        $deleteForm = $this->createDeleteForm($feedback);

        return $this->render('feedback/show.html.twig', array(
            'feedback' => $feedback,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing feedback entity.
     *
     * @Route("/{idFeedback}/edit", name="feedback_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Feedback $feedback)
    {
        $deleteForm = $this->createDeleteForm($feedback);
        $editForm = $this->createForm('AppBundle\Form\FeedbackType', $feedback);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('feedback_edit', array('idFeedback' => $feedback->getIdfeedback()));
        }

        return $this->render('feedback/edit.html.twig', array(
            'feedback' => $feedback,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a feedback entity.
     *
     * @Route("/{idFeedback}", name="feedback_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Feedback $feedback)
    {
        $form = $this->createDeleteForm($feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($feedback);
            $em->flush();
        }

        return $this->redirectToRoute('feedback_index');
    }

    /**
     * Creates a form to delete a feedback entity.
     *
     * @param Feedback $feedback The feedback entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Feedback $feedback)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('feedback_delete', array('idFeedback' => $feedback->getIdfeedback())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
