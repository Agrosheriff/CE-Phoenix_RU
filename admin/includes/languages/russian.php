<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2019 osCommerce FFR
Translate to russian from Fredi (FFR)  www.oscomm.biz 25.11.2019
    Updated 7/01/2020
  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'

setlocale(LC_ALL, array('ru_RU.UTF-8', 'ru_RU.UTF8', 'rur_ru'));
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE', ''); // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT', 'dd/mm/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  } else {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  }
}

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="ru"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', 'OSCOM CE Феникс Администрация');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Администратор');
define('HEADER_TITLE_SUPPORT_SITE', '<span class="border-bottom border-primary">Сайт поддержки</span>');
define('HEADER_TITLE_ONLINE_CATALOG', '<i class="fas fa-shopping-cart text-primary"></i> <span class="border-bottom border-primary">Мой магазин</span>');
define('HEADER_TITLE_PHOENIX_CLUB', '<span class="border-bottom border-primary">Клуб Феникс</span>');
define('HEADER_TITLE_CERTIFIED_ADDONS', '<span class="border-bottom border-primary">Сертифицированные дополнения</span>');
define('HEADER_TITLE_LOGOFF', '<i class="fas fa-lock"></i> <span class="border-bottom border-danger"> %s, безопасный выход</span>');

// text for gender
define('MALE', 'Мужчина');
define('FEMALE', 'Женщина');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// javascript messages
define('JS_ERROR', 'При заполнении формы Вы допустили ошибку!\nСделайте, пожалуйста, следующие исправления:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Новый атрибут товара должен иметь цену\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Новый атрибут товара должен иметь ценовой префикс\n');

define('JS_PRODUCTS_NAME', '* Для нового товара должно быть указано наименование\n');
define('JS_PRODUCTS_DESCRIPTION', '* Для нового товара должно быть указано описание\n');
define('JS_PRODUCTS_PRICE', '* Для нового товара должна быть указана цена\n');
define('JS_PRODUCTS_WEIGHT', '* Для нового товара должен быть указан вес\n');
define('JS_PRODUCTS_QUANTITY', '* Для нового товара должно быть указано количество\n');
define('JS_PRODUCTS_MODEL', '* Для нового товара должен быть указан код товара\n');
define('JS_PRODUCTS_IMAGE', '* Для нового товара должна быть картинка\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Для этого товара должна быть установлена новая цена\n');

define('JS_GENDER', '* \'Пол\' должен быть выбран.\n');
define('JS_FIRST_NAME', '* \'Имя\' должно содержать не менее ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' символов.\n');
define('JS_LAST_NAME', '*  \'Фамилия\' должна содержать не менее ' . ENTRY_LAST_NAME_MIN_LENGTH . ' символов.\n');
define('JS_DOB', '* \'День рождения\' должен иметь формат: xx/xx/xxxx (день/месяц/год).\n');
define('JS_EMAIL_ADDRESS', '* \'E-Mail адрес\' должен содержать не менее ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' символов.\n');
define('JS_ADDRESS', '* \'Адрес\' должен содержать не менее ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' символов.\n');
define('JS_POST_CODE', '* \'Индекс\' должен содержать не менее ' . ENTRY_POSTCODE_MIN_LENGTH . ' символов.\n');
define('JS_CITY', '* \'Город\' должен содержать не менее ' . ENTRY_CITY_MIN_LENGTH . ' символов.\n');
define('JS_STATE', '* \'Регион\' необходимо выбрать.\n');
define('JS_STATE_SELECT', '-- Выберите выше --');
define('JS_ZONE', '* \'Регион\' должен соответствовать выбранной стране.');
define('JS_COUNTRY', '* \'Страна\' должна быть выбрана.\n');
define('JS_TELEPHONE', '* \'Телефон\' должен содержать не менее ' . ENTRY_TELEPHONE_MIN_LENGTH . ' символов.\n');
define('JS_PASSWORD', '* \'Пароль\' и \'Подтверждение\' должны совпадать и содержать не менее ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Заказ номер %s не найден!');

define('CATEGORY_PERSONAL', 'Персональный');
define('CATEGORY_ADDRESS', 'Адрес');
define('CATEGORY_CONTACT', 'Для контакта');
define('CATEGORY_COMPANY', 'Компания');
define('CATEGORY_OPTIONS', 'Опции');

define('ENTRY_GENDER', 'Пол:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">обязательно</span>');
define('ENTRY_FIRST_NAME', 'Имя:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' символов</span>');
define('ENTRY_LAST_NAME', 'Фамилия:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_LAST_NAME_MIN_LENGTH . ' символов</span>');
define('ENTRY_DATE_OF_BIRTH', 'Дата рождения:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(пример 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail Адрес:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' символов</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Вы ввели неверный email адрес!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Данный email адрес уже зарегистрирован!</span>');
define('ENTRY_COMPANY', 'Название компании:');
define('ENTRY_STREET_ADDRESS', 'Адрес (улица, № дома и квартиры):');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' символов</span>');
define('ENTRY_SUBURB', 'Район:');
define('ENTRY_POST_CODE', 'Индекс:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_POSTCODE_MIN_LENGTH . ' символов</span>');
define('ENTRY_CITY', 'Город:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_CITY_MIN_LENGTH . ' символов</span>');
define('ENTRY_STATE', 'Регион:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">обязательно</span>');
define('ENTRY_COUNTRY', 'Страна:');
define('ENTRY_COUNTRY_ERROR', 'Вы должны выбрать страну из списка.');
define('ENTRY_TELEPHONE_NUMBER', 'Номер телефона:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_TELEPHONE_MIN_LENGTH . ' цифр</span>');
define('ENTRY_FAX_NUMBER', 'Факс:');
define('ENTRY_NEWSLETTER', 'Получать рассылку:');
define('ENTRY_NEWSLETTER_YES', 'Подписан');
define('ENTRY_NEWSLETTER_NO', 'Не подписан');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Отправить E-Mail');
define('IMAGE_BACK', 'Назад');
define('IMAGE_BACKUP', 'Рез. копия');
define('IMAGE_CANCEL', 'Отменить');
define('IMAGE_CONFIRM', 'Подтвердить');
define('IMAGE_COPY', 'Копировать');
define('IMAGE_COPY_TO', 'Копировать в');
define('IMAGE_DETAILS', 'Настроить');
define('IMAGE_DELETE', 'Удалить');
define('IMAGE_EDIT', 'Редактировать');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_EXPORT', 'Экспорт');
define('IMAGE_ICON_STATUS_GREEN', 'Активный');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Активизировать');
define('IMAGE_ICON_STATUS_RED', 'Неактивный');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Сделать неактивным');
define('IMAGE_ICON_INFO', 'Инфо страницы');
define('IMAGE_INSERT', 'Добавить');
define('IMAGE_LOCK', 'Замок');
define('IMAGE_MODULE_INSTALL', 'Установить модуль');
define('IMAGE_MODULE_REMOVE', 'Удалить модуль');
define('IMAGE_MOVE', 'Переместить');
define('IMAGE_NEW_CATEGORY', 'Новая категория');
define('IMAGE_NEW_COUNTRY', 'Новая страна');
define('IMAGE_NEW_CURRENCY', 'Новая валюта'); 
define('IMAGE_NEW_FILE', 'Новый файл');
define('IMAGE_NEW_FOLDER', 'Новая папка');
define('IMAGE_NEW_LANGUAGE', 'Новый язык');
define('IMAGE_NEW_NEWSLETTER', 'Новое письмо новостей');
define('IMAGE_NEW_PRODUCT', 'Новые товары');
define('IMAGE_NEW_TAX_CLASS', 'Новый налог'); 
define('IMAGE_NEW_TAX_RATE', 'Новая ставка налога');
define('IMAGE_NEW_TAX_ZONE', 'Новая налоговая зона');
define('IMAGE_NEW_ZONE', 'Новая зона');
define('IMAGE_ORDERS', 'Заказы');
define('IMAGE_ORDERS_INVOICE', 'Счёт-фактура');
define('IMAGE_ORDERS_PACKINGSLIP', 'Накладная');
define('IMAGE_PREVIEW', 'Предпросмотр');
define('IMAGE_RESTORE', 'Восстановить');
define('IMAGE_RESET', 'Сброс');
define('IMAGE_SAVE', 'Сохранить');
define('IMAGE_SEARCH', 'Искать');
define('IMAGE_SELECT', 'Выбрать');
define('IMAGE_SEND', 'Отправить');
define('IMAGE_SEND_EMAIL', 'Отправить Email');
define('IMAGE_UNLOCK', 'Разблокировать');
define('IMAGE_UPDATE', 'Обновить');
define('IMAGE_UPDATE_CURRENCIES', 'Скорректировать курсы валют');
define('IMAGE_UPLOAD', 'Загрузить');

define('ICON_CROSS', 'Недействительно');
define('ICON_CURRENT_FOLDER', 'Текущая директория');
define('ICON_DELETE', 'Удалить');
define('ICON_ERROR', 'Ошибка:');
define('ICON_FILE', 'Файл');
define('ICON_FILE_DOWNLOAD', 'Загрузка');
define('ICON_FOLDER', 'Папка');
define('ICON_LOCKED', 'Заблокировано');
define('ICON_PREVIOUS_LEVEL', 'Предыдущий уровень');
define('ICON_PREVIEW', 'Редактировать');
define('ICON_STATISTICS', 'Статистика');
define('ICON_SUCCESS', 'Выполнено');
define('ICON_TICK', 'Правильно');
define('ICON_UNLOCKED', 'Разблокировать');
define('ICON_WARNING', 'ВНИМАНИЕ');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Страница с %s по %d');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> стран)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> клиентов)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> валют)');
define('TEXT_DISPLAY_NUMBER_OF_ENTRIES', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> заходов)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> языковых модулей)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> производителей)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> рассылок)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> заказов)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> статуса)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> позиций)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> ожидаемых товаров)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> отзывов о товарах)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> специальных предложений)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> типов налогов)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> налоговых зон)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> ставок налогов)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Показано <b>%d</b> - <b>%d</b> (всего <b>%d</b> зон)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'по умолчанию');
define('TEXT_SET_DEFAULT', 'Установить по умолчанию');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Обязательно</span>');

define('TEXT_NONE', '--нет--');
define('TEXT_TOP', 'Начало');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Ошибка: Каталог не существует.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Ошибка: Каталог защищён от записи, установите необходимые права доступа.');
define('ERROR_FILE_NOT_SAVED', 'Ошибка: Файл не был загружен.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Ошибка: Нельзя загружать файлы этого типа.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Выполнено: Файл успешно загружен.');
define('WARNING_NO_FILE_UPLOADED', 'Предупреждение: Ни одного файла не загружено.');

// bootstrap helper
define('MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION', '<p>Ширина содержимого в ряду может составлять до 12 колонок.</p><p>12/12 = 100% ширины, 6/12 = 50% ширины, 4/12 = 33% ширины.</p><p>Общее количество всех столбцов в любом ряду должно равняться 12 (например: 3 поля по 4 столбца в каждом, 1 поле из 12 столбцов и т.д.).</p>');

// seo helper
define('PLACEHOLDER_COMMA_SEPARATION', 'Должны быть разделены запятыми');

// polls box text in includes/boxes/polls.php 
define('BOX_HEADING_POLLS', 'Опросы'); 
define('BOX_POLLS_POLLS', 'Менеджер Опросов'); 
define('BOX_POLLS_CONFIG','Конфигурация опросов');
