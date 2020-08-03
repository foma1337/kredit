<?php
use yii\helpers\html;
?>
<ul>
<li><label>Name</label>: <?= HTML::encode($model->name)?></li>
<li><label>Email</label>: <?= HTML::encode($model->email) ?></li>
</ul>