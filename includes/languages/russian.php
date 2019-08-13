<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce
Translate to russian from Fred (FFR)  www.oscomm.biz 10.08.2019
  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
// @setlocale(LC_ALL, array('en_US.UTF-8', 'en_US.UTF8', 'enu_usa'));
@setlocale(LC_ALL, array('ru_RU.UTF-8', 'ru_RU.UTF8', 'enr_ru'));

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE', 'ru'); // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT', 'dd/mm/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

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
define('HEADER_TITLE_TOP', '<i class="fas fa-home"></i><span class="sr-only"> Главная</span>');
define('HEADER_TITLE_CATALOG', 'Каталог');

// text for gender
define('MALE', 'М<span class="hidden-xs">ужской</span>');
define('FEMALE', 'Ж<span class="hidden-xs">енский</span>');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Адрес доставки');
define('CHECKOUT_BAR_PAYMENT', 'Способ оплаты');
define('CHECKOUT_BAR_CONFIRMATION', 'Подтверждение');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Выберите');

// javascript messages
define('JS_ERROR', 'Ошибки при заполнении формы!\n\nИсправьте пожалуйста:\n\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Выберите метод оплаты для Вашего заказа.\n');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', '* Выберите, пожалуйста, метод оплаты для Вашего заказа.');

define('ENTRY_COMPANY', 'Название компании:'); 
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Ваш пол:'); 
define('ENTRY_GENDER_ERROR', 'Укажите Ваш пол, пожалуйста.'); 
define('ENTRY_GENDER_TEXT', '');
define('ENTRY_FIRST_NAME', 'Ваше Имя:');
define('ENTRY_FIRST_NAME_ERROR', 'Ваше Имя должно содержать не менее ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' букв.');
define('ENTRY_FIRST_NAME_TEXT', '');
define('ENTRY_LAST_NAME', 'Ваша Фамилия:');
define('ENTRY_LAST_NAME_ERROR', 'Ваша Фамилия должна содержать не менее ' . ENTRY_LAST_NAME_MIN_LENGTH . ' букв.');
define('ENTRY_LAST_NAME_TEXT', '');
define('ENTRY_DATE_OF_BIRTH', 'Дата рождения:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Дату рождения необходимо вводить в следующем формате: DD/MM/YYYY (пример: 05/21/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (например: 05/21/1970)');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail адрес');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Ваш E-Mail адрес должен содержать как минимум ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' символов.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Ваш E-Mail адрес указан неверно, попробуйте ещё раз, пожалуйста.'); 
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Введённый Вами E-Mail уже зарегистрирован на сайте. Попробуйте войти в магазин используя этот адрес или создайте новый акаунт с другим E-Mail адресом.'); 
define('ENTRY_EMAIL_ADDRESS_TEXT', '');
define('ENTRY_STREET_ADDRESS', 'Улица, номер дома:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Название Улицы должно содержать не менее ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' символов.');
define('ENTRY_STREET_ADDRESS_TEXT', '');
define('ENTRY_SUBURB', 'Район:');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Почтовый индекс:');
define('ENTRY_POST_CODE_ERROR', 'Почтовый индекс должен содержать не менее ' . ENTRY_POSTCODE_MIN_LENGTH . ' цифр.');
define('ENTRY_POST_CODE_TEXT', '');
define('ENTRY_CITY', 'Город, поселок, село:');
define('ENTRY_CITY_ERROR', 'Название Города должно содержать не менее ' . ENTRY_CITY_MIN_LENGTH . ' букв.');
define('ENTRY_CITY_TEXT', '');
define('ENTRY_NAME_TEXT', '');
define('ENTRY_STATE', 'Область, край, регион:');
define('ENTRY_STATE_ERROR', 'Название Области должно содержать не менее ' . ENTRY_STATE_MIN_LENGTH . ' букв.');
define('ENTRY_STATE_ERROR_SELECT', 'Пожалуйста выберите Ваш край, область или регион из выпадающего списка.');
define('ENTRY_STATE_TEXT', '');
define('ENTRY_COUNTRY', 'Страна:');
define('ENTRY_COUNTRY_ERROR', 'Выберите Вашу страну из выпадающего списка стран.');
define('ENTRY_COUNTRY_TEXT', '');
define('ENTRY_TELEPHONE_NUMBER', 'Телефон:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Номер Телефона должен содержать не менее ' . ENTRY_TELEPHONE_MIN_LENGTH . ' цифр.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '');
define('ENTRY_FAX_NUMBER', 'Телефон (альтернативный или факс):'); 
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Новости магазина:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Подписаться');
define('ENTRY_NEWSLETTER_NO', 'Отказаться от подписки');
define('ENTRY_PASSWORD', 'Пароль:');
define('ENTRY_PASSWORD_ERROR', 'Ваш пароль должен содержать как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Подтверждение не совпадает с паролем.');
define('ENTRY_PASSWORD_TEXT', ' Пароль');
define('ENTRY_PASSWORD_CONFIRMATION', 'Подтвердите пароль:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '');
define('ENTRY_PASSWORD_CURRENT', 'Текущий пароль:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Пароль должен содержать минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов.');
define('ENTRY_PASSWORD_NEW', 'Новый пароль:');
define('ENTRY_PASSWORD_NEW_TEXT', '');
define('ENTRY_PASSWORD_NEW_ERROR', 'Ваш новый пароль должен содержать минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Подтверждение не совпадает с новым паролем.');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Страницы:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Показано  <strong>%d</strong> - <strong>%d</strong> (всего  <strong>%d</strong> позиций)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Показано  <strong>%d</strong> - <strong>%d</strong> (всего  <strong>%d</strong> отзывов)');

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
define('IMAGE_BUTTON_WRITE_REVIEW', 'Написать отзыв');

define('SMALL_IMAGE_BUTTON_DELETE', 'Удалить');
define('SMALL_IMAGE_BUTTON_EDIT', 'Изменить');
define('SMALL_IMAGE_BUTTON_VIEW', '<i class="fas fa-eye"></i>Смотреть');
define('SMALL_IMAGE_BUTTON_BUY', 'Купить');

define('ICON_ARROW_RIGHT', 'подробнее');

define('TEXT_SORT_PRODUCTS', 'Сортировка товаров ');
define('TEXT_DESCENDINGLY', 'по убыванию');
define('TEXT_ASCENDINGLY', 'по возрастанию');
define('TEXT_BY', 'Автор : '); 

define('TEXT_NO_REVIEWS', 'Еще нет отзывов об этом товаре. Вы можете стать первым.');

define('TEXT_UNKNOWN_TAX_RATE', 'Налоговая ставка неизвестна');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Дата истечения срока для кредитной карты недействительна. Пожалуйста проверьте дату и попробуйте снова.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Введенный номер кредитной карты недействителен. Пожалуйста, проверьте номер и попробуйте снова.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Первые четыре цифры введенного номера: %s. Если этот номер верен, мы не принимаем кредитные карты такого типа. Если это не так, пожалуйста, попробуйте еще раз.');

// category views
define('TEXT_VIEW', 'Вид: ');
define('TEXT_VIEW_LIST', ' Список');
define('TEXT_VIEW_GRID', ' Ячейки');

// search placeholder
define('TEXT_SEARCH_PLACEHOLDER','Поиск');

// message for required inputs
define('FORM_REQUIRED_INFORMATION', '<span class="fas fa-asterisk text-danger"></span> Обязательная информация');
define('FORM_REQUIRED_INPUT', '<span class="form-control-feedback text-danger"><span class="fas fa-asterisk"></span></span>');

// reviews
define('REVIEWS_TEXT_RATED', 'Оценка %s от <cite title="%s">%s</cite>');
define('REVIEWS_TEXT_AVERAGE', 'Средняя оценка на основе %s отзывов %s');
define('REVIEWS_TEXT_TITLE', 'Что говорят наши покупатели...');

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
define('TABLE_HEADING_LATEST_ADDED', 'Новинки');

// product notifications
define('PRODUCT_SUBSCRIBED', '%s добавлен в список уведомлений');
define('PRODUCT_UNSUBSCRIBED', '%s удален из списока уведомлений');
define('PRODUCT_ADDED', '%s добавлен в вашу корзину');
define('PRODUCT_REMOVED', '%s удален из вашей корзины');

// bootstrap helper
define('MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION', '');

// noscript helper
define('TEXT_NOSCRIPT', '<p><strong>Скорее всего в вашем браузере отключён JavaScript.</strong></p><p>Вы должны включить JavaScript в вашем браузере, чтобы использовать функциональные возможности этого сайта.<br><a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="nofollow">Нажмите здесь для получения инструкций по включению JavaScript в вашем браузере</a>.</p>');
