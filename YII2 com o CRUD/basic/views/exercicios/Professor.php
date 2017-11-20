<?php
use yii\widgets\LinkPager;

?>
<h1>Professores</h1>

<ul>
    <?php foreach($professor as $prof) :  ?>
    <li>
        <?php echo $prof->nome; ?>
    </li>
        
    <?php endforeach; ?>
</ul>

<?php echo LinkPager::widget(['pagination' => $pagination]); ?>
