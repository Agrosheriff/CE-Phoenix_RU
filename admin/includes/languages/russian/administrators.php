<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart
Translation to RU from Fredi. Updated 3/12/22

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Администраторы');
define('TABLE_HEADING_ADMINISTRATORS', 'Администраторы');
define('TABLE_HEADING_HTPASSWD', 'Безопасность с файлом htpasswd');
define('TABLE_HEADING_ACTION', 'Действие');
define('TEXT_INFO_INSERT_INTRO', 'Введите данные нового администратора');
define('TEXT_INFO_EDIT_INTRO', 'Сделайте необходимые изменения');
define('TEXT_INFO_DELETE_INTRO', 'Хотите удалить этого Администратора?');
define('TEXT_INFO_HEADING_NEW_ADMINISTRATOR', 'Новый Администратор');
define('TEXT_INFO_USERNAME', 'Имя:');
define('TEXT_INFO_NEW_PASSWORD', 'Новый пароль:');
define('TEXT_INFO_PASSWORD', 'Пароль:');
define('TEXT_INFO_PROTECT_WITH_HTPASSWD', 'Защитить с htaccess/htpasswd');
const TEXT_HTPASSWRD_NA_IIS = 'N/A';
define('ERROR_ADMINISTRATOR_EXISTS', '<b>Ошибка:</b> Администратор уже есть.');
const HTPASSWD_INFO = <<<'EOT'
<strong>Дополнительная защита с помощью htaccess/htpasswd</strong>
<p>Эта установка Administration Tool не имеет дополнительной защиты с помощью средств htaccess/htpasswd.</p>
<p>Включение уровня безопасности htaccess/htpasswd автоматически сохраняет имя пользователя и пароли администратора в файле htpasswd при обновлении записей паролей администратора.</p>
<p><strong>Обратите внимание</strong>, если этот дополнительный уровень безопасности включен и вы больше не можете получить доступ к Инструменту администрирования,
 внесите следующие изменения и проконсультируйтесь с вашим хостинг-провайдером, чтобы включить защиту htaccess/htpasswd:</p>
<p><u><strong>1. Отредактируйте этот файл:</strong></u><br /><br />%s</p>
<p>Удалите следующие строки, если они существуют:</p>
<p><i>%s</i></p>
<p><u><strong>2. Удалить этот файл:</strong></u><br /><br />%s</p>
EOT;
const HTPASSWD_SECURED = <<<'EOT'
<b>Дополнительная защита сhtaccess/htpasswd</b>
<p>Админ Интернет-магазина дополнительно защищен через htaccess/htpasswd.</p>
EOT;
const HTPASSWD_PERMISSIONS = <<<'EOT'
<b>Дополнительная защита с htaccess/htpasswd</b>
<p>Админ в этом интернет-магазине дополнительно еще не обеспечена за счет htaccess/htpasswd.</p>
<p>Следующие файлы должны быть доступны для записи на веб-сервере htaccess/htpasswd :</p>
<ul>
<li>%s</li>
<li>%s</li>
</ul>
<p>Перезагрузите эту страницу, чтобы убедиться, что установлены правильные права доступа к файлам.</p>
EOT;

const IMAGE_INSERT_NEW_ADMIN = 'Новый Админ';


define('IMAGE_INSERT_NEW_ADMIN', 'Добавить менеджера');
define('BOX_HEADING_ADMINISTRATORS', 'Администраторы');
define('TEXT_ADMINISTRATOR_GROUP', 'Группа Администраторов');
