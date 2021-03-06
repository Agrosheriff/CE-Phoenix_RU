<?php
/*
$Id$

osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com

Copyright (c) 2020 osCommerce
Translation to RU from Fredi. Updated 3/07/2020
Released under the GNU General Public License
*/

define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_TITLE', 'Sage Pay Сервер');
define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_PUBLIC_TITLE', 'Кредитная карта или банковская карта (обработано Sage Pay)');
define('MODULE_PAYMENT_SAGE_PAY_SERVER_TEXT_DESCRIPTION', '<i class="fas fa-info-circle"></i>&nbsp;<a href="http://library.oscommerce.com/Package&en&sage_pay&oscom23&server" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Посмотреть документацию</a><br><br><i class="fas fa-external-link-alt"></i>&nbsp;<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E194E079-84A9-493C-AB9A-91CB362D3238&PromotionCode=osc3MF" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Посетить сайт Sage Pay</a>&nbsp;<a href="javascript:toggleDivBlock(\'sagePayInfo\');">(info)</a><span id="sagePayInfo" style="display: none;"><br><i>Использование вышеуказанной ссылки для регистрации в Sage Pay предоставляет osCommerce небольшой финансовый бонус за привлечение клиента.</i></span>');

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
