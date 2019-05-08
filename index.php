<?php
	/**
	 * Quick autoload test
	 *
	 * @link:    https://github.com/thisishuey/php-sandbox
	 * @license: GPL-2.0-or-later
	 */
	require __DIR__ . '/vendor/autoload.php';

	$timer = new PHP_Timer();

	$timer->start();
	sleep( wp_rand( 1, 3 ) );
	$timer->stop();
	print $timer->resourceUsage() . "\n";
