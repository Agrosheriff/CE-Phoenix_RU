<?php
/*
$Id: article-topics.php, v1.0 2003/12/04 12:00:00 ra Exp $
osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com
Copyright (c) 2020 osCommerce
Released under the GNU General Public License
*/

define('HEADING_ARTICLE_TOPICS', 'Все темы статей и блогов');
define('TEXT_ARTICLE_TOPICS_NOT_FOUND', 'Темы не найдены.');
// define('NAVBAR_TITLE_DEFAULT', 'Тема статей и блогов');
define('NAVBAR_TITLE_DEFAULT', '');
define('NAVBAR_TITLE', 'Тема');
define('NAVBAR_TITLE_DEFAULT', 'Темы статей и блогов');
define('TEXT_MORE', ' ...подробнее');
define('TEXT_MAIN', '');
define('TEXT_ARTICLE_MORE', '<span style="color:#ff0000;">...подробнее</span>');

// seo
if ( ($topic_depth == 'top') && (!isset($_GET['authors_id'])) ) {
define('META_SEO_TITLE', 'Название главной страницы');
define('META_SEO_DESCRIPTION', 'Это описание вашего сайта для использования описания в META элементе');
}

