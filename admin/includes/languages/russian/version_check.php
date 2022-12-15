<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart
Translation to RU from Fredi. Updated 3/12/22
Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Проверка версий');
define('TABLE_HEADING_VERSION', 'Версии');
define('TABLE_HEADING_RELEASED', 'Дата релиза');
define('TABLE_HEADING_ACTION', 'Действие');
define('TITLE_INSTALLED_VERSION', 'Установленная версия:');
const VERSION_SERVER_FAILURE = 'Не удалось загрузить доступные версии с сервера. Пожалуйста, проверьте свой интернет или повторите попытку позже.';
define('VERSION_RUNNING_LATEST', 'Вы работаете с последней версией CE Phoenix.');
const VERSION_UPGRADES_AVAILABLE = <<<'EOT'
<strong>CE Phoenix %s</strong> — это последняя доступная вам версия!<hr>
<a class="alert-link" target="_blank" href="https://phoenixcart.org/forum/viewtopic.php?f=26&t=309">Сертифицированные разработчики</a>
  и подробное описание "<a class="alert-link" target="_blank" href="https://phoenixcart.org/forum/app.php/tag/phoenix-update">Сделай сам</a>"
  инструкции доступны в Phoenix Club.
EOT;
