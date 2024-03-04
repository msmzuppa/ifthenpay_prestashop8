<?php
/**
 * 2007-2024 Ifthenpay Lda
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
 * @copyright 2007-2024 Ifthenpay Lda
 * @author    Ifthenpay Lda <ifthenpay@ifthenpay.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace PrestaShop\Module\Ifthenpay\Callback;

use PrestaShop\Module\Ifthenpay\Log\IfthenpayLogProcess;

if (!defined('_PS_VERSION_')) {
    exit;
}


class CallbackStrategy
{    
    public function execute($request)
    {
        if ($request['type'] === 'offline') {
            return (new CallbackOffline())->setPaymentMethod($request['payment'])->setRequest($request)->process();
        } else if ($request['type'] === 'online') {
            return (new CallbackOnline())->setPaymentMethod($request['payment'])->setRequest($request)->process();
        } else {
            IfthenpayLogProcess::addLog('Callback payment type is not defined', IfthenpayLogProcess::INFO, 0);
            throw new \Exception('Callback payment type is not defined');
        }
    }
}
