<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="stylesheet" href="/build/css/vendors.css">
    <link rel="stylesheet" href="/build/css/main.css">

    <title>TITLE</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col col-6">
                    <a class="logo" href="/">
                        <img src="/build/img/sprite.svg#logo">
                    </a>
                </div>
                <div class="col col-6">
                    <div class="header__contacts">
                        <a class="header__contacts-item js-scrollto" href="#contactData"
                           onclick="$([document.documentElement, document.body]).animate({scrollTop: $('#contactData').offset().top}, 1000);">
                            <img class="icon" src="/build/img/sprite.svg#geo">
                            <span>Казань</span>
                        </a>
                        <a class="header__contacts-item desktop-only" href="tel:+79872900593">+7 (987) 290 05 93</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main">