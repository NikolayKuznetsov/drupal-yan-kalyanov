<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>

    <div class="content"<?php print $content_attributes; ?>>
        <div class="row">
            <div class="col-md-6 text-block">
                <?php print $content ?>
            </div>
            <div class="col-md-6 slider-block wow bounceInRight" data-wow-duration="2s">
                <?php
                    echo views_embed_view('slider_radio', 'block');
                ?>
            </div>
        </div>
    </div>
</div>


