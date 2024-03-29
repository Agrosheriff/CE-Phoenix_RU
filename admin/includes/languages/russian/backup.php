<?php
/*
$Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart
Translation to RU from Fredi. Updated 3/12/22
Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Резервное копирование Базы данных');

define('TABLE_HEADING_TITLE', 'Имя');
define('TABLE_HEADING_FILE_DATE', 'Дата');
define('TABLE_HEADING_FILE_SIZE', 'Размер');
define('TABLE_HEADING_ACTION', 'Действие');
define('TEXT_INFO_HEADING_NEW_BACKUP', 'Сохранить Заново');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Восстановить Локально');
define('TEXT_INFO_NEW_BACKUP', 'Не прерывайте процесс, который может занять пару минут.');
define('TEXT_INFO_UNPACK', '<br><br>(после распаковки файла из архива)');
define('TEXT_INFO_RESTORE', 'Не прерывайте процесс восстановления.<br><br>Большая база данных, более долгий процесс!<br><br>Если возможно, используйте shell команды.<br><br>Например:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Не прерывайте процесс восстановления.<br><br>Большая база данных, более долгий процесс!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Загруженный файл должен быть текстовым файлом sql.');
define('TEXT_INFO_DATE', 'Дата: %s');
define('TEXT_INFO_SIZE', 'Размер: %s');
define('TEXT_INFO_COMPRESSION', 'Сжатие: %s');
define('TEXT_INFO_USE_GZIP', 'Использовать GZIP');
define('TEXT_INFO_USE_ZIP', 'Использовать ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Без сжатия (Просто SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Только загрузка (Не загружайте на удаленный сервер)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Наилучший вариант - связь через HTTPS');
define('TEXT_DELETE_INTRO', 'Вы действительно хотите удалить эту копию?');
define('TEXT_NO_EXTENSION', 'Нет');
define('TEXT_BACKUP_DIRECTORY', 'Резервная Директория:<br>%s');
define('TEXT_LAST_RESTORATION', 'Последнее Восстановление:<br>%s');
define('TEXT_FORGET', 'Забыть');
const ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST = '<b>Ошибка:</b> Директория для резервного копирования не существует Установите ее в файле configure.php.';
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', '<b>Ошибка:</b> Директория для резервного копирования защищена от записи, установите верные права доступа.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', '<b>Ошибка:</b> Ссылка для загрузки не приемлема.');
const ERROR_INVALID_FILE = 'Файл [%s] не распознан как допустимая резервная копия. Убедитесь, что он существует, имеет расширение .sql и разумный размер.';
const ERROR_FILE_TOO_LARGE = 'Размер файла составляет "%d" байт, но ограничение равно "%s".';
const ERROR_PATH_NOT_REMOVEABLE = '<strong>Ошибка:</strong> невозможно удалить "%s"';
define('SUCCESS_LAST_RESTORE_CLEARED', '<b>Выполнено:</b> Последняя дата восстановления очищена.');
define('SUCCESS_DATABASE_SAVED', '<b>Выполнено:</b> База данных сохранена.');
define('SUCCESS_DATABASE_RESTORED', '<b>Выполнено:</b> База данных восстановлена.');
define('SUCCESS_BACKUP_DELETED', '<b>Выполнено:</b> Копия удалена.');
define('TEXT_INFO_BACKUP_SIZE', '%s Mb');
