<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/build/styles/reset.css" rel="stylesheet">
    <link href="/build/styles/fonts.css" rel="stylesheet">
    <link href="/build/styles/index.css" rel="stylesheet">
    <link href="/build/styles/header.css" rel="stylesheet">
    <link href="/build/styles/footer.css" rel="stylesheet">
    <link href="/build/styles/brokerPage.css" rel="stylesheet">
    <link href="/build/styles/brokerRating.css" rel="stylesheet">
    <link href="/build/styles/reviewItem.css" rel="stylesheet">
    <link href="/build/styles/tariffItem.css" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="header container" >
    <div class="header__logo">
        <img src="/media/images/headerLogo.png" alt="">
    </div>
    <div class="header__menu">
        <div class="header__menuToggler">
            <img src="/media/images/arrow.svg" alt="">
            <span>CALCULATORS<br />CRUNCH REAL NUMBERS</span>
            <ul class="header__menuPages">
                <li><a href="/broker/let-me-cloud">LetMeCloud </a></li>
                <li><a href="/broker/iq-mining">IQMining </a></li>
                <li><a href="/broker/ecos">Ecos </a></li>
                <li><a href="/broker/gmining">Gmining </a></li>
                <li><a href="/broker/hash-shiny">HashShiny </a></li>
            </ul>
        </div>
<!--        <div class="header__search">-->
<!--            <img src="/media/images/search.svg" alt="">-->
<!--        </div>-->
<!--        <div class="header__signIn">-->
<!--            <a href="">Sign in</a>-->
<!--        </div>-->
<!--        <div class="header__signUp">-->
<!--            <a href="">Sign up</a>-->
<!--        </div>-->
    </div>
</header>

<main class="container" >
    <div class="brokerPage">
        <div class="breadcrumbs">
            <img class="breadcrumbs__home" src="/media/images/home.svg" alt="">
            <span class="breadcrumbs__separator">/</span>
            <span class="breadcrumbs__page">Brokers</span>
        </div>

        <?= $content ?>

    </div>
</main>
<footer class="footer">
    <div class="container">
        <img class="footer__logo" src="/media/images/footerLogo.png" alt="">
        <span class="footer__copyright">© 2022 superiormining.com</span>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();