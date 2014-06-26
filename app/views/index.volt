<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    {{ get_title() }}
    {{ stylesheet_link('css/reset.css') }}
    {{ stylesheet_link('css/style.css') }}

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,300italic' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="all banks">
</head>
<body>
<div class="page">
    <div class="navbar navbar-static-top">
        <div class="v-aligner">
            <div class="container">
                <div class="nav-collapse collapse">
                    <ul class="nav contact" id="main-nav">
                        <li class="logo">
                            <a class="brand" id="logo" href="/">
                                <span>ALL</span>BANKS.CH
                            </a>
                        </li>
                        <li><a href="/contact">contacts</a></li>
                        <li><a href="/labs">mortgages</a></li>
                        <li><a href="/labs">deposits</a></li>
                        <li><a href="/work">credit cards</a></li>
                        <li><a href="/">credits</a></li>
                        <li><a href="/banks/">Swiss banks</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="body">
    {{ content() }}
    </div>
</div>

<footer>
    <ul>
        <li><a href="/banks/">swiss banks</a></li>
        <li><a href="/">credits</a></li>
        <li><a href="/work">credit cards</a></li>
        <li><a href="/labs">deposits</a></li>
        <li><a href="/labs">mortgages</a></li>
        <li><a href="/contact">contacts</a></li>
    </ul>

    <p class="copy">&copy; 2014, allbanks.ch</p>
</footer>

{{ javascript_include('js/jquery-1.11.1.min.js') }}
</body>
</html>