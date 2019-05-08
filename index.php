<?php
/**
 * Quick autoload test
 *
 * @package PHPSandbox
 */

/**
 * Autoload Composer
 */
require __DIR__ . '/vendor/autoload.php';

$timer = new PHP_Timer();

$timer->start();
sleep( rand( 1, 3 ) );
$timer->stop();
print $timer->resourceUsage() . "\n";
