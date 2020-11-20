<?php

use yii\helpers\Html;
use yii\widgets\LinkPager; // 内部封装的视图控件

?>

<h1>Countries</h1>
<ul>
    <?php
    foreach ($countries as $country) {
    ?>

        <li>
            <?php echo HTML::encode($country->name . ":" . $country->code) ?>
            <?php echo $country->population ?>
        </li>

    <?php } ?>
</ul>

<?php echo LinkPager::widget(['pagination' => $pagination]) ?>