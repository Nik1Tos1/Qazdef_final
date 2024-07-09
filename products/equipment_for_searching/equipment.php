<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="equipment.css">
    <title>Work</title>
</head>
<body onload="window.scrollTo(0, 0);">
    <header class="header">
        <nav>
            <a href="/site/index.php"><img src="/site/pictures/LOGOTIP.jpg" alt="логотип" class="logo"></a>
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
    <div class="title">
        <h1 data-i18n="products_section.title">Продукция</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="custom-square-list">
                    <li><a href="/site/products/equipment_for_searching/equipment.php" data-i18n="products_section.item1.title">АППАРАТУРА ПОИСКА ТЕХНИЧЕСКИХ СРЕДСТВ РАЗВЕДКИ</a></li>
                    <li><a href="/site/products/information_security/security_technology.php" data-i18n="products_section.item2.title">ТЕХНИКА ЗАЩИТЫ ИНФОРМАЦИИ</a></li>
                    <li><a href="/site/products/anti_terrorist_equipment/anti_terrorist.php" data-i18n="products_section.item3.title">АНТИТЕРРОСТИСТИЧЕСКОЕ И ДОСМОТРОВОЕ ОБОРУДОВАНИЕ</a></li>
                    <li><a href="/site/products/selena/selena.php" data-i18n="products_section.item4.title">МНОГОКАНАЛЬНЫЙ КОМПЛЕКС АУДИОЗАПИСИ SELENA</a></li>
                    <li><a href="/site/products/portative_dictophone/dictophons.php" data-i18n="products_section.item5.title">ПОРТАТИВНЫЕ ДИКТОФОНЫ И ВИДЕОРЕГИСТРАТОРЫ</a></ли>
                </ul>
            </div>
            <aside class="content">
                <h1 data-i18n="products_section.item1.title">АППАРАТУРА ПОИСКА ТЕХНИЧЕСКИХ СРЕДСТВ РАЗВЕДКИ</h1>
                <ul>
                    <ul>
                    <li><a href="/site/products/equipment_for_searching/camera_detectors/hidden_camera_detectors.php" data-i18n="products_section.camera_detectors">Обнаружители скрытых видеокамер</a></li>
                    <li><a href="/site/products/equipment_for_searching/linear_locator/linear_locator.php" data-i18n="products_section.linear_locator">Нелинейные локаторы</a></li>
                    <li><a href="/site/products/equipment_for_searching/multifunctional_search_devices/search_devices.php" data-i18n="products_section.multifunctional_search_devices">Многофункциональные поисковые приборы</a></li>
                    <li><a href="/site/products/equipment_for_searching/radio_equipment/radio_equipment.php" data-i18n="products_section.radio_equipment">Аппаратура радиомониторинга</a></li>
                    <li><a href="/site/products/equipment_for_searching/line_inspection_equipment/line_inspection_equipment.php" data-i18n="products_section.line_inspection_equipment">Аппаратура обследования проводных линий</a></li>
                    <li><a href="/site/products/equipment_for_searching/listening_device_simulators/listening_device_simulators.php" data-i18n="products_section.listening_device_simulators">Имитаторы подслушивающих устройств</a></li>
                    <li><a href="/site/products/equipment_for_searching/search_receivers/search_receivers.php" data-i18n="products_section.search_receivers">Поисковые приемники</a></li>
                    <li><a href="/site/products/equipment_for_searching/field_indicators/field_indicators.php" data-i18n="products_section.field_indicators">Индикаторы поля</a></li>

                    </ul>
                </ul>
            </aside>
        </div>
    </div>
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
                            пр-т. Мәңгілік ел 20/1 (6 этаж)
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

<!---Открыть форму------>
<script>
    function openModal(event) {
        event.preventDefault();
        var modal = document.getElementById("contactModal");
        var overlay = document.getElementById("overlay");
        modal.style.display = "block";
        overlay.style.display = "block";
        setTimeout(function() {
            modal.classList.add("show");
            overlay.classList.add("show");
        }, 10);
    }

    function closeModal() {
        var modal = document.getElementById("contactModal");
        var overlay = document.getElementById("overlay");
        modal.classList.remove("show");
        overlay.classList.remove("show");
        setTimeout(function() {
            if (!modal.classList.contains("show")) {
                modal.style.display = "none";
                overlay.style.display = "none";
            }
        }, 500);
    }

    document.addEventListener("DOMContentLoaded", () => {
        var openModalBtns = document.querySelectorAll(".openModal");
        openModalBtns.forEach(function(btn) {
            btn.addEventListener("click", openModal);
        });
    });


    /*Смена языка*/

    document.addEventListener("DOMContentLoaded", () => {
    const languageSwitcher = document.getElementById('languageSwitcher');
    const translations = {
        en: '/site/products/equipment_for_searching/en.json',
        kk: '/site/products/equipment_for_searching/kk.json',
        ru: '/site/products/equipment_for_searching/ru.json'
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

/*Смещение текста*/
document.getElementById('languageSwitcher').addEventListener('change', function() {
    var contentDiv = document.querySelector('.content');
    if (this.value === 'en') {
        contentDiv.style.marginTop = '-500px'; // adjust for English
    } else if (this.value === 'ru') {
        contentDiv.style.marginTop = '-320px'; // adjust for Russian
    } else {
        contentDiv.style.marginTop = '-350px'; // adjust for Kazakh
    }
});


</script>
</body>
</html>
