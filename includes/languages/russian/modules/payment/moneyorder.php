<?php
/*
$Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart
Translation to RU from Fredi. Updated 7/12/22
Released under the GNU General Public License
*/

define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Чек/Денежный перевод');
const MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION = 'Требуется предварительная оплата перед отправкой заказа.';
const MODULE_PAYMENT_MONEYORDER_TEXT_CONFIRMATION = 'Сделать оплату для:&nbsp;%1$s<br><br>Отправить:<br>%2$s<br>%3$s<br><br>Ваш заказ не будет отправлен, пока мы не получим оплату.';
const MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER = <<<'EOT'
Произвести оплату: %1$s

Отправить платеж для:
%2$s
%3$s

Ваш заказ не будет отправлен, пока мы не получим оплату.
EOT;

const MODULE_PAYMENT_MONEYORDER_WARNING_SETUP = "Пожалуйста, убедитесь, что вы настроили параметр 'Make Payable to' параметр.";
