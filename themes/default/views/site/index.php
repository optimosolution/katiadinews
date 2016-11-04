<?php
$this->pageTitle = Yii::app()->name;
?>
<div class="row">
    <?php $this->get_advertisement(4); ?>
</div>
<div class="row">
    <div class="featured-header"><?php echo Title::get_title(5); ?></div>
    <?php Content::get_editorial_choice(); ?>
</div>
<div class="row">
    <div class="featured-header"><?php echo Title::get_title(8); ?></div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <?php Content::get_featured_news(0, 5); ?>
    </div> 
    <div class="col-lg-6 col-md-6 col-sm-6">
        <?php Content::get_featured_news(6, 5); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
        <?php $this->get_advertisement_feature(6); ?>
    </div> 
</div>
<div class="row">
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(2), array('news/index', 'id' => 2), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(2); ?>
    </div>
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(15), array('news/index', 'id' => 15), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(15); ?>
    </div>
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(4), array('news/index', 'id' => 4), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(4); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
        <?php $this->get_advertisement_middle(7); ?>
    </div> 
</div>
<div class="row">
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(7), array('news/index', 'id' => 7), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(7); ?>
    </div>
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(8), array('news/index', 'id' => 8), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(8); ?>
    </div>
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(13), array('news/index', 'id' => 13), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(13); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
        <?php $this->get_advertisement_middle(8); ?>
    </div> 
</div>
<div class="row">
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(14), array('news/index', 'id' => 14), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(14); ?>
    </div>
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(19), array('news/index', 'id' => 19), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(19); ?>
    </div>
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(16), array('news/index', 'id' => 16), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(16); ?>
    </div>       
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
        <?php $this->get_advertisement_middle(9); ?>
    </div> 
</div>
<div class="row">
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(17), array('news/index', 'id' => 17), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(17); ?>
    </div>
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(9), array('news/index', 'id' => 9), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(9); ?>
    </div>
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(18), array('news/index', 'id' => 18), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(18); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
        <?php $this->get_advertisement_middle(10); ?>
    </div> 
</div>
<div class="row">
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(20), array('news/index', 'id' => 20), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(20); ?>
    </div>
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(3), array('news/index', 'id' => 3), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(3); ?>
    </div>
    <div class="col-md-4">
        <div class="featured-header"><?php echo CHtml::link(ContentCategory::getCategoryName(21), array('news/index', 'id' => 21), array('class' => 'category-header', 'style' => 'color: #FFF;')); ?></div>
        <?php Content::get_news_home(21); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
        <?php $this->get_advertisement_middle(11); ?>
    </div> 
</div>