<?php
/*
$Id$

osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com

Copyright (c) 2020 osCommerce
Translation to RU from Fredi. Updated 3/08/2020
Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Покупатели');
define('HEADING_TITLE_SEARCH', 'Поиск:');

define('TABLE_HEADING_NAME', 'Имя');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Запись Создана');
define('TABLE_HEADING_ACTION', 'Действие');
define('TEXT_DATE_ACCOUNT_CREATED', 'Запись Создана: %s');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Последнее Изменение: %s');
define('TEXT_INFO_DATE_LAST_LOGON', 'Последний Вход: %s');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Количество Входов: %s');
define('TEXT_INFO_COUNTRY', 'Страна: %s');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Количество Отзывов: %s');
define('TEXT_DELETE_INTRO', 'Вы действительно хотите удалить покупателя?');
define('TEXT_DELETE_REVIEWS', 'Удалить %s отзыв(ы)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Удалить покупателя');
define('TYPE_BELOW', 'Тип Ниже');
define('PLEASE_SELECT', 'Выберите что-то одно');

const PULL_DOWN_DEFAULT = PLEASE_SELECT;

const ERROR_PAGE_HAS_UNMET_REQUIREMENT = <<<'EOT'
Страница клиентов требует 'sortable_name', 'name', 'email_address', 'country_id', и 'id' модули данных клиента будут установлены. Отсутствует:
EOT;
