<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php use Application\Src\Page\DarumPageUtils; ?>
<?php $leadColor = DarumPageUtils::getCategoryColor($c->getCollectionID);?>
<?php $landingDir = $this->getThemePath() . '/landing'; ?>
<?php $this->inc('elements/common/doctype.php'); ?>
<?php $this->inc('elements/common/head.php'); ?>
<body>
<style>
	.in-block-banner {
		text-align:center;
	}
	.in-block-banner>a {
		width: 100%;
		display:inline-block;
	}
	.in-block-banner>a>img {
		width:100%;
	}
.moreadvice-one > a {
    display: block;
    width: 100%;
}
.moreadvice-one > a > img {
    width: 100%;
}
</style>
    <?php $this->inc('elements/common/ie8_warn.php'); ?>

    <div class="<?= $c->getPageWrapperClass() ?>">
        <?php $this->inc('elements/nav.php'); ?>
        <div class="l-container">
         <!--*1 New-->

            <?php if ($c->getCollectionID() == DarumPageUtils::ADVICE_PARENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-maintop">Новые советы родителям</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ADVICE_STUDENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-maintop">Новые советы студентам</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ADVICE_RELATIONS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-maintop">Новые советы по отношениям</h1>
            <?php elseif ($c->getCollectionID() == DarumPageUtils::ARTICLE_PARENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-maintop">Новые статьи родителям</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ARTICLE_STUDENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-maintop">Новые статьи студентам</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ARTICLE_RELATIONS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-maintop">Новые статьи по отношениям</h1>
            <?php else:?>
                <h1 class="allarticles-h1 allarticles-h1-maintop">Раздел не опеределен (ошибка)</h1>
            <?php endif;?>

            <div class="l-maintop">
                <div class="l-aside-allarticles">
                    <div class="aside-list" style="margin-top:17px;">
                        <div class="aside-list-header">
                            <h3>Рекомендуем</h3> 
                        </div>
                        <ul>
                            <?php foreach( $newPages as $p ):?>
                            <?php $pageUtils = new DarumPageUtils($p);?>
                            <li class="aside-list-item mini">
                                <?php if( !empty($p->mainImage)) :?>
                                    <?php echo $pageUtils->cropImage($p->mainImage, 72, 72, $p->altMainImage); ?>
                                <?php endif;?>
                                <div class="introtext">
                                    <p>
                                        <a href="<?= $p->getCollectionPath()?>">
                                            <?php echo mb_substr($p->getAttribute('introtext'), 0, 50) . '...';?>
                                        </a>
                                    </p>
                                </div>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <div class="preview-main-container">
                    <ul class="flipster__container">
                        <?php foreach( $mainNewPage as $p ):?>
                        <?php $pageUtils = new DarumPageUtils($p);?>
                        <li>
                            <div class="preview-main">
                                <?php if( !empty($p->mainImage)) :?>
                                    <?php echo $pageUtils->cropImage($p->mainImage, 555, 420, $p->altMainImage); ?>
                                <?php endif;?>

                                <?php $title = $pageUtils->getCategoryTitle()?>
                                <div class="intro <?= $title['css'] ?>">

                                    <span class="intro-category">
                                        <a href="<?= $title['href']?>">
                                            <?= $title['title']?> 
                                        </a>
                                    </span>
                                    <h1 class="intro-header">
                                        <a style="color:#fff" href="<?= $p->getCollectionPath()?>">
                                            <?= $p->getAttribute('meta_title')?>
                                        </a>
                                    </h1>
                                    <p class="intro-text">
                                         <?php echo mb_substr($p->getAttribute('introtext'), 0, 100) . '...';?>
                                    </p>
<!--                                    <span class="intro-author">
                                        Автор: Кравченко Полина
                                    </span> -->
                                    <span class="intro-likes">
                                        <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                                    </span>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <aside class="in-block-banner l-aside-allarticles">
		    <a target="_blank" href="goo.gl/E8hQ3k">
                    <img style="width:100%;max-height:420px" src="/application/themes/darum/img/CPA/advices/1.gif">
		    </a>
                </aside>
            </div>

            <!--*2-->
            <?php if ($c->getCollectionID() == DarumPageUtils::ADVICE_PARENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainarticles">Популярные советы родителям</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ADVICE_STUDENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainarticles">Популярные советы студентам</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ADVICE_RELATIONS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainarticles">Популярные советы по отношениям</h1>
            <?php elseif ($c->getCollectionID() == DarumPageUtils::ARTICLE_PARENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainarticles">Популярные статьи родителям</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ARTICLE_STUDENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainarticles">Популярные статьи студентам</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ARTICLE_RELATIONS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainarticles">Популярные статьи по отношениям</h1>
            <?php else:?>
                <h1 class="allarticles-h1 allarticles-h1-mainarticles">Раздел не опеределен (ошибка)</h1>
            <?php endif;?>
                
            <div class="l-mainarticles">
                <div class="preview-main-container">
                    <ul class="flipster__container">
                        <?php foreach( $mainPopularPage as $p ):?>
                        <?php $pageUtils = new DarumPageUtils($p);?>
                        <li>
                            <div class="preview-main">
                                <?php if( !empty($p->mainImage)) :?>
                                    <?php echo $pageUtils->cropImage($p->mainImage, 555, 420, $p->altMainImage); ?>
                                <?php endif;?>

                                <?php $title = $pageUtils->getCategoryTitle(); ?>
                                <div class="intro <?= $title['css'] ?>">

                                    <span class="intro-category">
                                        <a  href="<?= $title['href']?>">
                                            <?= $title['title']?> 
                                        </a>
                                    </span>
                                    <h1 class="intro-header">
                                        <a style="color:#fff" href="<?= $p->getCollectionPath()?>">
                                            <?= $p->getAttribute('meta_title')?>
                                        </a>
                                    </h1>
                                    <p class="intro-text">
                                         <?php echo mb_substr($p->getAttribute('introtext'), 0, 100) . '...';?>
                                    </p>
<!--                                    <span class="intro-author">
                                        Автор: Кравченко Полина
                                    </span> -->
                                    <span class="intro-likes">
                                        <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                                    </span>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <ul class="previewlist">
                    <?php foreach( $popularPages as $p ):?>
                    <?php $pageUtils = new DarumPageUtils($p);?>
                    <li class="previewlist-one">
                        <?php if( !empty($p->mainImage)) :?>
                                    <?php echo $pageUtils->cropImage($p->mainImage, 263, 180, $p->altMainImage); ?>                          
                        <?php endif;?>
                        <div class="previewlist-content">
                            <h2 class="subcategory-header">
                                <?php $title = $pageUtils->getCategoryTitle()?>
                                <a class="<?= $leadColor?>" href="<?= $title['href']?>">
                                    <?= $title['title']?>
                                </a>
                            </h2>
                            <h3 class="previewlist-content-header">
                                <a href="<?= $p->getCollectionPath()?>">
                                    <?= $p->getAttribute('meta_title')?>
                                </a>
                            </h3>

                            <span class="intro-likes intro-likes-previewlist">
                                <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                            </span>
                        </div>
                    </li>
                    <?php endforeach;?>
                    <li class="in-block-banner previewlist-one">
			<a href="goo.gl/d6Am5B" target="_blank">
                        <img alt="" src="<?php echo $this->getThemePath() ?>/img/CPA/advices/2.jpg">                                
			</a>
                    </li>
                </ul>
            </div>

            <!--*3-->
            <?php if ($c->getCollectionID() == DarumPageUtils::ADVICE_PARENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainadvices">Самые обсуждаемые советы</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ADVICE_STUDENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainadvices">Самые обсуждаемые советы</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ADVICE_RELATIONS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainadvices">Самые обсуждаемые советы</h1>
            <?php elseif ($c->getCollectionID() == DarumPageUtils::ARTICLE_PARENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainadvices">Самые обсуждаемые статьи</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ARTICLE_STUDENTS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainadvices">Самые обсуждаемые статьи</h1>
            <?php elseif($c->getCollectionID() == DarumPageUtils::ARTICLE_RELATIONS_CATEGORY_CID):?>
                <h1 class="allarticles-h1 allarticles-h1-mainadvices">Самые обсуждаемые статьи</h1>
            <?php else:?>
                <h1 class="allarticles-h1 allarticles-h1-mainadvices">Раздел не опеределен (ошибка)</h1>
            <?php endif;?>
                
            <div class="l-mainadvices">
                <ul class="previewlist">
                    <?php foreach( $commentedPages as $p ):?>
                    <?php $pageUtils = new DarumPageUtils($p);?>
                    <li class="previewlist-one">
                        <?php if( !empty($p->mainImage)) :?>
                                    <?php echo $pageUtils->cropImage($p->mainImage, 263, 180, $p->altMainImage); ?>                          
                        <?php endif;?>
                        <div class="previewlist-content">
                            <h2 class="subcategory-header">
                                <?php $title = $pageUtils->getCategoryTitle()?>
                                <a class="<?= $leadColor?>" href="<?= $title['href']?>">
                                    <?= $title['title']?>
                                </a>
                            </h2>
                            <h3 class="previewlist-content-header">
                                <a href="<?= $p->getCollectionPath()?>">
                                    <?= $p->getAttribute('meta_title')?>
                                </a>
                            </h3>

                            <span class="intro-likes intro-likes-previewlist">
                                <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                            </span>
                        </div>
                    </li>
                    <?php endforeach;?>
                    <li class="in-block-banner previewlist-one">
			<a href="http://kshop2.biz/NmNHDQ/" target="_blank">
                        <img alt="" src="<?php echo $this->getThemePath() ?>/img/CPA/advices/3.jpeg">                                
			</a>
                    </li>
                </ul>

                <div class="preview-main-container">
                    <ul class="flipster__container">
                        <?php foreach( $mainCommentedPage as $p ):?>
                        <?php $pageUtils = new DarumPageUtils($p);?>
                        <li>
                            <div class="preview-main">
                                <?php if( !empty($p->mainImage)) :?>
                                    <?php echo $pageUtils->cropImage($p->mainImage, 555, 420, $p->altMainImage); ?>
                                <?php endif;?>

                                <?php $title = $pageUtils->getCategoryTitle();?>
                                <div class="intro <?= $title['css'] ?>">
                                    <span class="intro-category">
                                        <a  href="<?= $title['href']?>">
                                            <?= $title['title']?> 
                                        </a>
                                    </span>
                                    <h1 class="intro-header">
                                        <a style="color:#fff" href="<?= $p->getCollectionPath()?>">
                                            <?= $p->getAttribute('meta_title')?>
                                        </a>
                                    </h1>
                                    <p class="intro-text">
                                         <?php echo mb_substr($p->getAttribute('introtext'), 0, 100) . '...';?>
                                    </p>
<!--                                    <span class="intro-author">
                                        Автор: Кравченко Полина
                                    </span> -->
                                    <span class="intro-likes">
                                        <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                                    </span>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mainbanner">
            <div class="mainbanner-img">
                <img src="<?php echo $this->getThemePath() ?>/img/demo/mainbanner.jpg" >
            </div>
            <div class="mainbanner-overlay">
                <span class="mainbanner-overlay-header">Получите профессиональную помощь психолога</span>
                <a href="#" class="mainbanner-overlay-action">Выбрать психолога</a>
            </div>
        </div>
        <div class="l-container">
            <!--<h1 class="allarticles-h1 allarticles-h1-mainquestion">Самые обсуждаемые<br/>Вопросы-Ответы</h1>-->
            <!--<ul class="questionlist">
                <li class="questionlist-one">
                    <h2 class="subcategory-header">
                        <a href="/index.php/otnosheniya/stati/spisok">
                            Родителям
                        </a>
                    </h2>
                    <h3 class="previewlist-content-header">
                        <a href="/roditelyam/stati/psihika-rebenka">
                            За что мы любим наших мам, откровения взрослых девочек. 
                        </a>
                    </h3>
                    <span class="intro-likes intro-likes-previewlist">
                        <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                    </span>
                </li>
                <li class="questionlist-one">
                    <h2 class="subcategory-header">
                        <a class="green" href="/index.php/otnosheniya/stati/spisok">
                            Студентам
                        </a>
                    </h2>
                    <h3 class="previewlist-content-header">
                        <a href="/roditelyam/stati/psihika-rebenka">
                            Уверенность в результате работы над ошибками
                        </a>
                    </h3>
                    <span class="intro-likes intro-likes-previewlist">
                        <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                    </span>
                </li>
                <li class="questionlist-one">
                    <h2 class="subcategory-header">
                        <a class="pink" href="/index.php/otnosheniya/stati/spisok">
                            Отношения
                        </a>
                    </h2>
                    <h3 class="previewlist-content-header">
                        <a href="/roditelyam/stati/psihika-rebenka">
                            Топ 10 советов, для тех, кто хочет влюбиться
                        </a>
                    </h3>
                    <span class="intro-likes intro-likes-previewlist">
                        <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                    </span>
                </li>
                <li class="questionlist-one">
                    <h2 class="subcategory-header">
                        <a class="pink" href="/index.php/otnosheniya/stati/spisok">
                            Отношения
                        </a>
                    </h2>
                    <h3 class="previewlist-content-header">
                        <a href="/roditelyam/stati/psihika-rebenka">
                            Топ 10 советов, для тех, кто хочет влюбиться
                        </a>
                    </h3>
                    <span class="intro-likes intro-likes-previewlist">
                        <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                    </span>
                </li>
                <li class="questionlist-one">
                    <h2 class="subcategory-header">
                        <a class="pink" href="/index.php/otnosheniya/stati/spisok">
                            Отношения
                        </a>
                    </h2>
                    <h3 class="previewlist-content-header">
                        <a href="/roditelyam/stati/psihika-rebenka">
                            Топ 10 советов, для тех, кто хочет влюбиться
                        </a>
                    </h3>
                    <span class="intro-likes intro-likes-previewlist">
                        <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                    </span>
                </li>
                <li class="questionlist-one">
                    <h2 class="subcategory-header">
                        <a href="/index.php/otnosheniya/stati/spisok">
                            Родителям
                        </a>
                    </h2>
                    <h3 class="previewlist-content-header">
                        <a href="/roditelyam/stati/psihika-rebenka">
                            За что мы любим наших мам, откровения взрослых девочек. 
                        </a>
                    </h3>
                    <span class="intro-likes intro-likes-previewlist">
                        <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                    </span>
                </li>
                <li class="questionlist-one">
                    <h2 class="subcategory-header">
                        <a class="green" href="/index.php/otnosheniya/stati/spisok">
                            Студентам
                        </a>
                    </h2>
                    <h3 class="previewlist-content-header">
                        <a href="/roditelyam/stati/psihika-rebenka">
                            Уверенность в результате работы над ошибками
                        </a>
                    </h3>
                    <span class="intro-likes intro-likes-previewlist">
                        <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                    </span>
                </li>
                <li class="questionlist-one">
                    <h2 class="subcategory-header">
                        <a class="pink" href="/index.php/otnosheniya/stati/spisok">
                            Отношения
                        </a>
                    </h2>
                    <h3 class="previewlist-content-header">
                        <a href="/roditelyam/stati/psihika-rebenka">
                            Топ 10 советов, для тех, кто хочет влюбиться
                        </a>
                    </h3>
                    <span class="intro-likes intro-likes-previewlist">
                        <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                    </span>
                </li>
            </ul>-->
            <div class="l-moreadvice">
                <h2>Интересно почитать</h2>
                <ul class="moreadvice-list">
                    <?php foreach ( $interestingPages as $p):?>
                    <?php $pageUtils = new DarumPageUtils($p);?>
                    <li class="moreadvice-one moreadvice-listitem right-bordered">
                        <?php if( !empty($p->mainImage)) :?>
                            <?php echo $pageUtils->cropImage($p->mainImage, 262, 179, $p->altMainImage); ?>
                        <?php endif;?>
                        <?php $title = $pageUtils->getCategoryTitle();?>
                        <h2 class="subcategory-header">
                            <a class="<?=$title['css']?>" href="<?=$title['href']?>">
                                <?=$title['title']?>
                            </a>
                        </h2>
                        <h3 class="moreadvice-listitem-header">
                            <a href="<?= $p->getCollectionPath()?>">
                                <?= $p->getAttribute('meta_title')?>
                            </a>
                        </h3>
                        <span class="intro-likes intro-likes-list">
                            <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                        </span>
                    </li>
                    <?php endforeach;?>
                </ul>
                <ul class="moreadvice-banner">
                    <li class="moreadvice-one">
                        <img src="/application/themes/darum/img/demo/vk.jpg" <="" li="">
                    </li><li class="moreadvice-one">
			<a href="http://kshop2.biz/e9Eu9s/" target="_blank">
				<img src="/application/themes/darum/img/CPA/advices/4.jpg" <="" li="">
			</a>
                    </li>
                </ul> 
            </div>
        </div>
        <?php $this->inc('elements/footer.php'); ?>
    </div>

    <?php $this->inc('elements/common/js.php'); ?>
    <script type="text/javascript" src="<?php echo $landingDir ?>/libs/flipster/dist/jquery.flipster.min.js"></script>
    <script>
        $(window).on('load', function () {
            $(".preview-main-container").flipster({
                style: 'flat',
                spacing: 0,
                loop: true,
                autoplay: 5000,
                keyboard: false,
                buttons: true
            });
        });
    </script>
    <?php Loader::element('footer_required') ?>    
</body>
<?php $this->inc('elements/common/doctype_bot.php'); ?>
