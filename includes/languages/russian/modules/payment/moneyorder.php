<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce
  Translation to RU from Fredi. Updated 7/01/2020
  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Чек/Денежный перевод');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Произвести оплату:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . '<br /><br />Отправить для:<br />' . STORE_NAME . '<br />' . nl2br(STORE_ADDRESS) . '<br /><br />' . 'Ваш заказ не будет отправлен, пока мы не получим оплату.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Произвести оплату: " . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\n\nSend To:\n" . STORE_NAME . "\n" . STORE_ADDRESS . "\n\n" . 'Ваш заказ не будет отправлен, пока мы не получим оплату.');

  define('MODULE_PAYMENT_MONEYORDER_WARNING_SETUP', 'Пожалуйста, убедитесь, что вы настроили \'Make Payable to\' параметр.');
