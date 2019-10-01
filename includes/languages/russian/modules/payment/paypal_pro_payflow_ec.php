<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_TITLE', 'PayPal Express Checkout (Payflow Edition)');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_PUBLIC_TITLE', 'PayPal (включая кредитную или дебитную карта)');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&express_checkout_payflow" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Посмотреть документацию</a><br /><br /><img src="images/icon_popup.gif" border="0" />&nbsp;<a href="https://www.paypal.com" target="_blank" rel="noopener" style="text-decoration: underline; font-weight: bold;">Посетить PayPal Website</a>');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_DIRECT_MODULE', 'PayPal требует, чтобы модуль оплаты PayPal Payments Pro (Payflow Edition) был включен, если этот модуль должен быть активирован. Этот модуль не будет загружаться, пока не будет установлен модуль PayPal Payments Pro (Payflow Edition).');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_ADMIN_CURL', 'Этот модуль требует, чтобы cURL был включен в PHP и не будет загружаться, пока он не будет включен на этом веб-сервере.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_ADMIN_CONFIGURATION', 'Этот модуль не будет загружаться, пока не будут настроены параметры Vendor и Password. Пожалуйста, отредактируйте и настройте параметры этого модуля.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_BUTTON', 'Оплатить через PayPal');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_BUTTON', 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_TEXT_COMMENTS', 'Комментарии:');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_EMAIL_PASSWORD', 'Для вас автоматически была создана учетная запись со следующим адресом электронной почты и паролем:' . "\n\n" . 'Аккаунт магазина E-Mail адрес: %s' . "\n" . 'Аккаунт магазина Пароль: %s' . "\n\n");

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_GENERAL', 'Ошибка: общая проблема произошла с транзакцией. Пожалуйста, попробуйте еще раз.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_CFG_ERROR', 'Ошибка: ошибка конфигурации платежного модуля. Пожалуйста, проверьте учетные данные для входа.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_ADDRESS', 'Ошибка: не удалось найти адрес доставки, город, штат и почтовый индекс. Пожалуйста, попробуйте еще раз.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_DECLINED', 'Ошибка: эта транзакция была отклонена. Пожалуйста, попробуйте еще раз.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_EXPRESS_DISABLED', 'Ошибка: PayPal Express Checkout отключен для этого продавца. Пожалуйста, свяжитесь со службой поддержки PayPal.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_LINK_TITLE', 'Тест API Server соединение');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_TITLE', 'API Server Тест соединения');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_GENERAL_TEXT', 'Протестировать соединение с сервером..');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_BUTTON_CLOSE', 'Закрыть');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_TIME', 'Время соединения:');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_SUCCESS', 'Успешно!');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_FAILED', 'Не удалось! Пожалуйста, просмотрите параметры проверки SSL-сертификата и попробуйте снова.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_DIALOG_CONNECTION_ERROR', 'Произошла ошибка. Пожалуйста, обновите страницу, проверьте настройки и попробуйте снова.');

  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_ERROR_NO_SHIPPING_AVAILABLE_TO_SHIPPING_ADDRESS', 'Доставка в данный момент недоступна для выбранного адреса доставки. Пожалуйста, выберите или создайте новый адрес доставки, чтобы использовать его с покупкой.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_WARNING_LOCAL_LOGIN_REQUIRED', 'Пожалуйста, войдите в свой аккаунт, чтобы подтвердить заказ.');
  define('MODULE_PAYMENT_PAYPAL_PRO_PAYFLOW_EC_NOTICE_CHECKOUT_CONFIRMATION', 'Пожалуйста, просмотрите и подтвердите ваш заказ ниже. Ваш заказ не будет обработан, пока он не будет подтвержден.');
?>
