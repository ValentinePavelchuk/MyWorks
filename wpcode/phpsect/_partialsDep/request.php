<div class="request request-dep" id="requestDep">
    <div class="container">
        <div class="request__form">
            <div class="request__form-title">
                <h3>Запишитесь на 1-ую процедуру <span class="light">через сайт</span></h3>
            </div>
            <div class="request__form--wraper flexWrap">
                <div class="request__form-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/request/ipad.png" alt="ipad">
                </div>
                <div class="request__form-inputs">
                    <form class="form" action="">
                        <input type="hidden" name="title" value="Запишитесь на 1-ую процедуру через сайт">
                        <div class="request__form--wraper flexWrap">
                            <div class="request__form-name">
                                <label for="namedep">Как Вас зовут</label>
                                <input required type="text" id="namedep" name="name" placeholder="Имя">
                            </div>
                            <div class="request__form-tel">
                                <label for="teldep">Ваш номер телефона</label>
                                <input required class="inputTel" type="tel" name="phone" id="teldep" placeholder="+375 -- --- -- --">
                            </div>
                        </div>
                        <div class="request__form-btn">
                            <button class="presentBtn">Записаться со скидой</button>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/request/plant.png" alt="растение">
                        </div>
                        <div class="request__form-call mtxt">
                            <p class="request__form-call--boldT">ИЛИ ЗВОНИТЕ</p>
                            <p class="request__form-call--smallT"><span></span> Звоните мы сейчас работаем</p>
                            <div class="request__form--flex flexWrap">
                                <div class="request__form-phone">
                                    <span class="smallIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep/request/phone.png" alt=""></span>
                                    <a class="request__form-phone--link" href="tel:375333822499">+375 33 382 24 99</a>
                                </div>
                                <div class="request__form-work">
                                    <span class="smallIcon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dep/request/time.png" alt=""></span>
                                    <p class="request__form-work--text">Пн-Вс 9:00-21:00</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="request__form-women">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/request/women.png" alt="женщина">
                    <div class="request__form-women--name">
                        <p class="purple">ЕКАТЕРИНА</p>
                    </div>
                    <div class="request__form-women--master">
                        <p>Руководитель студии PINCET</p>
                    </div>
                </div>
            </div>
            <div class="request__form-rightImg blur">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/request/branch.png" alt="лепестки">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="./js/app.js"></script>