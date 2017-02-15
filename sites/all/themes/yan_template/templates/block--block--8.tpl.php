<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>

    <div class="content"<?php print $content_attributes; ?>>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <div class="contacts">
                    <?php
                        $nameContact = check_plain(theme_get_setting('name_contact'));
                        $descContact = check_markup(theme_get_setting('desc_contact')['value']);
                    ?>
                    <?php if ($nameContact): ?>
                        <div class="name">
                            <?php print $nameContact; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($descContact): ?>
                        <div class="desc">
                            <?php print $descContact; ?>
                        </div>
                    <?php endif; ?>

                    <?php print $content ?>

                    <?php
                    $emailContact = check_plain(theme_get_setting('email'));
                    $phoneContact = check_plain(theme_get_setting('phone'));
                    ?>
                    <?php if ($phoneContact): ?>
                        <div class="phone">
                            <?php print $phoneContact; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($phoneContact): ?>
                        <div class="email">
                            <a href="mailto:<?php print $emailContact; ?>">
                                <?php print $emailContact; ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if (theme_get_setting('socialicon_display', 'yan_template')): ?>
                        <?php
                        $facebook_url = check_plain(theme_get_setting('facebook_url', 'yan_template'));
                        $vk_url = check_plain(theme_get_setting('vk_url', 'yan_template'));
                        $instagram_url = check_plain(theme_get_setting('instagram_url', 'yan_template'));
                        $youtube_url = check_plain(theme_get_setting('youtube_url', 'yan_template'));
                        ?>
                        <ul class="link-social">
                            <?php if ($vk_url): ?>
                                <li>
                                    <a target="_blank" href="<?php print $vk_url; ?>">
                                        <i class="fa  fa-vk" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($facebook_url): ?>
                                <li>
                                    <a target="_blank" href="<?php print $facebook_url; ?>">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($instagram_url): ?>
                                <li>
                                    <a target="_blank" href="<?php print $instagram_url; ?>">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($youtube_url): ?>
                                <li>
                                    <a target="_blank" href="<?php print $youtube_url; ?>">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</div>


