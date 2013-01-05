<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Dreamheads\Bundle\LeadCRMBundle\Entity\Region;
use Dreamheads\Bundle\LeadCRMBundle\Entity\Operator;
use Dreamheads\Bundle\LeadCRMBundle\Entity\PhonePrefix;

class TempController extends Controller
{
	
	// Заполняет поле оператора
    public function fillEmptyColumnsAction()
    {
	
		$em = $this->getDoctrine()->getManager();
		$rep = $em->getRepository('DreamheadsLeadCRMBundle:TempPhonePrefix');
		
		for ($i = 10001; $i <= 11969; $i++)
		{
			$prefix = $rep->find($i);
			if ($prefix->getOperator() == '')
			{
				$prefix->setOperator($rep->find($i - 1)->getOperator());
			}
		}
		
		$em->flush();
		
    }
	
	// Заполняет поле региона
	public function fillEmptyColumns2Action()
    {
	
		$em = $this->getDoctrine()->getManager();
		$rep = $em->getRepository('DreamheadsLeadCRMBundle:TempPhonePrefix');
		
		for ($i = 8001; $i <= 11969; $i++)
		{
			$prefix = $rep->find($i);
			if ($prefix->getRegion() == '')
			{
				$prefix->setRegion($rep->find($i - 1)->getRegion());
			}
		}
		
		$em->flush();
		
    }
	
	// Заполняет поле префикса
	public function fillMaskAction()
    {
	
		$em = $this->getDoctrine()->getManager();
		$rep = $em->getRepository('DreamheadsLeadCRMBundle:TempPhonePrefix');
		
		for ($i = 8001; $i <= 11969; $i++)
		{
			$prefix = $rep->find($i);
			$mask = $prefix->getMask();
			if (strpos($mask, '-') == false)
			{
				$pre = substr($rep->find($i - 1)->getMask(), 0, 4);
				$prefix->setMask($pre.substr($mask, 8));
			}
		}
		
		$em->flush();
		
    }
	
	// Создает регион, если такого нет
	public function generateRegionsAction()
    {
	
		$em = $this->getDoctrine()->getManager();
		$rep = $em->getRepository('DreamheadsLeadCRMBundle:TempPhonePrefix');
		
		for ($i = 9000; $i <= 11969; $i++)
		{
			$prefix = $rep->find($i);
			$regionName = $prefix->getRegion();
			
			$region = $em->getRepository('DreamheadsLeadCRMBundle:Region')->findOneBy(array('name' => $regionName));		
			if ($region) {
				$prefix->setReg($region);
			} else {
				$r = new Region();
				$r->setName($regionName);
				$em->persist($r);
				$em->flush();
				$i = $i - 1;
			}
			
		}
		$em->flush();	
    }
	
	// Создает оператора, если такого нет
	public function generateOperatorsAction()
    {
	
		$em = $this->getDoctrine()->getManager();
		$rep = $em->getRepository('DreamheadsLeadCRMBundle:TempPhonePrefix');
		
		for ($i = 9000; $i <= 11969; $i++)
		{
			$prefix = $rep->find($i);
			$operatorName = $prefix->getOperator();
			
			$operator = $em->getRepository('DreamheadsLeadCRMBundle:Operator')->findOneBy(array('name' => $operatorName));		
			if ($operator) {
				$prefix->setOper($operator);
			} else {
				$o = new Operator();
				$o->setName($operatorName);
				$em->persist($o);
				$em->flush();
				$i = $i - 1;
			}
			
		}
		$em->flush();
		
    }
	
	// Убирает - в mask
	public function generateMasksAction()
    {
	
		$em = $this->getDoctrine()->getManager();
		$rep = $em->getRepository('DreamheadsLeadCRMBundle:TempPhonePrefix');
		
		for ($i = 10000; $i <= 11969; $i++)
		{
			$prefix = $rep->find($i);
			$mask = $prefix->getMask();
			
			$mask = preg_replace("/-/", "", $mask);
			
			$prefix->setMask($mask);
		}
		$em->flush();
    }
	
	public function getPhoneRegionAction() {
		$em = $this->getDoctrine()->getManager();
		$rep = $em->getRepository('DreamheadsLeadCRMBundle:PhonePrefix');
		
		// $prefix = $rep->findByPhone("8-(905)-3498342"); Ульяновск
		// $prefix = $rep->findByPhone("8-(921)-181-4278"); Санкт Петербург
		// $prefix = $rep->findByPhone("8-(927)518-1477");
		
		return $prefix->getRegion()->getName();
	}
	
	/**
     * @Route("/temp/get-phone")
     */
	public function testGetPhone() {
		$em = $this->getDoctrine()->getManager();
		
		$result = $em->createQuery("
			SELECT c.value FROM DreamheadsLeadCRMBundle:Couple c
			JOIN c.lead l JOIN c.field f
			WHERE l.id = :leadId AND f.is_phone = true
		")
		->setParameter('leadId', 3)
		->getOneOrNullResult();
		
		$message = print_r($result, true);
		
		return $this->render(
			'DreamheadsLeadCRMBundle:Temp:logOut.html.twig',
			array('message' => $message)
		);
		
	}
	
	
	/**
     * @Route("/temp/update-couple")
     */
	public function updateCoupleAction() {
		
		$em = $this->getDoctrine()->getManager();
		$couple = $em->getRepository('DreamheadsLeadCRMBundle:Couple')->find(2);
		$couple->setValue("+7 905 456 93 84");
		$em->flush();
		
		$em->getRepository('DreamheadsLeadCRMBundle:Lead')->updateRegionFor(1);
		$lead = $em->getRepository('DreamheadsLeadCRMBundle:Lead')->find(1);
		
		$message = $lead->getRegion()->getName();
		
		return $this->render(
			'DreamheadsLeadCRMBundle:Temp:logOut.html.twig',
			array('message' => $message)
		);
		
	}
	
}
