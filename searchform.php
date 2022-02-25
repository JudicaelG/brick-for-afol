<form class="primary-search" action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
    <input type="text" name="s" id="search" placeholder="Rechercher" value="<?php the_search_query(); ?>" />
    <button type="submit"><span class="dashicons dashicons-search"></span></button>
</form>

