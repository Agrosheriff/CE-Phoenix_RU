<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce FFR
Translate to russian from Fredi (FFR)  www.oscomm.biz 25.11.2019
    Updated 25/04/2020
  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'

setlocale(LC_ALL, array('ru_RU.UTF-8', 'ru_RU.UTF8', 'ru_ru'));
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE', ''); // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT', 'dd/mm/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="ru"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', 'AGROSHERIFF Администрация');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Администратор');
define('HEADER_TITLE_SUPPORT_SITE', '<span class="border-bottom border-primary">Сайт поддержки</span>');
define('HEADER_TITLE_ONLINE_CATALOG', '<i class="fas fa-shopping-cart text-primary"></i> <span class="border-bottom border-primary">Мой магазин</span>');
define('HEADER_TITLE_PHOENIX_CLUB', '<span class="border-bottom border-primary">Клуб Феникс</span>');
define('HEADER_TITLE_CERTIFIED_ADDONS', '<span class="border-bottom border-primary">Сертифицированные дополнения</span>');
define('HEADER_TITLE_LOGOFF', '<i class="fas fa-lock"></i> <span class="border-bottom border-danger"> %s, безопасный выход</span>');

// javascript messages
define('JS_STATE_SELECT', '-- Выберите выше --');

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
const IMAGE_NEW_CUSTOMER_DATA_GROUP = 'Новая группа данных клиентов';
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
define('ICON_TOPICS', 'Папка');
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
const TEXT_DISPLAY_NUMBER_OF_CUSTOMER_DATA_GROUPS = 'Показано <b>%d</b> до <b>%d</b> (от <b>%d</b> группы данных клиентов)';
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

define('TEXT_NONE', '--нет--');
define('TEXT_TOP', 'Начало');
const TEXT_ALL = 'Полностью';

define('ERROR_DESTINATION_DOES_NOT_EXIST', '<b>Ошибка:</b> Каталог не существует.');
define('ERROR_DESTINATION_NOT_WRITEABLE', '<b>Ошибка:</b> Каталог защищён от записи, установите необходимые права доступа.');
define('ERROR_FILE_NOT_SAVED', '<b>Ошибка:</b> Файл не был загружен.');
define('ERROR_FILETYPE_NOT_ALLOWED', '<b>Ошибка:</b> Нельзя загружать файлы этого типа.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '<b>Выполнено:</b> Файл успешно загружен.');
define('WARNING_NO_FILE_UPLOADED', '<b>Предупреждение:</b> Ни одного файла не загружено.');

// bootstrap helper
define('MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION', '<p>Ширина содержимого в ряду может составлять до 12 колонок.</p><p>12/12 = 100% ширины, 6/12 = 50% ширины, 4/12 = 33% ширины.</p><p>Общее количество всех столбцов в любом ряду должно равняться 12 (например: 3 поля по 4 столбца в каждом, 1 поле из 12 столбцов и т.д.).</p>');

// seo helper
define('PLACEHOLDER_COMMA_SEPARATION', 'Должны быть разделены запятыми');

// message for required inputs
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

// polls box text in includes/boxes/polls.php 
define('BOX_HEADING_POLLS', 'Опросы'); 
define('BOX_POLLS_POLLS', 'Менеджер Опросов'); 
define('BOX_POLLS_CONFIG','Конфигурация опросов');

define('TEXT_DISPLAY_NUMBER_OF_ADMIN_GROUPSS', 'Показать <b>%d</b> до <b>%d</b> (от <b>%d</b> группы администраторов)');
define('BOX_CONFIGURATION_ADMINISTRATOR_GROUP', 'Группы администраторов');