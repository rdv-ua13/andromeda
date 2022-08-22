<div id="applyRequest" class="modal">
    <div class="modal-overlay"></div>
    <div class="modal-wrapper modal-transition">
        <div class="modal-body">

            <div class="bgc-purple-pink">
                <div class="block-pt-md block-pb-md bg-textured bg-contactus modal-content-container">
                    <div class="block-mb-lg">
                        <div class="h2 text-center color-white">Оставить заявку</div>
                    </div>
                    <form class="footer-contactus modal-contactus" action="send.php" method="post">
                        <div class="field-wrapper field-wrapper-border">
                            <input class="field-input"
                                   type="text"
                                   name="name"
                                   placeholder="Ваше имя"
                                   required
                            >
                        </div>
                        <div class="field-wrapper field-wrapper-border">
                            <input class="field-input"
                                   type="tel"
                                   name="tel"
                                   placeholder="Ваш телефон"
                                   required
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


<div id="sentSuccessfully" class="modal">
    <div class="modal-overlay"></div>
    <div class="modal-wrapper modal-transition">
        <div class="modal-body">

            <div class="modal-content-container sent-successfully">
                <div class="sent-successfully__view">
                    <img src="/build/img/sent-successfully.png" alt="">
                </div>
                <div class="sent-successfully__descr">
                    <div class="sent-successfully__descr-title">Спасибо!</div>
                    <div class="sent-successfully__descr-text">Наши менеджеры перезвонят Вам в ближайшее время!</div>
                </div>
            </div>

        </div>
    </div>
</div>