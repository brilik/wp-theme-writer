<div class="welcome_slider js-welcome">
    <?php foreach ($args as $item): ?>
        <div class="welcome_slide">
            <div class="welcome_item">
                <div class="welcome_txt">
                    <a href="<?= $item['link']; ?>">
                        <span class="icon-quote-left"></span>
                        <p><?= $item['description']; ?></p>
                        <div class="weclome_link"><span>Читать</span></div>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>