<?php
include('components/messages.php');
$title = MSGaboutUs;
$activeLink = MSGaboutUs;
$content = '
<div class="row">
    <div class="small-12 columns text-center">
        <h1>' . MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . '</h1>
     </div>
</div>
<div class="row valign-middle">
    <div class="small-12 medium-4 large-3 columns text-center">
        <img class="common-image" src="/images/gift.png">
     </div>

     <div class="small-12 medium-4 large-6 columns text-center">
        <p class="text-center" >
            <br />
            <span class="block custom-minor-color">
            ' . MSGcontacts . '
            </span>
            <span class="block">
            ' . MSGvelcomPhone . '
            </span>
            <span class="block">
            ' . MSGmtsPhone . '
            </span>
            <span class="block">
            ' . MSGscheduleTitle . '
            </span>
            <span class="block">
            ' . MSGworkTime . '
            </span>
            <span class="block">
            ' . MSGwithoutWeekEnd . '
            </span>
        </p>
        <p>
            Услуги тамады, аниматора
            (при предварительной записи):
                круглосуточно
                ' . MSGurl . '
        </p>
     </div>
     <div class="small-12 medium-4 large-3 columns text-center">
        <img class="common-image" src="/images/gift.png">
     </div>
</div>';
include('components/template.php');
?>
