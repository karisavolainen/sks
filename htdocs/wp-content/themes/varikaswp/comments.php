<?php if ( post_password_required() ): ?>
    <div id="comments">
        <h3></h3>
        <?php _e('This post is password protected. Enter the password to view comments.', 'varikaswp'); ?>
    </div>
  <?php return;
endif; ?>



<?php if ( have_comments() || comments_open() ) : ?>
    <div id="comments">

        <?php if ( have_comments() ) : ?>
            <h3><?= __('Comments', 'varikaswp')?></h3>
            <?php varikaswp_commentlist(); ?>
            <?php varikaswp_comment_navi(); ?>
        <?php endif; ?>

        <?php if ( comments_open() ) : ?>
            <?php comment_form(); ?>
        <?php endif; ?>

    </div>
<?php endif; ?>
