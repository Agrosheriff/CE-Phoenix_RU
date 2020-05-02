<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce
Перевод на русский от Fredi. 14.02.20.
  Released under the GNU General Public License
*/

const MODULE_CUSTOMER_DATA_DOB_TEXT_TITLE = 'Дата вашего рождения';
const MODULE_CUSTOMER_DATA_DOB_TEXT_DESCRIPTION = 'Показать при регистрации';

const ENTRY_DOB = 'Дата вашего рождения';
const ENTRY_DOB_ERROR = 'Дата вашего рождения должна иметь такой формат: DD/MM/YYYY (eg 21/03/1970)';
const ENTRY_DOB_TEXT = 'например 21/03/1970';

////
// Дата возврата в необработанном формате
// $date должен быть в формате mm/dd/yyyy
// необработанная дата в формате YYYYMMDD, or DDMMYYYY
function tep_cd_dob_date_raw($date, $reverse = false) {
return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
}
