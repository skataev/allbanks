<h1 xmlns="http://www.w3.org/1999/html">Swiss banks</h1>

<form method="get" class="bg1-block search">
    <input type="text" class="in-text" name="search" value="Suchbegriff...">
    <a class="button" href="#">Найти</a>
</form>

{% for i in 0..10 %}
<div class="bank-block {% if loop.index % 4 %} bank-block-left {% endif %}">
    <a href="/banks/citybank/">
        <img src="/img/finam_bank_135x85.gif">
    </a>
    <a href="/banks/citybank/">
        CityBank
    </a> / <span>
        <a href="#">Отделений</a> <span class="num">213</span>
    </span>
    <div class="phone">8 900 3320000</div>


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
    <a href="#">
        1
    </a>
    <a href="#">
        2
    </a>
    <a href="#">
        3
    </a>
    ...
    <a href="#">
        10
    </a>
    <a href="#">
        11
    </a>

    <div>
        <a href="#">
            last
        </a>
        <a href="#">
            first
        </a>
    </div>
</div>