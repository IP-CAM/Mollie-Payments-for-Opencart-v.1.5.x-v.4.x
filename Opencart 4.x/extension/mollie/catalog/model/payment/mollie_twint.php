<?php
namespace Opencart\Catalog\Model\Extension\Mollie\Payment;

require_once(__DIR__ . "/../mollie.php");

class MollieTwint extends \Opencart\Catalog\Model\Extension\Mollie\Mollie
{
	const MODULE_NAME = \MollieHelper::MODULE_NAME_TWINT;
}
