<script src="/assets/js/address.js"></script>
<section class="section-top container">
        <div class="section-top__description">
            <div class="section-top__description__left">
                <h1 class="section-top__description__h1">Стать волонтёром</h1>
                <h2 class="section-top__description__h2">Волонтер — это человек, который помогает даром незащищенным слоям населения, которые нуждабтся в помощи. Для того, чтобы стать волонтёром, Вам необходимо заполнить форму ниже:</h2>
            </div>
            <div class="section-top__description__right">
                <img class="section-top__description__right_img" src="/assets/image/Vols.png" alt="image">
            </div>
        </div>
        <form class="section-top__form" method="post">
            <label for="surname" class="section-top__form__label">Фамилия</label>
            <input class="section-top__form__input" id="surname" name="surname" type="text" placeholder="Фамилия">
            <label for="name" class="section-top__form__label">Имя</label>
            <input class="section-top__form__input" id="name" name="name" type="text" placeholder="Имя">
            <label for="patronymic" class="section-top__form__label">Отчество</label>
            <input class="section-top__form__input" id="patronymic" name="patronymic" type="text" placeholder="Отчество">
            <label for="DOB" class="section-top__form__label">Дата рождения</label>
            <input class="section-top__form__input" id="DOB" name="DOB" type="date" placeholder="Дата рождения">   <!--DOB - date of birth-->
            <label for="locality" class="section-top__form__label">Адрес проживания</label>
            <input class="section-top__form__input" list="loc" id="locality" name=locality type="text" placeholder="Адрес места проживания">
            <datalist id="loc" class="section-top__form__input">
            </datalist>
            <label for="phone" class="section-top__form__label">Телефон</label>
            <input class="section-top__form__input" id="phone" name="phone" type="text" placeholder="Номер телефона">
            <label for="email" class="section-top__form__label">Почта</label>
            <input class="section-top__form__input" id="email" name="email" type="text" placeholder="Электронная почта">
            <div class="section-top__form__checkbox">
                <p class="section-top__form__checkbox__p">Укажите дни, в которые вы сможете участвовать в помощи:</p>
                <div class="section-top__form__checkbox__div">
                    <label class="section-top__form__checkbox__label">
                        <input class="section-top__form__checkbox__input" name="Mon" type="checkbox">
                        ПН
                    </label>
                    <label class="section-top__form__checkbox__label">
                        <input class="section-top__form__checkbox__input" name="Tue" type="checkbox">
                        ВТ
                    </label>
                    <label class="section-top__form__checkbox__label">
                        <input class="section-top__form__checkbox__input" name="Wed" type="checkbox">
                        СР
                    </label>
                    <label class="section-top__form__checkbox__label">
                        <input class="section-top__form__checkbox__input" name="Thu" type="checkbox">
                        ЧТ
                    </label>
                    <label class="section-top__form__checkbox__label">
                        <input class="section-top__form__checkbox__input" name="Fri" type="checkbox">
                        ПТ
                    </label>
                    <label class="section-top__form__checkbox__label">
                        <input class="section-top__form__checkbox__input" name="Sat" type="checkbox">
                        СБ
                    </label>
                    <label class="section-top__form__checkbox__label">
                        <input class="section-top__form__checkbox__input" name="Sun" type="checkbox">
                        ВС
                    </label>
                </div>
            </div>
            <label for="pass" class="section-top__form__label">Пароль</label>
            <input class="section-top__form__input" id="pass" name="pass" type="password" placeholder="Придумайте пароль">
            <label for="pass_again" class="section-top__form__label">Повторите пароль</label>
            <input class="section-top__form__input" id="pass_again" name="pass_again" type="password" placeholder="Введите пароль повторно">
            <input type="submit" class="section-top__form__button" value="Стать волонтёром">
        </form>
    </section>
<script>
    $(document).ready(function(){
        $("#locality").keydown(kd)
    })
    function kd()
    {
        let a = getAddress($("#locality").val()).then(response=> {
            $("#loc").empty()
            for(let i of response["suggestions"])
                $("#loc").append("<option value='"+ i.value +"'>")
            $('#loc').show().focus();
        })

    }
</script>