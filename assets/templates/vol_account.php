<section class="section-top container">
    <form class="section-top__form" method="post">
        <div class="section-top__form__div"></div>
        <label class="section-top__form__label">                <!--Новый класс section-top__form__label-->
            Загрузить файл
            <input type="file" id="img" name="img" class="section-top__form__label__file">   <!--Новый класс section-top__form__label__file-->
        </label>
        <h1 class="section-top__form__h1">Основная информация:</h1>         <!--Новый класс section-top__form__h1-->
        <p class="section-top__form__p1">Имя: </p>
        <input class="section-top__form__input" id="name" name="name" value="<?=$Name??""?>" type="text" placeholder="Владимир">        <!--Новый класс section-top__form__p1-->
        <p class="section-top__form__p1">Фамилия: </p>
        <input class="section-top__form__input" id="surname" name="surname" value="<?=$Sec_Name??""?>" type="text" placeholder="Касаткин">
        <p class="section-top__form__p1">Отчество: </p>
        <input class="section-top__form__input" id="patronymic" name="patronymic" value="<?=$Patronymic??""?>" type="text" placeholder="Владимирович">
        <p class="section-top__form__p1">О себе: </p>
        <textarea class="section-top__form__textarea" id="description"  name="description"><?=$About??""?></textarea>
        <p class="section-top__form__p1">Дата рождения: </p>
        <input class="section-top__form__input" id="DOB" name="DOB" value="<?=$Birth_Date??""?>" type="date" placeholder="Дата рождения">   <!--DOB - date of birth-->
        <p class="section-top__form__p1">Адрес проживания: </p>
        <input class="section-top__form__input" id="locality" value="<?=$Address??""?>" name="locality" type="text" placeholder="Москва">
        <p class="section-top__form__p1">Номер телефона: </p>
        <input class="section-top__form__input" id="phone" value="<?=$Phone??""?>" name="phone" type="text" placeholder="+7 915 374 49-57">
        <p class="section-top__form__p1">Электронная почта: </p>
        <input class="section-top__form__input" id="email" value="<?=$Email??""?>" name="email" type="text" placeholder="email@email.ru">
        <h1 class="section-top__form__h1">Дополнительно:</h1>
        <div class="section-top__form__checkbox1">                   <!--Новый класс section-top__form__checkbox1-->
            <p class="section-top__form__checkbox__p">Пол:</p>
            <div class="section-top__form__checkbox__div">
                <label class="section-top__form__checkbox__label">
                    <input class="section-top__form__checkbox__input" id="sex" name="sex" type="radio" <?=isset($Sex)&&$Sex=='Ж'?"checked":"" ?> value="Ж">
                        Женский
                </label>
                <label class="section-top__form__checkbox__label">
                    <input class="section-top__form__checkbox__input" id="sex" name="sex" type="radio" <?=isset($Sex)&&$Sex=='М'?"checked":"" ?> value="М">
                        Мужской
                </label>
            </div>
        </div>
        <p class="section-top__form__p1">Паспорт: </p>
        <div class="section-top__form__div1">               <!--Новый класс section-top__form__div1-->
            <input class="section-top__form__input" id="series" name="series" value="<?=$Series??""?>" type="text" placeholder="Серия">
            <input class="section-top__form__input" id="number" name="number" value="<?=$Number??""?>" type="text" placeholder="Номер">
        </div>
        <p class="section-top__form__p1">Снилс: </p>
        <input class="section-top__form__input" id="snils" name="snils" value="<?=$SNILS??""?>" type="text" >
        <p class="section-top__form__p1">ИНН: </p>
        <input class="section-top__form__input" id="tin" name="tin" value="<?=$TIN??""?>" type="text" >
        <div class="section-top__form__checkbox1">
            <div class="section-top__form__checkbox__div">
                <label class="section-top__form__checkbox__label">
                    <input class="section-top__form__checkbox__input" name="book"  <?=isset($Book)&&$Book==1?"checked":"" ?> type="checkbox">
                    Есть медицинская книжка
                </label>
            </div>
        </div>
        <div class="section-top__form__checkbox1">
            <div class="section-top__form__checkbox__div">
                <label class="section-top__form__checkbox__label">
                    <input class="section-top__form__checkbox__input" name="driver" <?=isset($Driver)&&$Driver==1?"checked":"" ?> type="checkbox">
                    Есть водительские права
                </label>
            </div>
        </div>
        <p class="section-top__form__p1">Занятость: </p>
        <select class="section-top__form__select" name="employment" id="employment">
            <?php foreach($employments as $employment)
            {
                ?>
                <option class="section-top__form__select__option" value="<?=$employment['ID_Employment'] ?>"><?= $employment["Employment"]?></option >
                <?php
            }
            ?>
        </select>
        <p class="section-top__form__p1">Направление: </p>
        <?php foreach($directions as $direction)
            {
                ?>
        <div class="section-top__form__checkbox1">
            <div class="section-top__form__checkbox__div">
                <label class="section-top__form__checkbox__label">
                    <input class="section-top__form__checkbox__input" id="book"
                        <?=in_array([0=>$ID,$direction['ID_Direction']],$sel_dir)?"checked":""?> type="checkbox" name="<?= $direction['ID_Direction']?>">
                    <?=$direction['Direction'] ?>
                </label>
            </div>
        </div>
        <?php
        }
        ?>
        <p class="section-top__form__p1">Размер фуболки: </p>
        <select class="section-top__form__select" name="size" id="size">
            <?php foreach($Sizes as $size)
            {
                ?>
            <option class="section-top__form__select__option" value="<?=$size['ID_Size'] ?>"><?= $size["Size"]?></option >
            <?php
            }
                ?>
        </select>
        <p class="section-top__form__p1">Ссылка телеграм: </p>
        <input class="section-top__form__input" id="link_telegram" value="<?=$TG??""?>" name="link_telegram" type="text" >
        <p class="section-top__form__p1">Смылка ВКонтакте </p>
        <input class="section-top__form__input" id="link_vk" value="<?=$VK??""?>" name="link_vk" type="text" >
        <button class="section-top__form__button">Сохранить</button>
    </form>
</section>