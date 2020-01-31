<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce
  Translation to RU from Fredi. Updated 31/01/2020
  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_STRIPE_TEXT_TITLE', 'Stripe');
  define('MODULE_PAYMENT_STRIPE_TEXT_PUBLIC_TITLE', 'Кредитная карта');
  define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&stripe&oscom23&stripe_js" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Посмотреть документацию</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://www.stripe.com" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Посетить Stripe Website</a>');

  define('MODULE_PAYMENT_STRIPE_ERROR_ADMIN_CURL', 'Этот модуль требует, чтобы cURL был включен в PHP и не будет загружаться, пока он не будет включен на этом веб-сервере.');
  define('MODULE_PAYMENT_STRIPE_ERROR_ADMIN_CONFIGURATION', 'Этот модуль не будет загружаться до тех пор, пока не будут настроены параметры публикуемого ключа и секретного ключа. Пожалуйста, отредактируйте и настройте параметры этого модуля.');

  define('MODULE_PAYMENT_STRIPE_CREDITCARD_NEW', 'Введите данные карты');
  define('MODULE_PAYMENT_STRIPE_CREDITCARD_OWNER', 'Имя:');
  define('MODULE_PAYMENT_STRIPE_CREDITCARD_NUMBER', 'Номер карты:');
  define('MODULE_PAYMENT_STRIPE_CREDITCARD_EXPIRY', 'Действительна до:');
  define('MODULE_PAYMENT_STRIPE_CREDITCARD_CVC', 'Секретный код:');
  define('MODULE_PAYMENT_STRIPE_CREDITCARD_SAVE', 'Сохранить карту для следующих покупок?');
  define('MODULE_PAYMENT_STRIPE_ERROR_TITLE', 'Произошла ошибка при обработке вашей кредитной карты');
  define('MODULE_PAYMENT_STRIPE_ERROR_GENERAL', 'Пожалуйста, попробуйте еще раз, и если проблемы не устранены, попробуйте другой способ оплаты.');
  define('MODULE_PAYMENT_STRIPE_ERROR_CARDSTORED', 'Сохраненная карта не найдена. Пожалуйста, попробуйте еще раз, и если проблемы не устранены, попробуйте другой способ оплаты.');

  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_LINK_TITLE', 'Тест API Server Connection');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_TITLE', 'API Server Connection Тест');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_GENERAL_TEXT', 'Проверка связи с сервером..');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_BUTTON_CLOSE', 'Закрыть');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_TIME', 'Время соединения:');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_SUCCESS', 'Успешно!');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_FAILED', 'Не удалось! Пожалуйста, просмотрите параметры проверки SSL-сертификата и попробуйте снова.');
  define('MODULE_PAYMENT_STRIPE_DIALOG_CONNECTION_ERROR', 'Произошла ошибка. Пожалуйста, обновите страницу, проверьте настройки и попробуйте снова.');
?>
