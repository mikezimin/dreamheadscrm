<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Dreamheads\Bundle\LeadCRMBundle\Entity\Lead;
use Dreamheads\Bundle\LeadCRMBundle\Entity\Couple;

class FormRepository extends EntityRepository
{
	public function submitForm($id, $param)
	{
		$em = $this->getEntityManager();
		
		$form = $this->find($id);
		$fields = $form->getFields();
		
		// Couples generation
		$lead = new Lead();
		$lead->setForm($form);
		
		foreach ($fields as $field) {
			$key = $field->getHtmlName();
			$set = isset($param[$key]) ? ( $param[$key] != '' ? true : false ) : false;
			if ($set) {
				$couple = new Couple();
				$couple->setField($field);
				$couple->setLead($lead);
				$couple->setValue($param[$key]);
				$lead->addCouple($couple);
				$em->persist($couple);
			} else if ($field->getIsRequired()) {
				return false;
			}
		}
		
		$em->persist($lead);
		$em->flush();
		
		$em->getRepository('DreamheadsLeadCRMBundle:Lead')->updateRegionFor($lead->getId());
		
		return $lead;
	}
}