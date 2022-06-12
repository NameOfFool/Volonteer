    <section class="section-top container">
        <div class="section-top__description">
            <div class="section-top__description__left">
                <h1 class="section-top__description__h1">Получить помощь</h1>
                <h2 class="section-top__description__h2">Для того, чтобы получить возможность получить помощь наших волонтёров, Вам достаточно заполнить форму ниже:</h2>
            </div>
        </div>
        <div class="section-top__form">
            <label for="surname" class="section-top__form__label">Фамилия</label>
            <input class="section-top__form__input" id="surname" type="text" placeholder="Фамилия">
            <label for="name" class="section-top__form__label">Имя</label>
            <input class="section-top__form__input" id="name" type="text" placeholder="Имя">
            <label for="patronymic" class="section-top__form__label">Отчество</label>
            <input class="section-top__form__input" id="patronymic" type="text" placeholder="Отчество">
            <label for="DOB" class="section-top__form__label">Дата рождения</label>
            <input class="section-top__form__input" id="DOB" type="date" placeholder="Дата рождения">   <!--DOB - date of birth-->
            <label for="locality" class="section-top__form__label">Адрес проживания</label>
            <input class="section-top__form__input" id="locality" type="text" placeholder="Адрес места проживания">
            <label for="phone" class="section-top__form__label">Телефон</label>
            <input class="section-top__form__input" id="phone" type="text" placeholder="Номер телефона">
            <label for="email" class="section-top__form__label">Почта</label>
            <input class="section-top__form__input" id="email" type="text" placeholder="Электронная почта">
            <!--<input class="section-top__form__input" id="description" type="submit" placeholder="Опишите нынешнею ситуацию в которой вам нужна помощь">-->
            <label for="description" class="section-top__form__label">Опишите вашу ситуацию</label>
            <textarea class="section-top__form__textarea" id="description" placeholder="Опишите нынешнюю ситуацию, в которой вам нужна помощь"></textarea>
            <p class="section-top__form__p">Являетесь ли Вы объектом социальной защиты? 
                Если являетесь, то выберите из списка объект к которому Вы относитесь: </p>
            <select class="section-top__form__select" name="social_privil" id="social_privil">
                <option class="section-top__form__select__option">Я не являюсь объектом социальной защиты</option>
                <option class="section-top__form__select__option">Я являюсь объектом социальной защиты</option>
            </select>
            <label for="pass" class="section-top__form__label">Пароль</label>
            <input class="section-top__form__input" id="pass" type="text" placeholder="Придумайте пароль">
            <label for="pass_again" class="section-top__form__label">Повторите пароль</label>
            <input class="section-top__form__input" id="pass_again" type="text" placeholder="Введите пароль повторно">
            <button class="section-top__form__button">Получить помощь</button>
        </div>
    </section>