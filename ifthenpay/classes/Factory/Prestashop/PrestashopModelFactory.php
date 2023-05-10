<?php
/**
 * 2007-2023 Ifthenpay Lda
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @copyright 2007-2023 Ifthenpay Lda
 * @author    Ifthenpay Lda <ifthenpay@ifthenpay.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace PrestaShop\Module\Ifthenpay\Factory\Prestashop;

if (!defined('_PS_VERSION_')) {
    exit;
}

class PrestashopModelFactory
{
    public static function buildCurrency($id = null)
    {
        return new \Currency($id);
    }

    public static function buildOrder($id = null)
    {
        return new \Order($id);
    }

    public static function buildOrderState($id = null)
    {
        return new \OrderState($id);
    }

    public static function buildTab($id = null)
    {
        return new \Tab($id);
    }

    public static function buildOrderHistory($id = null)
    {
        return new \OrderHistory($id);
    }

    public static function buildCustomer($id = null)
    {
        return new \Customer($id);
    }

    public static function buildEmployee($id = null)
    {
        return new \Employee($id);
    }
}
