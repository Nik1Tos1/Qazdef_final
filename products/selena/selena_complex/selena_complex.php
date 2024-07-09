<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="selena_complex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <title>Work</title>
</head>
<body>
    <div class="overlay-bg"></div>
    <section class="header">
        <nav>
            <a href="/site/Index.php"><img src="/site/pictures/LOGOTIP.jpg" class="logo"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="#about-section">О компании</a></li>
                    <li><a href="#products-section">Продукция</a></li>
                    <li><a href="#services-section">Услуги</a></li>
                    <li><a href="#maintenance-section">Сервис</a></li>
                    <li><a href="#contacts-section">Контакты</a></li>
                </ul>
            </div>
            <button class="openModal contact_us">Связаться с Нами</button>
        </nav>
    </section>
    <hr>

    <!-----Начало контента------->
    <div class="title">
        <h1>Продукция</h1>
    </div>
    <div class="container">
    <div class="row">
            <div class="col">
                <ul class="custom-square-list">
                    <strong>
                    <li><a href="/site/products/equipment_for_searching/equipment.php">АППАРАТУРА ПОИСКА ТЕХНИЧЕСКИХ СРЕДСТВ РАЗВЕДКИ</a></li>
                    </strong>
                    <strong>
                    <li><a href="/site/products/information_security/security_technology.php">ТЕХНИКА ЗАЩИТЫ ИНФОРМАЦИИ</a></li></strong>
                    <strong>
                    <li><a href="/site/products/anti_terrorist_equipment/anti_terrorist.php">АНТИТЕРРОСТИСТИЧЕСКОЕ И ДОСМОТРОВОЕ ОБОРУДОВАНИЕ</a></li>
                    <li><a href="/site/products/selena/selena.php">МНОГОКАНАЛЬНЫЙ КОМПЛЕКС АУДИОЗАПИСИ SELENA</a></li>
                    <div>
                        <ul class="list">
                            <div class="undertext">
                            <li class="list-item"><a href="/site/products/selena/sel_dtr/sel_dtr.php">PCI платы модуля регистрации сигналов с аналоговых телефонных линий и линейных входов SEL DTR</a></li>
                            <li class="list-item"><a href="/site/products/selena/network_sel_dtr/network_sel_dtr.php">Сетевые устройства модуля регистрации сигналов с аналоговых телефонных линий и линейных входов SEL DTR</a></li>
                            <li class="list-item"><a href="/site/products/selena/sel_dsr_e/sel_dsr_e.php">PCI платы модулей регистрации сигналов с цифровых потоков SEL DSR E</a></li>
                            <li class="list-item"><a href="/site/products/selena/network_sel_dsr_e/network_sel_dsr_e.php">Сетевые устройства модулей регистрации сигналов с цифровых потоков SEL DSR E</li>
                            <li class="list-item"><a href="/site/products/selena/selena_complex/selena_complex.php">Вспомогательные аппаратные модули для комплекса SELENA</a></li>
                            <li class="list-item"><a href="/site/products/selena/software_selena_complex/software_selena_complex.php">Дополнительные программные модули для комплекса SELENA</a></li> 
                            </div>
                        </ul>
                    </div>
                    <li><a href="/site/products/portative_dictophone/dictophons.php">ПОРТАТИВНЫЕ ДИКТОФОНЫ И ВИДЕОРЕГИСТРАТОРЫ</a></li>
                    </strong>
                </ul>
            </div>

            <!------Продукция---------->
                <div class="products-container">
                    <?php
                    include '../../../components/connect.php';

                    $subcategory_id = 32; // ID подкатегории "Обнаружители скрытых видеокамер"
                    $select_products = $conn->prepare("SELECT * FROM products WHERE subcategory_id = ?");
                    $select_products->execute([$subcategory_id]);
                    $products = $select_products->fetchAll(PDO::FETCH_ASSOC);

                    if (empty($products)): ?>
                        <p>Нет товаров для отображения!</p>
                    <?php else: ?>
                        <?php foreach ($products as $product): ?>
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="../../../uploaded_img/<?= htmlspecialchars($product['image_01']); ?>" alt="фото товара"/>
                                </div>
                                <div class="product-details">
                                    <a href="" class="product-title"><?= htmlspecialchars($product['name']); ?></a>
                                    <div class="product-description">
                                        <?= htmlspecialchars($product['details']); ?>
                                    </div>
                                    <div class="product-action">
                                        <h1 class="price-title">ЦЕНА ПО ЗАПРОСУ</h1>   
                                    </div>
                                    <div class="contact_btn">
                                        <button class="openModal contact_us">Связаться с Нами</button>
                                    </div>
                                </div>
                            </div>
                            <div class="underline"></div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
    </div>

    <div class="common-form">
        <div id="contactModal" class="modal">
            <div class="modal-content">
                <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                <section class="new-contact_block">
                    <div class="contact_card">
                        <div id="contacts-section">
                            <h1 class="new-main_header">Связаться с Нами</h1>
                            <div class="new-contact_inner">
                                <div class="new-contact_text">
                                    <h2>Контакты в г. Астана</h2>
                                    <p>
                                        010000, Республика Казахстан, г. Астана<br>
                                        пр-т. Мәнгілік ел 20/1 (6 этаж)<br>
                                        <span>email: <a class="email-cart" href="https://mail.google.com/mail/?view=cm&fs=1&to=qds@qds.kz" target="_blank">qds@qds.kz</a></span>
                                    </p>
                                    <img src="/site/pictures/LOGOTIP.jpg" class="contact-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="new-contact_info_block">
                        <div class="new-contact_card_info">
                            <div class="new-contact_text_info">
                                <div class="contact_details">
                                    <span>Тел: <a class="phone-link" href="tel:+7172573573">+7 (7172) 573-573</a></span>
                                    <span>Моб: <a class="phone-link" href="tel:+77017774581">+7 701 777 45 81</a></span>
                                    <span>Email: <a class="email-link" href="https://mail.google.com/mail/?view=cm&fs=1&to=a.aisa@qds.kz" target="_blank">a.aisa@qds.kz</a></span>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="new-contact_info_block2">
                        <div class="new-contact_card_info2">
                            <div class="new-contact_text_info">
                                <div class="contact_details">
                                    <span>Тел: <a class="phone-link" href="tel:+7172573573">(7172) 573-573 398</a></span>
                                    <span>Моб: <a class="phone-link" href="tel:+77029358393">+7 702 935 8393</a></span>
                                    <span>Email: <a class="email-link" href="https://mail.google.com/mail/?view=cm&fs=1&to=k.nesken@qds.kz" target="_blank">k.nesken@qds.kz</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div id="overlay"></div>
        <div id="modal_bg" class="modal_bg"></div>
    </div>

    <script>
    // Получаем модальное окно и затемнение
    var modal = document.getElementById("contactModal");
    var overlay = document.getElementById("overlay");

    // Получаем элемент для закрытия модального окна
    var closeModalBtn = modal.querySelector(".fa-times");

    // Функция для открытия модального окна
    function openModal(event) {
        event.preventDefault(); // Предотвращаем переход по ссылке
        modal.style.display = "block"; // Показываем модальное окно
        overlay.style.display = "block"; // Показываем затемнение заднего фона
        setTimeout(function() {
            modal.classList.add("show"); // Добавляем класс для показа модального окна
            overlay.classList.add("show"); // Добавляем класс для показа затемнения
        }, 10); // Небольшая задержка для срабатывания transition
    }

    // Функция для закрытия модального окна
    function closeModal() {
        modal.classList.remove("show"); // Убираем класс для скрытия модального окна
        overlay.classList.remove("show"); // Убираем класс для скрытия затемнения

        // Убираем display только после завершения анимации
        setTimeout(function() {
            if (!modal.classList.contains("show")) {
                modal.style.display = "none";
                overlay.style.display = "none";
            }
        }, 500); // Время должно совпадать с transition-duration
    }

    // Привязываем обработчик ко всем кнопкам "Связаться с Нами"
    var openModalBtns = document.querySelectorAll(".openModal");
    openModalBtns.forEach(function(btn) {
        btn.addEventListener("click", openModal);
    });

    // Добавляем обработчик события при нажатии на кнопку закрытия
    closeModalBtn.addEventListener("click", closeModal);

    // Добавляем обработчик события для закрытия модального окна при клике вне его
    overlay.addEventListener("click", function(event) {
        if (event.target === overlay) {
            closeModal();
        }
    });
    </script>
</body>
</html>
