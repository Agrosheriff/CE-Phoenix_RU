<?php
/*
$Id$
osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com
Copyright (c) 2020 osCommerce
Translation to RU from Fredi. Updated 7/01/2020
Released under the GNU General Public License
*/

  define('MODULE_NAVBAR_SHOPPING_CART_TITLE', 'Корзина');
  define('MODULE_NAVBAR_SHOPPING_CART_DESCRIPTION', 'Показать Корзину в Панели навигации');
  
  define('MODULE_NAVBAR_SHOPPING_CART_CONTENTS', '<i title="Корзина" class="fas fa-shopping-cart fa-fw"></i><span class="d-inline d-sm-none d-md-inline">Товаров в корзине: %1$s</span> <span class="caret"></span>');
  define('MODULE_NAVBAR_SHOPPING_CART_NO_CONTENTS', '<i class="fas fa-shopping-cart fa-fw"></i> Корзина пуста');
  define('MODULE_NAVBAR_SHOPPING_CART_HAS_CONTENTS', '%s штук, %s');
  define('MODULE_NAVBAR_SHOPPING_CART_VIEW_CART', 'Показать корзину');
  define('MODULE_NAVBAR_SHOPPING_CART_CHECKOUT', '<i class="fas fa-angle-right fa-fw"></i> Купить');

  define('MODULE_NAVBAR_SHOPPING_CART_PRODUCT', '<a class="dropdown-item" href="' . tep_href_link('product_info.php', 'products_id=%s') . '">%s x %s</a>');

