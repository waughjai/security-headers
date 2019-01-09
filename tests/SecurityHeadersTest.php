<?php

use PHPUnit\Framework\TestCase;
use WaughJ\SecurityHeaders\SecurityHeaders;

class SecurityHeadersTest extends TestCase
{
	public function testObjectWorks()
	{
		$ran_header = false;
		try
		{
			SecurityHeaders::setAllAutoPolicies();
		}
		catch( \Exception $e )
		{
			$ran_header = true;
		}
		$this->assertTrue( $ran_header );
	}
}
