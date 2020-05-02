<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce
  Translation to RU from Fredi. Updated 17/02/2020
  Released under the GNU General Public License
*/

define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Чек/Денежный перевод');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Произвести оплату:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . '<br /><br />Отправить для:<br />' . STORE_NAME . '<br />' . nl2br(STORE_ADDRESS) . '<br /><br />' . 'Ваш заказ не будет отправлен, пока мы не получим оплату.');
const MODULE_PAYMENT_MONEYORDER_TEXT_CONFIRMATION = 'Сделать оплатe для:&nbsp;%1$s<br><br>Отправить:<br>%2$s<br>%3$s<br><br>Ваш заказ не будет отправлен, пока мы не получим оплату.';
const MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER = <<<'EOT'
Произвести оплату: %1$s

Отправить:
%2$s
%3$s

Ваш заказ не будет отправлен, пока мы не получим оплату.
EOT;

define('MODULE_PAYMENT_MONEYORDER_WARNING_SETUP', 'Пожалуйста, убедитесь, что вы настроили \'Make Payable to\' параметр.');
