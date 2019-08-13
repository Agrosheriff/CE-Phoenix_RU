<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_TITLE', 'Sage Pay Сервер');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_PUBLIC_TITLE', 'Кредитная карта или банковская карта (обработано Sage Pay)');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&sage_pay&oscom23&server" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">View Online Documentation</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E194E079-84A9-493C-AB9A-91CB362D3238&PromotionCode=osc3MF" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Visit Sage Pay Website</a>&nbsp;<a href="javascript:toggleDivBlock(\'sagePayInfo\');">(info)</a><span id="sagePayInfo" style="display: none;"><br /><i>Using the above link to signup at Sage Pay grants osCommerce a small financial bonus for referring a customer.</i></span>');

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_ADMIN_CURL', 'Этот модуль требует, чтобы cURL был включен в PHP и не будет загружаться, пока он не будет включен на этом веб-сервере.');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_ADMIN_CONFIGURATION', 'Этот модуль не будет загружаться, пока не будет настроен параметр «Имя для входа в систему». Пожалуйста, отредактируйте и настройте параметры этого модуля.');

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_TITLE', 'При обработке транзакции заказа произошла ошибка');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_ERROR_GENERAL', 'Пожалуйста, попробуйте еще раз, и если проблемы не устранены, попробуйте другой способ оплаты.');

  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_LINK_TITLE', 'Проверка API Server Connection');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_TITLE', 'API Server Connection Тест');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_GENERAL_TEXT', 'Проверка связи с сервером..');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_BUTTON_CLOSE', 'Закрыть');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_TIME', 'Время соединения:');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_SUCCESS', 'Успешно!');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_FAILED', 'Не удалось! Пожалуйста, просмотрите параметры проверки SSL-сертификата и попробуйте снова.');
  define('MODULE_PAYMENT_SAGE_PAY_SERVER_DIALOG_CONNECTION_ERROR', 'Произошла ошибка. Пожалуйста, обновите страницу, проверьте настройки и попробуйте снова.');
?>
