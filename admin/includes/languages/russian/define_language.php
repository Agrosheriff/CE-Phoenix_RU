<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Языковые файлы');

define('TABLE_HEADING_FILES', 'Файлы');
define('TABLE_HEADING_WRITABLE', 'Доступен на запись');
define('TABLE_HEADING_LAST_MODIFIED', 'Последние изменения');

define('TEXT_EDIT_NOTE', '<strong>редактирование определений</strong><br /><br />Каждое определение для языка устанавливается с помощью PHP <a href="http://www.php.net/define" target="_blank">define()</a> функция следующим образом:<br /><br /><nobr>define(\'TEXT_MAIN\', \'<span style="background-color: #FFFF99;">этот текст редактируется. Это действительно легко сделать!</span>\');</nobr><br /><br />Выделенный текст может быть отредактирован. Если определение использует одинарные кавычки, содержащиеся в тексте, то одинарные кавычки в тексте определения должны быть с обратной косой чертой (например, It\'s).');

define('TEXT_FILE_DOES_NOT_EXIST', 'Файл отсутствует.');

define('ERROR_FILE_NOT_WRITEABLE', 'Ошибка: неверные права доступа к файлу, измените права доступа к %s');
?>
