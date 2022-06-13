<script src="/assets/js/address.js"></script>
    <section class="section-top container">
        <div class="section-top__description">
            <div class="section-top__description__left">
                <h1 class="section-top__description__h1">Стать организатором / Создать организацию</h1>
                <h2 class="section-top__description__h2">Организация - коллектив волонтёров, выполняющий различные масштабные задачи.
                    Для того, чтобы создать организацию и стать организатором, Вам необходимо заполнить форму ниже:</h2>
            </div>
        </div>
        <form method="post" class="section-top__form">
            <label for="org_name" class="section-top__form__label">Название организации</label>
            <input class="section-top__form__input" id="org_name" name="org_name" type="text" placeholder="Название организации">
            <label for="surname" class="section-top__form__label">Фамилия</label>
            <input class="section-top__form__input" id="surname" name="surname" type="text" placeholder="Фамилия">
            <label for="name" class="section-top__form__label">Имя</label>
            <input class="section-top__form__input" id="name" name="name" type="text" placeholder="Имя">
            <label for="patronymic" class="section-top__form__label">Отчетсво</label>
            <input class="section-top__form__input" id="patronymic" name="patronymic" type="text" placeholder="Отчество">
            <label for="locality" class="section-top__form__label">Населённый пункт</label>
            <input class="section-top__form__input" list="loc" id="locality" name=locality type="text" placeholder="Адрес места проживания">
            <datalist id="loc" class="section-top__form__input">
            </datalist>
            <label for="phone" class="section-top__form__label">Телефон</label>
            <input class="section-top__form__input" id="phone" name="phone" type="text" placeholder="Номер телефона">
            <label for="email" class="section-top__form__label">Почта</label>
            <input class="section-top__form__input" id="email" name="email" type="text" placeholder="Электронная почта">
            <label for="pass" class="section-top__form__label">Пароль</label>
            <input class="section-top__form__input" id="pass" name="pass" type="password" placeholder="Придумайте пароль">
            <label for="pass_again" class="section-top__form__label">Повторите пароль</label>
            <input class="section-top__form__input" id="pass_again" name="pass_again" type="password" placeholder="Введите пароль повторно">
            <input type="submit" class="section-top__form__button" value="Добавить организацию">
        </form>
    </section>