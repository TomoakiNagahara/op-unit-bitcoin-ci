<?php
/**	op-unit-bitcoin-ci:/Wallet/Create.php
 *
 * @created    2026-01-25
 * @license    Apache-2.0
 * @package    op-unit-bitcoin-ci
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

//	Get method name from file name.
$method = basename(__FILE__);
$method = explode('.', $method)[0];

/* @var $ci \OP\UNIT\CI\CI_Config */

//	Negative: already
$wallet = 'testcase';
$args   = [$wallet];
$result = "Notice: This wallet name is already exists: {$wallet}";
$ci->Set($method, $result, $args);

//	Negative: /
$wallet = 'test/case';
$args   = [$wallet];
$result = "Notice: This character is not supported: /";
$ci->Set($method, $result, $args);

//	Negative: 漢字
$wallet = '漢字';
$args   = [$wallet];
$result = "Notice: This character is not supported: 漢";
$ci->Set($method, $result, $args);
