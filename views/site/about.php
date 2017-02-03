<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <h2>Long Translation</h2>
    <p>
        <?php echo \Yii::t('views', "Please remember that we are not responsible for any messages posted. We do not vouch for or warrant the accuracy, completeness or usefulness of any post, and are not responsible for the contents of any post.<br><br>The posts express the views of the author of the post, not necessarily the views of this forum. Any user who feels that a posted message is objectionable is encouraged to contact us immediately by email. We have the ability to remove objectionable posts and we will make every effort to do so, within a reasonable time frame, if we determine that removal is necessary.<br><br>You agree, through your use of this service, that you will not use this forum to post any material which is knowingly false and/or defamatory, inaccurate, abusive, vulgar, hateful, harassing, obscene, profane, sexually oriented, threatening, invasive of a person's privacy, or otherwise violative of any law.<br><br>You agree not to post any copyrighted material unless the copyright is owned by you or by this forum.") ?>
    </p>
    
    <h2>Short Translation</h2>
    <p>
        <?php echo \Yii::t('views', 'This is a small translation') ?>
    </p>

    <code><?= __FILE__ ?></code>
</div>
