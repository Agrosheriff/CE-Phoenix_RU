<?php
/*
$Id: articles.php, v1.0 2003/12/04 12:00:00 ra Exp $
osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com
Copyright (c) 2021 osCommerce
Released under the GNU General Public License
*/

define('TABLE_HEADING_NEW_ARTICLES', 'Новые статьи в разделе %s');
define('TEXT_NO_ARTICLES', 'В этой теме нет статей.');
define('TEXT_NUMBER_OF_ARTICLES', 'Количество статей: ');
define('TEXT_SHOW', 'Показать:');

define('TEXT_NOW', '\' сейчас');
define('TEXT_ALL_TOPICS', 'Все разделы');
define('TEXT_ALL_AUTHORS', 'Все авторы');

// seo
 if ( ($topic_depth == 'top') || (isset($_GET['authors_id'])) ) {
define('META_SEO_TITLE', 'Articles Page Title');
define('META_SEO_DESCRIPTION', 'Это описание вашего сайта, которое будет использоваться в элементе описания META.');
}
define('HEADING_TITLE', 'Статьи');
define('NAVBAR_TITLE', 'Статьи');
define('TABLE_HEADING_ARTICLES', 'Статьи');
define('TABLE_HEADING_AUTHOR', 'Автор');
define('TEXT_ARTICLES_BY', 'Статья написана ');
define('TEXT_ARTICLES', 'Перечень статей по дате публикации.');
define('TEXT_DATE_ADDED', 'Дата добавления: ');
define('TEXT_AUTHOR', '<b>Автор:</b>');
define('TEXT_BY_AM', 'Автор:  ');
define('TEXT_ALL_ARTICLES', 'Список статей включенных в этот раздел:');
define('TEXT_CURRENT_ARTICLES', 'Актуальные статьи');
define('TEXT_UPCOMING_ARTICLES', 'Статьи, которые будут опубликованы в ближайшее время.');
define('TEXT_DATE_EXPECTED', '<b>Ожидается:</b>');
define('TEXT_ARTICLE_VIEWED', '<br>Прочитано: ');
define('TEXT_CURRENT_BLOG_ARTICLES', 'Актуальные Блоги</b>');
define('ARTICLE_VIEWED_COUNT', '(Прочитано %d раз)');
define('TEXT_READ_MORE', 'Читать далее...');
define('TEXT_MORE_INFORMATION', 'Для получения дополнительно информации, посетите <a href="https://%s" target="_blank">сайт автора</a>.');
define('TEXT_TOPIC', '<b>Раздел:</b> ');
define('HEADING_TITLE_BLOG', 'Все блоги');
// define('TEXT_ARTICLES_SEARCH', 'Поиск в статьях: ');
/// define('TEXT_DISPLAY_NUMBER_OF_ARTICLES', 'Количество статей');
// define('NAVBAR_TITLE', 'Статьи');
// define('NAVBAR_TITLE_DEFAULT', 'Темы статей и блогов');
// define('TEXT_NO_ARTICLES', 'На данный момент нет статей в данном разделе.');
// define('TEXT_NO_ARTICLES2', 'На данный момент нет опубликованных статей данным автором.');
// define('TEXT_NO_ARTICLES_BLOG', 'На данный момент нет блогов в данном разделе.');

/*
  const MODULE_ARTICLES_DATA = array(
    'articles.php' => 'Articles',
    'topics.php' => 'Topics',
    'blogs.php' => 'Blogs',
    'shipping.php' => 'Shipping &amp; Returns',
    'contact_us.php' => 'Contact Us'
  );
*/
