<?php
/**	op-unit-bitcoin-ci:/Address/Change.php
 *
 * @created    2026-03-16
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

//	...
$method = basename(__FILE__);
$method = explode('.', $method)[0];

/* @var $ci \OP\UNIT\CI\CI_Config */

//	Positive
$wallet     = 'testcase';
$passphrase = 'testcase';
$args   = [$wallet, $passphrase, $passphrase];
$result = true;
$ci->Set($method, $result, $args);
