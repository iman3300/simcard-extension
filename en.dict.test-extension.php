<?php

/**
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * Localized data
 */

Dict::Add('EN US', 'English', 'English', array(
	
	// Class:SimCard
	'Class:SimCard' => 'Sim Card',
	'Class:SimCard+' => 'A SIM card',

	'Class:SimCard/Attribute:type' => 'Type',
	'Class:SimCard/Attribute:type+' => 'Type of SIM card',
	'Class:SimCard/Attribute:type/Value:prepaid' => 'Prepaid',
	'Class:SimCard/Attribute:type/Value:postpaid' => 'Postpaid',
	'Class:SimCard/Attribute:type/Value:data_only' => 'Data Only',

	'Class:SimCard/Attribute:phone_number' => 'Phone Number',
	'Class:SimCard/Attribute:phone_number+' => 'The phone number associated with the SIM card',
	'Class:SimCard/Attribute:operator' => 'Operator',
	'Class:SimCard/Attribute:operator+' => 'The telecom operator providing the SIM card',
	'Class:SimCard/Attribute:plan' => 'Plan',
	'Class:SimCard/Attribute:plan+' => 'The subscription plan of the SIM card',
	
	// Class:Model
	'Class:Model/Attribute:type/Value:SimCard' => 'Sim Card',
	'Class:Model/Attribute:type/Value:SimCard+' => 'Sim Card',
));
