<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

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
  define('META_SEO_DESCRIPTION', 'This is the description of your site to be used in the META Description Element');
  /*
  keywords are USELESS unless you are selling into China and want to be listed in Baidu Search Engine
  */
  define('META_SEO_KEYWORDS', 'these, are, the, comma, separated, keywords, used in the META keywords Element');
}

