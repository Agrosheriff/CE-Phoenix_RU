<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart
Translation to RU from Fredi. Updated 3/12/22
Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Специальные предложения');
define('TABLE_HEADING_PRODUCTS', 'Товары');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Стоимость товара');
define('TABLE_HEADING_SPECIAL_PRICE', 'Цена для предложения');
define('TABLE_HEADING_STATUS', 'Состояние');
define('TABLE_HEADING_ACTION', 'Действие');
define('TEXT_SPECIALS_PRODUCT', 'Товар:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Специальная цена:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Действует До:');
const TEXT_SPECIALS_PRICE_TIP = <<<'EOT'
<p class="lead">Специальные примечания:</p>
<dl class="строка">
<dt class="col-sm-3">Проценты</dt><dd class="col-sm-9">Вы можете ввести процент для вычета в поле "Специальная цена", например: <strong>20% </strong></дд>
<dt class="col-sm-3">Десятичный разделитель</dt><dd class="col-sm-9">Если вы вводите новую цену, десятичным разделителем должен быть <strong>.</strong > (десятичная точка), пример: <strong>49.99</strong></dd>
<dt class="col-sm-3">Дата истечения срока действия</dt><dd class="col-sm-9">Оставьте дату истечения срока действия пустой, чтобы не было истечения срока действия</dd>
</dl>
EOT;
define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_NEW_PRICE', 'Новая Цена:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Исходная Цена:');
define('TEXT_INFO_PERCENTAGE', 'Процент:');
define('TEXT_INFO_EXPIRES_DATE', 'Действует до:');
define('TEXT_INFO_STATUS_CHANGE', 'Изменить статус:');
define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Удалить спец. предложение');
define('TEXT_INFO_DELETE_INTRO', 'Вы действительно хотите удалить специальную цену для товара?');
define('BUTTON_INSERT_SPECIAL', 'Добавить новое Специальное предложение');
