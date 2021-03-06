<div class="small-12">
    <p class="text-center custom-main-color">
        <?php echo(MSGalterApplicationTitle." ".MSGapplicationTitleQuotes); ?>
    </p>

    <p class="text-center" style="font-size: small;">
        Мы рады сделать Ваш праздник счастливым и незабываемым!
        У нас Вы сможете найти все необходимое для праздника по выгодным ценам: воздушные шары,
        светящиеся шары (новинка), небесные фонарики, оригинальные и креативные подарки, подарки ручной работы,
        праздничную посуду и аксессуары.
        <?php echo(MSGalterApplicationTitle." ".MSGapplicationTitleQuotes); ?> также всегда готова предложить услуги тамады, звукорежиссера, аниматоров с яркими
        номерами, шуточными сценками, забавными конкурсами, песнями с живым исполнением и танцами.
    </p>

    <p class="custom-main-color block text-center" style="font-size: small;"><strong>До Нового 2015 Года осталось всего
        <?php
        $datetime1 = new DateTime('2014-11-25');
        $datetime2 = new DateTime('2015-01-01');
        $interval = $datetime1->diff($datetime2);
        echo $interval->format('%d дней/день/дня' );
        ?></strong>
    </p>
    <p class="text-center" style="font-size: small;">
        В связи с этим в нашей студии Вы можете
        <a href=<?php echo($menuActions[MSGsantaClaus]["link"]); ?> class="custom-text-color">
            <strong>заказать Деда Мороза к себе на дом в Минске</strong>
        </a> вместе с его внучкой Снегурочкой.
    </p>

    <p class="text-center" >
        <a href=<?php echo($menuAdditional[MSGorderAndDelivery]["link"]); ?> class="button small">
            <?php echo(MSGfreeDelivery); ?>
        </a>
    </p>
    <hr />
    <p class="text-center" style="font-size: small;">
        <span class="custom-main-color block">
            НОВИНКА!
        </span>
        <span class="custom-minor-color block">
            <strong>ОРГАНИЗАЦИЯ
            КВЕСТ-ПОЗДРАВЛЕНИЙ</strong>,
            <b>КВЕСТ-ПРИЗНАНИЙ В ЛЮБВИ</b>
        </span>
        <a href=<?php echo($menuActions[MSGoriginalCongratulation]["link"]); ?> class="button small">
            <?php echo("Подробнее"); ?>
        </a>
    </p>
    <hr />
    <p class="text-center" style="font-size: small;">
        <span class="custom-main-color block">
        <?php echo(MSGalterApplicationTitle." ".MSGapplicationTitleQuotes); ?>
        </span>
        <span class="custom-minor-color block">
        <?php echo(MSGcontacts); ?>
        </span>
        <span class="block">
        <?php echo(MSGvelcomPhone); ?>
        </span>
        <span class="block">
        <?php echo(MSGmtsPhone); ?>
        </span>
        <span class="block">
        <?php echo(MSGscheduleTitle); ?>
        </span>
        <span class="block">
        <?php echo(MSGworkTime); ?>
        </span>
        <span class="block">
        <?php echo(MSGwithoutWeekEnd); ?>
        </span>
    </p>

    <p class="text-center" style="font-size: small;">
        ИП "Чуешков Юрий Витальевич"
        <br />
        г. Минск, ул. Кнорина
        <br />
        Регистрация от 12.12.2013
        <br />
        Минский городской исполнительный комитет
        <br />
      <!--
      Регистрация в Торговом реестре Республики Беларусь от
      -->
    </p>
</div>