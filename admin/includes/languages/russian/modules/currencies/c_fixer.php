<?php
/*
  Copyright (c) 2018, G Burton
  All rights reserved. 

  Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

  1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

  2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

  3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
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
define('FIXER_ERROR_301', 'Не указали дату.[historical]');
define('FIXER_ERROR_302', 'Введена неверная дата. [historical, convert]');
define('FIXER_ERROR_403', 'Введено недопустимое \'количество\' или свойство. [convert]');
define('FIXER_ERROR_501', 'Не указано время [timeframe, change].');
define('FIXER_ERROR_502', 'Введены неверно \'start_date\' свойство. [timeframe, change]');
define('FIXER_ERROR_503', 'Введены неверно \'end_date\' свойство. [timeframe, change]');
define('FIXER_ERROR_504', 'Введены неверно Time-Frame. [timeframe, change]');
define('FIXER_ERROR_505', 'Срок, указанный пользователем, слишком длинный - превышает 365 дней.');
