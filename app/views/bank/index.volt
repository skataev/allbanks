<h1>Swiss banks</h1>

<form method="get" class="bg1-block search" action="/banks/" id="search-bank">
    <input type="text" class="in-text" name="search" value="{{ search }}">
    <a class="button" onclick="document.getElementById('search-bank').submit(); return false;" href="#">Suche</a>
</form>
<p class="note-line">
    Список банков Швейцарии с возможностью поиска, адресами отделений и банкоматов, подробными сведениями об услугах и продуктах банков.
</p>

{% for bank in banksList %}
    <div class="bank-block {% if loop.index % 4 %} bank-block-left {% endif %}">
        <a href="/banks/{{ bank.getCode() }}/">
            {% if bank.getLogo() %}
                <img src="{{ bank.getLogo() }}" title="{{ bank.getTitle() }}" alt="{{ bank.getTitle() }}">
            {% else %}
                <img src="/img/void-bank.png">
            {% endif %}
        </a>
        <a href="/banks/{{ bank.getCode() }}/">
            {{ bank.getTitle() }}
        </a> / <span>
        <a href="#">Отделений</a> <span class="num">213</span>
    </span>

        <div class="phone">
            {{ bank.getPhone() }}
        </div>

        <div class="inner-line">
        <span>
            <a href="#">Кредиты</a>
            <span class="num">213</span>
        </span>
        <span>
            <a href="#">Ипотека</a>
            <span class="num">213</span>
        </span>

        <span>
            <a href="#">Ипотека</a>
            <span class="num">213</span>
        </span>
        </div>
    </div>
{% else %}
    <div class="error-message">
        Keine Einträge gefunden...
    </div>
    <br>
    <br>
{% endfor %}

<div class="clear"></div>

<div class="pagination">
    {{ paginator }}
</div>

<h3>Top offers</h3>
<div class="top-offer-1">
    <img src="/img/void-bank.png">
    до 500 000 руб.<br>
    - от 15,9%<br>
    - без справок и поручителей<br>
    <a href="#"  class="button button-small">Online-Bewerbung</a>
</div>
<div class="top-offer-1">
    <img src="/img/void-bank.png">
    до 500 000 руб.<br>
    - от 15,9%<br>
    - без справок и поручителей<br>
    <a href="#"  class="button button-small">Online-Bewerbung</a>
</div>
<div class="top-offer-2">
    <img src="/img/void-bank.png">
    до 500 000 руб.<br>
    - от 15,9%<br>
    - без справок и поручителей<br>
    <a href="#" class="button button-small">Online-Bewerbung</a>
</div>

<div class="clear"></div>