<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>

        <?php print $content ?>

        <div class="form">
            <?php
            $block = block_load('webform', 'client-block-10');
            $block_content = _block_render_blocks(array($block));
            $build = _block_get_renderable_array($block_content);
            print drupal_render($build);
            ?>
        </div>

    </div>
</div>


