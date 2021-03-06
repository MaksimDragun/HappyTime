<?php include("menu.php") ?>
<div>
    <?php
        if ($headerContent)
        {
            echo($headerContent);
        }

        function getHeaderImageAlt($activeSubLink, $menu, $alt)
        {
            if (strcmp($activeSubLink, $menu) == 0)
            {
                return $alt;
            }  else {
                return 'Студия праздников ' . MSGapplicationTitle;
            }
        }

    ?>
    <div class="header">
        <div>
            <a class="" href=<?php echo("\"" . $menuActions[MSGsantaClaus]["link"] . "\""); ?>>
                <img class="home-image"
                    alt=<?php echo(getHeaderImageAlt($activeSubLink, MSGsantaClaus, 'Заказать Деда Мороза на дом в  Минске')) ?>
                    src="/images/banners/santa_in_home.png">
            </a>
        </div>
        <div>
            <a class="" href="/index.php">
                <img class="home-image"
                     alt=<?php echo('Студия праздников ' . MSGapplicationTitle)?>
                     src="/images/banners/info.png">
            </a>
        </div>
        <div>
            <a class="" href=<?php echo("\"" . $menuActions[MSGsantaClaus]["link"] . "#office\""); ?>>
                <img class="home-image"
                     alt=<?php echo(getHeaderImageAlt($activeSubLink, MSGsantaClaus, 'Вызвать Деда Мороза в офис в Минске'))?>
                     src="/images/banners/santa_in_office.png">
            </a>
        </div>
    </div>
</div>
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="/index.php"><?php echo MSGmainPage ?></a></h1>
        </li>
    </ul>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span><?php echo MSGmenu ?></span></a></li>
    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <?php printHeaderMenu($menuAdditional, $activeLink, $activeSubLink); ?>
            <!--
            <li class="has-form search-bar">
                <form id="search" method="get"  action="/pages/search.php">
                    <div class="row collapse">
                        <div class="large-10 small-9 columns">
                            <input name="searchRequest"
                                   class="search-input"
                                   type="text"
                                   placeholder=<?php echo "\"".MSGsiteSearch."\"" ?>>
                        </div>
                        <div class="large-2 small-3 columns">
                            <a onclick="document.getElementById('search').submit();return false;">
                                <img src="/images/tools/search_icon.png"
                                     alt="Найти оригинальный подарок"
                                     class="search-icon" style="">
                            </a>
                        </div>
                    </div>
                </form>
            </li>
            -->
        </ul>
        <!-- Left Nav Section -->
        <ul class="left">
            <?php printHeaderMenu($menu, $activeLink, $activeSubLink); ?>
        </ul>
    </section>
</nav>