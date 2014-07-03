<h1>Swiss banks</h1>

<form method="get" class="bg1-block search" id="search-bank">
    <input type="text" class="in-text" name="search" value="Suchbegriff...">
    <a class="button" href="#">Найти</a>
</form>

{% for bank in banksList %}
    <div class="bank-block {% if loop.index % 4 %} bank-block-left {% endif %}">
        <a href="/banks/{{ bank.getCode() }}/">
            {% if bank.getLogo() %}
                <img src="/img/{{ bank.getLogo() }}">
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
{% endfor %}

<div class="clear"></div>

<div class="pagination">
    {% for i in 1..pageCount %}
    <a href="?page={{ i }}">
        {{ i }}
    </a>
    {% endfor %}

    <div>
        <a href="#">
            last
        </a>
        <a href="#">
            first
        </a>
    </div>
</div>