<?php
/**	op-unit-bitcoin-ci:/Passphrase.php
 *
 * @created    2026-02-28
 * @license    Apache-2.0
 * @package    op-unit-bitcoin
 * @subpackage ci
 * @copyright  Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

/* @var $ci \OP\UNIT\CI\CI_Config */
$ci = OP()->Unit()->CI()->Config();

//	Each methods config
$name = basename(__FILE__);
$name = explode('.', $name)[0];
foreach( glob(__DIR__."/{$name}/*.php") as $path ){
	require_once($path);
}

//	...
return $ci->Get();
