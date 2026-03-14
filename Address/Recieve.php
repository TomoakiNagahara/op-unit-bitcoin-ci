<?php
/**	op-unit-bitcoin-rpc:/ci/Address/Recieve.php
 *
 * @created    2026-02-28
 * @license    Apache-2.0
 * @package    op-unit-bitcoin-rpc
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
$wallet  = 'testcase';
$address = 'testcase';
$args    = [$wallet, $address];
$result  =  0.0;
$ci->Set($method, $result, $args);
