<?php

namespace Tusimo\Test;

class Trans
{
	public function toArray($object)
{
if (is_array($object))
{
return $object;
}	
	return json_decode(json_encode($object), true);
}
}






