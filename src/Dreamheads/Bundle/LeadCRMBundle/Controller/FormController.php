<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;


class FormController extends Controller
{
	
    public function showListAction()
    {
	
		$em = $this->getDoctrine()->getManager();
		
		$user = $this->getUser();
		
		$forms = $em->getRepository('DreamheadsLeadCRMBundle:Form')->findBy(array('user' => $user));
		
        return $this->render(
			'DreamheadsLeadCRMBundle:Form:showList.html.twig',
			array(
				'forms' => $forms,
				'user' => $this->getUser()
			)
		);
		
    }
	
	/**
	 * @Route("/forms/{id}/edit", name="editForm")
	 */
	public function editAction($id)
    {
	
		$em = $this->getDoctrine()->getManager();
		
		$form = $em->getRepository('DreamheadsLeadCRMBundle:Form')->find($id);
		
		$fields = $em->getRepository('DreamheadsLeadCRMBundle:Field')
			->findBy(array('form' => $form));
		
        return $this->render(
			'DreamheadsLeadCRMBundle:Form:edit.html.twig',
			array(
				'form' => $form,
				'fields' => $fields
			)
		);
		
    }
	
	/**
	 * @Route("/ajax/forms/{id}/update", name="updateForm")
	 */
	public function updateAction($id)
    {
		$post = $this->getRequest()->request;
		
		$column = $post->get('column');
		$value = $post->get('value');
	
		$em = $this->getDoctrine()->getManager();
		
		$form = $em->getRepository('DreamheadsLeadCRMBundle:Form')->find($id);
		
		if ($column == 'name') {
			$form->setName($value);
		}
		
		if ($column == 'email') {
			$form->setEmail($value);
		}
		
		if ($column == 'smsName') {
			$form->setSmsName($value);
		}
		
		if ($column == 'phone') {
			$form->setPhone($value);
		}
		
		if ($column == 'successText') {
			$form->setSuccessText($value);
		}
		
		if ($column == 'failText') {
			$form->setFailText($value);
		}
		
		if ($column == 'postMails') {
			$value = $value == 'true' ? 1 : 0;
			$form->setPostMails($value);
		}
		
		if ($column == 'postSms') {
			$value = $value == 'true' ? 1 : 0;
			$form->setPostSms($value);
		}
		
		$em->flush();
		
		$return = array('success' => true, 'id' => $id, 'column' => $column, 'value' => $value);
		
		$return = json_encode($return);//jscon encode the array
		return new Response($return, 200, array('Content-Type'=>'application/json'));
		
    }
	
}
