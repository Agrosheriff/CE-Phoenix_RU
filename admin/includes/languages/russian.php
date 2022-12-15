<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart
Translation to RU from Fredi. Updated 13/12/22

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
define('TITLE', 'AGROSHERIFF АДМИН');

// header text in includes/hooks/admin/siteWide/hMenu.php
const HEADER_TITLE_ONLINE_CATALOG = '<i class="fas fa-shopping-cart mr-1 text-primary" aria-hidden="true"></i><span class="border-bottom border-primary">Мой магазин</span>';
const HEADER_TITLE_PHOENIX_CLUB = '<i class="fas fa-question-circle mr-1 text-primary" aria-hidden="true"></i><span class="border-bottom border-primary">Помощь</span>';
const HEADER_TITLE_PHOENIX_WIKI = '<i class="fas fa-school mr-1 text-primary" aria-hidden="true"></i><span class="border-bottom border-primary">User Guide</span>';
const HEADER_TITLE_CERTIFIED_DEVELOPERS = '<i class="fas fa-laptop-code mr-1 text-primary" aria-hidden="true"></i><span class="border-bottom border-primary">Certified Developers</span>';
const HEADER_TITLE_CERTIFIED_ADDONS = '<i class="fas fa-folder-plus mr-1 text-primary" aria-hidden="true"></i><span class="border-bottom border-primary">Add-ons</span>';
const HEADER_TITLE_LOGOFF = '<i class="fas fa-lock mr-1" aria-hidden="true"></i><span class="border-bottom border-danger">%s, безопасный выход</span>';

// images
define('IMAGE_BACK', 'Назад');
define('IMAGE_BACKUP', 'Рез. копия');
define('IMAGE_CANCEL', 'Отменить');
define('IMAGE_COPY', 'Копировать');
define('IMAGE_COPY_TO', 'Копировать в');
define('IMAGE_DETAILS', 'Настроить');
define('IMAGE_DELETE', 'Удалить');
define('IMAGE_EDIT', 'Редактировать');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_EXPORT', 'Экспорт');
define('IMAGE_INSERT', 'Добавить');
define('IMAGE_LOCK', 'Замок');
define('IMAGE_MODULE_INSTALL', 'Установить модуль');
define('IMAGE_MODULE_REMOVE', 'Удалить модуль');
define('IMAGE_MOVE', 'Переместить');
define('IMAGE_NEW_CATEGORY', 'Новая категория');
define('IMAGE_NEW_COUNTRY', 'Новая страна');
define('IMAGE_NEW_CURRENCY', 'Новая валюта'); 
const IMAGE_NEW_CUSTOMER_DATA_GROUP = 'Новая группа данных клиентов';
define('IMAGE_NEW_LANGUAGE', 'Новый язык');
define('IMAGE_NEW_NEWSLETTER', 'Новое письмо новостей');
define('IMAGE_NEW_PRODUCT', 'Новые товары');
define('IMAGE_NEW_TAX_CLASS', 'Новый налог'); 
define('IMAGE_NEW_TAX_RATE', 'Новая ставка налога');
define('IMAGE_NEW_ZONE', 'Новая зона');
define('IMAGE_ORDERS', 'Заказы');
define('IMAGE_ORDERS_INVOICE', 'Счёт-фактура');
define('IMAGE_ORDERS_PACKINGSLIP', 'Накладная');
define('IMAGE_PREVIEW', 'Предпросмотр');
define('IMAGE_RESTORE', 'Восстановить');
define('IMAGE_RESET', 'Сброс');
define('IMAGE_SAVE', 'Сохранить');
define('IMAGE_SELECT', 'Выбрать');
define('IMAGE_SEND', 'Отправить');
define('IMAGE_SEND_EMAIL', 'Отправить Email');
define('IMAGE_UNLOCK', 'Разблокировать');
define('IMAGE_UPDATE', 'Обновить');
define('IMAGE_UPDATE_CURRENCIES', 'Скорректировать курсы валют');
define('IMAGE_UPLOAD', 'Загрузить');
define('ICON_FILE', 'Файл');
define('ICON_FILE_DOWNLOAD', 'Загрузка');

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

const SPLIT_PAGES = 'Выбрать страницу';
define('TEXT_DEFAULT', 'по умолчанию');
define('TEXT_SET_DEFAULT', 'Установить по умолчанию');

define('TEXT_NONE', '--нет--');
define('TEXT_TOP', 'Начало');
const TEXT_ALL = 'Полностью';

define('ERROR_DESTINATION_DOES_NOT_EXIST', '<b>Ошибка:</b> Каталог не существует.');
define('ERROR_DESTINATION_NOT_WRITEABLE', '<b>Ошибка:</b> Каталог защищён от записи, установите необходимые права доступа.');
define('ERROR_FILE_NOT_SAVED', '<b>Ошибка:</b> Файл не был загружен и сохранен.');
define('ERROR_FILETYPE_NOT_ALLOWED', '<b>Ошибка:</b> Нельзя загружать файлы этого типа.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '<b>Выполнено:</b> Файл успешно загружен.');
define('WARNING_NO_FILE_UPLOADED', '<b>Предупреждение:</b> Ни одного файла не загружено.');

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = <<<'EOT'
<p>Ширина содержимого может быть не более 12 на столбик в строке.</p>
<p>12/12 = 100 % ширины, 6/12 = 50 % ширины, 4/12 = 33 % ширины.</p>
<p>Сумма всех столбцов в любой строке должна быть равна 12 (например, 3 поля по 4 столбца в каждом, 1 поле по 12 столбцов и т. д.).</p>
EOT;

// seo helper
define('PLACEHOLDER_COMMA_SEPARATION', 'Должны быть разделены запятыми');

// message for required inputs
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

const TEXT_IMAGE_NON_EXISTENT = 'ИЗОБРАЖЕНИЕ НЕ СУЩЕСТВУЕТ';
