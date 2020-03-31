<nav class="container" aria-label="Page navigation">
 <?php wp_pagination(); ?>
</nav>
  
  
  <?php 

  function wp_pagination(){
    global $wp_query;
    ob_start();
    $translated = esc_html__( '', 'wpse64458' ); // Supply translatable string
    $pagination =  paginate_links( array(
    'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'type' => 'array',
    'prev_text'          => __('<span></span> Prev', 'wpse64458'),
    'next_text'          => __('Next <span></span>', 'wpse64458'),
    'before_page_number' => '<span class="screen-reader-text">' . $translated . ' </span>'
    ) );  
    if ( ! empty( $pagination ) ) : ?>
    <ul class="pagination">
    <?php foreach ( $pagination as $key => $page_link ) : ?>
      <li class="page-item<?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><?php echo str_replace( 'page-numbers', 'page-link', $page_link ); ?></li>
    <?php endforeach ?>
    </ul>
    <?php endif;
    echo ob_get_clean();
}

  
  ?>