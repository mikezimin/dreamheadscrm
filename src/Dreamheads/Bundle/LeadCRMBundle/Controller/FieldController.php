<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

use Dreamheads\Bundle\LeadCRMBundle\Entity\Field;

class FieldController extends Controller
{
	/**
	 * @Route("/forms/{formId}/fields/add", name="addField")
	 */
	public function add($formId) {
		$em = $this->getDoctrine()->getManager();
		$form = $em->getRepository('DreamheadsLeadCRMBundle:Form')->find($formId);
		
		$field = new Field();
		$field->setForm($form);
		$field->setName('');
		$field->setHtmlName('');
		
		$em->persist($field);
		$em->flush();
		
		return $this->redirect($this->generateUrl('editForm', array('id' => $formId)));
	}
	
	/**
	 * @Route("/ajax/fields/update", name="updateField")
	 */
	public function updateAction() {
		
		$post = $this->getRequest()->request;
		
		$column = $post->get('column');
		$value = $post->get('value');
		$id = $post->get('id');
		
		$em = $this->getDoctrine()->getManager();
		$field = $em->getRepository('DreamheadsLeadCRMBundle:Field')->find($id);
		
		if ($column == 'htmlName') {
			$field->setHtmlName($value);
		}
		
		if ($column == 'name') {
			$field->setName($value);
		}
		
		if ($column == 'isPhone') {
			$value = $value == 'true' ? 1 : 0;
			$field->setIsPhone($value);
		}
		
		if ($column == 'isRequired') {
			$value = $value == 'true' ? 1 : 0;
			$field->setIsRequired($value);
		}
		
		$em->flush();
		
		$return = array('success' => true, 'id' => $id, 'column' => $column, 'value' => $value);
		
		$return = json_encode($return);//jscon encode the array
		return new Response($return, 200, array('Content-Type'=>'application/json'));
	}
}
