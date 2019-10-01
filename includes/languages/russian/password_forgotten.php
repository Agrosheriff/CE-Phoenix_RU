<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Вход'); 
define('NAVBAR_TITLE_2', 'Восстановление пароля'); 

define('HEADING_TITLE', 'Я забыл свой пароль!');

define('TEXT_MAIN', 'Если Вы забыли свой пароль, введите свой e-mail адрес и мы вышлем Ваш инструкцию как безопасно сменить Ваш пароль.');

define('TEXT_PASSWORD_RESET_INITIATED', 'Проверьте Вашу почту для получения информации о том, как Вы можете восстановить или изменить Ваш пароль. <br>Информация содержит ссылку, которая будет действительна только в течение 24 часов или до момента обновления Вами пароля.'); 

define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<font color="#ff0000"><b>Ошибка:</b></font> E-Mail адрес не соответствует Вашей учетной записи в ' . STORE_NAME . ', попробуйте ещё раз.'); 

define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - Ваш новый пароль');
define('EMAIL_PASSWORD_RESET_BODY', 'Для Вашего аккаунта в ' . STORE_NAME . ' был запрошен новый пароль.' . "\n\n" . 'Пожалуйста пройдите по этой персональной ссылке для безопасной смены пароля:' . "\n\n" . '%s' . "\n\n" . 'Данная ссылка будет автоматически удалена после 24 часов или после смены пароля.' . "\n\n" . 'Если Вам нужна помощь по нашим онлайн-сервисам напишите нам: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

define('ERROR_ACTION_RECORDER', 'Ошибка: Ссылка на страницу смены пароля уже выслана. Пожалуйста попробуйте ещё раз через %s минут.');

define('IMAGE_BUTTON_RESET_PASSWORD', 'Переустановить мой пароль');
