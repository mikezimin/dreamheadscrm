<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use UniSender\UniSenderApi;

/**
 * @Route("/external")
 */
class ExternalController extends Controller
{
	
	/**
	 * @Route("/submit-form/{id}")
	 */
    public function submitFormAction($id)
    {
		$em = $this->getDoctrine()->getManager();
		$params = $this->getRequest()->request->all();
		
		$form = $em->getRepository('DreamheadsLeadCRMBundle:Form')->find($id);
		
		// Сохраняем в БД
		$lead = $em->getRepository('DreamheadsLeadCRMBundle:Form')->submitForm($id, $params);
		
		if ($lead !== false) { // Если заполнены все поля и лид попал в базу
			$this->sendSms($lead);
			$this->sendEmail($lead);
			$params['_text'] = $form->getSuccessText();
			$params['_success'] = 1;
		} else {
			$params['_text'] = $form->getFailText();
			$params['_success'] = 0;
		}
		
		// Делаем редирект
		if (isset($params['_redirect_url'])) {
			
			$url = $params['_redirect_url'];
			unset($params['_redirect_url']);
			$query = http_build_query($params);
			
			return $this->redirect($url . '?' . $query);
		}
		
    }
	
	private function sendSms($lead) {
		
		$us = new UniSenderApi('5gy635f3kpg1jsg9e4eh3d6x8ghs9w3uq8d947xo');
		
		$form = $lead->getForm();
		
		if ($form->getPostSms()) {
			
			$phone = $form->getPhone();
			$couples = $lead->getCouples();
			
			// generate sms text
			$text = $form->getSmsName() . "\n";
			
			foreach ($couples as $couple) {
				$text .= $couple->getField()->getSmsName() . ': ';
				$text .= $couple->getValue() . "\n";
			}
			
			$result = $us->sendSms(array(
				'phone' => $phone,
				'sender' => 'Dreamheads',
				'text' => $text
			));
		}
		
	}
	
	private function sendEmail($lead) {
		
		$form = $lead->getForm();
		
		if ($form->getPostMails()) {
		
			$to = $form->getEmail();
			
			$from = "no-reply@dreamheads.ru";
			$subject = $form->getName();
		
			$couples = $lead->getCouples();
			
			// generate email text
			$text = "Новая заявка:\n\n";
			
			foreach ($couples as $couple) {
				$text .= $couple->getField()->getSmsName() . ': ';
				$text .= $couple->getValue() . "\n";
			}
		
			mail($to, $subject, $text, 
				"From: $from \r\n" 
				. "X-Mailer: PHP/" . phpversion());
		
		}
	}
}
