<style>
	#logo {
		width:225px;
                margin: 10px auto 0;
	}
	#logo>img {
		width:100%;
	}
</style>
<div class="l-container">
    <div class="header">
        <a href="#" id="downloadmobile">Скачайте приложение</a>
        <div class="logo">
            <span class="logo-head">Центр развития</span>
            <span id="logo" class="logo-intro">
		<img src="<?php echo $this->getThemePath()?>/img/logo.png" />
	    </span>
        </div>
        <div class="login" style="display:none">
            <a href="#">Вход</a>
            <a href="#">Регистрация</a>
        </div>
    </div>
    <nav>
        <?php $ga = new GlobalArea('mainmenu'); $ga->display($c);?>
        <?php if ($c->getCollectionID != 1):?>
            <?php $ga = new GlobalArea('subnav'); $ga->display($c);?> 
        <?php endif;?>
    </nav>
</div>
