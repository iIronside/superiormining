<?php
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Superiormining</title>
        <link href="/build/styles/reset.css" rel="stylesheet">
        <link href="/build/styles/fonts.css" rel="stylesheet">
        <link href="/build/styles/index.css" rel="stylesheet">
        <link href="/build/styles/header.css" rel="stylesheet">
        <link href="/build/styles/footer.css" rel="stylesheet">
        <link href="/build/styles/companyPage.css" rel="stylesheet">
        <link href="/build/styles/brokerItem.css" rel="stylesheet">
        <link href="/build/styles/faqItem.css" rel="stylesheet">
        <link href="/build/styles/reviewItem.css" rel="stylesheet">
        <link href="/build/styles/userPage.css" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="header container" >
    <div class="header__logo">
        <a href="/">
            <img src="/media/images/headerLogo.png" alt="">
        </a>
    </div>
    <div class="header__menu">
        <div class="header__nav">
            <div class="header__navToggler">
                <img src="media/images/arrow.svg" alt="">
                <span>CALCULATORS<br />CRUNCH REAL NUMBERS</span>
            </div>
            <div class="header__nav--opened nav">
                <div class="nav__header"></div>
                <ul class="nav__pages">
                    <li><a href="/broker/let-me-cloud">LetMeCloud </a></li>
                    <li><a href="/broker/iq-mining">IQMining </a></li>
                    <li><a href="/broker/ecos">Ecos </a></li>
                    <li><a href="/broker/gmining">Gmining </a></li>
                    <li><a href="/broker/hash-shiny">HashShiny </a></li>
                </ul>
            </div>
        </div>
<!--        <div class="header__search">-->
<!--            <img src="media/images/search.svg" alt="">-->
<!--            <input class="header__searchInput" />-->
<!--        </div>-->
<!--        <div class="header__signIn">-->
<!--            <a href="">Sign in</a>-->
<!--        </div>-->
<!--        <div class="header__signUp">-->
<!--            <a href="">Sign up</a>-->
<!--        </div>-->
    </div>
</header>


<?= $content ?>

<footer class="footer">
    <div class="container">
        <img class="footer__logo" src="/media/images/footerLogo.png" alt="">
        <span class="footer__copyright">© 2022 superiormining.com</span>
    </div>
</footer>
<script>
    const brokerDetailsComponents = document.querySelectorAll('.brokerItem__details');
    let detailsOpenedList = [
        false, false, false, false, false
    ]

    for (let i=0; i < brokerDetailsComponents.length; i++) {
        brokerDetailsComponents[i].addEventListener('click', (e) => {
            e.currentTarget.closest('.brokerItem').classList.toggle('brokerItem--expanded');
            detailsOpenedList[i] = !detailsOpenedList[i];
            const text = detailsOpenedList[i] ? 'Close details' : 'Open Details' ;
            e.currentTarget.querySelector('button').innerText = text;
        })
    }

    const faqComponents = document.querySelectorAll('.faqItem');
    let faqOpenedList = [
        false, false, false, false, false, false, false,
    ];

    for (let i=0; i < faqComponents.length; i++) {
        faqComponents[i].addEventListener('click', (e) => {
            e.currentTarget.closest('.faqItem').classList.toggle('faqItem--opened');
            detailsOpenedList[i] = ! detailsOpenedList[i];
            const text = detailsOpenedList[i] ? '-' : '+'
            e.currentTarget.querySelector('.faqItem__questionExpander').innerText = text;
        })
    }
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
