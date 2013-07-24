<?php

class Zend_View_Helper_BanInfo
{
	public function banInfo($type, $default='')
	{
		$type = (int)$type;
		$banTexts = array(
			'2'  => '����������������� ����',
	        '9'  => '����������� �������� �� ����',
	        '10' => '�� ����� ���� �� ����',
			'11' => '��������� ������� �� ����',
	        '4'  => '����� ����',
	        '3'  => '������������ ����',
	        '6'  => '�������, ��� � ����',
	        '5'  => '����',
	        '7'  => '�����-������',
	        '8'  => '��������',
			'101' => '������ �� ����������� � ����������',
			'102' => '������ �� ����������� � �����',
			'103' => '������ �� ���� � �����',
//			'104' => '������ �� ���� � �����',
			'105' => '������ �� ���������� � �������',
			'106' => '������ �� ��������',
			'107' => '������ �� ���������',
			'108' => '������ �� ��������� � ����������',
			'109' => '������ �� ��������� � ���',
		    '110' => '������ �� ����������� � �������',
            '111' => '����������������� ����',
            '112' => '������������ ����',
            '113' => '����������� �������� �� ����',
		    '131' => '������ �������',
            '114' => '���',
            '115' => '��������� ����� �� ����',
            '116' => '����� ����',
            '117' => '�� ����� ���� �� ����',
            '118' => '������� ������������� �����',
            '119' => '������� ������������� �����'
        );
		
		return !empty($banTexts[$type]) ? $banTexts[$type] : $default;
	}
}