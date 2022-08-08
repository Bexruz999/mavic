<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>

  <header class="header">
    <div class="container">
      <div id="header__nav" class="header__inner">
        <div data-menuanchor="top">
          <a class="logo" href="#top">
            <picture class="logo__img">
              <source srcset="images/logo-mobile.png" media="(max-width: 600px)">
              <img src="images/logo.png" alt="">
            </picture>
          </a>
        </div>
        <nav class="menu">
          <button class="menu__btn">
            <span class="menu__btn-line">  
            </span>
          </button>
          <ul class="menu__list">
            <li class="menu__list-item" data-menuanchor="products">
              <a class="menu__list-link" href="#products">О ДРОНЕ</a>
            </li>
            <li class="menu__list-item" data-menuanchor="benefits">
              <a class="menu__list-link" href="#benefits">ПРЕИМУЩЕСТВА</a>
            </li>
            <li class="menu__list-item" data-menuanchor="specification">
              <a class="menu__list-link" href="#specification">ХАРАКТЕРИСТИКИ</a>
            </li>
            <li class="menu__list-item" data-menuanchor="questions">
              <a class="menu__list-link" href="#questions">ВОПРОСЫ</a>
            </li>
            <li class="menu__list-item" data-menuanchor="contacts">
              <a class="menu__list-link" href="#contacts">КОНТАКТЫ</a>
            </li>
            <li class="menu__list-phone">
              <a class="header__phone-menu" href="tel:80505676767">8 (050) 567 67 67</a>
            </li>
          </ul>
        </nav>
        <div class="header__info">
          <button class="header__btn">КУПИТЬ</button>
          <a class="header__phone" href="tel:80505676767">8 (050) 567 67 67</a>
        </div>
      </div>
    </div>
  </header>

  <main id="fullpage">

    <section data-anchor="top" class="page-section top">
      <div class="page-section__wrapper top__wrapper">
        <div class="container">
          <div class="top__inner">
            <h1 class="top__title">
              Mavic 2 Pro
            </h1>
            <img src="images/mavic.png" alt="">
            <p class="top__text">
              Квадрокоптер Dji Mavic 2 Pro
              с профессиональной камерой Hasselblad
            </p>
            <ul class="top__social-list">
              <li class="top__social-item">
                <a class="top__social-link" href="#">
                  <img src="images/facebook.svg" alt="">
                </a>
              </li>
              <li class="top__social-item">
                <a class="top__social-link" href="#">
                  <img src="images/youtube.svg" alt="">
                </a>
              </li>
              <li class="top__social-item">
                <a class="top__social-link" href="#">
                  <img src="images/instagram.svg" alt="">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="scrool__btn">
          <a href="#products">
            <img src="images/arrow-down.svg" alt="">
          </a>
        </div>
      </div>
    </section>

    <section data-anchor="products" class="page-section products">
      <div class="page-section__wrapper">
        <div class="container">
          <h3 class="title products__title">Что такое Mavic 2 Pro?</h3>
          <div class="products__inner">
            <div class="products__text">
              <p>
                Дрон Mavic 2 Pro - это инженерное чудо, идеальное для аэросъемки. Дрон обладает всеми лучшими
                технологиями
                DJI, он преобразит мир аэросъемки.
              </p>
              <p>
                Mavic 2 Pro оснащен совершенно новой камерой Hasselblad L1D-20c. Камера L1D-20c работает по уникальной
                технологии Hasselblad Natural Colour Solution (HNCS)5, позволяющей пользователям делать великолепные
                снимки
                с воздуха с разрешением в 20 мегапикселей и потрясающими цветами.
              </p>
            </div>
            <div class="products__slider-box">
              <p class="products__slider-text">Лучшая беспилотная
                технология аэросъемки</p>
              <div class="products__slider">
                <div class="products__slider-item">
                  <img class="products__slider-img" src="images/slider-1.jpg" alt="">
                </div>
                <div class="products__slider-item">
                  <img class="products__slider-img" src="images/slider-1.jpg" alt="">
                </div>
                <div class="products__slider-item">
                  <img class="products__slider-img" src="images/slider-1.jpg" alt="">
                </div>
                <div class="products__slider-item">
                  <img class="products__slider-img" src="images/slider-1.jpg" alt="">
                </div>
                <div class="products__slider-item">
                  <img class="products__slider-img" src="images/slider-1.jpg" alt="">
                </div>
                <div class="products__slider-item">
                  <img class="products__slider-img" src="images/slider-1.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="scrool__btn">
          <a href="#benefits">
            <img src="images/arrow-down.svg" alt="">
          </a>
        </div>
      </div>
    </section>

    <section data-anchor="benefits" class="page-section benefits">
      <div class="page-section__wrapper">
        <div class="container">
          <h3 class="title">Преимущества</h3>
          <div class="benefits__items">
            <div class="benefits__item benefits__item-1">
              <div class="benefits__num">1</div>
              <div class="benefits__img">
                <img src="images/benefits-1.jpg" alt="">
              </div>
              <div class="benefits__info">
                <h4 class="benefits__info-title">
                  Интеллектуальные режимы
                </h4>
                <p class="benefits__info-text">
                  Mavic 2 унаследовал 6 стандартных режимов интеллектуальной съемки
                  QuickShot:Roket/ Dronie/ Circle/ Helix/Boome rang/Asteroid.
                </p>
              </div>
            </div>
            <div class="benefits__item benefits__item-2">
              <div class="benefits__num">2</div>
              <div class="benefits__img">
                <img src="images/benefits-2.jpg" alt="">
              </div>
              <div class="benefits__info">
                <h4 class="benefits__info-title">
                  Active Track 2.0
                </h4>
                <p class="benefits__info-text">
                  Усовершенствованный режим второго поколения распознаёт и отслеживает объекты ещё точнее, быстрее и
                  умнее.
                </p>
              </div>
            </div>
            <div class="benefits__item benefits__item-3">
              <div class="benefits__num">3</div>
              <div class="benefits__img">
                <img src="images/benefits-3.jpg" alt="">
              </div>
              <div class="benefits__info">
                <h4 class="benefits__info-title">
                  Панорамная съемка
                </h4>
                <p class="benefits__info-text">
                  Mavic 2 поддерживает 4 режима панорамной съёмки: сферическая, 180 градусов,
                  горизонтальная, вертикальная
                </p>
              </div>
            </div>
            <div class="benefits__item benefits__item-4">
              <div class="benefits__num">4</div>
              <div class="benefits__img">
                <img src="images/benefits-4.jpg" alt="">
              </div>
              <div class="benefits__info">
                <h4 class="benefits__info-title">
                  Крутая камера!
                </h4>
                <p class="benefits__info-text">
                  Технология Hyperlapse в четырёх режимах исполнения. Улучшенный фото режим HDR Функция HyperLight для
                  съёмки в условиях слабого освещения 4К съёмка
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="scrool__btn">
          <a href="#specification">
            <img src="images/arrow-down.svg" alt="">
          </a>
        </div>
      </div>
    </section>

    <section data-anchor="specification" class="page-section specification">
      <div class="page-section__wrapper">
        <div class="container">
          <h3 class="title">Характеристики</h3>
          <div class="specification__inner">
            <div class="specification__item">
              <div class="specification__box specification__box-1">
                <h4 class="specification__box-title">Dlog-M 10 бит</h4>
                <p class="specification__box-text">
                  Mavic 2 Pro поддерживает цветовой профиль Dlog-M 10 бит с более широким динамическим диапазоном,
                  дающим
                  больше возможностей для цветокоррекции.
                </p>
              </div>
              <div class="specification__box specification__box-2">
                <h4 class="specification__box-title">Камера Hasselblad</h4>
                <p class="specification__box-text">
                  Камера Hasselblad L1D-20С известны эргономичным дизайном и превосходным качеством изображений.
                </p>
              </div>
            </div>

            <div class="specification__item specification__item--center">
              <img src="images/mavic.png" alt="">
            </div>

            <div class="specification__item">
              <div class="specification__box specification__box-3">
                <h4 class="specification__box-title">Матрица CMOS 1</h4>
                <p class="specification__box-text">
                  Зона активной работы новой 1-дюймовой матрицы CMOS в четыре раза превышает показатели Mavic Pro
                </p>
              </div>
              <div class="specification__box specification__box-4">
                <h4 class="specification__box-title">Видео HDR</h4>
                <p class="specification__box-text">
                  Благодаря поддержке видео 4K HDR 10 бит, Mavic 2 Pro можно подсоединить к совместимому с HLG 4K ТВ и
                  просматривать запись в полном цветовом спектре
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="scrool__btn">
          <a href="#questions">
            <img src="images/arrow-down.svg" alt="">
          </a>
        </div>
      </div>
    </section>

    <section data-anchor="questions" class="page-section questions">
      <div class="page-section__wrapper">
        <div class="container">
          <h3 class="title">Остались вопросы?</h3>
          <div class="questions__items">
            <div class="questions__item">
              <h4 class="questions__item-title">Какие отличия между Mavic 2 Pro и Mavic 2 Zoom?</h4>
              <h4 class="questions__item-text">
                В Mavic 2 улучшены практически все аспекты: камера, передача видеосигнала, полётное время, скорость,
                уровень
                шума, обнаружение препятствий в нескольких направлениях, интеллектуальные функции и уникальная функция
                Hyperlapse (гиперлапс).
              </h4>
            </div>
            <div class="questions__item question__item--active">
              <h4 class="questions__item-title">Чем Mavic 2 лучше Mavic Pro?</h4>
              <h4 class="questions__item-text">
                В Mavic 2 улучшены практически все аспекты: камера, передача видеосигнала, полётное время, скорость,
                уровень
                шума, обнаружение препятствий в нескольких направлениях, интеллектуальные функции и уникальная функция
                Hyperlapse (гиперлапс).
              </h4>
            </div>
            <div class="questions__item">
              <h4 class="questions__item-title">Можно ли подключить Mavic 2 к очкам DJI Goggles?</h4>
              <h4 class="questions__item-text">
                В Mavic 2 улучшены практически все аспекты: камера, передача видеосигнала, полётное время, скорость,
                уровень
                шума, обнаружение препятствий в нескольких направлениях, интеллектуальные функции и уникальная функция
                Hyperlapse (гиперлапс).
              </h4>
            </div>
            <div class="questions__item">
              <h4 class="questions__item-title">Является ли Mavic 2 водонепроницаемым？</h4>
              <h4 class="questions__item-text">
                В Mavic 2 улучшены практически все аспекты: камера, передача видеосигнала, полётное время, скорость,
                уровень
                шума, обнаружение препятствий в нескольких направлениях, интеллектуальные функции и уникальная функция
                Hyperlapse (гиперлапс).
              </h4>
            </div>
          </div>
          <div class="scrool__btn">
            <a href="#contacts">
              <img src="images/arrow-down.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <section data-anchor="contacts" class="page-section contacts">
      <div class="page-section__wrapper">
        <div class="container">
          <h3 class="title">Контакты</h3>
          <div class="contacts__inner">
            <div class="contacts__info">
              <div class="contacts__info-box">
                <p class="contacts__info-title">Киев</p>
                <a class="contacts__info-phone" href="tel:+80505676767">+8 (050) 567– 67 – 67</a>
                <a class="contacts__info-email" href="mailto:dgi.mavic2pro.kiev@mail.ru">
                  dgi.mavic2pro.kiev@mail.ru</a>
              </div>
              <div class="contacts__info-box">
                <p class="contacts__info-title">Москва</p>
                <a class="contacts__info-phone" href="tel:+74995676767">+7 (499) 567– 67 – 67</a>
                <a class="contacts__info-email" href="dgi.mavic2pro.moscow@mail.ru">
                  dgi.mavic2pro.moscow@mail.ru</a>
              </div>
              <div class="contacts__info-box">
                <p class="contacts__info-title">Минск</p>
                <a class="contacts__info-phone" href="tel:+375175676767">+3 (7517) 567– 67 – 67</a>
                <a class="contacts__info-email" href="mailto:dgi.mavic2pro.minsk@mail.ru">
                  dgi.mavic2pro.minsk@mail.ru
                </a>
              </div>
            </div>
            <div class="contacts__form">
              <form>
                <h4 class="contacts__form-title">
                  Остались вопросы?
                </h4>
                <p class="contacts__form-text">
                  Мы обязательно свяжемся с вами в течение двух рабочих дней
                </p>
                <div class="contacts__form-line">
                  <input class="contacts__form-input" placeholder="Ваше имя" type="text">
                  <input class="contacts__form-input" placeholder="Ваше e-mail" type="email">
                </div>
                <textarea class="contacts__form-textarea" placeholder="Что вас интересует?">

            </textarea>
                <button class="contacts__form-btn " type="submit">
                  ОТПРАВИТЬ
                </button>
              </form>
            </div>
            <ul class="contacts__social-list">
              <li class="contacts__social-item">
                <a class="contacts__social-link" href="#">
                  <img src="images/facebook.svg" alt="">
                </a>
              </li>
              <li class="contacts__social-item">
                <a class="contacts__social-link" href="#">
                  <img src="images/youtube.svg" alt="">
                </a>
              </li>
              <li class="contacts__social-item">
                <a class="contacts__social-link" href="#">
                  <img src="images/instagram.svg" alt="">
                </a>
              </li>
            </ul>
          </div>
          <footer class="footer">
            <div class="container">
              <p class="footer__copy">
                © DJI, 2020
              </p>
            </div>
          </footer>
        </div>
      </div>
    </section>

  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/libs.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>