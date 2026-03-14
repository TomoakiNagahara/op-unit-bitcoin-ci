<?php
/**	op-unit-bitcoin-rpc:/ci/Address/Encrypt.php
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
$wallet     = 'testcase';
$passphrase = 'testcase';
$args   = [$wallet, $passphrase];
$result = true;
$ci->Set($method, $result, $args);
