<?php
/**	op-unit-bitcoin-rpc:/ci/RPC/Address.php
 *
 * @created    2026-01-25
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

//	...
$args   = null;
$result = 'OP\UNIT\BITCOIN\RPC\Address';
$ci->Set($method, $result, $args);
