<?php
class GuidPerson extends DbObject
{
	protected function init()
	{
		$this->keyAssignedBy = self::keyAssignedBy_dev;
	}
}