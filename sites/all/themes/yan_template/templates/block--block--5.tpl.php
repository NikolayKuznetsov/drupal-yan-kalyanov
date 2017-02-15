<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>
        <div class="row">
            <div class="col-md-6 text-block">
                <?php print $content ?>
            </div>
            <div class="col-md-6 slider-block">
                <?php
                echo views_embed_view('slider_partner', 'block');
                ?>
            </div>
        </div>
    </div>
</div>


