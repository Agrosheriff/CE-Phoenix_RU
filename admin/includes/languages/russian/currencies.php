<?php
/*
$Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart
Translation to RU from Fredi. Updated 3/12/22
Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Валюты');

define('TABLE_HEADING_CURRENCY_NAME', 'Валюта');
define('TABLE_HEADING_CURRENCY_CODES', 'Код');
define('TABLE_HEADING_CURRENCY_VALUE', 'Величина');
define('TABLE_HEADING_ACTION', 'Действие');
define('TEXT_INFO_EDIT_INTRO', 'Внесите необходимые изменения');
define('TEXT_INFO_COMMON_CURRENCIES', '-- Общие валюты --');
define('TEXT_INFO_CURRENCY_TITLE', 'Название:');
define('TEXT_INFO_CURRENCY_CODE', 'Код:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Символ слева: %s');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Символ справа: %s');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Десятичный знак: %s');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Разделитель тысяч: %s');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Десятичные порядки: %s');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Последний раз скорректировано: %s');
define('TEXT_INFO_CURRENCY_VALUE', 'Величина: %s');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Пример: %s =  %s');
define('TEXT_INFO_INSERT_INTRO', 'Введите данные для новой валюты');
define('TEXT_INFO_DELETE_INTRO', 'Вы действительно хотите удалить эту валюту?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Новая Валюта');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Изменить Валюту');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Удалить Валюту');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (эту валюту нужно корректировать вручную)');
define('TEXT_INFO_CURRENCY_UPDATED', 'Обменный курс для %s (%s) успешно обновлён с помощью %s.');
define('ERROR_REMOVE_DEFAULT_CURRENCY', '<b>Ошибка:</b> Валюта, установленная по умолчанию не может быть удалена. Определите другую валюту по умолчанию и попробуйте снова.');
define('ERROR_CURRENCY_INVALID', '<b>Ошибка:</b> Обменный курс для %s (%s) не был обновлён с помощью %s. Вы правильно указали код валюты? Чтобы обновить обменный курс, Вы должны быть подключены к интернету.');
define('WARNING_PRIMARY_SERVER_FAILED', '<b>Предупреждение:</b> Не удалось подключиться к серверу (%s) и обновить обменный курс для %s (%s) - попробуйте подключиться к другому серверу. Чтобы обновить обменный курс, Вы должны быть подключены к интернету.');
define('ERROR_INSTALL_CURRENCY_CONVERTER', 'У вас не установлен модуль конвертации валют.  <a class="alert-link font-weight-bold" href="' . tep_href_link('modules.php', 'set=currencies') . '">Установить</a>');
