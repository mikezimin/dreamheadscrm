<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Entity;

use Doctrine\ORM\EntityRepository;

class LeadRepository extends EntityRepository
{
	public function updateRegionFor($id)
	{
		$em = $this->getEntityManager();
		
		$couple = $em->createQuery("
			SELECT c FROM DreamheadsLeadCRMBundle:Couple c
			JOIN c.lead l JOIN c.field f
			WHERE l.id = :leadId AND f.is_phone = true
		")
		->setParameter('leadId', $id)
		->getOneOrNullResult();
		
		if ($couple != null) {
			$phone = $couple->getValue();
		
			$prefix = $em->getRepository('DreamheadsLeadCRMBundle:PhonePrefix')->findByPhone($phone);
		
			if($prefix !== false) {
				$lead = $this->find($id);
				$lead->setRegion($prefix->getRegion());
				$em->flush();
			}
		}
		
		return $this;
	}
	
	public function filter($form, $filterByText, $text, $filterByDate, $from, $to, $orderBy, $order) {
		$em = $this->getEntityManager();
	
		$select = "SELECT l FROM DreamheadsLeadCRMBundle:Lead l JOIN DreamheadsLeadCRMBundle:Form f ";
		
		if($filterByText) {
			$join = "JOIN DreamheadsLeadCRMBundle:Couple c";
			$where1 = "((c.lead = l AND c.value LIKE '%" . $text . "%') OR (l.comment LIKE '%" . $text . "%'))";
		}
		
		if ($filterByDate) {
			$from = $this->dateToDateTime($from);
			$to = $this->dateToDateTime($to, true);
			if ($from !== false && $to !== false) {
				$where2 = '(l.time >= \'' . $from . '\' AND l.time < \'' . $to . '\')' ;
			}
		}
		
		if ($orderBy != null && $order != null) {
			$oBy = 'ORDER BY l.id ' . $order;
		}
		
		$where3 = '(l.form = f AND f.id = ' . $form->getId() . ')';
		
		$where = 'WHERE ' .
			(isset($where1) ? $where1 : '') .
			((isset($where1) && isset($where2)) ? ' AND ' : '') .
			(isset($where2) ? $where2 : '') .
			((isset($where1) || isset($where2)) ? ' AND ' : '') .
			$where3;
		
		$dql =
			$select .
			(isset($join) ? ' ' . $join : '') .
			(isset($where) ? ' ' . $where : '') .
			(isset($oBy) ? ' ' . $oBy : '');
		
		$query = $em->createQuery($dql);
		
		$leads = $query->getResult();
		
		return $leads;
		
	}
	
	// Convert 26/12/2012 to 2012-12-06 00:00:00
	private function dateToDateTime($date, $addDay = false) {
		
		$dt = \DateTime::createFromFormat('d.m.Y', $date);
		if ($dt === false) {
			return false;
		}
		$dt->setTime(0, 0, 0);
		
		// Add 1 day
		if($addDay) {
			$dt->add(new \DateInterval('P1D'));
		}
		
		return $dt->format("Y-m-d H:i:s");
	}
	
}