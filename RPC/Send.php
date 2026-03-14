<?php
/**	op-unit-bitcoin-rpc:/ci/RPC/SendToAddress.php
 *
 * @created    2026-02-01
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

//	Positive: passphrase is empty
$wallet     = 'testcase';
$address    = 'testcase';
$passphrase = 'testcase';
$amount     = '0.1';
$args   = [$wallet, $address, $amount, $passphrase];
$result = "Notice: Invalid Bitcoin address: {$address}";
$ci->Set($method, $result, $args);

//	Positive: passphrase is empty string
$wallet     = 'testcase';
$address    = 'testcase';
$amount     = '0.1';
$passphrase = '';
$args   = [$wallet, $address, $amount, $passphrase];
$result = "Notice: Invalid Bitcoin address: {$address}";
$ci->Set($method, $result, $args);
