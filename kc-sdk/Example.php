﻿<?php

namespace KenticoCloud\Delivery;
use KenticoCloud\Delivery\DeliveryClient;

class Example
{
	public function Test()
	{	
		$client = new DeliveryClient('975bf280-fd91-488c-994c-2f04416e5ee3');
		$item = $client->getItem('about_us');
	}
}
