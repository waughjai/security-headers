<?php

declare( strict_types = 1 );
namespace WaughJ\SecurityHeaders;

class SecurityHeaders
{
	public static function setAllAutoPolicies() : void
	{
		self::setSecureXFrameOption();
		self::setXSSProtectionOn();
		self::setNoSniffOn();
		self::setSecureReferrerOn();
		self::setHSTS();
	}

	public static function setHSTS() : void
	{
		header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload; env=HTTPS' );
	}

	public static function setSecureXFrameOption() : void
	{
		header( 'X-Frame-Options: SAMEORIGIN' );
	}

	public static function setXSSProtectionOn() : void
	{
		header( 'X-Xss-Protection: 1; mode=block' );
	}

	public static function setNoSniffOn() : void
	{
		header( 'X-Content-Type-Options: nosniff' );
	}

	public static function setSecureReferrerOn() : void
	{
		header( 'Referrer-Policy: no-referrer-when-downgrade' );
	}
}
