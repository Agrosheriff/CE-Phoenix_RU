<?php
/*
 $Id: inpay.php VER: 1.0.3443 $
 osCommerce, Open Source E-Commerce Solutions
 http://www.oscommerce.com
 Copyright (c) 2008 osCommerce
 Released under the GNU General Public License
 */

  define('MODULE_PAYMENT_INPAY_TEXT_TITLE', 'Inpay - Мгновенные платежи через систему он-лайн вашего Банка ');
  define('MODULE_PAYMENT_INPAY_TEXT_PUBLIC_TITLE', 'Платежи через он-лайн банк - мгновенные и 100% безопасные');
  define('MODULE_PAYMENT_INPAY_TEXT_PUBLIC_HTML', '<img src="https://resources.inpay.com/images/oscommerce/inpay_checkout.png" alt="Безопасный платеж через inpay" /><br /><br />
  <table cellspacing="5">
  	  <tr><td><img src="https://resources.inpay.com/images/oscommerce/inpay_check.png" alt="100% Безопасный платеж через inpay" /></td><td class="main">100% Безопасный платеж через inpay <span style="color: #666;">- ваш уровень безопасности соответствует безопасности вашего интернет-банка.</span></td></tr>
  	  <tr><td><img src="https://resources.inpay.com/images/oscommerce/inpay_check.png" alt="Мгновенные платежи с использованием inpay" /></td><td class="main">Мгновенные платежи с использованием inpay <span style="color: #666;">- наша система гарантирует, что вы получите ваш заказ как можно скорее.</span></td></tr>
  	  <tr><td><img src="https://resources.inpay.com/images/oscommerce/inpay_check.png" alt="Анонимные платежи с использованием inpay" /></td><td class="main">Анонимные платежи с использованием inpay <span style="color: #666;">- нет необходимости вводить номер вашей кредитной карты или другую персональную информацию.</span></td></tr>
  </table><a href="http://inpay.com/shoppers" style="text-decoration: underline;" target="_blank" class="main">Щелкните здесь, что бы прочитать подробнее о inpay</a><br />');
  define('MODULE_PAYMENT_INPAY_TEXT_DESCRIPTION', '<strong>Что такое inpay?</strong><br />
  	  inpay это супер опция для интернет магазинов, которая позволяет клиентам оплачивать заказы используя свой интернет-банк - мгновенно и по всему миру.<br />
  	  <br />
  	  <strong>Увеличить доходы</strong><br />
	Предоставляя покупателям возможность платить используя свой интернет-банк, теперь вы можете продавать клиентам, которые иначе не могут или не желают платить сегодня.<br />
<br />
<strong>Увеличить размер рынка</strong><br />
Предлагая нашим клиентам платежную систему, мы даем вам возможность увеличить свою долю на рынке, чтобы принимать платежи не только от владельцев кредитных и дебетовых карт, а также от банковских онлайн-пользователей со всего мира.<br />
<br />
<strong>Без рисков</strong><br />
С inpay не существует рисков мошенничества с кредитными картами или любого рода другими видами платежей. Это означает, что когда вы заплатили деньги вы их действительно заплатили по назначению! С этой платежной системой вы можете даже продавать товары клиентам из зон \"высокого риска\", включая все регионы Азии и Восточной Европы.<br /><br />
  <a href="http://inpay.com/" style="text-decoration: underline;" target="_blank" rel="noopener">Подробнее о inpay.com</a><br />');
  // ------------- e-mail settings ---------------------------------
  define('EMAIL_TEXT_SUBJECT', 'Подтверждение оплаты через inpay');
  define('EMAIL_TEXT_ORDER_NUMBER', 'Номер заказа:');
  define('EMAIL_TEXT_INVOICE_URL', 'Подробная Счет-фактура:');
  define('EMAIL_TEXT_DATE_ORDERED', 'Дата заказа:');
  define('EMAIL_TEXT_PRODUCTS', 'Продукты');
  define('EMAIL_TEXT_SUBTOTAL', 'Стоимость:');
  define('EMAIL_TEXT_TAX', 'Налог:        ');
  define('EMAIL_TEXT_SHIPPING', 'Доставка: ');
  define('EMAIL_TEXT_TOTAL', 'Сумма итого:    ');
  define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Адрес доставки');
  define('EMAIL_TEXT_BILLING_ADDRESS', 'Адрес плательщика');
  define('EMAIL_TEXT_PAYMENT_METHOD', 'Метод оплаты');
  define('EMAIL_SEPARATOR', '------------------------------------------------------');
  define('TEXT_EMAIL_VIA', 'через'); 
  
?>