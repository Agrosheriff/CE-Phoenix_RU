<?php
/*
$Id$
osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com
Copyright (c) 2020 osCommerce
Translation to RU from Fredi. Updated 7/01/2020
Released under the GNU General Public License
*/

define('MODULE_ADMIN_CURRENCIES_CURRENCYLAYER_TITLE', 'Курс валют');
define('MODULE_ADMIN_CURRENCIES_CURRENCYLAYER_DESCRIPTION', 'Обновить курс валют через CurrencyLayer API.<div class="secWarning">Необходим ключ API с сайта https://currencylayer.com</div>');

// good
define('MODULE_ADMIN_CURRENCIES_CURRENCYLAYER_CURRENCIES_UPDATED', 'Курс валюты для %s успешно обновлен через Currency Layer.');

// error codes
define('CURRENCYLAYER_ERROR_404', 'Запрошен ресурс, который не существует.');
define('CURRENCYLAYER_ERROR_101', 'Не предоставлен ключ доступа или неверный ключ доступа.');
define('CURRENCYLAYER_ERROR_103', 'Запрошена несуществующая функция API.');
define('CURRENCYLAYER_ERROR_104', 'Достигнут или превышен тарифный план.');
define('CURRENCYLAYER_ERROR_105', 'План подписки не поддерживает запрошенную функцию API.');
define('CURRENCYLAYER_ERROR_106', 'Запрос не дал никаких результатов.');
define('CURRENCYLAYER_ERROR_102', 'Аккаунт не активен. Пожалуйста, свяжитесь со службой поддержки CurrencyLayer.');
define('CURRENCYLAYER_ERROR_201', 'Введена неверная исходная валюта.');
define('CURRENCYLAYER_ERROR_202', 'Введен один или несколько недействительных кодов валют.');
define('CURRENCYLAYER_ERROR_301', 'Вы не указали дату.[historical]');
define('CURRENCYLAYER_ERROR_302', 'Введена неверная дата. [historical, convert]');
define('CURRENCYLAYER_ERROR_401', 'Неверно введено \'от\' свойства. [convert]');
define('CURRENCYLAYER_ERROR_402', 'Неверно введено \'до\' свойства. [convert]');
define('CURRENCYLAYER_ERROR_403', 'Неверно введено \'количество\' или свойство. [convert]');
define('CURRENCYLAYER_ERROR_501', 'Не указано время [timeframe, change].');
define('CURRENCYLAYER_ERROR_502', 'Неверно введено  \'start_date\' свойство. [timeframe, change]');
define('CURRENCYLAYER_ERROR_503', 'Неверно введено \'end_date\' свойство. [timeframe, change]');
define('CURRENCYLAYER_ERROR_504', 'Неверно введено Time-Frame. [timeframe, change]');
define('CURRENCYLAYER_ERROR_505', 'Срок указанный пользователем, слишком длинный он превышает 365 дней.');
