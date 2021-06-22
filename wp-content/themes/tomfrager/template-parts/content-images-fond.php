<?php
?>
<div class="images-container image-de-fond">
    <div class="image-background">
        <div class="image-container <?php if(get_field('position_du_fond')=='droite'):?> image-container-right <?php else :?> image-container-left <?php endif; ?>">
            <img class="img" src="<?= get_field('image') ?>" alt=""/>
            <?php if(get_field('couleur_de_fond')) :?>
                <?php if(get_field('couleur_de_fond')=='orange') :?>
                    <img class="img-background <?php if(get_field('position_du_fond')=='droite'):?> img-background-right <?php else :?> img-background-left <?php endif; ?>" src="../wp-content/themes/tomfrager/images/background/background-orange.png" alt=""/>
                <?php else : ?>
                    <img class="img-background <?php if(get_field('position_du_fond')=='droite'):?> img-background-right <?php else :?> img-background-left<?php endif; ?>" src="../wp-content/themes/tomfrager/images/background/background-bleu.png" alt=""/>
                <?php endif ?>
                <?php if(get_field('icon')) :?>
                    <img class="icon-right " src="<?= get_field('icon') ?>" alt=""/>
                    <img class="icon-left <?php if(get_field('position_du_fond')=='droite'):?> image-right <?php else :?> image-left <?php endif; ?>" src="<?= get_field('icon') ?>" alt=""/>
                <?php endif ?>
            <?php endif ?>
        </div>
    </div>
    <?php if(get_field('texte')) :?>
        <p class="paragraph"><?=get_field('texte')?></p>
    <?php endif ?>
    <?php if(get_field('image_plein_ecran')) :?>
        <div class="img-full-screen">
            <img src="<?= get_field('image_plein_ecran') ?>" alt="" />
        </div>
    <?php endif ?>
</div>

<style>
    .img {
        z-index: 1;
        border-radius: 10px;
        height: 251px;
        width: auto;
    }

    .icon-right {
        position: absolute;
        z-index: 1;
        top: 6px;
        right: 12px;
    }

    .icon-left {
        position: absolute;
        z-index: 1;
        left: 10px;
    }

    .image-right {
        bottom: 9px;
    }

    .image-left {
        bottom: -10px;
    }

    .image-container {
        display: flex;
        position: relative;
    }

    .image-container-right {
        justify-content: flex-start;
    }

    .image-container-left {
        justify-content: flex-end;
    }

    .img-background {
        position: absolute;
        border-radius: 10px;
        top : -24px;
    }

    .img-background-left {
        left: 0;
    }

    .img-background-right {
        left: 110px;
    }

    .image-de-fond {
        margin : 5% 0;
    }

    .img-full-screen {
        width: 100%;
    }

    .img-full-screen img {
        width: 100%;
    }

    .image-background {
        width: 90%;
        margin: 12% 0;
    }


</style>