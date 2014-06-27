<h1>Swiss banks</h1>

<form method="get" class="bg1-block search">
    <input type="text" class="in-text" name="search" value="Suchbegriff...">
    <a class="button" href="#">Найти</a>
</form>

{% for i in 0..10 %}
<div class="bank-block">
    <a href="/banks/citybank/">
        <img src="/img/finam_bank_135x85.gif">
    </a>
    <a href="/banks/citybank/">
        CityBank
    </a>
    <tel>8 900 3320000</tel>
    <a href="#">Отделений 101</a>

    <div class="inner-line">
        <a href="#">Кредиты 23</a>
        <a href="#">Ипотека 2</a>
        <a href="#">Вклады 23</a>
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