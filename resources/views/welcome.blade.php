<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">
        <link type="image/png" rel="icon" href="{{ Vite::asset('resources/img/64.png') }}">
        <meta name="description" content="Прокат лыж, сноубордов, полной экипировки на горнолыжных курортах Сочи. У нас можно взять в прокат лыжи, сноуборд">
        <title>Прокат горнолыжного снаряжения Красная поляна</title>
    </head>

<body>
<header class="header" id="header">
    <div class="container">
        <div class="header__items row">
            <div class="header__logo logo col">
                <span>Ski</span>Drive
            </div>
            <nav class="header__nav nav col" data-nav>
                <ul class="nav__list row">
                    <li class="nav__item col">
                        <a href="#hero" class="nav__link link link--active">Главная</a>
                    </li>
                    <li class="nav__item col">
                        <a href="#price" class="nav__link link">Цены</a>
                    </li>
                    <li class="nav__item col">
                        <a href="#sale" class="nav__link link">Скидки</a>
                    </li>
                    <li class="nav__item col">
                        <a href="#adv" class="nav__link link">Почему мы</a>
                    </li>
                    <li class="nav__item col">
                        <a href="#comment" class="nav__link link">Отзывы</a>
                    </li>
                    <li class="nav__item col">
                        <a href="#contact" class="nav__link link">Контакты</a>
                    </li>
                    <li class="nav__item col">
                        <a href="tel:+79882391100" class="header__phone phone">+7(988) 239 11 00</a>
                    </li>
                </ul>
            </nav>
            <button class="burger col" data-burger aria-expanded="false" aria-label="Открыть меню">
                <span class="burger__line"></span>
            </button>
        </div>
    </div>
</header>
<main class="main">
    <article class="hero" id="hero">
        <div class="container">
            <div class="hero__items">
                <div class="hero__content">
                    <h1 class="hero__title title">Прокат <span>экипировки</span> <br> для отдыха на <span
                            class="title--blue">горнолыжных</span> курортах Сочи</h1>
                    <p class="hero__descr">Аренда лыж, сноубордов, защитной амуниции и полной экипировки для вашего активного
                        отдыха</p>
                    <div class="hero__form">
                        <div class="form__box">
                            <input class="form__input" name="phone" id="phone1" required="required">
                            <label class="form__label" for="phone1">Ваш телефон </label>
                        </div>
                        <button class="form__btn btn" data-modal="up">заказать звонок</button>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <section class="price" id="price">
        <div class="container">
            <h2 class="price__title title">Цены</h2>
            <div class="price__items row">
                <div class="price__item col">
                    <div class="price__img">
                        <img src="{{ Vite::asset('resources/img/min.jpg') }}" alt="Минимальный комплект" width="300" height="300">
                    </div>
                    <h3 class="price__subtitle subtitle">Минимальный</h3>
                    <p class="price__descr">
                        Минимальный комплект: лыжи/сноуборд, ботинки, палки.
                    </p>
                    <p class="price__price">
                        от 999₽/Сутки
                    </p>
                </div>
                <div class="price__item col">
                    <div class="price__img">
                        <img src="{{ Vite::asset('resources/img/max.jpg') }}" alt="Оптимальный комплект" width="300" height="300">
                    </div>
                    <h3 class="price__subtitle subtitle">Оптимальный</h3>
                    <p class="price__descr">
                        Полная экипировка: лыжи/сноуборд, ботинки, палки, куртка, штаны, перчатки, шлем, маска
                    </p>
                    <p class="price__price">
                        от 3000₽/Сутки
                    </p>
                </div>
                <div class="price__item col">
                    <div class="price__img">
                        <img src="{{ Vite::asset('resources/img/test.jpg') }}" alt="Максимальный комплект" width="300" height="300">
                    </div>
                    <h3 class="price__subtitle subtitle">Максимальный</h3>
                    <p class="price__descr">
                        Полная экипировка премиум сегмента: лыжи/сноуборд, ботинки, палки, куртка, штаны, перчатки, шлем, маска
                    </p>
                    <p class="price__price">
                        от 999₽/Сутки
                    </p>
                </div>
                <div class="price__item col">
                    <div class="price__img">
                        <img src="{{ Vite::asset('resources/img/max.jpg') }}" alt="Детский комплект" width="300" height="300">
                    </div>
                    <h3 class="price__subtitle subtitle">Детский</h3>
                    <p class="price__descr">
                        Полная экипировка для детей: лыжи/сноуборд, ботинки, палки, куртка, штаны, перчатки, шлем, маска
                    </p>
                    <p class="price__price">
                        от 999₽/Сутки
                    </p>
                </div>
                <div class="price__item col">
                    <div class="price__img">
                        <img src="{{ Vite::asset('resources/img/min.jpg') }}" alt="Минимальный комплект" width="300" height="300">
                    </div>
                    <h3 class="price__subtitle subtitle">Минимальный</h3>
                    <p class="price__descr">
                        Минимальный комплект: лыжи/сноуборд, ботинки, палки.
                    </p>
                    <p class="price__price">
                        от 999₽/Сутки
                    </p>
                </div>
                <div class="price__item col">
                    <div class="price__img">
                        <img src="{{ Vite::asset('resources/img/max.jpg') }}" alt="Оптимальный комплект" width="300" height="300">
                    </div>
                    <h3 class="price__subtitle subtitle">Оптимальный</h3>
                    <p class="price__descr">
                        Полная экипировка: лыжи/сноуборд, ботинки, палки, куртка, штаны, перчатки, шлем, маска
                    </p>
                    <p class="price__price">
                        от 3000₽/Сутки
                    </p>
                </div>
                <div class="price__item col">
                    <div class="price__img">
                        <img src="{{ Vite::asset('resources/img/test.jpg') }}" alt="Максимальный комплект" width="300" height="300">
                    </div>
                    <h3 class="price__subtitle subtitle">Максимальный</h3>
                    <p class="price__descr">
                        Полная экипировка премиум сегмента: лыжи/сноуборд, ботинки, палки, куртка, штаны, перчатки, шлем, маска
                    </p>
                    <p class="price__price">
                        от 5999₽/Сутки
                    </p>
                </div>
                <div class="price__item col">
                    <div class="price__img">
                        <img src="{{ Vite::asset('resources/img/max.jpg') }}" alt="Детский комплект" width="300" height="300">
                    </div>
                    <h3 class="price__subtitle subtitle">Детский</h3>
                    <p class="price__descr">
                        Полная экипировка для детей: лыжи/сноуборд, ботинки, палки, куртка, штаны, перчатки, шлем, маска
                    </p>
                    <p class="price__price">
                        от 999₽/Сутки
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sale" id="sale">
        <div class="container">
            <h2 class="sale__title title">Программа лояльности</h2>
            <div class="sale__items row">
                <div class="sale__item col">
                    <div class="sale__img">
                        <img src="{{ Vite::asset('resources/img/foto1.jpg') }}" alt="Долгосрочная аренда" width="450" height="450">
                    </div>
                    <div class="sale__content">
                        <h3 class="sale__subtitile subtitle">При аренде снаряжения от 3-х дней</h3>
                        <p class="sale__descr">Вас ожидает скидка в <span>10%</span> при аренде снаряжения более трех дней.</p>
                    </div>
                </div>
                <div class="sale__item col">
                    <div class="sale__img">
                        <img src="{{ Vite::asset('resources/img/fasttrack.jpg') }}" alt="Приведи друга" width="450" height="450">
                    </div>
                    <div class="sale__content">
                        <h3 class="sale__subtitile subtitle">Больше значит выгоднее</h3>
                        <p class="sale__descr">Берите в прокат экипировку в месте с друзьями и получите скидку от <span>10%</span>
                            за каждые три комплекта скидка увеличивается на <span>3%</span>.</p>
                    </div>
                </div>
                <div class="sale__item col">
                    <div class="sale__img">
                        <img src="{{ Vite::asset('resources/img/ski.jpg') }}" alt="Скидка на Ски-пасс" width="450" height="450">
                    </div>
                    <div class="sale__content">
                        <h3 class="sale__subtitile subtitle">СКИ-ПАСС</h3>
                        <p class="sale__descr">При заказе в нашей компании вы получите скидку в <span>20%</span> на абонемент, к
                            подъемникам горнолыжных курортов.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="form">
        <div class="container">
            <h2 class="form__title title">Оставить заявку</h2>
            <div class="form__form">
                <div class="form__box">
                    <input class="form__input" name="phone" id="phone2" required="required">
                    <label class="form__label" for="phone2">Телефон</label>
                </div>
                <button class="form__btn btn" data-modal="center">заказать звонок</button>
            </div>
        </div>
    </section>
    <section class="adv" id="adv">
        <div class="container">
            <h2 class="adv__title title">Почему мы?</h2>
            <ol class="adv__items row">
                <li class="adv__item col">
                    <h3 class="adv__subtitle subtitle">Индивидуальный подход</h3>
                    <p class="adv__descr">
                        Мы с трепетом относимся к нашим клиентам и хотим, чтобы вы получили максимальные впечатления от отдыха и
                        сохранили в памяти яркие моменты, а все хлопоты по снаряжению мы берем на себя.
                    </p>
                </li>
                <li class="adv__item col">
                    <h3 class="adv__subtitle subtitle">Только лучшее снаряжение</h3>
                    <p class="adv__descr">
                        Безопасность и ваше удобство для нас не пустые слова, мы печемся о том что бы вы были максимально
                        защищены, поэтому мы выбираем только лучшее снаряжение и не используем неизвестных производителей.
                    </p>
                </li>
                <li class="adv__item col">
                    <h3 class="adv__subtitle subtitle">Чистота</h3>
                    <p class="adv__descr">
                        Каждая вещь перед тем как попасть в руки клиента проходит несколько этапов чистки и дезинфекции, чистота и
                        порядок прежде всего.
                    </p>
                </li>
                <li class="adv__item col">
                    <h3 class="adv__subtitle subtitle">Богатый ассортимент</h3>
                    <p class="adv__descr">
                        Большой выбор экипировки и аксессуаров для горнолыжного отдыха, подберем и обеспечим под любые требования
                        как для обычного пользователя, так и профессионала.
                    </p>
                </li>
            </ol>
        </div>
    </section>
    <section class="action">
        <div class="container">
            <h2 class="action__title title">Как мы работаем</h2>
            <div class="action__items row">
                <div class="action__item col">
                    <div class="action__img">
                        <img src="{{ Vite::asset('resources/img/call.png') }}" alt="Заявка">
                    </div>
                    <h3 class="action__subtitle subtitle">Заявка</h3>
                    <p class="action__text">
                        Оставляете заявку, с вами свяжется наш менеджер.
                    </p>
                </div>
                <div class="action__item col">
                    <div class="action__img">
                        <img src="{{ Vite::asset('resources/img/choice.png') }}" alt="Выбор">
                    </div>
                    <h3 class="action__subtitle subtitle">Подбор</h3>
                    <p class="action__text">
                        Наш менеджер выявит потребности и подготовит экипировку.
                    </p>
                </div>
                <div class="action__item col">
                    <div class="action__img">
                        <img src="{{ Vite::asset('resources/img/contract.png') }}" alt="Договор">
                    </div>
                    <h3 class="action__subtitle subtitle">Договор</h3>
                    <p class="action__text">
                        Подписание необходимых документов.
                    </p>
                </div>
                <div class="action__item col">
                    <div class="action__img">
                        <img src="{{ Vite::asset('resources/img/service.png') }}" alt="Сервис">
                    </div>
                    <h3 class="action__subtitle subtitle">Услуга</h3>
                    <p class="action__text">
                        Проверяем и выдаем амуницию.
                    </p>
                </div>
                <div class="action__item col">
                    <div class="action__img">
                        <img src="{{ Vite::asset('resources/img/return.png') }}" alt="Возврат">
                    </div>
                    <h3 class="action__subtitle subtitle">Возврат</h3>
                    <p class="action__text">
                        Возврат экипировки в указанный договором срок.
                    </p>
                </div>
                <div class="action__item col">
                    <div class="action__img">
                        <img src="{{ Vite::asset('resources/img/recall.png') }}" alt="Отзыв">
                    </div>
                    <h3 class="action__subtitle subtitle">Обратная связь</h3>
                    <p class="action__text">
                        Будем рады если вы оставите отзыв о нашей работе.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="comment" id="comment">
        <div class="container">
            <h2 class="comment__title title">
                <a class="h2link" href="https://yandex.ru/maps/org/drive/13187836374/reviews/?ll=40.258242%2C43.687644&z=16">Отзывы</a> наших клиентов
            </h2>
            <div class="comment__items row">
                <div class="comment__item col">
                    <div class="comment__ava">
                        <img src="{{ Vite::asset('resources/img/ivanu.jpg') }}" alt="Иван Юлин" class="comment__img">
                    </div>
                    <div class="comment__wrap">
                        <h3 class="comment__user">Иван Юлин</h3>
                        <p class="comment__text">
                            Отличный прокатный центр, хорошее обслуживание и вежливый персонал. Оборудование исправное, надеждное.
                            Все было по высшему разряду!</p>
                    </div>
                </div>
                <div class="comment__item col">
                    <div class="comment__ava">
                        <img src="{{ Vite::asset('resources/img/divan.jpeg') }}" alt="Диванный критик" class="comment__img">
                    </div>
                    <div class="comment__wrap">
                        <h3 class="comment__user">Диванный критик</h3>
                        <p class="comment__text">
                            Отличный прокат! Цена /качество все отлично! Консультант помог подобрать нужную экипировку
                            всей семье! Всегда берём только там. Рекомендую!
                        </p>
                    </div>
                </div>
                <div class="comment__item col">
                    <div class="comment__ava">
                        <img src="{{ Vite::asset('resources/img/andreyt.jpeg') }}" alt="Andrew Tarlikov" class="comment__img">
                    </div>
                    <div class="comment__wrap">
                        <h3 class="comment__user">Andrew Tarlikov</h3>
                        <p class="comment__text">
                            Большой выбор позволяет мне как новичку катания подобрать более подходящее под мой уровень.
                            Не далеко от подъемника Горки Город.
                        </p>
                    </div>
                </div>
                <div class="comment__item col">
                    <div class="comment__ava">
                        <img src="{{ Vite::asset('resources/img/default.png') }}" alt="Герман А." class="comment__img">
                    </div>
                    <div class="comment__wrap">
                        <h3 class="comment__user">Герман А.</h3>
                        <p class="comment__text">
                            Я только сюда, доски просто огонь!!!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="form">
        <div class="container">
            <h2 class="form__title title">Оставить заявку</h2>
            <div class="form__form">
                <div class="form__box">
                    <input class="form__input" name="phone" id="phone3" required="required">
                    <label class="form__label" for="phone3">Телефон</label>
                </div>
                <button class="form__btn btn" data-modal="bottom">заказать звонок</button>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="contact__title title">Контакты</h2>
            <div class="contact__items row">
                <div class="contact__item contact__data">
                    <h3 class="contact__subtitle subtitle">Наш адрес:</h3>
                    <address>
                        <p>Берёзовая ул., 70, село Эсто-Садок</p>
                    </address>
                    <a class="btn" href="https://yandex.ru/maps/?rtext=~43.687711,40.258210" target="_blank">Построить маршрут</a>
                    <div class="contact__phone">
                        <a class="contact__link link" href="tel:+79882391100">
                            <img src="{{ Vite::asset('resources/img/phone.png') }}" alt="Телефон">
                            +7(988) 239 11 00</a>
                        <a class="contact__link link" href="https://api.whatsapp.com/send?phone=79882391100" target="_blank">
                            <img src="{{ Vite::asset('resources/img/whatsapp.png') }}" alt="Whatsapp">
                            WhatsApp</a>
                        <a class="contact__link link" href="https://t.me/prokatdrive" target="_blank">
                            <img src="{{ Vite::asset('resources/img/telegram.png') }}" alt="Telegram">
                            Telegram</a>
                    </div>
                    <h3 class="contact__subtitle subtitle">Время работы:</h3>
                    <p>Пн-Вс: 8:00 - 23:00</p>
                </div>
                <div class="contact__item contact__map" id="map">
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="container">
        <div class="footer__items">
            <div class="footer__item"></div>
            <div class="footer__item"></div>
            <div class="footer__item"></div>
        </div>
    </div>
</footer>
<div class="btnUp">&uarr;</div>
<div class="modal" id="modal">
    <div class="modal__bg modal__exit"></div>
    <div class="modal__container">
        <p class="modal__num title">Заказ № <span id="order_id">10000</span></p>
        <p class="modal__phone">Ваш номер телефона <span id="order_phone">+7(000)000-00-00</span></p>
        <button class="modal__close modal__exit">&times;</button>
    </div>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(92623638, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92623638" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=b16d2be2-a9a0-4c24-b977-b135f92dcfe8"></script>

</body>

</html>
