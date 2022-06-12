<script src="/assets/js/address.js"></script>
    <section class="section-top container">
        <div class="section-top__description">
            <div class="section-top__description__left">
                <h1 class="section-top__description__h1">Получить помощь</h1>
                <h2 class="section-top__description__h2">Для того, чтобы получить возможность получить помощь наших волонтёров, Вам достаточно заполнить форму ниже:</h2>
            </div>
        </div>
        <form method="post" class="section-top__form">
            <label for="surname" class="section-top__form__label">Фамилия</label>
            <input class="section-top__form__input" id="surname" name="surname" type="text" placeholder="Фамилия">
            <label for="name" class="section-top__form__label">Имя</label>
            <input class="section-top__form__input" id="name" name="name" type="text" placeholder="Имя">
            <label for="patronymic" class="section-top__form__label">Отчество</label>
            <input class="section-top__form__input" id="patronymic" name="patronymic" type="text" placeholder="Отчество">
            <label for="DOB" class="section-top__form__label">Дата рождения</label>
            <input class="section-top__form__input" id="DOB" name="DOB"  type="date" placeholder="Дата рождения">   <!--DOB - date of birth-->
            <label for="locality" class="section-top__form__label">Адрес проживания</label>
            <input class="section-top__form__input" list="loc" id="locality" name=locality type="text" placeholder="Адрес проживания">
            <datalist id="loc" class="section-top__form__input">
            </datalist>
            <label for="phone" class="section-top__form__label">Телефон</label>
            <input class="section-top__form__input" id="phone" name="phone" type="text" placeholder="Номер телефона">
            <label for="email" class="section-top__form__label">Почта</label>
            <input class="section-top__form__input" id="email" name="email" type="text" placeholder="Электронная почта">
            <label for="description" class="section-top__form__label">Опишите вашу ситуацию</label>
            <textarea class="section-top__form__textarea" id="description" name="description" placeholder="Опишите нынешнюю ситуацию, в которой вам нужна помощь"></textarea>
            <p class="section-top__form__p">Являетесь ли Вы объектом социальной защиты? 
                Если являетесь, то выберите из списка объект к которому Вы относитесь: </p>
            <select class="section-top__form__select" name="social_protection" id="social_privil">
                <?php
                if(isset($types))
                    foreach ($types as $type)
                    {
                ?>
                <option class="section-top__form__select__option"><?= $type?></option>
                <?php
                    }
                ?>
            </select>
            <label for="pass" class="section-top__form__label">Пароль</label>
            <input class="section-top__form__input" id="pass" name="pass" type="password" placeholder="Придумайте пароль">
            <label for="pass_again" class="section-top__form__label">Повторите пароль</label>
            <input class="section-top__form__input" id="pass_again" name="pass_again" type="password" placeholder="Введите пароль повторно">
            <input type="submit" class="section-top__form__button" value="Получить помощь">
        </form>
    </section>