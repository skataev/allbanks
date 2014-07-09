<h1>Credit cards</h1>
<p class="note-line">
    Все кредитные карты Швейцарии. Информация о процентных стравках и условиях по кредитным картам
</p>


<form method="get" class="bg1-block search" action="/credit-cards/" id="search-credit-cards">
    <input type="text" class="in-text" name="limit" value="{{ search }}">
    <select name="currency">
        <option value="euro">€</option>
        <option value="euro">$</option>
    </select>
    <a class="button" onclick="document.getElementById('search-credit-cards').submit(); return false;" href="#">Найти</a>
</form>