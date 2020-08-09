<?php
/*
$Id$

osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com

Copyright (c) 2020 osCommerce
Translation to RU from Fredi. Updated 3/07/2020
Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Менеджер рекламы');

define('TABLE_HEADING_ADVERT', 'Реклама');
define('TABLE_HEADING_GROUP', 'Группа');
define('TABLE_HEADING_SORT_ORDER', 'Сортировать');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_ACTION', 'Действия');

define('TEXT_ADVERT_TITLE', 'Название');
define('TEXT_ADVERT_URL', 'URL');
define('TEXT_ADVERT_FRAGMENT', 'Фрагмент');
define('TEXT_ADVERT_GROUP', 'Группа');
define('TEXT_ADVERT_SORT_ORDER', 'Сортировать');
define('TEXT_ADVERT_NEW_GROUP', 'ИЛИ создать новую группу');
define('TEXT_ADVERT_IMAGE', 'Картинка');
define('TEXT_ADVERT_IMAGE_LOCAL', 'ИЛИ ввести имя файла');
define('TEXT_ADVERT_IMAGE_TARGET', 'Сохранить в папке');
define('TEXT_ADVERT_HTML_TEXT', 'HTML текст');

define('TEXT_ADVERT_TITLE_HELP', 'Это используется только в списке объявлений в качестве напоминания для вас.');
define('TEXT_ADVERT_URL_HELP', 'Включая https:// для внешних ссылок или просто имя страницы для внутренних ссылок (например, product_info.php или advanced_search_result.php)');
define('TEXT_ADVERT_FRAGMENT_HELP', 'Используется только в сочетании с внутренними ссылками в вашем магазине! URL-адрес фрагмента (например) products_id=3 или ключевые слова=xyz');
define('TEXT_ADVERT_SORT_HELP', 'Это определяет порядок сортировки рекламы внутри группы.');

define('TEXT_ADVERT_NOTE', '
<strong>Рекламные заметки:</strong>
<ul>
  <li>Вы можете использовать изображение и/или HTML (обычно текст!).</li>
  <li>Вывод изображения или html будет зависеть от модуля на стороне магазина.</li>
</ul>');
define('TEXT_INSERT_NOTE', '
<b>Важные примечания к изображению:</b>
<ul>
  <li>Загружаемые каталоги должны иметь пользовательские настройки записи!</li>
  <li>Не заполняйте поле «Сохранить в каталог», если вы не загружаете изображение на веб-сервер (то есть вы используете локальный (serverside) image).</li>
  <li>Поле «Сохранить в каталог» должно быть существующим каталогом с конечной косой чертой (например, реклама/ или карусели/).</li>
</ul>');

define('TEXT_IMAGE_NONEXISTENT', 'Изображение ОТСУТСТВУЕТ!');

define('TEXT_ADVERT_DATE_ADDED', 'Добавлено: %s');
define('TEXT_ADVERT_STATUS_CHANGE', 'Изменение статуса: %s');

define('TEXT_INFO_DELETE_INTRO', 'Вы уверены, что хотите удалить эту рекламу?');
define('TEXT_INFO_DELETE_IMAGE', 'Удалить картинку');
define('SUCCESS_IMAGE_INSERTED', '<b>Сделано:</b> новая реклама добавлена.');
define('SUCCESS_IMAGE_UPDATED', '<b>Сделано:</b> эта реклама обновлена.');
define('SUCCESS_IMAGE_REMOVED', '<b>Сделано:</b> эта реклама удалена.');
define('SUCCESS_ADVERT_STATUS_UPDATED', '<b>Сделано:</b> Статус обновлен.');

define('ERROR_ADVERT_TITLE_REQUIRED', '<b>Ошибка:</b> Advert TITLE required.');
define('ERROR_ADVERT_GROUP_REQUIRED', '<b>Ошибка:</b> Advert GROUP required.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', '<b>Ошибка: Целевой каталог не существует: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', '<b>Ошибка: Целевой каталог недоступен для записи: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', '<b>Ошибка:</b> Изображение не существует.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', '<b>Ошибка:</b> Изображение не может быть удалено.');
define('ERROR_ADVERT_IMAGE_OR_TEXT_REQUIRED', '<b>Ошибка</b>: Вы не вставили изображение или текст. Для показа рекламы требуется изображение и текст. Оба.');

define('TEXT_DISPLAY_NUMBER_OF_ADVERTS', 'Показать <b>%s</b> до <b>%s</b> от <b>%s</b> реклам');
define('IMAGE_NEW_ADVERT', 'Новая реклама');

define('TEXT_ADVERT_EXTERNAL_URL', '<i class="fas fa-external-link-alt mr-1"></i> внешняя ссылка:<br>%s');
define('TEXT_ADVERT_INTERNAL_URL', '<i class="fas fa-link mr-1"></i> внутеняя ссылка::<br>%s');

define('IMAGE_IMPORT_ADVERT', 'Попытка импорта баннера');
define('IMAGE_IMPORT_ADVERT_EXPLANATION', 'Это позволит импортировать данные из таблицы базы данных «баннеры». Возможно, вам придется удалить некоторые данные после импорта, так как «баннеры» никогда не предназначались для использования в карусели ...');
define('SUCCESS_BANNERS_IMPORTED', '<b>Сделано:</b>  баннеры импортированы!');
