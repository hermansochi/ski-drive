<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
            <form class="hero__form">
              <div class="form__box">
                <input class="form__input" type="tel" name="phone" id="phone1" required="required">
                <label class="form__label" for="phone1">Ваш телефон </label>
              </div>
              <button class="form__btn btn" type="submit">заказать звонок</button>
            </form>
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
                <img src="{{ Vite::asset('resources/img/min.jpg') }}" alt="Детский комплект" width="300" height="300">
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
                <img src="{{ Vite::asset('resources/img/foto1.jpg') }}" alt="Длительная аренда" width="450" height="450">
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
                за каждые три
                комплекта скидка увеличивается на <span>3%</span>.</p>
            </div>
          </div>
          <div class="sale__item col">
            <div class="sale__img">
                <img src="{{ Vite::asset('resources/img/ski.jpg') }}" alt="Скипасс" width="450" height="450">
            </div>
            <div class="sale__content">
              <h3 class="sale__subtitile subtitle">СКИ-ПАСС</h3>
              <p class="sale__descr">При заказе в нашей компании вы получите скидку в <span>20%</span> на абонемент, к
                подъемникам
                горнолыжных курортов.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="form">
      <div class="container">
        <h2 class="form__title title">Оставить заявку</h2>
        <form class="form__form">
          <div class="form__box">
            <input class="form__input" type="tel" name="phone" id="phone" required="required">
            <label class="form__label" for="phone">Телефон</label>
          </div>
          <button class="form__btn btn" type="submit">заказать звонок</button>
        </form>
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
        <h2 class="comment__title title">Отзывы наших клиентов</h2>
        <div class="comment__items row">
          <div class="comment__item col">
            <div class="comment__ava">
              <img src="#" alt="Пользователь" class="comment__img">
            </div>
            <div class="comment__wrap">
              <h3 class="comment__user">Иван Сидоров</h3>
              <p class="comment__text">
                Ребята это просто бомба, а не компания! Столько внимая к каждой мелочи я просто обалдел + мне как
                новичку
                все объяснили и рассказали и еще посоветовали куда надо первым делом идти)))
              </p>
            </div>
          </div>
          <div class="comment__item col">
            <div class="comment__ava">
              <img src="#" alt="Пользователь" class="comment__img">
            </div>
            <div class="comment__wrap">
              <h3 class="comment__user">Василий Теркин</h3>
              <p class="comment__text">
                Всем рекомендую от души, я хоть и не новичек и пользовался много какими прокатами но этот меня зацепил
                больше всех я и не думал даже, что у нас бывает такой сервис.
              </p>
            </div>
          </div>
          <div class="comment__item col">
            <div class="comment__ava">
              <img src="#" alt="Пользователь" class="comment__img">
            </div>
            <div class="comment__wrap">
              <h3 class="comment__user">Принцесса Несмеяна</h3>
              <p class="comment__text">
                Хочу оставить положительный отзыв о компании хотя раньше не когда не оставляла отзывы. Мы сыном очень
                были
                рады оказаться в гостях у этих людей такие доброжелательные и чаем напоили и подарок сделали, только у
                них
                теперь будем обслуживаться и в следующий раз друзей приведем
              </p>
            </div>
          </div>
          <div class="comment__item col">
            <div class="comment__ava">
              <img src="#" alt="Пользователь" class="comment__img">
            </div>
            <div class="comment__wrap">
              <h3 class="comment__user">Gansta</h3>
              <p class="comment__text">
                Чуваки я только сюда, доски просто огонь!!!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="form">
      <div class="container">
        <h2 class="form__title title">Оставить заявку</h2>
        <form class="form__form">
          <div class="form__box">
            <input class="form__input" type="tel" name="phone" id="phone2" required="required">
            <label class="form__label" for="phone2">Телефон</label>
          </div>
          <button class="form__btn btn" type="submit">заказать звонок</button>
        </form>
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
            <a class="btn" href="#">Построить маршрут</a>
            <div class="contact__phone">
              <a class="contact__link link" href="tel:+79882391100"><img src="./img/phone.png" alt="Телефон">+7(988) 239
                11 00</a>
              <a class="contact__link link" href="https://api.whatsapp.com/send?phone=79882391100" target="_blank"><img
                  src="./img/whatsapp.png" alt="whatsapp"> WhatsApp</a>
              <a class="contact__link link" href="https://t.me/" target="_blank"><img src="./img/telegram.png"
                  alt="telegram"> Telegram</a>
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
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>"></script>
</body>

</html>