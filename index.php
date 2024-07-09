<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Work</title>
</head>
<body onload="window.scrollTo(0, 0);">
    <header class="header">
        <nav>
            <a href="index.php"><img src="pictures/LOGOTIP.jpg" alt="логотип" class="logo"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="#about-section" data-i18n="header.company">О компании</a></li>
                    <li><a href="#products-section" data-i18n="header.products">Продукция</a></li>
                    <li><a href="#services-section" data-i18n="header.services">Услуги</a></li>
                    <li><a href="#maintenance-section" data-i18n="header.maintenance">Сервис</a></li>
                    <li><a href="#partners-section" data-i18n="header.partners">Партнеры</a></li>
                    <li><a href="#contacts-section" data-i18n="header.contacts">Контакты</a></li>
                </ul>
            </div>
            <div class="language-selector">
                <select id="languageSwitcher" onchange="changeLanguage(this.value)">
                    <option value="ru">Русский</option>
                    <option value="kk">Қазақша</option>
                    <option value="en">English</option>
                </select>
            </div>
            <button class="contact_us openModal" data-i18n="header.contact_us">Связаться с Нами</button>
        </nav>
    </header>
    <hr>

    <!-- Карусель -->
<!-- Карусель -->
<section class="carusel">
    <div class="carusel-img-container">
        <div class="carusel-item">
            <img src="/site/pictures/background_for_slide_1.jpg" class="carusel-img">
            <div class="text-box">
                <h1 data-i18n="carousel.slide1.headline">Профессиональная</h1>
                <h2 data-i18n="carousel.slide1.subheadline">поисковая аппаратура</h2>
                <h4>
                    <a href="#" class="btn" data-i18n="carousel.slide1.button">КАТАЛОГ ПРОДУКТОВ</a>
                </h4>
            </div>
            <div class="indicators">
                <span class="indicator active"></span>
                <span class="indicator"></span>
                <span class="indicator"></span>
            </div>
        </div>
        <div class="carusel-item">
            <img src="/site/pictures/img_for_slide.jpeg" class="carusel-img">
            <div class="text-box2">
                <h1 data-i18n="carousel.slide2.headline">Послепродажное</h1>
                <h2 data-i18n="carousel.slide2.subheadline">техническое обслуживание</h2>
                <h4>
                    <a href="#" class="btn2" data-i18n="carousel.slide2.button">КАТАЛОГ ПРОДУКТОВ</a>
                </h4>
            </div>
            <div class="indicators">
                <span class="indicator"></span>
                <span class="indicator active"></span>
                <span class="indicator"></span>
            </div>
        </div>
        <div class="carusel-item">
            <img src="/site/pictures/slide3.jpeg" class="carusel-img">
            <div class="text-box3">
                <h1 data-i18n="carousel.slide3.headline">Сертифицированные</h1>
                <h2 data-i18n="carousel.slide3.subheadline">специалисты</h2>
                <h4>
                    <a href="#" class="btn3" data-i18n="carousel.slide3.button">КАТАЛОГ ПРОДУКТОВ</a>
                </h4>
            </div>
            <div class="indicators">
                <span class="indicator"></span>
                <span class="indicator"></span>
                <span class="indicator active"></span>
            </div>
        </div>
    </div>
    <hr class="carusel-line"/>
    <div class="arrow arrow-left">&#10094;</div>
    <div class="arrow arrow-right">&#10095;</div>
    <script src="main.js"></script>
</section>

    <script>
        document.querySelectorAll('.btn, .btn2, .btn3').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('#products-section').scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>

    <!-- О компании -->
    <section class="about_comp">
        <div class="about_us">
            <div id="about-section">
                <h1 data-i18n="about_section.title">О КОМПАНИИ</h1>
                <p class="reveal reveal-left" data-i18n="about_section.text1">
                    <strong class="reveal">QAZDEF SOLUTION </strong> специализируется на разработке, производстве и предоставлении широкого ассортимента оборудования для обеспечения безопасности и защиты информации.
                </p>
                <br>
                <p class="reveal" data-i18n="about_section.text2">
                    Наша продукция включает в себя системы выявления и устранения потенциальных источников утечки конфиденциальной информации, а также осуществляем проверку помещений и оборудования на предмет наличия скрытых электронных устройств для перехвата информации.
                </p>
            </div>
        </div>
    </section>

<!-------Продукция--------------------------------->
<section class="all-products">
    <section class="product">
        <div id="products-section">
            <h1 data-i18n="products_section.title">ПРОДУКЦИЯ</h1>
            <div class="pro-container reveal reveal-left">
                <div class="pro">
                    <img src="/site/pictures/tools_product.jpg" class="product-img">
                    <div class="description">
                        <h2 class="product_text" data-i18n="products_section.item1.title">АППАРАТУРА ПОИСКА ТЕХНИЧЕСКИХ СРЕДСТВ РАЗВЕДКИ</h2>
                        <div class="product_p_text">
                            <p data-i18n="products_section.item1.description">Представляет собой специализированные устройства и системы, разработанные для обнаружения и локализации скрытых или незаконно установленных аудио-, видео- и других электронных устройств, используемых для проведения шпионажа или незаконного сбора информации</p>
                        </div>
                        <a href="/site/products/Equipment_for_searching/equipment.php" class="learn_more" data-i18n="products_section.item1.link">УЗНАТЬ БОЛЬШЕ...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------- Вторая ячейка -------------->
    <section class="product2">
        <div class="pro-container2 reveal reveal-right">
            <div class="pro2">
                <img src="/site/pictures/tools_product_2.jpg" class="product-img2">
                <div class="description2">
                    <h2 class="product_text2" data-i18n="products_section.item2.title">ТЕХНИКА ЗАЩИТЫ ИНФОРМАЦИИ</h2>
                    <div class="product_p_text2">
                        <p data-i18n="products_section.item2.description">Включает в себя широкий спектр средств и технологий,направленных на обеспечение безопасности и конфиденциальности информации. Эта техника разрабатывается и применяется с учетом современных стандартов безопасности и учитывает специфические потребности и угрозы каждой конкретной организации.</p>
                    </div>
                    <a href="/site/products/information_security/security_technology.php" class="learn_more2" data-i18n="products_section.item2.link">УЗНАТЬ БОЛЬШЕ ...</a>
                </div>
            </div>
        </div>
    </section>
    <!----3 Ячейка-------->
    <section class="product3">
        <div class="pro-container3 reveal reveal-left">
            <div class="pro">
                <img src="/site/pictures/tools_product_3.png" class="product-img3">
                <div class="description3">
                    <h2 class="product_text3" data-i18n="products_section.item3.title">АНТИТЕРРОСТИСТИЧЕСКОЕ И ДОСМОТРОВОЕ ОБОРУДОВАНИЕ</h2>
                    <div class="product_p_text">
                        <p data-i18n="products_section.item3.description">Представляет собой специализированные технические средства, предназначенные для обнаружения и предотвращения актов терроризма и других незаконных действий, а также для обеспечения безопасности общественных мест и объектов.</p>
                    </div>
                    <a href="/site/products/anti_terrorist_equipment/anti_terrorist.php" class="learn_more3" data-i18n="products_section.item3.link">УЗНАТЬ БОЛЬШЕ ...</a>
                </div>
            </div>
        </div>
    </section>
    <!-------- 4 ячейка -------------->
    <section class="product4">
        <div class="pro-container4 reveal reveal-right">
            <div class="pro4">
                <img src="/site/pictures/tools_product_4.jpg" class="product-img4">
                <div class="description4">
                    <h2 class="product_text4" data-i18n="products_section.item4.title">МНОГОКАНАЛЬНЫЙ КОМПЛЕКС АУДИОЗАПИСИ SELENA</h2>
                    <div class="product_p_text4">
                        <p data-i18n="products_section.item4.description">Комплексы SELENA предназначены для регистрации речевой и технологической информации от любого источника аудиосигнала: телефонной цифровой и аналоговой линии, линии селекторной связи, радиостанции, микрофона и т.д.</p>
                    </div>
                    <a href="/site/products/selena/selena.php" class="learn_more4" data-i18n="products_section.item4.link">УЗНАТЬ БОЛЬШЕ ...</a>
                </div>
            </div>
        </div>
    </section>
    <!-------5 Ячейка--------------------------------->
    <section class="product">
        <div class="pro-container reveal reveal-left">
            <div class="pro">
                <img src="/site/pictures/tools_product_5.jpg" class="product-img">
                <div class="description">
                    <h2 class="product_text" data-i18n="products_section.item5.title">ПОРТАТИВНЫЕ ДИКТОФОНЫ И ВИДЕОРЕГИСТРАТОРЫ</h2>
                    <div class="product_p_text">
                        <p data-i18n="products_section.item5.description">Представляют собой специализированные устройства и системы, разработанные для обнаружения и локализации скрытых или незаконно установленных аудио-, видео- и других электронных устройств, используемых для проведения шпионажа или незаконного сбора информации</p>
                    </div>
                    <a href="/site/products/portative_dictophone/dictophons.php" class="learn_more" data-i18n="products_section.item5.link">УЗНАТЬ БОЛЬШЕ ...</a>
                </div>
            </div>
        </div>
    </section>
</section>

    <!-- Услуги -->
    <section class="services">
        <div class="services_text">
            <div id="services-section">
                <h1 data-i18n="services_section.title">УСЛУГИ</h1>
                <p class="reveal" data-i18n="services_section.text1">Наша компания предлагает не только широкий ассортимент поискового оборудования высокого качества, но и полный спектр услуг для обеспечения надежной работы вашей техники. Мы готовы предоставить профессиональные услуги по обслуживанию и ремонту оборудования, чтобы обеспечить его бесперебойную работу и максимальную эффективность.</p>
                <p class="reveal" data-i18n="services_section.text2">Кроме того, наша команда готова работать с клиентами индивидуально, чтобы подобрать оптимальный комплекс или систему, полностью отвечающую их потребностям и запросам. Мы учитываем специфику бизнеса каждого клиента, предлагая наиболее подходящие решения для обеспечения безопасности и защиты информации.</p>
                <p class="reveal" data-i18n="services_section.text3">Будь то требуется поддержка, обслуживание или консультации по выбору оборудования, наша компания всегда готова оказать качественную помощь и поддержку своим клиентам.</p>
            </div>
        </div>
    </section>

<!---Сервис и Тех Обслуживание--------->
<section class="maintenance">
    <div class="maintenance_text">
        <div id="maintenance-section">
            <h1 data-i18n="maintenance_section.title">Сервис и Тех.обслуживание</h1>
            <div class="container">
                <div class="row">
                    <div class="col reveal reveal-left">
                        <strong data-i18n="maintenance_section.item1.title">Техническое и сервисное обслуживание</strong>
                        <br>
                        <p data-i18n="maintenance_section.item1.description">Наша компания предлагает высококачественное техническое и сервисное обслуживание. Мы понимаем, насколько важна бесперебойная работа оборудования и предлагаем полный спектр услуг по диагностике и обслуживанию.</p>
                    </div>
                    <div class="col2 reveal reveal-right">
                        <strong data-i18n="maintenance_section.item2.title">Обслуживание нашего оборудования</strong>
                        <br>
                        <p data-i18n="maintenance_section.item2.description">Для наших клиентов, приобретших оборудование у нас, мы предоставляем комплексные услуги по техническому обслуживанию и ремонту. Наши специалисты обладают глубокими знаниями и опытом работы с нашим оборудованием, что гарантирует его надежную и долгосрочную эксплуатацию.</p>
                    </div>
                    <img src="/site/pictures/a44195b7c271500e6062457a8f1e22aa 2 (1).jpg" class="tool_pic reveal reveal-right"/>
                    <div class="col3 reveal reveal-left">
                        <strong data-i18n="maintenance_section.item3.title">Обслуживание стороннего оборудования</strong>
                        <br>
                        <p data-i18n="maintenance_section.item3.description">Мы также рады предложить свои услуги владельцам оборудования, приобретенного у других поставщиков. Независимо от марки и модели, вы можете принести ваше оборудование к нам для диагностики, профилактического обслуживания или ремонта. Наши сертифицированные специалисты обеспечат высокое качество работ и помогут продлить срок службы вашего оборудования.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Партнеры -->
    <section class="partners-section" id="partners-section">
        <h1 class="section-title" data-i18n="partners_section.title">Наши партнёры</h1>
        <div class="map-container">
            <img src="/site/pictures/world_map.jpg" alt="World Map" class="partners-map">
        </div>
        <p class="partners-text" data-i18n="partners_section.text">
            Мы гордимся тем, что являемся эксклюзивными партнерами ведущих мировых компаний. Это партнерство позволяет нам предлагать нашим клиентам передовые технологии и решения.
        </p>
    </section>

   <!-- Контакты -->
<section class="contact_block">
    <div class="contact_card">
        <div id="contacts-section">
            <h1 class="main_header" data-i18n="contacts_section.title">КОНТАКТЫ</h1>
            <div class="contact_inner">
                <div class="contact_text">
                    <h2 data-i18n="contacts_section.text1">Контакты в г. Астана</h2>
                    <p>
                        <span data-i18n="contacts_section.address">010000, Республика Казахстан, г. Астана<br>пр-т. Мәнгілік ел 20/1 (6 этаж)</span><br>
                        <span>email: <a class="email-cart" href="mailto:support@qazdef.com.kz">support@qazdef.com.kz</a></span>
                    </p>
                </div>
                <img src="/site/pictures/LOGOTIP.jpg" class="contact-logo" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class="contact_info_block">
        <div class="contact_card_info">
            <div class="contact_text_info">
                <div class="contact_details">
                    <span data-i18n="contacts_section.phone1">Тел: <a class="phone-link" href="tel:+77172573573">(7172) 573-573 395</a></span>
                    <span data-i18n="contacts_section.mobile1">Моб: <a class="phone-link" href="tel:+77017774581">+7 701 777 45 81</a></span>
                    <span>Email: <a class="email-link" href="mailto:a.aisa@qds.kz">a.aisa@qds.kz</a></span>
                </div>
            </div>
        </div>
        <div class="contact_card_info2">
            <div class="contact_text_info">
                <div class="contact_details">
                    <span data-i18n="contacts_section.phone2">Тел: <a class="phone-link" href="tel:+7717257357398">(7172) 573-573 398</a></span>
                    <span data-i18n="contacts_section.mobile2">Моб: <a class="phone-link" href="tel:+77029358393">+7 702 935 8393</a></span>
                    <span>Email: <a class="email-link" href="mailto:k.nesken@qds.kz">k.nesken@qds.kz</a></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="footer_content">
        <div class="footer_section">
            <p data-i18n="footer.certification">Компания сертифицирована и соответствует стандартам:</p>
            <p><strong data-i18n="footer.certification.iso1">СТ РК ISO 9001-2016 Системы менеджмента качества. Требования и руководство по применению</strong></p>
            <p><strong data-i18n="footer.certification.iso2">СТ РК ISO 14001-2006 Системы экологического менеджмента. Требования и руководство по применению</strong></p>
        </div>
        <div class="footer_section">
            <h2 data-i18n="footer.contacts.title">Контакты</h2>
            <p data-i18n="footer.contacts.text">010000, Республика Казахстан, г. Астана<br>пр-т. Мәнгілік ел 20/1 (6 этаж)<br>
            <span>email: <a class="email-link-last" href="mailto:support@qazdef.com.kz" data-i18n="footer.contacts.email">support@qazdef.com.kz</a></span></p>
            <div class="footer_section2">
                <div class="line">
                    <span class="phone"><span data-i18n="footer.phone.title">Тел:</span><br> <a class="phone-link" href="tel:+77172573573">(7172) 573-573 395</a></span>
                    <span class="mobile"><span data-i18n="footer.mobile.title">Моб:</span><br> <a class="mobile-link" href="tel:+77017774581">+7 701 777 45 81</a></span>
                </div>
                <div class="line">
                    <span class="phone"><span data-i18n="footer.phone.title">Тел:</span><br> <a class="phone-link" href="tel:+7717257357398">(7172) 573-573 398</a></span>
                    <span class="mobile"><span data-i18n="footer.mobile.title">Моб:</span><br> <a class="mobile-link" href="tel:+77029358393">+7 702 935 8393</a></span>
                </div>
            </div>
        </div>
        <div class="footer_section">
            <ul>
                <strong>
                    <div class="footer_section">
                        <ul>
                            <li class="footer_link" data-target="about-section" data-i18n="footer.links.about">О компании</li>
                            <li class="footer_link" data-target="services-section" data-i18n="footer.links.services">Услуги</li>
                            <li class="footer_link" data-target="contacts-section" data-i18n="footer.links.contacts">Контакты</li>
                            <li class="footer_link" data-target="products-section" data-i18n="footer.links.products">Продукция</li>
                            <li class="footer_link" data-target="maintenance-section" data-i18n="footer.links.maintenance">Сервис и Тех обслуживание</li>
                            <li class="footer_link" data-target="partners-section" data-i18n="footer.links.partners">Партнеры</li>
                        </ul>
                    </div>
                </strong>
            </ul>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const footerLinks = document.querySelectorAll('.footer_link');
            footerLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        targetSection.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });
        });
    </script>
    <div class="footer_bottom">
        <p data-i18n="footer.bottom_text">ТОО QazDef Solution © 2024</p>
    </div>
</footer>
<!-- Contact Modal -->
<div id="contactModal" class="modal">
    <div class="modal-content">
        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
        <section class="contact_block">
            <div class="contact_card">
                <div id="contacts-section">
                    <h1 class="main_header" data-i18n="contact_modal.title">Связаться с Нами</h1>
                    <div class="contact_inner">
                        <div class="contact_text">
                            <h2 data-i18n="contact_modal.text">Контакты в г. Астана</h2>
                            <p data-i18n="contact_modal.address">
                            010000, Республика Казахстан, г. Астана
                            пр-т. Мәнгілік ел 20/1 (6 этаж)
                            </p>
                            <p>email: <a class="email-cart" href="mailto:support@qazdef.com.kz" data-i18n="contact_modal.email">support@qazdef.com.kz</a></p>
                        </div>
                        <img src="/site/pictures/LOGOTIP.jpg" class="contact-logo" />
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="contact_info_block">
                <div class="contact_card_info">
                    <div class="contact_text_info">
                        <div class="contact_details">
                            <span><span data-i18n="contact_modal.phone1.title">Тел:</span> <a class="phone-link" href="tel:+77172573573" data-i18n="contact_modal.phone1">(7172) 573-573 395</a></span>
                            <span><span data-i18n="contact_modal.mobile1.title">Моб:</span> <a class="phone-link" href="tel:+77017774581" data-i18n="contact_modal.mobile1">+7 701 777 45 81</a></span>
                            <span>Email: <a class="email-link" href="mailto:a.aisa@qds.kz" data-i18n="contact_modal.email1">a.aisa@qds.kz</a></span>
                        </div>
                    </div>
                </div>
                <div class="contact_card_info2">
                    <div class="contact_text_info">
                        <div class="contact_details">
                            <span><span data-i18n="contact_modal.phone2.title">Тел:</span> <a class="phone-link" href="tel:+7717257357398" data-i18n="contact_modal.phone2">(7172) 573-573 398</a></span>
                            <span><span data-i18n="contact_modal.mobile2.title">Моб:</span> <a class="phone-link" href="tel:+77029358393" data-i18n="contact_modal.mobile2">+7 702 935 8393</a></span>
                            <span>Email: <a class="email-link" href="mailto:k.nesken@qds.kz" data-i18n="contact_modal.email2">k.nesken@qds.kz</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div id="overlay"></div>
<div id="modal_bg" class="modal_bg"></div>

    <script>
        var modal = document.getElementById("contactModal");
        var overlay = document.getElementById("overlay");
        var closeModalBtn = modal.querySelector(".fa-times");

        function openModal(event) {
            event.preventDefault();
            modal.style.display = "block";
            overlay.style.display = "block";
            setTimeout(function() {
                modal.classList.add("show");
                overlay.classList.add("show");
            }, 10);
        }

        function closeModal() {
            modal.classList.remove("show");
            overlay.classList.remove("show");
            setTimeout(function() {
                if (!modal.classList.contains("show")) {
                    modal.style.display = "none";
                    overlay.style.display = "none";
                }
            }, 500);
        }

        var openModalBtns = document.querySelectorAll(".openModal");
        openModalBtns.forEach(function(btn) {
            btn.addEventListener("click", openModal);
        });

        closeModalBtn.addEventListener("click", closeModal);
        overlay.addEventListener("click", function(event) {
            if (event.target === overlay) {
                closeModal();
            }
        });
    </script>

    <script type="text/javascript">
        window.addEventListener('scroll', reveal);

        function reveal() {
            var reveals = document.querySelectorAll('.reveal');
            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = -200;
                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                } else {
                    reveals[i].classList.remove('active');
                }
            }
        }

        window.addEventListener('scroll', reveal);

        function reveal() {
            var reveals = document.querySelectorAll('.reveal');
            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 100;
                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                } else {
                    reveals[i].classList.remove('active');
                }
            }
        }
    </script>

    <script>
        window.addEventListener('beforeunload', function() {
            sessionStorage.setItem('scrollPosition', window.scrollY);
        });

        window.addEventListener('load', function() {
            if (sessionStorage.getItem('scrollPosition') !== null) {
                window.scrollTo(0, sessionStorage.getItem('scrollPosition'));
                sessionStorage.removeItem('scrollPosition');
            }
        });
    </script>

    <script>
        function handleLogoClick(event) {
            event.preventDefault();
            window.history.pushState({}, '', 'index.php');
            window.scrollTo(0, 0);
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const offsets = {
                'about-section': 180,
                'products-section': 140,
                'services-section': 170,
                'maintenance-section': 125,
                'partners-section': -75,
                'contacts-section': 190
            };

            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);

                    if (targetSection) {
                        const elementPosition = targetSection.getBoundingClientRect().top;
                        const offsetPosition = elementPosition - (offsets[targetId] || 0);

                        window.scrollTo({
                            top: offsetPosition + window.pageYOffset,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>


<!----Смена языка---------->
    <script>
   document.addEventListener("DOMContentLoaded", () => {
    const languageSwitcher = document.getElementById('languageSwitcher');
    const translations = {
        en: '/site/en.json',
        kk: '/site/kk.json',
        ru: '/site/ru.json'
    };

    languageSwitcher.addEventListener('change', function() {
        const selectedLanguage = this.value;
        localStorage.setItem('selectedLanguage', selectedLanguage); // Сохраняем выбранный язык в localStorage

        if (translations[selectedLanguage]) {
            fetch(translations[selectedLanguage])
                .then(response => response.json())
                .then(data => applyTranslations(data))
                .catch(error => console.error('Error loading language file:', error));
        }
    });

    function applyTranslations(translations) {
        document.querySelectorAll('[data-i18n]').forEach(element => {
            const key = element.getAttribute('data-i18n');
            if (translations[key]) {
                element.innerHTML = translations[key]; // Use innerHTML to insert HTML content
            }
        });
    }

    // Проверяем и загружаем язык из localStorage при загрузке страницы
    const savedLanguage = localStorage.getItem('selectedLanguage') || 'en'; // Загрузка сохраненного языка или установка 'en' по умолчанию
    languageSwitcher.value = savedLanguage;
    if (translations[savedLanguage]) {
        fetch(translations[savedLanguage])
            .then(response => response.json())
            .then(data => applyTranslations(data))
            .catch(error => console.error('Error loading language file:', error));
    }
});
</script>
</body>
</html>
