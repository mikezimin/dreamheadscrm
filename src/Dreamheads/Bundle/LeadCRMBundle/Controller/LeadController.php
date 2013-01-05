<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class LeadController extends Controller
{
	/**
	 * @Route("/forms/{formId}/leads", name="leads_show")
	 */
    public function showListAction($formId)
    {
		$request = $this->getRequest();

		$em = $this->getDoctrine()->getManager();
		$form = $em->getRepository('DreamheadsLeadCRMBundle:Form')->find($formId);
		$fields = $form->getFields();
		
		$orderBy = $request->query->get('orderBy');
		$order = $request->query->get('order');
		
		$filterByDate = $request->query->get('filterByDate');
		$from = $request->query->get('from');
		$to = $request->query->get('to');
		
		$filterByText = $request->query->get('filterByText');
		$text = $request->query->get('text');
		
		$leads = $em->getRepository('DreamheadsLeadCRMBundle:Lead')
			->filter($filterByText, $text, $filterByDate, $from, $to, $orderBy, $order);
		
		
        return $this->render(
			'DreamheadsLeadCRMBundle:Lead:showList.html.twig',
			array(
				'form' => $form,
				'fields' => $fields,
				'leads' => $leads,
				'orderBy' => $orderBy,
				'order' => $order,
				'filterByDate' => $filterByDate,
				'from' => $from,
				'to' => $to,
				'filterByText' => $filterByText,
				'text' => $text,
				'user' => $this->getUser()
			)
		);
		
    }
	
	/**
	 * @Route("/ajax/leads/update", name="updateLead")
	 */
    public function updateAction() {
		
		$post = $this->getRequest()->request;
		
		$column = $post->get('column');
		$value = $post->get('value');
		$id = $post->get('id');
		
		$em = $this->getDoctrine()->getManager();
		$lead = $em->getRepository('DreamheadsLeadCRMBundle:Lead')->find($id);
		
		if ($column == 'comment') {
			$lead->setComment($value);
		}
		
		if ($column == 'isBad') {
			$value = $value == 'true' ? 1 : 0;
			$lead->setIsBad($value);
		}
		
		$em->flush();
		
		$return = array('success' => true, 'id' => $id, 'column' => $column, 'value' => $value);
		
		$return = json_encode($return);//jscon encode the array
		return new Response($return, 200, array('Content-Type'=>'application/json'));
		
	}
}
