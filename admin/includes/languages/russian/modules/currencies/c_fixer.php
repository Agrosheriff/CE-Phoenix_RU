<?php
/*
  Copyright (c) 2019, G Burton
  All rights reserved. 

  Translation to RU from Fredi. Updated 7/01/2020
*/

define('MODULE_ADMIN_CURRENCIES_FIXER_TITLE', 'Fixer');
define('MODULE_ADMIN_CURRENCIES_FIXER_DESCRIPTION', 'Обновление валют через API Fixer.<div class=\'secWarning\'>Требуется ключ API от https://fixer.io</div>');

// good
define('MODULE_ADMIN_CURRENCIES_FIXER_CURRENCIES_UPDATED', 'Обменный курс для %s был успешно обновлен через Fixer.');

// error codes
define('FIXER_ERROR_404', 'Запрошен ресурс, который не существует.');
define('FIXER_ERROR_101', 'Не предоставлен ключ доступа или неверный ключ доступа.');
define('FIXER_ERROR_103', 'Запрошена несуществующая функция API.');
define('FIXER_ERROR_104', 'Достигнут или превышен тарифный план.');
define('FIXER_ERROR_105', 'План подписки не поддерживает запрошенную функцию API.');
define('FIXER_ERROR_106', 'Запрос не дал никаких результатов.');
define('FIXER_ERROR_102', 'Аккаунт не активен. Пожалуйста, свяжитесь со службой поддержки CurrencyLayer.');
define('FIXER_ERROR_201', 'Введена неверная исходная валюта.');
define('FIXER_ERROR_202', 'Введен один или несколько недействительных кодов валют.');
define('FIXER_ERROR_301', 'Вы не указали дату.[historical]');
define('FIXER_ERROR_302', 'Неверно введена дата. [historical, convert]');
define('FIXER_ERROR_403', 'Неверно введено \'количество\' или свойство. [convert]');
define('FIXER_ERROR_501', 'Неверно указано время. [timeseries]');
define('FIXER_ERROR_502', 'Неверно введено \'start_date\' свойство. [timeseries, fluctuation]');
define('FIXER_ERROR_503', 'Введено неверно \'end_date\' свойство. [timeseries, fluctuation]');
define('FIXER_ERROR_504', 'Неверно введено timeframe. [timeseries, fluctuation]');
define('FIXER_ERROR_505', 'Срок, указанный пользователем, слишком длинный - превышает 365 дней.');
