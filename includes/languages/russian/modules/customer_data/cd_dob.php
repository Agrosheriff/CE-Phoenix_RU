<?php
/*
$Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart
Translation to RU from Fredi. Updated 7/12/22
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
