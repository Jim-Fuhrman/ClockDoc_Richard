<div class="page-links">
    <h2 class="page-links__title"><a  <?php if(get_post_type('clocks') || get_post_type('watches') || get_post_type('misc_items')) echo 'class="current"'?> href="#">Products</a></h2> 
        <ul class="min-list"> <!-- min-list is in /base/_utilities.scss. It's just a list-style: none and padding and margin set to zero -->
            <li><a href="<?php echo get_post_type_archive_link('clocks'); ?>">Clocks</a></li>
            <li><a href="<?php echo get_post_type_archive_link('watches');?>">Watches</a></li>
            <li><a href="<?php echo get_post_type_archive_link('misc_items');?>">Miscellaneous</a></li>
        </ul>
</div>