<div class="bank-not-page">
<div class="bank-note">
    {% if bank.getLogo() %}
        <img src="{{ bank.getLogo() }}" class="bank-logo" title="{{ bank.getTitle() }}" alt="{{ bank.getTitle() }}">
    {% else %}
        <img src="/img/void-bank.png" class="bank-logo">
    {% endif %}

    <h1>{{ bank.getTitle() }}</h1>

    <p>
        {{ bank.getNote()|nl2br }}
    </p>

    <div class="clear"></div>
</div>

<h3>{{ bank.getTitle() }}'s offers</h3>
banks product list
banks product list
banks product list
banks product list
banks product list
banks product list
banks product list
banks product list
banks product list
<h3>Info</h3>
<table class="info-table">
    <tr>
        <td align="right" width="200" class="bb br">
            <b>Main Office</b>
        </td>
        <td class="bb bl">
            {{ bank.getAddress()|nl2br }}
        </td>
    </tr>
    <tr>
        <td align="right" width="200" class="bb br">
            <b>Branches & ATMs</b>
        </td>
        <td class="bb bl">
            <a class="link-with-icon" href="#">
                <i class="icon-location"></i>
                <span class="">map</span>
            </a>
        </td>
    </tr>
    <tr>
        <td align="right" width="200">
            <b>web</b>
        </td>
        <td class="bl">
            <a href="http://{{ bank.getWeb() }}" target="_blank" rel="nofollo">
            {{ bank.getWeb()|nl2br }}
            </a>
        </td>
    </tr>
</table>
</div>

<div class="aside">
    <h3>MAP</h3>
</div>

<div class="clear"></div>