<div class="post post_form">
    <div class="post_cont">
        <div class="form">
            <div class="form_layer">
                <h3><?=$args['title'];?></h3>
                <?php ar_the_view('form__review', $args['form']); ?>
                <div class="h3"><?= $args['text-thanks']; ?></div>
            </div>
        </div>
    </div>
</div>