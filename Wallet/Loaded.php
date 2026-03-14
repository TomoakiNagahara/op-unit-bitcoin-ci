<?php
/**	op-unit-bitcoin-ci:/Wallet/Loaded.php
 *
 * @created    2026-02-01
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

//	...
$method = basename(__FILE__);
$method = explode('.', $method)[0];

/* @var $ci \OP\UNIT\CI\CI_Config */

//	...
$args   = null;
$result = OP()->Unit()->Bitcoin()->Wallet()->Loaded();
$ci->Set($method, $result, $args);
