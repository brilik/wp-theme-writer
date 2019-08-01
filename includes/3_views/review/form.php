<?php
$txtThanks = 'Спасибо за Ваш отзыв';
?>
<div class="form_layer">
    <h3>Оставьте свой отзыв</h3>
    <form id="form" method="POST">
        <div class="form-field">
            <div class="form-field__input">
                <input type="text" name="name" class="form-control" placeholder="Ваше имя">
            </div>
        </div>
        <div class="form-field">
            <div class="form-field__input">
                <textarea name="rev" class="form-control" placeholder="Текст отзыва"></textarea>
            </div>
        </div>
        <div class="form-button">
            <button class="button button-bord">Отправить</button>
        </div>
    </form>
    <div class="h3"><?= $txtThanks; ?></div>
</div>