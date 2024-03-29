<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart
Translation to RU from Fredi. Updated 13/12/22

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
@setlocale(LC_ALL, ['ru_RU.UTF-8', 'ru_RU.UTF8', 'ru_ru']);

const DATE_FORMAT_SHORT = '%d/%m/%Y';  // this is used for strftime()
const DATE_FORMAT_LONG = '%A %d %B, %Y'; // this is used for strftime()
const DATE_FORMAT = 'd/m/Y'; // this is used for date()
const DATE_TIME_FORMAT = DATE_FORMAT_SHORT . ' %H:%M:%S';

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
const LANGUAGE_CURRENCY = 'USD';

// Global entries for the <html> tag
const HTML_PARAMS = '';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = STORE_NAME;

// text in includes/modules/downloads.php
const HEADER_TITLE_MY_ACCOUNT = 'Мой Кабинет';

// checkout procedure text
const CHECKOUT_BAR_DELIVERY = 'Адрес доставки';
const CHECKOUT_BAR_PAYMENT = 'Способ оплаты';
const CHECKOUT_BAR_CONFIRMATION = 'Подтверждение';

// pull down default text
const PULL_DOWN_DEFAULT = 'Выберите';

// javascript messages
const JS_ERROR = 'Ошибки при заполнении формы.\n\nИсправьте пожалуйста ошибки:\n\n';
const JS_ERROR_NO_PAYMENT_MODULE_SELECTED = '* Выберите метод оплаты для Вашего заказа.\n';

const ERROR_NO_PAYMENT_MODULE_SELECTED = 'Выберите пожалуйста метод оплаты для Вашего заказа.';
const IMAGE_BUTTON_ADD_ADDRESS = 'Добавить адрес';
const IMAGE_BUTTON_BACK = 'Назад';
const IMAGE_BUTTON_BUY_NOW = 'КУПИТЬ!'; 
const IMAGE_BUTTON_CHANGE_ADDRESS = 'Изменить адрес';
const IMAGE_BUTTON_CHECKOUT = 'Оформить заказ';
const IMAGE_BUTTON_CONFIRM_ORDER = 'Подтвердить Заказ';
const IMAGE_BUTTON_CONTINUE = 'Продолжить';
const IMAGE_BUTTON_DELETE = 'Удалить';
const IMAGE_BUTTON_LOGIN = 'Войти на сайт'; 
const IMAGE_BUTTON_IN_CART = 'Добавить в корзину';
const IMAGE_BUTTON_SEARCH = 'Искать';
const IMAGE_BUTTON_UPDATE = 'Обновить';
const IMAGE_BUTTON_UPDATE_PREFERENCES = 'Обновить настройки';

const SMALL_IMAGE_BUTTON_DELETE = 'Удалить';
const SMALL_IMAGE_BUTTON_EDIT = 'Изменить';
const SMALL_IMAGE_BUTTON_VIEW = 'Смотреть';
const SMALL_IMAGE_BUTTON_BUY = 'Купить';

const TEXT_CCVAL_ERROR_INVALID_DATE = 'Дата истечения срока для кредитной карты недействительна. Пожалуйста проверьте дату и попробуйте снова.';
const TEXT_CCVAL_ERROR_INVALID_NUMBER = 'Введенный номер кредитной карты недействителен. Пожалуйста, проверьте номер и попробуйте снова.';
const TEXT_CCVAL_ERROR_UNKNOWN_CARD = 'Первые четыре цифры введенного номера: %s. Если этот номер верен, мы не принимаем кредитные карты такого типа. Если это не так попробуйте пожалуйста еще раз.';

const TEXT_SEARCH_PLACEHOLDER = 'Поиск';

// message for required inputs
const FORM_REQUIRED_INFORMATION = '<i class="fas fa-asterisk text-danger"></i> Обязательная информация';
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

// product notifications
const PRODUCT_SUBSCRIBED = '%s добавлен в список уведомлений';
const PRODUCT_UNSUBSCRIBED = '%s удален из списока уведомлений';
const PRODUCT_ADDED = '%s добавлен в вашу корзину';
const PRODUCT_REMOVED = '%s удален из вашей корзины';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = '';

// noscript helper
const TEXT_NOSCRIPT = <<<'EOT'
<p><b>Скорее всего в вашем браузере отключён JavaScript.</b></p>
<p>Вы должны включить JavaScript в вашем браузере, чтобы использовать функциональные возможности этого сайта.<br>
<a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="nofollow">Нажмите здесь для получения инструкций по включению JavaScript в вашем браузере</a>.</p>
EOT;

// for new style internal pages
const LINK_TEXT_EDIT = '<small><a class="%s" href="%s">Редактировать</a></small>';
const SHIPPING_FA_ICON = '<i class="fas fa-shipping-fast fa-fw fa-3x float-right text-black-50"></i>';
const PAYMENT_FA_ICON = '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-right text-black-50"></i>';

const ENTRY_COMMENTS = 'Вы хотите сообщить свое мнение?';
const ENTRY_COMMENTS_PLACEHOLDER = 'Напишите комментарий здесь...';
