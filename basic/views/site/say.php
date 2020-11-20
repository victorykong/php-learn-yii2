<?php

use yii\helpers\Html;

?>

<!-- 被 encode 处理很有必要，可以预防 XSS 攻击 -->
<?php echo Html::encode($message) ?>


<div>
    这是 say 页面
</div>