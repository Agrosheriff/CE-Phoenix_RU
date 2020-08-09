<?php
/*
$Id$

osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com

Copyright (c) 2020 osCommerce
Translation to RU from Fredi. Updated 7/08/2020
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

define('ERROR_ADMINISTRATOR_EXISTS', '<b>Ошибка:</b> Администратор уже есть.');
define('HTPASSWD_INFO', '<b>Дополнительная защита с htaccess/htpasswd</b><p>В этом интернет-магазине доступ администраторов не защищен дополнительно за счет htaccess/htpasswd.</p><p>Включение htaccess/htpasswd уровня безопасности будет автоматически сохранять имя пользователя и пароль администратора в htpasswd файла при обновлении записей пароль администратора.</p><p><b>Внимание</b>, если этот дополнительный уровень защиты включен, и вы больше не имеете доступ к панели администрации, внести следующие изменения и обратитесь к хостинг-провайдеру для включения htaccess/htpasswd защиты:.</p><p><u><b>1. Редактировать этот файл:</b></u><br><br>' . DIR_FS_ADMIN . '.htaccess</p><p>удалите следующие строки, если они существуют:</p><p><i>%s</i></p><p><u><b>2. Удалите этот файл:</b></u><br><br>' . DIR_FS_ADMIN . '.htpasswd_oscommerce</p>');
define('HTPASSWD_SECURED', '<b>Дополнительная защита сhtaccess/htpasswd</b><p>Админ Интернет-магазина дополнительно защищен через htaccess/htpasswd.</p>');
define('HTPASSWD_PERMISSIONS', '<b>Дополнительная защита с htaccess/htpasswd</b><p>Админ в этом интернет-магазине безопасность дополнительно еще не обеспечена за счет htaccess/htpasswd.</p><p>Следующие файлы должны быть доступны для записи на веб-сервере для включения htaccess/htpasswd уровня безопасности:</p><ul><li>' . DIR_FS_ADMIN . '.htaccess</li><li>' . DIR_FS_ADMIN . '.htpasswd_oscommerce</li></ul><p>Перезагрузить страницу чтобы убедиться, что правильные разрешения на файлы были установлены.</p>');
define('IMAGE_INSERT_NEW_ADMIN', 'Добавить менеджера');
define('BOX_HEADING_ADMINISTRATORS', 'Администраторы');
define('TEXT_ADMINISTRATOR_GROUP', 'Группа Администраторов');
