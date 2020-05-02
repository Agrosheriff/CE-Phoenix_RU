<?php
/*
  $Id: banktransfer.php,v 1.3 2002/05/31 19:02:02 thomasamoulton Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
  Updated by JcMagpie for Phoinex 1.0.4.0 10-01-2020
*/

  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_TITLE', 'Банковский перевод');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_DESCRIPTION', 'Используйте пожалуйста следующую информацию, для оплаты банковским переводом общей суммы заказа:<br /><br />
<table border="0" cellspacing="0" cellpadding="2">
<tr><td><strong>Владелец счета:</strong></td><td>' . MODULE_PAYMENT_BANKTRANSFER_ACCNAM . '</td></tr>
<tr><td><strong>Название Банка:</strong></td><td>' . MODULE_PAYMENT_BANKTRANSFER_BANKNAM . '</td></tr>
<tr><td><strong>Номер счета.:</strong></td><td>' . MODULE_PAYMENT_BANKTRANSFER_ACCNUM . '</td></tr>
<tr><td><strong>Код Банка.:</strong></td><td>' . MODULE_PAYMENT_BANKTRANSFER_SORTCODE . '</td></tr>
<tr><td><strong>IBAN:</strong></td><td>' . MODULE_PAYMENT_BANKTRANSFER_IBAN . '</td></tr>
<tr><td><strong>SWIFT:</strong></td><td>' . MODULE_PAYMENT_BANKTRANSFER_SWIFT . '</td></tr>
</table>
<br />Как только <u>full оплата</u> будет получена и подтверждена, Ваш заказ будет обработан.');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EMAIL_FOOTER', "Пожалуйста, используйте следующую информацию для перевода общей суммы заказа: \n\nНомер Счета:  " . MODULE_PAYMENT_BANKTRANSFER_ACCNUM . "\nКод Банка:    " . MODULE_PAYMENT_BANKTRANSFER_SORTCODE . "\nСчет получателя: " . MODULE_PAYMENT_BANKTRANSFER_ACCNAM . "\nНазвание Банка:    " . MODULE_PAYMENT_BANKTRANSFER_BANKNAM . "\nIBAN:  " . MODULE_PAYMENT_BANKTRANSFER_IBAN . "\nSWIFT: " . MODULE_PAYMENT_BANKTRANSFER_SWIFT ."\n\nКак только оплата будет получена и подтверждена, Ваш заказ будет обработан.");
///  define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER', 'Сортировать для порядка отображения');
///  define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID', 'Установить статус заказа');
