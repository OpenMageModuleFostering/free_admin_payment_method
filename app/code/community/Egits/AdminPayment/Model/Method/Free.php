<?php
/**
 * eGlobe IT Solutions (P)Ltd.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.eglobeits.com/license.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to hello@eglobeits.com so we can send you a copy immediately.
 *
 * =================================================================
 *                     MAGENTO USAGE NOTICE
 * =================================================================
 * This package designed & developed for Magento COMMUNITY edition
 * eGits does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * eGits does not provide extension support in case of
 * incorrect edition usage.
 * =================================================================
 *
 * @category   Egits
 * @package    Egits_AdminPayment
 * @version    0.1.0
 * @copyright  Copyright (c) 2015-2016 eGlobe IT Solutions (P)Ltd. (http://www.eglobeits.com/)
 * @author     eGits Team <hello@eglobeits.com>
 * @license    http://ecommerce.eglobeits.com/license.txt
 */
class Egits_AdminPayment_Model_Method_Free extends Mage_Payment_Model_Method_Abstract
{
    /**
     * XML Pathes for configuration constants
     */

    const XML_PATH_PAYMENT_FREE_ACTIVE = 'payment/adminpayment/active';
    const XML_PATH_PAYMENT_FREE_ORDER_STATUS = 'payment/adminpayment/order_status';
    const XML_PATH_PAYMENT_FREE_PAYMENT_ACTION = 'payment/adminpayment/payment_action';

    /**
     * The payment method will be available only for admin
     * @var boolean
     */
    protected $_canUseCheckout = false;

    /**
     * Payment code name
     *
     * @var string
     */
    protected $_code = 'adminpayment';

    /**
     * Check whether method is available
     *
     * @param Mage_Sales_Model_Quote $quote
     * @return bool
     */
    public function isAvailable($quote = null)
    {
        return parent::isAvailable();
    }

}
