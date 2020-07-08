<?php
/*
$Id$

osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com

Copyright (c) 2020 osCommerce
Translation to RU from Fredi. Updated 3/07/2020
Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Вход'); 
define('NAVBAR_TITLE_2', 'Восстановление пароля'); 
define('HEADING_TITLE', 'Я забыл свой пароль!');
define('TEXT_MAIN', 'Если Вы забыли пароль, введите ваш e-mail адрес и мы вышлем Вам инструкцию для его безопасной замены.');
define('TEXT_PASSWORD_RESET_INITIATED', 'Проверьте Вашу почту для получения информации о том, как восстановить или изменить Ваш пароль. <br>Информация содержит ссылку, которая будет действительна только в течение 24 часов или до момента обновления пароля.'); 
define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Ошибка: E-Mail адрес не соответствует Вашей учетной записи, попробуйте ещё раз.'); 
define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - Ваш новый пароль');
define('EMAIL_PASSWORD_RESET_BODY', 'Для Вашего Кабинета в ' . STORE_NAME . ' был запрошен новый пароль.' . "\n\n" . 'Пройдите по этой ссылке для безопасной смены пароля:' . "\n\n" . '%s' . "\n\n" . 'Ссылка будет автоматически удалена после 24 часов или после смены пароля.' . "\n\n" . 'Если Вам нужна помощь, напишите нам: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('ERROR_ACTION_RECORDER', 'Ошибка: Ссылка на страницу смены пароля уже выслана. Попробуйте ещё раз через %s минут.');
define('IMAGE_BUTTON_RESET_PASSWORD', 'Изменить мой пароль');
