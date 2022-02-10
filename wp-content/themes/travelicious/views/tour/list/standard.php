<?php get_template_part( 'views/tour/list/params' ); ?>

<?php get_template_part( 'views/tour/list/search' ); ?>


<div class="listing_results gutter" id='bt_bb_tour_list_container' data-paged="1">	
        <?php
                echo boldthemes_get_tour_list_html( );
        ?>
</div>

<div id="bt_listing_loading"></div>





