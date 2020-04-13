<footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2020</p>
      <?php dynamic_sidebar( 'home_right_1' ); ?>

    </div>
  </footer>

  <!-- Search Overlay -->
  <div class="overlay search-overlay">
  <div class="search-close overlay-close fa fa-close"></div>
  </div>
  <!-- Search Overlay -->  

  <!-- Search Form -->
  <div class="searchform">

  <input type="text" class="search-input" placeholder="Search Here..." />
  <button type="button" class="search-btn fa fa-search"></button>

  <ul class="search-result-list">
  <li><a href="#">Lorem Ipsum</a></li>
  <li><a href="#">Lorem Ipsum</a></li>
  <li><a href="#">Lorem Ipsum</a></li>
  <li><a href="#">Lorem Ipsum</a></li>
  <li><a href="#">Lorem Ipsum</a></li>
  </ul>
  </div>
  <!-- Search Form -->

  <?php wp_footer(); ?>

</body>

</html>
