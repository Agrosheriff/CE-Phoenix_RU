<?php
/*
$Id$

osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com

Copyright (c) 2020 osCommerce
Translation to RU from Fredi. Updated 3/07/2020
Released under the GNU General Public License
*/

define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_TITLE', 'Sage Pay Прямая оплата');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_PUBLIC_TITLE', 'Кредитная карта (Processed by Sage Pay)');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_TEXT_DESCRIPTION', '<i class="fas fa-info-circle"></i>&nbsp;<a href="http://library.oscommerce.com/Package&en&sage_pay&oscom23&direct" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Посмотреть документацию</a><br><br><i class="fas fa-external-link-alt"></i>&nbsp;<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E194E079-84A9-493C-AB9A-91CB362D3238&PromotionCode=osc3MF" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Посетить Sage Pay Website</a>&nbsp;<a href="javascript:toggleDivBlock(\'sagePayInfo\');">(info)</a><span id="sagePayInfo" style="display: none;"><br><i>Использование вышеуказанной ссылки для регистрации в Sage Pay предоставляет osCommerce небольшой финансовый бонус за привлечение клиента.</i></span>');

define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_ADMIN_CURL', 'Этот модуль требует, чтобы cURL был включен в PHP и не будет загружаться, пока он не будет включен на этом веб-сервере.');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_ADMIN_CONFIGURATION', 'Этот модуль не будет загружаться, пока не будет настроен параметр «Имя для входа в систему». Пожалуйста, отредактируйте и настройте параметры этого модуля.');

define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_NEW', 'Ввести новую карту');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_TYPE', 'Тип карты:');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_OWNER', 'Имя на крие:');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_NUMBER', 'Номер карты:');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_STARTS', 'Дата выдачи:');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_STARTS_INFO', '(только для карт Maestro и American Express)');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_EXPIRES', 'Действительна до:');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_ISSUE_NUMBER', 'Issue номер:');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_ISSUE_NUMBER_INFO', '(только для карт Maestro)');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_CVC', 'Секретный код:');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_CREDIT_CARD_SAVE', 'Сохранить карту для следующих покупок?');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_TITLE', '3D Безопасная проверка');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_INFO', 'Пожалуйста, нажмите кнопку ПРОДОЛЖИТЬ, чтобы подтвердить подлинность вашей карты на веб-сайте вашего банка');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_3DAUTH_BUTTON', 'ПРОДОЛЖИТЬ');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_TITLE', 'Произошла ошибка при обработке вашей кредитной карты');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_GENERAL', 'Пожалуйста, попробуйте еще раз, и если проблемы не устранены, попробуйте другой способ оплаты.');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDTYPE', 'Тип карты не поддерживается. Пожалуйста, попробуйте еще раз с другой картой, и если проблемы не устранены, попробуйте другой способ оплаты.');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDOWNER', 'Для завершения заказа необходимо указать имя владельца карты. Пожалуйста, попробуйте еще раз, и если проблемы не устранены, попробуйте другой способ оплаты.');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDNUMBER', 'Номер карты не удалось обработать. Пожалуйста, попробуйте еще раз, и если проблемы не устранены, попробуйте другой способ оплаты.');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDSTART', 'Дата начала карты не может быть обработана. Пожалуйста, попробуйте еще раз, и если проблемы не устранены, попробуйте другой способ оплаты.');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDEXPIRES', 'Дата истечения срока действия карты не может быть обработана. Пожалуйста, попробуйте еще раз, и если проблемы не устранены, попробуйте другой способ оплаты.');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDISSUE', 'Номер выпуска карты не удалось обработать. Пожалуйста, попробуйте еще раз, и если проблемы не устранены, попробуйте другой способ оплаты.');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_ERROR_CARDCVC', 'Код безопасности карты не удалось обработать. Пожалуйста, попробуйте еще раз, и если проблемы не устранены, попробуйте другой способ оплаты.');

define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_LINK_TITLE', 'Проверка API Server Connection');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_TITLE', 'API Server Connection Тест');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_GENERAL_TEXT', 'Проверка связи с сервером..');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_BUTTON_CLOSE', 'Закрыть');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_TIME', 'Время соединения:');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_SUCCESS', 'Успешно!');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_FAILED', 'Не удалось! Пожалуйста, просмотрите параметры проверки SSL-сертификата и попробуйте снова.');
define('MODULE_PAYMENT_SAGE_PAY_DIRECT_DIALOG_CONNECTION_ERROR', 'Произошла ошибка. Пожалуйста, обновите страницу, проверьте настройки и попробуйте снова.');
?>
