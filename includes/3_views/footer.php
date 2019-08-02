<?php if (is_home()): ?>

    <?php ar_the_view('aside', array('wow-duration' => 1, 'wow-delay' => 2.8)); ?>
    </div>
    <?php ar_the_view('loaded-bg'); ?>

<?php elseif (is_page('about')): ?>

    <footer class="footer">
        <div class="wrapper">
            <div class="footer_cols">
                <?php ar_the_view('footer-part__social-inst'); ?>
                <?php ar_the_view('footer-part__mail'); ?>
                <?php ar_the_view('footer-part__copyright'); ?>
            </div>
        </div>
    </footer>

    <?php ar_the_view('aside', array('wow-duration' => 10.7, 'wow-delay' => 0.3)); ?>
    </div>

    <?php ar_the_view('loaded-bg'); ?>

    <?php ar_the_view('review__main'); ?>

<?php elseif (is_page('stories') || is_page('story')): ?>

    <a href="#" class="filter-button js-filter-button"><span></span></a>

    <footer class="footer">
        <div class="wrapper">
            <div class="footer_cols">
                <?php ar_the_view('footer-part__social-inst'); ?>
                <?php ar_the_view('footer-part__mail'); ?>
                <?php ar_the_view('footer-part__copyright'); ?>
            </div>
        </div>
    </footer>

    <?php ar_the_view('aside', array('wow-duration' => 0.7, 'wow-delay' => 0.3)); ?>

    <?php ar_the_ciew('filter__section'); ?>
    </div>

    <?php ar_the_view('loaded-bg'); ?>

    <?php ar_the_view('review__main'); ?>

<?php endif; ?>

<!-- BODY EOF   -->
<?php wp_footer(); ?>
</body>
</html>
