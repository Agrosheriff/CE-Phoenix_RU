<?php
/*
$Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart
Translation to RU from Fredi. Updated 3/12/22
Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Языковые файлы');
define('TABLE_HEADING_FILES', 'Файлы');
define('TABLE_HEADING_WRITABLE', 'Доступен на запись');
define('TABLE_HEADING_LAST_MODIFIED', 'Последние изменения');
const TEXT_EDIT_NOTE = <<<'EORT'
<p class="lead">Редактирование языковых определений</p>
<p>Каждое определение языковое определение задается как константа PHP следующим образом:</p>
<p><pre>const TEXT_MAIN = '<span style="background-color: #FFFF99;">Этот текст можно редактировать. Это очень легко сделать!</span>');</pre></p>
<p>Выделенный текст можно редактировать. Поскольку это определение использует одинарные кавычки для содержания текста, любые одинарные кавычки в текстовом определении должны быть экранированы обратной косой чертой (например, It\'s)</p>
<p>Можно вводить несколько строк, например</p>
<p><pre>const TEXT_MAIN = <<<'EOT'
<span style="background-color: #FFFF99;">Этот текст можно редактировать.
  Это очень легко сделать!</span>
EOT;</pre></p>
<p>Кроме того, больше не нужно экранировать обратной косой чертой в многострочных записях, подобных этой.</p>
ЭОРТ;
const TEXT_FILE_DOES_NOT_EXIST = 'Этого Файла нет.';
const TEXT_INFO_DOWNLOAD_ONLY = 'Только загрузка (не хранить на стороне сервера)';
const ERROR_FILE_NOT_WRITEABLE = '<strong>Ошибка:</strong> я не могу записать в этот файл, поэтому вместо сохранения он будет загружен. Пожалуйста, установите правильные права пользователя на %s, если вы хотите сохранять на месте.';
