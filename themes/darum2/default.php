<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php use Application\Src\Page\DarumPageUtils; ?>
<?php $landingDir = $this->getThemePath() . '/landing'; ?>
<?php $this->inc('elements/head.php'); ?>

<body class="page">
    <?php $this->inc('elements/ie8_warn.php'); ?>
    <div class="<?= $c->getPageWrapperClass() ?>">
        <?php $this->inc('elements/header.php'); ?> 
        <div class="page__viewport">
            <?php $this->inc('elements/nav.php'); ?>

            <!--SLIDE 1-->
            <div class="page__slide">
                <div class="page__container">
                <!--slide 1 iconmenu-->
                    <div class="menu-slick menu_bordered">
                        <div class="slick-menu">
                            <div class="link-block">
                                <a class="avatar link-block__normlink" href="#">
                                    <img class="avatar__photo slick-menu__avatar-photo" src="<?php echo $this->getThemePath(); ?>/img/demo/iconmenu1.png" />
                                    <span class="avatar__text slick-menu__avatar-text">
                                        Изучайте советы при типовых ситуациях
                                    </span>
                                </a>
                            </div>
                            <div class=" link-block">
                                <a class="avatar link-block__normlink" href="#">
                                    <img class="avatar__photo slick-menu__avatar-photo"  src="<?php echo $this->getThemePath(); ?>/img/demo/iconmenu2.png" />
                                    <span class="avatar__text slick-menu__avatar-text">
                                        Читайте тематические статьи психологов
                                   </span>
                                </a>
                            </div>
                            <div class=" link-block">
                                <a class="avatar link-block__normlink" href="#">
                                    <img class="avatar__photo slick-menu__avatar-photo"  src="<?php echo $this->getThemePath(); ?>/img/demo/iconmenu3.png" />
                                    <span class="avatar__text slick-menu__avatar-text">
                                        Запишитесь на консультацию психолога
                                    </span>
                                </a>
                            </div>
                            <div class=" link-block">
                                <a class="avatar link-block__normlink" href="#">
                                    <img class="avatar__photo slick-menu__avatar-photo"  src="<?php echo $this->getThemePath(); ?>/img/demo/iconmenu4.png" />
                                    <span class="avatar__text slick-menu__avatar-text">
                                        Ищите готовые ответы в форуме с психологами
                                    </span>
                                </a>
                            </div>
                            <div class=" link-block">
                                <a class="avatar link-block__normlink" href="#">
                                    <img class="avatar__photo slick-menu__avatar-photo" src="<?php echo $this->getThemePath(); ?>/img/demo/iconmenu1.png" />
                                    <span class="avatar__text slick-menu__avatar-text">
                                        Изучайте советы при типовых ситуациях
                                    </span>
                                </a>
                            </div>
                            <div class=" link-block">
                                <a class="avatar link-block__normlink" href="#">
                                    <img class="avatar__photo slick-menu__avatar-photo"  src="<?php echo $this->getThemePath(); ?>/img/demo/iconmenu2.png" />
                                    <span class="avatar__text slick-menu__avatar-text">
                                        Читайте тематические статьи психологов
                                    </span>
                                </a>
                            </div>
                            <div class=" link-block">
                                <a class="avatar link-block__normlink" href="#">
                                    <img class="avatar__photo slick-menu__avatar-photo"  src="<?php echo $this->getThemePath(); ?>/img/demo/iconmenu3.png" />
                                    <span class="avatar__text slick-menu__avatar-text">
                                        Запишитесь на консультацию психолога
                                    </span>
                                </a>
                            </div>
                            <div class=" link-block">
                                <a class="avatar link-block__normlink" href="#">
                                    <img class="avatar__photo slick-menu__avatar-photo"  src="<?php echo $this->getThemePath(); ?>/img/demo/iconmenu4.png" />
                                    <span class="avatar__text slick-menu__avatar-text">
                                        Ищите готовые ответы в форуме с психологами
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!--slide 1 part*1-->
                    <div class="page__block">
                        <span class="page__header">Новое</span>
                        <ul class="page__column-3 page__preview-container">
                            <?php foreach( $newPages as $p ): ?>
                            <?php $pageUtils = new DarumPageUtils($p); ?>
                            <?php $title = $pageUtils->getCategoryTitle(null, true) ?>
                            <li class="page__preview preview">
                                <a class="preview__image" href="<?= $p->getCollectionPath() ?>">
                                    <?php if(!empty($p->mainImage)) : ?>
                                    <?php echo $pageUtils->cropImage($p->mainImage, 263, 180, $p->altMainImage); ?>
                                    <?php endif; ?>                              
                                </a>
                                <div class="preview__content link-block">
                                    <h3 class="preview__category">
                                        <!--class="<?= $title['css'] ?>"-->
                                        <a class="link-block__brghtlink" href="<?= $title['href'] ?>">
                                            <?= $title['title'] ?> 
                                        </a>
                                    </h3>
                                    <div class="preview__header">
                                        <a class="link-block__normlink" href="<?= $p->getCollectionPath() ?>">
                                            <?= $p->getAttribute('meta_title') ?>
                                        </a>
                                    </div>
                                    <span class="like preview__like">
                                        <a href="" class="like__item link-block__normlink">
                                            <i class="fa fa-fw fa-heart"></i>54 
                                        </a>
                                        <a href="" class="like__item link-block__normlink">
                                            <i class="fa fa-fw fa-comment"></i>31
                                        </a>
                                    </span>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="page__column-6 page__preview-container">
                            <div class="slick-preview">
                                <?php foreach( $mainNewPage as $p ): ?>
                                <?php $pageUtils = new DarumPageUtils($p); ?>
                                <?php $title = $pageUtils->getCategoryTitle(null, true) ?>
                                <div class="intro <?php /* green '_'.$title['css'] */ ?> link-block_white">
                                    <div class="intro__image">
                                        <?php if(!empty($p->mainImage)) : ?>
                                        <?php echo $pageUtils->cropImage($p->mainImage, 555, 420, $p->altMainImage); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="intro__content">
                                        <h3 class="intro__category">
                                            <a class="link-block__brghtlink" href="<?= $title['href'] ?>">
                                                <?= $title['title'] ?> 
                                            </a>
                                        </h3>
                                        <h2 class="intro__header">
                                            <a class="link-block__brghtlink" href="<?= $p->getCollectionPath() ?>">
                                                <?= $p->getAttribute('meta_title') ?>
                                            </a>
                                        </h2>
                                        <div class="intro__text">
                                            <?php echo mb_substr($p->getAttribute('introtext'), 0, 100) . '...'; ?>
                                        </div>
                                        <a class="link-block__brghtlink intro__author">
                                            Автор: Кравченко Полина
                                        </a>
                                        <span class="like intro__like">
                                            <a href="" class="like__item like__item_intro link-block__brghtlink">
                                                <i class="fa fa-fw fa-heart"></i>54 
                                            </a>
                                            <a href="" class="like__item like__item_intro link-block__brghtlink">
                                                <i class="fa fa-fw fa-comment"></i>31
                                            </a>
                                        </span>
                                    </div>
                                </div>    
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="page__column-3 page__preview-container page__last">
                            <div class="aside-list aside-list_mini ">
                                <div class="aside-list__header">
                                    <h3 class="aside-list__header-inner"> Новые советы</h3>
                                </div>
                                <div class="aside-list__content">
                                    <?php foreach( $newAdvicePages as $p ): ?>
                                    <?php $pageUtils = new DarumPageUtils($p); ?>
                                    <div  class="aside-list__item">
                                        <a href="<?= $p->getCollectionPath() ?>" class="aside-list__image" >
                                            <?php if(!empty($p->mainImage)) : ?>
                                            <?php echo $pageUtils->cropImage($p->mainImage, 72, 72, $p->altMainImage); ?>
                                            <?php endif; ?>
                                        </a>
                                        <div class="aside-list__text link-block">
                                            <a href="<?= $p->getCollectionPath() ?>" class="link-block__normlink">
                                                <?php echo mb_substr($p->getAttribute('introtext'), 0, 100) . '...'; ?>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endforeach; ?> 
                                </div> 
                            </div>
                    </div>
                    </div>
                
                    <!--slide1 part*2-->
                    <div class="page__block">
                        <span class="page__header">Популярные Статьи</span>
                        <div class="page__column-6 page__preview-container">
                            <div class="slick-preview">
                                <?php foreach( $mainPopularArticlePage as $p ): ?>
                                <?php $pageUtils = new DarumPageUtils($p); ?>
                                <?php $title = $pageUtils->getCategoryTitle(null, true) ?>

                                <div class="intro 
                                            <?php if( !empty($title['css']) ){ 
                                                    echo 'intro_'.$title['css']; 
                                                  } 
                                             ?>
                                             link-block_white">
                                    <div class="intro__image">
                                        <?php if(!empty($p->mainImage)) : ?>
                                        <?php echo $pageUtils->cropImage($p->mainImage, 555, 420, $p->altMainImage); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="intro__content">
                                        <h3 class="intro__category">
                                            <a class="link-block__brghtlink" href="<?= $title['href'] ?>">
                                                <?= $title['title'] ?> 
                                            </a>
                                        </h3>
                                        <h2 class="intro__header">
                                            <a class="link-block__brghtlink" href="<?= $p->getCollectionPath() ?>">
                                                <?= $p->getAttribute('meta_title') ?>
                                            </a>
                                        </h2>
                                        <div class="intro__text">
                                            <?php echo mb_substr($p->getAttribute('introtext'), 0, 100) . '...'; ?>
                                        </div>
                                        <!--<a class="link-block__brghtlink intro__author">
                                            Автор: Кравченко Полина
                                        </a>-->
                                        <span class="like intro__like">
                                            <a href="" class="like__item like__item_intro link-block__brghtlink">
                                                <i class="fa fa-fw fa-heart"></i>54 
                                            </a>
                                            <a href="" class="like__item like__item_intro link-block__brghtlink">
                                                <i class="fa fa-fw fa-comment"></i>31
                                            </a>
                                        </span>
                                    </div>
                                </div>    
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <ul class="page__column-6 page__preview-container page__last">
                            <?php foreach ($popularArticlePages as $p): ?>
                            <?php $pageUtils = new DarumPageUtils($p);?>
                            <?php $title = $pageUtils->getCategoryTitle(null, true) ?>
                            <li class="page__preview 
                                       preview
                                       link-block
                                       <?php if( !empty($title['css']) ){ 
                                                echo 'link-block_'.$title['css']; 
                                              } 
                                       ?>
                                       ">
                                <a class="preview__image" href="<?= $p->getCollectionPath() ?>">
                                    <?php if(!empty($p->mainImage)) : ?>
                                    <?php echo $pageUtils->cropImage($p->mainImage, 263, 180, $p->altMainImage); ?>
                                    <?php endif; ?>                              
                                </a>
                                <div class="preview__content">
                                    <h3 class="preview__category">
                                        <!--class="<?= $title['css'] ?>"-->
                                        <a class="link-block__brghtlink" href="<?= $title['href'] ?>">
                                            <?= $title['title'] ?> 
                                        </a>
                                    </h3>
                                    <div class="preview__header">
                                        <a class="link-block__normlink" href="<?= $p->getCollectionPath() ?>">
                                            <?= $p->getAttribute('meta_title') ?>
                                        </a>
                                    </div>
                                    <span class="like preview__like">
                                        <a href="" class="like__item link-block__normlink">
                                            <i class="fa fa-fw fa-heart"></i>54 
                                        </a>
                                        <a href="" class="like__item link-block__normlink">
                                            <i class="fa fa-fw fa-comment"></i>31
                                        </a>
                                    </span>
                                </div>
                            </li>
                            <?php endforeach; ?>
                            <li class="page__preview page__last cpa">
                                <a class="cpa__item" target="_blank" href="http://goo.gl/E8hQ3k">
                                    <img alt="" src="<?php echo $this->getThemePath() ?>/img/CPA/main/1.gif">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!--\SLIDE 1--> 

            <!--SLIDE 2-->
            <div class="page__slide">
                <div class="page__container page__block">
                     <!--*slide2 1-->
                     <span class="page__header">Советы</span>
                     <ul class="page__column-6 page__preview-container">
                     <?php foreach ($popularAdvicePages as $p): ?>
                        <?php $pageUtils = new DarumPageUtils($p);?>
                        <?php $title = $pageUtils->getCategoryTitle(null, true) ?>
                        <li class="page__preview 
                                       preview
                                       link-block
                                       <?php if( !empty($title['css']) ){ 
                                                echo 'link-block_'.$title['css']; 
                                              } 
                                       ?>
                                       ">
                            <a class="preview__image" href="<?= $p->getCollectionPath() ?>">
                                <?php if(!empty($p->mainImage)) : ?>
                                <?php echo $pageUtils->cropImage($p->mainImage, 263, 180, $p->altMainImage); ?>
                                <?php endif; ?>                              
                            </a>
                            <div class="preview__content link-block">
                                <h3 class="preview__category">
                                    <!--class="<?= $title['css'] ?>"-->
                                    <a class="link-block__brghtlink" href="<?= $title['href'] ?>">
                                        <?= $title['title'] ?> 
                                    </a>
                                </h3>
                                <div class="preview__header">
                                    <a class="link-block__normlink" href="<?= $p->getCollectionPath() ?>">
                                        <?= $p->getAttribute('meta_title') ?>
                                    </a>
                                </div>
                                <span class="like preview__like">
                                    <a href="" class="like__item link-block__normlink">
                                        <i class="fa fa-fw fa-heart"></i>54 
                                    </a>
                                    <a href="" class="like__item link-block__normlink">
                                        <i class="fa fa-fw fa-comment"></i>31
                                    </a>
                                </span>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        <li class="page__preview page__last cpa">
                            <a class="cpa__item" target="_blank" href="http://goo.gl/d6Am5B">
                                <img alt="" src="<?php echo $this->getThemePath() ?>/img/CPA/main/2.jpg">
                            </a>
                        </li>    
                     </ul>
                     <div class="page__column-6 page__preview-container page__last">
                         <div class="slick-preview">
                            <?php foreach( $mainPopularAdvicePage as $p ): ?>
                            <?php $pageUtils = new DarumPageUtils($p); ?>
                            <?php $title = $pageUtils->getCategoryTitle(null, true) ?>
                            <div class="intro 
                                            <?php if( !empty($title['css']) ){ 
                                                    echo 'intro_'.$title['css']; 
                                                  } 
                                             ?>
                                             link-block_white">
                                <div class="intro__image">
                                    <?php if(!empty($p->mainImage)) : ?>
                                    <?php echo $pageUtils->cropImage($p->mainImage, 555, 420, $p->altMainImage); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="intro__content">
                                    <h3 class="intro__category">
                                        <a class="link-block__brghtlink" href="<?= $title['href'] ?>">
                                            <?= $title['title'] ?> 
                                        </a>
                                    </h3>
                                    <h2 class="intro__header">
                                        <a class="link-block__brghtlink" href="<?= $p->getCollectionPath() ?>">
                                            <?= $p->getAttribute('meta_title') ?>
                                        </a>
                                    </h2>
                                    <div class="intro__text">
                                        <?php echo mb_substr($p->getAttribute('introtext'), 0, 100) . '...'; ?>
                                    </div>
                                    <a class="link-block__brghtlink intro__author">
                                        Автор: Кравченко Полина
                                    </a>
                                    <span class="like intro__like">
                                        <a href="" class="like__item like__item_intro link-block__brghtlink">
                                            <i class="fa fa-fw fa-heart"></i>54 
                                        </a>
                                        <a href="" class="like__item like__item_intro link-block__brghtlink">
                                            <i class="fa fa-fw fa-comment"></i>31
                                        </a>
                                    </span>
                                </div>
                            </div>    
                            <?php endforeach; ?>
                        </div>
                     </div>
                </div>
                <div class="mainbanner">
                    <div class="mainbanner__img">
                        <img src="<?php echo $this->getThemePath() ?>/img/demo/mainbanner.jpg" >
                    </div>
                    <div class="mainbanner__overlay">
                        <span class="mainbanner__overlay-header">Получите профессиональную помощь психолога</span>
                        <a data-disabled href="#" class="mainbanner__overlay-action">Выбрать психолога</a>
                    </div>
                </div>
            </div>
            <!--\SLIDE 2--> 

            <!--SLIDE 3-->
            <div class="page__slide">
                <div class="page__container">
                    <div class="page__block">
                        <span class="page__header">Интересно почитать</span>
                       <?php $this->inc('elements/interesting.php'); ?>
                        <ul class="page__column-3 page__preview-container page__last">
                            <li class="page__preview">
                                <!-- VK Widget -->
                                <div id="vk_groups"></div>
                            </li>
                            <li class="page__preview page__preview_widget">
                               <iframe id="insta-widget"
                                       allowtransparency="true" 
                                       frameborder="0" 
                                       scrolling="no" 
                                       style="border:none;overflow:hidden;" >
                               </iframe> 
                            </li>    
                        </ul>
                    </div>
                </div>
                <?php $this->inc('elements/footer.php'); ?> 
            </div>
            <div class="page__opacity"></div>
        </div>
    </div>
    <?php $this->inc('elements/js.php'); ?>
    <?php Loader::element('footer_required') ?>
        <!--Блок советов-->
        <!--<h1 class="allarticles-h1 allarticles-h1-mainquestion">Самые обсуждаемые<br/>Вопросы-Ответы</h1>
                    <ul class="questionlist">
                        <li class="questionlist-one">
                            <h3 class="subcategory-header">
                                <a href="/index.php/otnosheniya/stati/spisok">
                                    Родителям
                                </a>
                            </h3>
                            <h2 class="previewlist-content-header">
                                <a href="/roditelyam/stati/psihika-rebenka">
                                    За что мы любим наших мам, откровения взрослых девочек. 
                                </a>
                            </h2>
                            <span class="intro-likes intro-likes-previewlist">
                                <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                            </span>
                        </li>
                        <li class="questionlist-one">
                            <h3 class="subcategory-header">
                                <a class="green" href="/index.php/otnosheniya/stati/spisok">
                                    Студентам
                                </a>
                            </h3>
                            <h2 class="previewlist-content-header">
                                <a href="/roditelyam/stati/psihika-rebenka">
                                    Уверенность в результате работы над ошибками
                                </a>
                            </h2>
                            <span class="intro-likes intro-likes-previewlist">
                                <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                            </span>
                        </li>
                        <li class="questionlist-one">
                            <h3 class="subcategory-header">
                                <a class="pink" href="/index.php/otnosheniya/stati/spisok">
                                    Отношения
                                </a>
                            </h3>
                            <h2 class="previewlist-content-header">
                                <a href="/roditelyam/stati/psihika-rebenka">
                                    Топ 10 советов, для тех, кто хочет влюбиться
                                </a>
                            </h2>
                            <span class="intro-likes intro-likes-previewlist">
                                <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                            </span>
                        </li>
                        <li class="questionlist-one">
                            <h3 class="subcategory-header">
                                <a class="pink" href="/index.php/otnosheniya/stati/spisok">
                                    Отношения
                                </a>
                            </h3>
                            <h2 class="previewlist-content-header">
                                <a href="/roditelyam/stati/psihika-rebenka">
                                    Топ 10 советов, для тех, кто хочет влюбиться
                                </a>
                            </h2>
                            <span class="intro-likes intro-likes-previewlist">
                                <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                            </span>
                        </li>
                        <li class="questionlist-one">
                            <h3 class="subcategory-header">
                                <a class="pink" href="/index.php/otnosheniya/stati/spisok">
                                    Отношения
                                </a>
                            </h3>
                            <h2 class="previewlist-content-header">
                                <a href="/roditelyam/stati/psihika-rebenka">
                                    Топ 10 советов, для тех, кто хочет влюбиться
                                </a>
                            </h2>
                            <span class="intro-likes intro-likes-previewlist">
                                <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                            </span>
                        </li>
                        <li class="questionlist-one">
                            <h3 class="subcategory-header">
                                <a href="/index.php/otnosheniya/stati/spisok">
                                    Родителям
                                </a>
                            </h3>
                            <h2 class="previewlist-content-header">
                                <a href="/roditelyam/stati/psihika-rebenka">
                                    За что мы любим наших мам, откровения взрослых девочек. 
                                </a>
                            </h2>
                            <span class="intro-likes intro-likes-previewlist">
                                <i class="fa fa-fw fa-heart"></i>54 <i class="fa fa-fw fa-comment"></i>31
                            </span>
                        </li>
                        <li class="questionlist-one">
                            <h3 class="subcategory-header">
                                <a class="green" href="/index.php/otnosheniya/stati/spisok">
                                    Студентам
                                </a>
                            </h3>
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
</body>
</html>