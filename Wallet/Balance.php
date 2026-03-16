<?php
/**	op-unit-bitcoin-ci:/Wallet/Balance.php
 *
 * @created    2026-02-01
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

//	...
$wallet = 'testcase';
$args   = [$wallet];
$result = OP()->Unit()->Bitcoin()->Wallet()->Balance($wallet);
$ci->Set($method, $result, $args);
