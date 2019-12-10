<?php

declare( strict_types = 1 );
namespace WaughJ\SecurityHeaders;

class SecurityHeaders
{
	public static function setAllAutoPolicies()
	{
		self::setSecureXFrameOption();
		self::setXSSProtectionOn();
		self::setNoSniffOn();
		self::setSecureReferrerOn();
		self::setHSTS();
	}

	public static function setHSTS()
	{
		header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
	}

	public static function setSecureXFrameOption()
	{
		header( 'X-Frame-Options: SAMEORIGIN' );
	}

	public static function setXSSProtectionOn()
	{
		header( 'X-Xss-Protection: 1; mode=block' );
	}

	public static function setNoSniffOn()
	{
		header( 'X-Content-Type-Options: nosniff' );
	}

	public static function setSecureReferrerOn()
	{
		header( 'Referrer-Policy: no-referrer-when-downgrade' );
	}
}