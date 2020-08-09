<?php
/*
$Id$

osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com

Copyright (c) 2020 osCommerce
Translation to RU from Fredi. Updated 3/08/2020
Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Категории/Товары');
define('HEADING_TITLE_SEARCH', 'Поиск:');
define('HEADING_TITLE_GOTO', 'Перейти в:');

define('SECTION_HEADING_GENERAL', '<i class="fas fa-language fa-fw mr-1"></i>Языки');
define('SECTION_HEADING_DATA', '<i class="fas fa-box-open fa-fw mr-1"></i>Спецификация товара');
define('SECTION_HEADING_IMAGES', '<i class="fas fa-images fa-fw mr-1"></i>Картинки товара');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Категории/Товары');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_STATUS', 'Статус');
define('TEXT_NEW_PRODUCT', 'Новые Товары в %s');
define('TEXT_EXISTING_PRODUCT', 'Редактировать товар в категории %s');
define('TEXT_CATEGORIES', 'Категории:');
define('TEXT_PRODUCTS', 'Товаров на странице:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Стоимость товара:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Класс Налогов:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Средняя Оценка:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Количество:');
define('TEXT_DATE_ADDED', 'Дата Добавления:');
define('TEXT_DATE_AVAILABLE', 'Доступно с:');
define('TEXT_LAST_MODIFIED', 'Последнее Изменение:');
define('TEXT_IMAGE_NONEXISTENT', 'ИЗОБРАЖЕНИЕ не найдено');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Добавьте, пожалуйста, новую категорию или товар на этом уровне');
define('TEXT_PRODUCT_DATE_ADDED', 'Этот товар был добавлен');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Этот товар будет в продаже');
define('TEXT_EDIT_INTRO', 'Внесите необходимые изменения');
define('TEXT_EDIT_CATEGORIES_NAME', 'Название категории:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Картинка для категории:');
define('TEXT_EDIT_SORT_ORDER', 'Сортировка:');
define('TEXT_INFO_COPY_TO_INTRO', 'Выберите, пожалуйста, новую категорию, куда Вы хотите скопировать этот товар');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Текущие категории:');
define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Новая Категория');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Изменить Категорию');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Удалить Категорию');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Перенести Категорию');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Удалить Товар');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Перенести Товар');
define('TEXT_INFO_HEADING_COPY_TO', 'Копировать в');
define('TEXT_DELETE_CATEGORY_INTRO', 'Вы действительно хотите удалить эту категорию?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Вы действительно хотите удалить этот товар?');
define('TEXT_DELETE_WARNING', '<b>ВНИМАНИЕ:</b> Есть подкатегории и / или продукты, все еще связанные с этой категорией!');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Пожалуйста, выберите категорию для перемещения <b>%s</b> в');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Пожалуйста, выберите категорию для перемещения <b>%s</b> в');
define('TEXT_MOVE', 'Переместить <b>%s</b> в:');
define('TEXT_NEW_CATEGORY_INTRO', 'Пожалуйста, заполните следующую информацию для новой категории');
define('TEXT_CATEGORIES_NAME', 'Название Категории:');
define('TEXT_CATEGORIES_IMAGE', 'Картинка:');
define('TEXT_SORT_ORDER', 'Сортировка:');
define('TEXT_PRODUCTS_STATUS', 'Статус Товара:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Дата Поступления:');
define('TEXT_PRODUCTS_DATE_AVAILABLE_HELP', 'DD-MM-YYYY');
define('TEXT_PRODUCT_AVAILABLE', 'В наличии');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Нет в наличии');
define('TEXT_PRODUCTS_MANUFACTURER', 'Производитель:');
define('TEXT_PRODUCTS_NAME', 'Название:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Описание товара:');
define('TEXT_PRODUCTS_QUANTITY', 'Количество товара на складе:');
define('TEXT_PRODUCTS_MODEL', 'Код товара:');
define('TEXT_PRODUCTS_IMAGE', 'Картинка Товара:');
define('TEXT_PRODUCTS_MAIN_IMAGE', 'Основная картинка');
define('TEXT_PRODUCTS_LARGE_IMAGE', 'Большая картинка');
define('TEXT_PRODUCTS_LARGE_IMAGE_HTML_CONTENT', 'HTML-контент');
define('TEXT_PRODUCTS_ADD_LARGE_IMAGE', '<i class="fas fa-plus mr-2"></i>Добавить картинку в галерею');
define('TEXT_PRODUCTS_URL', 'URL товара:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', 'включая http:// или https://');
define('TEXT_PRODUCTS_PRICE_NET', 'Цена товара (Без налога):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Цена товара (С налогом):');
define('TEXT_PRODUCTS_WEIGHT', 'Вес товара:');
define('EMPTY_CATEGORY', 'Пустая Категория');
define('TEXT_HOW_TO_COPY', 'Метод Копирования:');
define('TEXT_COPY_AS_LINK', 'Ссылка на товар');
define('TEXT_COPY_AS_DUPLICATE', 'Дублировать товар');
define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Ошибка: Нельзя делать ссылку на товар в той же категории.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Ошибка: Каталог с картинками имеет неверные права доступа: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Каталог с картинками отсутствует: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Ошибка: Категория не может быть перенесена в подкатегорию.');
define('TEXT_CATEGORIES_DESCRIPTION', 'Описание категории:<br>показано на странице категории');
define('TEXT_EDIT_CATEGORIES_DESCRIPTION', 'Редактировать описание категории:');
define('TEXT_CATEGORIES_SEO_DESCRIPTION', 'Категории. Meta Description для SEO:<br>Добавить &lt;описание&gt; Meta Element.');
define('TEXT_EDIT_CATEGORIES_SEO_DESCRIPTION', 'Редактировать Категории Meta Description для SEO:<br>Изменить &lt;description&gt; Meta Element.');
 
const TEXT_PRODUCTS_GTIN = 'Штрихкод товаров GTIN';
const TEXT_PRODUCTS_GTIN_HELP = 'GTIN должен быть сохранен как 14 цифр. Любой номер GTIN меньше этого значения будет дополнен нулями в соответствии со спецификациями GTIN.';

const TEXT_PRODUCTS_SEO_DESCRIPTION = 'Product Meta Description для SEO';
const TEXT_PRODUCTS_SEO_DESCRIPTION_HELP = 'Добавьте Meta Element &lt;description&gt; . HTML не допускается.';
const TEXT_PRODUCTS_SEO_KEYWORDS = 'Product Meta Keywords для SEO';
const TEXT_PRODUCTS_SEO_KEYWORDS_HELP = 'Добавьте &lt;keyword&gt; Meta Element или в поисковую систему. Должены быть разделены запятой. HTML не допускается.';
const TEXT_PRODUCTS_SEO_TITLE = 'Название товара для SEO';
const TEXT_PRODUCTS_SEO_TITLE_HELP = 'Заменяет название продукта на &lt;title&gt; Метаэлемент возможно и в Breadcrumb Trail. <br> Оставьте пустым по умолчанию для названия продукта.';
const TEXT_CATEGORIES_SEO_TITLE = 'Название категории для SEO:<br>Измените название категории в &lt;title&gt; Meta Element.<br>Пустое значение по умолчанию отображает название категории.';
const TEXT_EDIT_CATEGORIES_SEO_TITLE = 'Редактировать Название категории для SEO:<br>Измените название категории в &lt;title&gt; Meta Element<br>и опционально в Breadcrumb Trail.<br>Оставьте пустым для сохранения названия категории по умолчанию.';
const TEXT_PRODUCTS_OTHER_IMAGES = 'Галерея картинок';

define('TEXT_SUBCATEGORIES', 'Субкатегории:');
define('TEXT_DELETE_WARNING_CHILDS', '<b>ВНИМАНИЕ:</b> Есть еще %s субкатегорий, связанных с этой категорией!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ВНИМАНИЕ:</b> Есть еще %s наименований товара, связанных с этой категорией!');
