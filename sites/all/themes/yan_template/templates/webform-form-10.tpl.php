<div class="content-form">
    <form action="">
        <div class="field-item">
            <?php print drupal_render($form['submitted']['imya']); ?>
            <div class="error-message"></div>
        </div>
        <div class="field-item">
            <?php print drupal_render($form['submitted']['nomer_telefona']); ?>
            <div class="error-message"></div>
        </div>
        <div class="field-item">
            <?php print drupal_render($form['submitted']['data']); ?>
            <div class="error-message"></div>
            <?php print drupal_render($form['submitted']['komentariy']); ?>
            <div class="error-message"></div>
        </div>
        <div class="action-form">
            <?php print drupal_render_children($form); ?>
        </div>
    </form>
</div>
