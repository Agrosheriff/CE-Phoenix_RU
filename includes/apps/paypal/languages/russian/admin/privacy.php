privacy_title = Политика конфиденциальности

privacy_body = <h3>API полномочия</h3>

<p>PayPal приложение для интернет-магазина торговец онлайн позволяет владельцам магазина для автоматической настройки и настройки приложения со своими учетными данными API PayPal без необходимости вводить их вручную. Это выполняется безопасно путем предоставления доступа интернет-магазина для получения API учетные данные из владельцев магазина PayPal счета.</p>

<p>Предоставление доступа к интернет-магазина позволяет сделать следующие ограниченную информацию, чтобы быть извлечены из счета владельцев магазинов PayPal:</p>

<ul>
  <li>API Имя</li>
  <li>API Пароль</li>
  <li>API Подпись</li>
  <li>Account ID</li>
</ul>

<p>Ни одна другая информация об учетной записи не доступен (например, PayPal счета имя пользователя или пароль, баланс счета, историю операций и т.д.).</p>

<p>API Имя пользователя, API Пароль, API Подпись и ID счета информация используется для автоматического конфигурирования модулей PayPal в комплекте в PayPal App, в том числе:</p>

<ul>
  <li>PayPal Payments Standard</li>
  <li>PayPal Express Checkout</li>
  <li>PayPal Payments Pro (Direct Payment)</li>
  <li>PayPal Payments Pro (Hosted Solution)</li>
  <li>Вход с помощью PayPal</li>
</ul>

<p>Процесс запускается с помощью кнопок «Получить учетные данные» и «Получить учетные данные для песочницы», отображаемых на страницах управления запуском приложений PayPal и учетных данных. Владелец магазина безопасно отправляется на веб-сайт PayPal, где им предлагается предоставить доступ к osCommerce для получения учетных данных API, а затем перенаправляются обратно в их онлайн-магазин, чтобы продолжить настройку приложения PayPal. Это выполняется с помощью следующих шагов: </ p>

<ol>
  <li>Владелец магазина нажимает «Получить реальные учетные данные» или «Получить учетные данные в песочнице» и безопасно попадает на страницу инициализации на веб-сайте osCommerce, которая регистрирует запрос, и немедленно перенаправляет владельца магазина на страницу входа на веб-сайте PayPal. OsCommerce регистрирует в запросе следующую информацию:
    <ul>
      <li>Уникальный идентификатор ID сеанса.</li>
      <li>Секретный идентификатор ID, совпадающий с идентификатором ID сеанса.</li>
      <li>URL-адрес владельца магазина PayPal App (для перенаправления владельца магазина).</li>
      <li>IP-адрес владельца магазина.</li>
    </ul>
  </li>
  <li>PayPal просит владельца магазина войти в существующую учетную запись PayPal или создать новую учетную запись.</li>
  <li>PayPal просит владельца магазина предоставить разрешение osCommerce на получение своих учетных данных API.</li>
  <li>PayPal перенаправляет владельца хранилища обратно на страницу инициализации на веб-сайте osCommerce.</li>
  <li>osCommerce безопасно извлекает и сохраняет следующую информацию от PayPal:
    <ul>
      <li>API Имя</li>
      <li>API Пароль</li>
      <li>API Подпись</li>
      <li>Account ID</li>
    </ul>
  </li>
  <li>Владелец магазина автоматически перенаправляется обратно в приложение PayPal App.</li>
  <li>Приложение PayPal выполняет безопасный HTTPS-вызов на веб-сайт osCommerce для получения учетных данных API.</li>
  <li>Веб-сайт osCommerce выполняет аутентификацию безопасного HTTPS-вызова, отправляет учетные данные API и локально сбрасывает учетные данные API и URL-адреса приложений PayPal, хранящиеся на шагах 1 и 5.</li>
  <li>Приложение PayPal App настраивается с использованием учетных данных API.</li>
</ol>

<div class="pp-panel pp-panel-warning">
  <p>Учетные данные API, полученные от учетной записи владельца PayPal владельцев магазинов, используются только для настройки приложения PayPal. OsCommerce временно сохраняет учетные данные API, как описано в этой политике конфиденциальности, и отбрасывает учетные данные API, как только процесс закончен. Внутренний скрипт также выполняется, чтобы отбросить любую сохраненную информацию для незавершенных процессов.</p>
</div>

<div class="pp-panel pp-panel-info">
  <p>OsCommerce тесно сотрудничала с PayPal, чтобы гарантировать, что приложение PayPal следует строгим политикам конфиденциальности и безопасности.</p>
</div>

<h3>PayPal модули</h3>

<p>Модули PayPal отправляют информацию в PayPal о владельце магазина, интернет-магазине и о клиенте для обработки транзакций API. К ним относятся следующие модули:</p>

<ul>
  <li>PayPal Payments Standard</li>
  <li>PayPal Express Checkout</li>
  <li>PayPal Payments Pro (Direct Payment)</li>
  <li>PayPal Payments Pro (Hosted Solution)</li>
  <li>Вход с помощью PayPal</li>
</ul>

<p>В вызовы API, отправляемые в PayPal, включается следующая информация API:</p>

<ul>
  <li>Данные учетной записи PayPal продавца / владельца магазина, включая адрес электронной почты и учетные данные API.</li>
  <li>Адрес доставки и адрес для выставления счета.</li>
  <li>Информация о продукте, включая имя, цену и количество.</li>
  <li>Информация о грузе и налогах, применимая к заказу.</li>
  <li>Сумма заказа и валюта.</li>
  <li>Сохранять URL-адреса для обработки, проверки и завершения транзакций PayPal, включая успешные, отмененные и IPN URLs.</li>
  <li>Идентификация решения для электронной коммерции.</li>
</ul>

<div class="pp-panel pp-panel-info">
  <p>Параметры каждой транзакции, отправленной и полученной от PayPal, могут быть проверены на странице журнала приложений PayPal.</p>
</div>

<h3>Обновления приложений</h3>

<p>Приложение PayPal для интернет-магазина osCommerce автоматически проверяет веб-сайт osCommerce на наличие обновлений, доступных для приложения. Эта проверка выполняется каждые 24 часа, и если доступно обновление, отображается уведомление, позволяющее приложению загружать и применять обновление.</p>

<p>Ручная проверка доступных обновлений также выполняется на странице сведений о приложении PayPal.</p>

<h3>Библиотеки Google Hosted (jQuery и jQuery UI)</h3>

<p>Если jQuery или jQuery UI еще не загружены в Инструмент администрирования, страницы администрирования приложения PayPal автоматически загружают библиотеки безопасно через Библиотеки Google Hosted.</p>
