<?php
/*
$Id: ticket_view.php,v 1.6 2003/07/13 20:22:01 hook Exp $
OSC-SupportTicketSystem
Copyright (c) 2003 Henri Schmidhuber IN-Solution
Contribution based on:
osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com
Translation to RU from Fredi. Updated 10/01/2020
Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Показать Билет поддержки');
define('HEADING_TITLE_STATUS','Статус');
define('HEADING_TITLE_SEARCH', 'Поиск');
define('HEADING_TITLE_DEPARTMENT','Отдел поддержки:');
define('HEADING_TITLE_PRIORITY','Приоритет билета:');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_CUSTOMER_ID','ID клиента.');
define('TABLE_HEADING_DATE','последнее изменение');
define('TABLE_HEADING_DEPARTMENT','Отдел');
define('TABLE_HEADING_NAME','Имя');
define('TABLE_HEADING_ORDER_ID', 'ID Заказа');
define('TABLE_HEADING_PRIORITY','Приоритет');
define('TABLE_HEADING_STATUS','Статус');
define('TABLE_HEADING_TICKET_SUBJECT','Тема');
define('TABLE_HEADING_SUBJECT','Тема');
define('TEXT_ALL_TICKETS','все');
define('TEXT_ALL_DEPARTMENTS','все');
define('TEXT_ALL_PRIORITYS','все');
define('TEXT_ADMIN','Админ');
define('TEXT_TICKET_BY', 'от');
define('TEXT_CUSTOMERS_EMAIL','Email:');
define('TEXT_CUSTOMERS_ID','ID Заказчика:');
define('TEXT_CUSTOMERS_NAME','Имя:');
define('TEXT_CUSTOMERS_ORDERS_ID','Заказано.:');
define('TEXT_CUSTOMER_LOGIN_YES', 'Клиент может войти в систему, чтобы просмотреть билет');
define('TEXT_CUSTOMER_LOGIN_NO', 'Клиент не может войти в систему, чтобы просмотреть билет');
define('TEXT_COMMENT','Ответ:');
define('TEXT_DATE','Дата:');
define('TEXT_DATE_TICKET_CREATED','Билет открыт:: ');
define('TEXT_DATE_TICKET_LAST_MODIFIED','последнее изменение: '); 
define('TEXT_DATE_TICKET_LAST_CUSTOMER_MODIFIED','Последнее изменение клиента:');
define('TEXT_DEPARTMENT','Отдел:');
define('TEXT_DISPLAY_NUMBER_OF_TICKETS', 'Показать билеты  <b>%d</b> до <b>%d</b> (от <b>%d</b>)');
define('TEXT_INSERT','Вставить');
define('TEXT_OPENED', 'открыт:');
define('TEXT_PRIORITY','Приоритет:');
define('TEXT_REPLY','Ответ');
define('TEXT_STATUS', 'Статус: ');
define('TEXT_TICKET_NR','Номер билета:');
define('TEXT_INFO_HEADING_DELETE_TICKET','Вы уверены, что хотите удалить этот билет?');
define('TICKET_EMAIL_SUBJECT', 'Обновление вашего Билета поддержки ');
define('TICKET_EMAIL_MESAGE_HEADER',"Ваш билет поддержки был обработан. \nВы можете просмотреть изменения по адресу:");
define('TICKET_EMAIL_MESAGE_FOOTER',"Если у вас есть дополнительные вопросы, пожалуйста, воспользуйтесь нашей службой поддержки \n\nНе отвечайте на это письмо.");
define('SUCCESS_TICKET_UPDATED','Билет обновлен');
define('ERROR_TICKET_DOES_NOT_EXIST','Ошибка: билет не существует!');
define('WARNING_TICKET_NOT_UPDATED','Билет не был обновлен!');
define('WARNING_ENTRY_TO_SHORT', 'Длина ответа слишком короткая!');
define('TICKET_LINK_TARGET', 'Ссылка на целевой билет: ');
define('TABLE_HEADING_NR','Номер билета');
define('TEXT_VIEW_TICKET_NR','Введите пожалуйста номер билета:');
define('ENTRY_VIEW_TICKET_NR_TEXT','Ваш номер билета');
define('TABLE_HEADING_CREATED','Дата создания');
define('TABLE_HEADING_LAST_MODIFIED','Последнее обновление');
define('TEXT_DISPLAY_NUMBER_OF_TICKETS', 'Показать билеты  <b>%d</b> to <b>%d</b> (of <b>%d</b>)');
define('NAVBAR_TITLE', 'Показать билет поддержки');
define ('BUTTON_UPDATE_TICKET','Обновить билет');
define ('TEXT_VIEW_TICKET_LOGIN','<a href="%s">Вы должны войти в систему, чтобы увидеть свой билет.</a>');
?>
