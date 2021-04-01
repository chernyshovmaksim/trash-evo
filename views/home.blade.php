@extends('layouts.base')


@section('content')

    <header class="header">
        <div class="container header__wrapper">
            <div class="header__logo">
                <a href="/">
                    <img class="lazy" width="50px" height="50px"
                         data-src="{{ \Helper::phpThumb('/theme/img/logo.webp', 'w=50,h=50,webp=1') }}"
                         alt="Вывоз мусора Новосибирск">
                </a>
            </div>
            <div class="header__nav">
                <nav class="nav">
                    <a class="nav__item" href="/">Главная</a>
                    <a class="nav__item" href="#trash">Мусор</a>
                    <a class="nav__item" href="#cars">Техника</a>
                    <a class="nav__item" href="#price">Прайс</a>
                    <a class="nav__item" href="#documents">Документы</a>
                    <a class="nav__item" href="#details">Реквизиты</a>
                    <a class="nav__item" href="#callback" data-popup>Заказать звонок</a>
                </nav>
                <nav class="mobile-nav">
                    <ul>
                        <li><a class="nav__item" href="#">Главная</a></li>
                        <li><a class="nav__item" href="#trash">Мусор</a></li>
                        <li><a class="nav__item" href="#cars">Техника</a></li>
                        <li><a class="nav__item" href="#price">Прайс</a></li>
                        <li><a class="nav__item" href="#documents">Документы</a></li>
                        <li><a class="nav__item" href="#details">Реквизиты</a></li>
                        <li><a class="nav__item" href="#callback">Заказать звонок</a></li>
                    </ul>
                </nav>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="header__contacts contacts">
                <div class="contacts__icon">
                    <a href="#">
                        <img class="lazy" width="28px" height="28px"
                             data-src="{{ \Helper::phpThumb('/theme/img/phone-call.webp', 'webp=1,w=28,h=28') }}"
                             alt="call">
                    </a>
                </div>
                <div class="contacts__data">
                    <div class="contacts__phone">
                        <a href="tel://+79538888497">8 (953) 8888-497</a>
                    </div>
                    <div class="contacts__jobs-time">
                        Работаем ежедневно 24/7
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="hero">
        <div class="container hero__wrapper">
            <h1 class="header-1">
                Срочный вывоз любого мусора
            </h1>
            <h2 class="header-2">
                в Новосибирске с грузчиками и без
            </h2>

            <div class="hero__content">
                <div class="hero__slider slider">

                    @foreach($sliders as $slide)
                        <div class="slider__item">
                            <img class="lazy"
                                 data-src="{{\Helper::phpThumb($slide['slider_image'], 'webp=1,w=840,h=560,zc=1')}}"
                                 alt="{{$slide['pagetitle']}}">
                            <div class="slider__overlay"></div>
                            <div class="slider__title">{{$slide['pagetitle']}}</div>
                            <div class="slider__subtitle">{{$slide['longtitle']}}</div>
                        </div>
                    @endforeach

                </div>
                <div class="hero__description">
                    <div class="hero__items">
                        <div class="hero__item">
                            <img class="lazy" data-src="/theme/img/5.webp" alt="">
                            <span class="header-3">Срочная подача машины после заявки</span>
                        </div>
                        <div class="hero__item">
                            <img class="lazy" data-src="/theme/img/2.webp" alt="">
                            <span class="header-3">Вывозим мусор в удобное для вас время</span>
                        </div>
                    </div>
                    <div class="hero__btn btn" data-popup>Заказать вызов</div>
                </div>
            </div>
        </div>
    </section>


    <section class="trash" id="trash">
        <div class="container trash__wrapper">
            <h1 class="header-1">
                Вывоз любого мусора
            </h1>
            <h2 class="header-2">
                Более 5 лет мы успешно утилизируем
            </h2>

            <div class="trash__content">
                <div class="trash__services services">

                    @foreach($services as $service)
                        <div class="services__item">
                            <div class="services__image">
                                <img class="lazy" width="190px"
                                     data-src="{{\Helper::phpThumb($service['service_image'], 'w=190,h=190,webp=1')}}"
                                     alt="{{$service['pagetitle']}}">
                            </div>
                            <div class="services__title header-3">{{$service['pagetitle']}}</div>
                        </div>
                    @endforeach
                </div>
                <div class="trash__questions question-block">
                    <h3 class="question-block__header">- Сколько будет стоить вывоз вашего мусора?</h3>
                    <h3 class="question-block__header">- Менеджер рассчитает стоимость и подберет машину.</h3>
                    <div class="question-block__callback consultation">
                        <div class="consultation__header">
                            <h4>Просто позвоните нам</h4>
                            <a href="tel://+79538888497">8 (953) 8888-497</a>
                        </div>
                        <div class="consultation__btn btn" data-popup>Получить консультацию</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cars" id="cars">
        <div class="container cars__wrapper">
            <h1 class="header-1">
                Наша техника
            </h1>
            <h2 class="header-2">
                Подбираем технику под задачи, и Вы не переплачиваете
            </h2>

            <div class="cars__content">
                <div class="cars__item car">
                    <div class="car__photo">
                        <img class="lazy" data-src="/theme/img/3.webp" alt="">
                    </div>
                    <div class="car__title">Газель 8 куб. м.</div>
                    <div class="car__description">
                        <p>Цельнометаллическая Газель</p>
                        <p>Объемом грузового отсека <strong>8 куб. м.</strong></p>
                        <p>Грузоподъемность <strong>1,5т.</strong></p>
                        <p>Проходит в любые арки</p>
                        <p>Для вывоза: <strong>бытовой техники, мебели, строительного мусора в мешках.</strong></p>
                    </div>
                </div>
                <div class="cars__item car">
                    <div class="car__photo">
                        <img class="lazy" data-src="/theme/img/3.webp" alt="">
                    </div>
                    <div class="car__title">Газель 8 куб. м.</div>
                    <div class="car__description">
                        <p>Цельнометаллическая Газель</p>
                        <p>Объемом грузового отсека <strong>8 куб. м.</strong></p>
                        <p>Грузоподъемность <strong>1,5т.</strong></p>
                        <p>Проходит в любые арки</p>
                        <p>Для вывоза: <strong>бытовой техники, мебели, строительного мусора в мешках.</strong></p>
                    </div>
                </div>
                <div class="cars__item car">
                    <div class="car__photo">
                        <img class="lazy" data-src="/theme/img/3.webp" alt="">
                    </div>
                    <div class="car__title">Газель 8 куб. м.</div>
                    <div class="car__description">
                        <p>Цельнометаллическая Газель</p>
                        <p>Объемом грузового отсека <strong>8 куб. м.</strong></p>
                        <p>Грузоподъемность <strong>1,5т.</strong></p>
                        <p>Проходит в любые арки</p>
                        <p>Для вывоза: <strong>бытовой техники, мебели, строительного мусора в мешках.</strong></p>
                    </div>
                </div>
                <div class="cars__item car">
                    <div class="car__photo">
                        <img class="lazy" data-src="/theme/img/3.webp" alt="">
                    </div>
                    <div class="car__title">Газель 8 куб. м.</div>
                    <div class="car__description">
                        <p>Цельнометаллическая Газель</p>
                        <p>Объемом грузового отсека <strong>8 куб. м.</strong></p>
                        <p>Грузоподъемность <strong>1,5т.</strong></p>
                        <p>Проходит в любые арки</p>
                        <p>Для вывоза: <strong>бытовой техники, мебели, строительного мусора в мешках.</strong></p>
                    </div>
                </div>
                <div class="cars__item car">
                    <div class="car__photo">
                        <img class="lazy" data-src="/theme/img/3.webp" alt="">
                    </div>
                    <div class="car__title">Газель 8 куб. м.</div>
                    <div class="car__description">
                        <p>Цельнометаллическая Газель</p>
                        <p>Объемом грузового отсека <strong>8 куб. м.</strong></p>
                        <p>Грузоподъемность <strong>1,5т.</strong></p>
                        <p>Проходит в любые арки</p>
                        <p>Для вывоза: <strong>бытовой техники, мебели, строительного мусора в мешках.</strong></p>
                    </div>
                </div>
                <div class="cars__item car">
                    <div class="car__photo">
                        <img class="lazy" data-src="/theme/img/3.webp" alt="">
                    </div>
                    <div class="car__title">Газель 8 куб. м.</div>
                    <div class="car__description">
                        <p>Цельнометаллическая Газель</p>
                        <p>Объемом грузового отсека <strong>8 куб. м.</strong></p>
                        <p>Грузоподъемность <strong>1,5т.</strong></p>
                        <p>Проходит в любые арки</p>
                        <p>Для вывоза: <strong>бытовой техники, мебели, строительного мусора в мешках.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="price" id="price">
        <div class="container price__wrapper">
            <h1 class="header-1">
                Наши тарифы - просты и понятны
            </h1>
            <h2 class="header-2">
                Работаем с 2015 года
            </h2>

            <div class="price__content">
                <table>
                    <thead>
                    <tr>
                        <td>Машина</td>
                        <td>Обьем</td>
                        <td>Вес</td>
                        <td>Цена</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Газель тент</td>
                        <td>8 м3</td>
                        <td>до 1 т.</td>
                        <td>2500 р.</td>
                    </tr>
                    <tr>
                        <td>Газель тент</td>
                        <td>8 м3</td>
                        <td>до 1 т.</td>
                        <td>2500 р.</td>
                    </tr>
                    <tr>
                        <td>Газель тент</td>
                        <td>8 м3</td>
                        <td>до 1 т.</td>
                        <td>2500 р.</td>
                    </tr>
                    <tr>
                        <td>Газель тент</td>
                        <td>8 м3</td>
                        <td>до 1 т.</td>
                        <td>2500 р.</td>
                    </tr>
                    </tbody>
                </table>
                <div class="call btn" data-popup>
                    Заказать вызов
                </div>
            </div>
        </div>
    </section>


    <section class="documents" id="documents">
        <div class="container documents__wrapper">
            <h1 class="header-1">
                Работаем и с юридическими лицами
            </h1>
            <h2 class="header-2">
                Заключаем договора. Предоставляем отчетные документы
            </h2>

            <div class="documents__content">
                <div class="documents__header">
                    Реквизиты для заключения договора
                </div>
                <div class="documents_image"><img class="lazy" data-src="/theme/img/doorway_-4-1.webp" alt=""></div>
                <div class="documents__description">
                    <p>
                        <strong>Индивидуальный предприниматель</strong>: Юмагулов Илья Евгеньевич<br>
                        <strong>Юридический адрес</strong>: г. Новосибирск<br>
                        <strong>ИНН</strong>: 540139434500<br>
                        <strong>Р/сч</strong>: 40802810600000898314 в АО «ТИНЬКОФФ БАНК» Г.Москва<br>
                        <strong>Кор/сч</strong>: 30101810145250000974<br>
                        <strong>БИК</strong>: 044525974<br>
                        <br><strong>Email</strong>: <a href="mailto:safirline@mail.ru">eurogruzchiki@yandex.ru</a>
                    </p>
                </div>
            </div>

            <div class="documents__callback d-callback">
                <div class="d-callback__header">
                    Если Вы хотите решить все вопросы с вывозом мусора раз и навсегда - обращайтесь.
                </div>
                <div class="btn d-callback__btn" data-popup>Заказать вывоз мусора</div>
            </div>
        </div>
    </section>


    <section class="description" id="details">
        <div class="container description__wrapper">
            <h2 class="header-1">
                Вывоз мусора в Новосибирске
            </h2>

            <div class="description__content">
                <p>
                    Как правило, после проведения строительно-ремонтных работ в квартире или частном доме накапливается
                    большое количество различного мусора и хлама. Например, строительный мусор в мешках и пакетах,
                    ломаные листы гипсокартона и остатки сухих смесей. Помимо этого, очень часто услугу вывоз мусора
                    заказывают при вывозе старого хлама из гаража или старой квартиры.
                </p>
                <p>
                    Срочный вывоз мусора после ремонта необходим для того, что бы не мешать рабочим доделывать финишную
                    работу. Остатки мусора мешаются под ногами, создают пыль и вредят дыхательному процессу
                </p>
                <p>
                    Для того, что бы очистить помещение от мусора необходимо заказать специализированный грузовой
                    автомобиль. Если требует ситуация, закажите грузчиков для погрузки.
                </p>
                <h3 class="header-2">
                    Наши основные преимущества
                </h3>
                <p>
                    Компания мусоровывоз54.рф поможет вывезти ваш строительный мусор, оконные рамы, мелочевку в
                    мешках, дерево, старую мебель и бытовую технику на городской полигон ТБО.
                </p>
                <p>
                    Так же мы предлагаем грузчиков для погрузки в машину старой мебели, не нужных предметов интерьера
                    и различной крупногабаритной техники. Мы заботимся о нашем сервисе и стараем предоставить
                    клиентам лучшие условия:
                </p>
                <ul>
                    <li>Работаем с юридическими и физическими лицами</li>
                    <li>Подберем для вас технику нужных параметров в зависимости от объема мусора</li>
                    <li>Предоставляем бригаду на демонтажные работы</li>
                    <li>Предоставляем грузчиков на погрузку</li>
                    <li>Работаем ежедневно и круглосуточно</li>
                </ul>

                <h3 class="header-2">
                    Наша техника
                </h3>
                <p>
                    Наш автопарк состоит преимущественно из самосвальной техники. Оперативно, в течении часа мы готвоы
                    предоставить единицы из нашего автопарка:
                </p>
                <ul>
                    <li>Газели до 1,5 тонн различных модификаций и объема: тент, будка, высокая, удлиненная или
                        бортовая.
                    </li>
                    <li>Самосвалы ЗИЛ до 5 тонн и объемом до 6 м3.</li>
                    <li>Самосвалы КАМАЗ до 15 тонн и объемом до 12 м3.</li>
                    <li>Бункера до 4 тонн и объемом до 10 м3.</li>
                </ul>

                <h3 class="header-2">
                    Как заказать вывоз мусора в Новосибирске из квартиры?
                </h3>
                <p>
                    Для вывоза небольшого объема мусора подойдет газель, как правило туда вмещается не более 50 мешков
                    весом до 30 кг. Обычно газель заказывают для вывоза мусора после ремонта в квартире. Но если у вас
                    была грандиозная стройка, то без самосвалов зил или камаз вам не обойтись. Так же необходимо
                    заказать грузчиков для погрузки в автомобиль.
                </p>
                <strong>Как определить сколько нужно грузчиков?</strong>
                <ul>
                    <li>Обычно на погрузку газели достаточно двоих грузчиков</li>
                    <li>
                        Для самосвалов ЗИЛ или КАМАЗ необходимо заказывать от 3х человек. Это необходимо для того, что
                        бы 1 человек стоял в кузове и компактно раскладывал, а остальные двое закидывали хлам.
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="other-service">
        <div class="container other-service__wrapper">
            <h2 class="header-1">
                Другие услуги
            </h2>

            <div class="other-service__content">
                <div class="other-service__item">
                    <div class="other-service__image">
                        <img class="lazy" data-src="/theme/img/doorway_-5.webp" alt="">
                    </div>
                    <div class="other-service__description">
                        Грузоперевозки <br>
                        от 1200 за 2 часа
                    </div>
                </div>
                <div class="other-service__item">
                    <div class="other-service__image">
                        <img class="lazy" data-src="/theme/img/doorway_-6.webp" alt="">
                    </div>
                    <div class="other-service__description">
                        Демонтажные работы
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="footer__logo">
                <img class="lazy" width="50px" height="50px"
                     data-src="{{ \Helper::phpThumb('/theme/img/logo.webp', 'w=50,h=50,webp=1') }}"
                     alt="Вывоз мусора Новосибирск">
                <span>
					Компания мусоровывоз54.рф 654000 г. Новосибирск, 2-й рабочий переулок 14
				</span>
            </div>
        </div>
    </footer>

@endsection

