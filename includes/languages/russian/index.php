<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2019 osCommerce
  Translation to RU from Fredi. Updated 7/01/2020
  Released under the GNU General Public License
*/

define('TABLE_HEADING_NEW_PRODUCTS', 'Новые поступления %s');

define('TEXT_NO_PRODUCTS', 'В этой категории нет доступных товаров.');
define('TEXT_NUMBER_OF_PRODUCTS', 'Количество товаров: ');
define('TEXT_SHOW', '<strong>Показать:</strong>');
define('TEXT_BUY', 'Купить 1 \'');
define('TEXT_NOW', '\' сейчас');
define('TEXT_ALL_CATEGORIES', 'Все категории');
define('TEXT_ALL_MANUFACTURERS', 'Все производители');

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Название главной страницы');
  define('META_SEO_DESCRIPTION', 'Это описание вашего сайта для использования описания в META элементе');
  /*
  ключевые слова бесполезны, если вы не продаете в Китай и хотите быть в списке поисковой системы Baidu
  */
  define('META_SEO_KEYWORDS', 'это ключевые слова разделенные запятыми, используемые в элементе META ключевых слов');
}

