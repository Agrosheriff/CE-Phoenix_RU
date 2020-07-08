<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2019 osCommerce
Translate to russian from Fred (FFR)  www.oscomm.biz 10.08.2019 
Update to Phoenix  3.07.2020
  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
/// @setlocale(LC_ALL, ['en_US.UTF-8', 'en_US.UTF8', 'enu_usa']);
@setlocale(LC_ALL, ['ru_RU.UTF-8', 'ru_RU.UTF8', 'ru_ru']);

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_FORMAT', 'dd/mm/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
/*
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}
*/
// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'USD');

// Global entries for the <html> tag
define('HTML_PARAMS', ' dir="ltr" lang="ru"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', STORE_NAME);

// text in includes/modules/downloads.php
define('HEADER_TITLE_MY_ACCOUNT', 'Мой Кабинет');

// text in includes/application_top.php
/*
define('HEADER_TITLE_TOP', '<i class="fas fa-home"></i><span class="sr-only"> Главная</span>');
define('HEADER_TITLE_CATALOG', 'Каталог');
*/
// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Адрес доставки');
define('CHECKOUT_BAR_PAYMENT', 'Способ оплаты');
define('CHECKOUT_BAR_CONFIRMATION', 'Подтверждение');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Выберите');

// javascript messages
define('JS_ERROR', 'Ошибки при заполнении формы.\n\nИсправьте пожалуйста ошибки:\n\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Выберите метод оплаты для Вашего заказа.\n');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Выберите пожалуйста метод оплаты для Вашего заказа.');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Страницы:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Показано  <strong>%d</strong> - <strong>%d</strong> (всего  <strong>%d</strong> позиций)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Первая страница');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Предыдущая '); 
define('PREVNEXT_TITLE_NEXT_PAGE', 'Следующая страница');
define('PREVNEXT_TITLE_LAST_PAGE', 'Последняя страница');
define('PREVNEXT_TITLE_PAGE_NO', 'Страница %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Предыдущие %d страниц');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Следующие %d страниц');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;ПЕРВАЯ');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Предыдущая]');
define('PREVNEXT_BUTTON_NEXT', '[Следующая&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'ПОСЛЕДНЯЯ&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Добавить адрес');
define('IMAGE_BUTTON_BACK', 'Назад');
define('IMAGE_BUTTON_BUY_NOW', 'КУПИТЬ!'); 
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Изменить адрес');
define('IMAGE_BUTTON_CHECKOUT', 'Оформить заказ');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Подтвердить Заказ');
define('IMAGE_BUTTON_CONTINUE', 'Продолжить');
define('IMAGE_BUTTON_DELETE', 'Удалить');
define('IMAGE_BUTTON_LOGIN', 'Войти на сайт'); 
define('IMAGE_BUTTON_IN_CART', 'Добавить в корзину');
define('IMAGE_BUTTON_SEARCH', 'Искать');
define('IMAGE_BUTTON_UPDATE', 'Обновить');
define('IMAGE_BUTTON_UPDATE_PREFERENCES', 'Обновить настройки');

define('SMALL_IMAGE_BUTTON_DELETE', 'Удалить');
define('SMALL_IMAGE_BUTTON_EDIT', 'Изменить');
define('SMALL_IMAGE_BUTTON_VIEW', 'Смотреть');
define('SMALL_IMAGE_BUTTON_BUY', 'Купить');

define('ICON_ARROW_RIGHT', 'подробнее');

define('TEXT_SORT_PRODUCTS', 'Сортировка товаров ');
define('TEXT_DESCENDINGLY', 'по убыванию');
define('TEXT_ASCENDINGLY', 'по возрастанию');
define('TEXT_BY', 'Автор : '); 

define('TEXT_UNKNOWN_TAX_RATE', 'Налоговая ставка неизвестна');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Дата истечения срока для кредитной карты недействительна. Пожалуйста проверьте дату и попробуйте снова.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Введенный номер кредитной карты недействителен. Пожалуйста, проверьте номер и попробуйте снова.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Первые четыре цифры введенного номера: %s. Если этот номер верен, мы не принимаем кредитные карты такого типа. Если это не так попробуйте пожалуйста еще раз.');

// category views
define('TEXT_VIEW', 'Вид страницы: ');
define('TEXT_VIEW_LIST', ' Список');
define('TEXT_VIEW_GRID', ' Ячейки');

// search placeholder
define('TEXT_SEARCH_PLACEHOLDER','Поиск');

// message for required inputs
define('FORM_REQUIRED_INFORMATION', '<i class="fas fa-asterisk text-danger"></i> Обязательная информация');
define('FORM_REQUIRED_INPUT', '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>');

// grid/list
define('TEXT_SORT_BY', 'Сортировать по ');
// moved from index
define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Модель');
define('TABLE_HEADING_PRODUCTS', 'Наименование');
define('TABLE_HEADING_MANUFACTURER', 'Производитель');
define('TABLE_HEADING_QUANTITY', 'Количество');
define('TABLE_HEADING_PRICE', 'Цена');
define('TABLE_HEADING_WEIGHT', 'Вес');
define('TABLE_HEADING_BUY_NOW', 'Купить!');
define('TABLE_HEADING_LATEST_ADDED', 'Поступили в продвжу');
define('TABLE_HEADING_ORDERED', 'Самые популярные');

// product notifications
define('PRODUCT_SUBSCRIBED', '%s добавлен в список уведомлений');
define('PRODUCT_UNSUBSCRIBED', '%s удален из списока уведомлений');
define('PRODUCT_ADDED', '%s добавлен в вашу корзину');
define('PRODUCT_REMOVED', '%s удален из вашей корзины');

// bootstrap helper
define('MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION', '');

// noscript helper
const TEXT_NOSCRIPT = <<<'EOT'
<p><b>Скорее всего в вашем браузере отключён JavaScript.</b></p>
<p>Вы должны включить JavaScript в вашем браузере, чтобы использовать функциональные возможности этого сайта.<br>
<a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="nofollow">Нажмите здесь для получения инструкций по включению JavaScript в вашем браузере</a>.</p>
EOT;

// sitewide is-product
define('IS_PRODUCT_SHOW_PRICE', '%s');
define('IS_PRODUCT_SHOW_PRICE_SPECIAL', '<del>%s</del> <span class="text-danger">сейчас %s</span>');
define('IS_PRODUCT_BUTTON_BUY', '<i class="fas fa-shopping-cart"></i>');
define('IS_PRODUCT_BUTTON_VIEW', '<i class="fas fa-eye"></i> Смотреть');

// sitewide product listing
define('LISTING_SORT_DOWN', '<i class="fas fa-level-down-alt text-primary"></i>');
define('LISTING_SORT_UP', '<i class="fas fa-level-up-alt text-primary"></i>');
define('LISTING_SORT_UNSELECTED', '<i class="fas fa-level-up-alt text-black-50"></i>');
// for new style internal pages
define('LINK_TEXT_EDIT', '<small><a class="%s" href="%s">Редактировать</a></small>');
define('SHIPPING_FA_ICON', '<i class="fas fa-shipping-fast fa-fw fa-3x float-right text-black-50"></i>');
define('PAYMENT_FA_ICON', '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-right text-black-50"></i>');

define('ENTRY_COMMENTS', 'Вы хотите сообщить свое мнение?');
define('ENTRY_COMMENTS_PLACEHOLDER', 'Напишите комментарий здесь...');
define('TABLE_HEADING_OR', '-или-');
