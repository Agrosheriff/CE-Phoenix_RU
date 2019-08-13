<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Директория сессий отсутствует: ' . tep_session_save_path() . '. Сессии не будут работать пока эта директория не будет создана.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Я не могу писать в каталог сессий: ' . tep_session_save_path() . '. Сессии не будут работать, пока необходимые права доступа не установлены.');
?>