<?php
namespace Opencart\Admin\Controller\Extension\Mollie\Payment;

require_once(__DIR__ . "/../mollie.php");

class MolliePayPal extends \Opencart\Admin\Controller\Extension\Mollie\Mollie
{
	const MODULE_NAME = \MollieHelper::MODULE_NAME_PAYPAL;
}
