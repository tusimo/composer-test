<?php

use Tusimo\Test;

class Trans
{
	public function toArray($object)
{
	is_array($object) && return $object;
	return json_decode(json_encode($object), true);
}
}
