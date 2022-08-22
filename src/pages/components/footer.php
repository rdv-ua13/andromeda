    </main>

    <footer class="footer">
        <section id="contactData" class="block-pt-md block-pb-lg bg-textured bg-gears">
            <div class="container">
                <div class="row">
                    <div class="col col-12">
                        <div class="block-mb-lg">
                            <div class="h2 text-center">Контакты</div>
                        </div>
                        <div class="row">
                            <div class="col col-12 col-lg-5 mb-4 mb-lg-0">
                                <div class="footer-contscts">
                                    <div class="h4 footer-contscts__title">ANDROMEDA TECHSPACE</div>
                                    <div class="footer-contscts__address">
                                        <div class="footer-contscts__address-item footer-contscts__address-tel">
                                            <img class="icon" src="/build/img/sprite.svg#tel">
                                            <a href="tel:+79872900593">+7 (987) 290-05-93</a>
                                        </div>
                                        <div class="footer-contscts__address-item footer-contscts__address-loc">
                                            <img class="icon" src="/build/img/sprite.svg#pin">
                                            <a href="javascript:;">г.Казань, ул.Чистопольская, 20а</a>
                                        </div>
                                    </div>

                                    <div class="footer-contscts__social">
                                        <div class="footer-contscts__social-title">Наши соц.сети</div>
                                        <div class="footer-contscts__social-list">
                                            <a class="footer-contscts__social-item" href="https://vk.com/andromedaspace" target="_blank">
                                                <svg class="icon">
                                                    <use href="/build/img/sprite.svg#vk"></use>
                                                </svg>
                                            </a>
                                            <a class="footer-contscts__social-item" href="https://t.me/andromspace" target="_blank">
                                                <svg class="icon">
                                                    <use href="/build/img/sprite.svg#tg"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-lg-7">
                                <div id="contactMap" class="contacts-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bgc-purple-pink">
            <div class="block-pt-md block-pb-md bg-textured bg-contactus">
                <div class="container">
                    <div class="row">
                        <div class="col col-12">
                            <div class="block-mb-lg">
                                <div class="h2 text-center color-white">Связаться с нами</div>
                            </div>
                            <div class="row">
                                <div class="col col-12 col-lg-6 order-2 order-lg-1">
                                    <div class="footer-contactus-decor">
                                        <img src="/build/img/bg-image-contactus.png" alt="">
                                    </div>
                                </div>
                                <div class="col col-12 col-lg-6 order-1 order-lg-2">
                                    <form class="footer-contactus" action="send.php" method="post">
                                        <div class="field-wrapper field-wrapper-border">
                                            <input class="field-input"
                                                   type="text"
                                                   name="name"
                                                   placeholder="Ваше имя"
                                            >
                                        </div>
                                        <div class="field-wrapper field-wrapper-border">
                                            <input class="field-input"
                                                   type="tel"
                                                   name="tel"
                                                   placeholder="Ваш телефон"
                                            >
                                        </div>
                                        <div class="field-wrapper">
                                            <div class="agreement-msg">
                                                Нажимая кнопку, я соглашаюсь на обработку персональных данных и с <a class="link-tdu" href="javascript:;">правилами</a> пользования Платформой
                                            </div>
                                            <div class="footer-contactus__btn-wrapper">
                                                <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="sentSuccessfully">
                                                    <span class="text-content text-content-mr">Оставить заявку</span>
                                                    <svg class="icon">
                                                        <use href="/build/img/sprite.svg#arrow-right-duo"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer-bottom">
            <div class="container">
                <a class="logo" href="/">
                    <img src="/build/img/logo.png">
                </a>
            </div>
        </section>
    </footer>

    <?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/modals.php'); ?>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="/build/js/libs.min.js"></script>
    <script src="/build/js/main.js"></script>

</body>
</html>