<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PhonePrefixRepository extends EntityRepository
{
	public function findByPhone($phone)
	{
		// ��������������� � ������ �����
		
		// ������� ������� ( ) - + . /
		$pattern = "/(\(|\)|\-|\+|\s|\.|\/)/";
		$phone = preg_replace($pattern, "", $phone);

		// ������� ������ 7 ��� 8 - ��, ���� ����.
		$countryCode = substr($phone, 0, 1);
		if (strlen($phone) == 11 && ($countryCode == 7 || $countryCode == 8)) {
			$phone = substr($phone, 1);
		}
		// ���� �� 10-������� ����� - �� ����� ������ ����� ������
		if (strlen($phone) != 10) {
			return false;
		}
		
		$x = "xxxxxxxxxx";
		
		for ($i = 0; $i <= 10; $i++) {
			$mask = substr($phone, 0, 10 - $i) . substr($x, 10 - $i);
			$result = $this->findOneBy(array('mask' => $mask));
			if ($result) {
				return $result;
			}
		}
		
		return false;
		
	}
}