<script src="https://kit.fontawesome.com/ed508f75e6.js" crossorigin="anonymous"></script>

<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {{-- {!! $siteName !!} --}}
  </a>

  <section class="menu">
    <div class="nav-top-container">
        <div class="nav-top-left">
            <img src="wp-content/themes/sage/resources/images/Red-Banana-logo.png" alt="Logo">
        </div>
        <div class="nav-top-center">
            <input type="text" placeholder="Waar ben je naar op zoek?" name="searchbar">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="nav-top-right">
            <div class="nav-top-right-item-1">
                <img src="wp-content/themes/sage/resources/images/blog_logo.png" alt="Blog logo">
                <a href="">Blog</a>
            </div>
            <div class="nav-top-right-item-2">
                <img src="wp-content/themes/sage/resources/images/account_logo.png" alt="Account logo">
                <a href="">Account</a>
            </div>
            <div class="nav-top-right-item-3">
                <img src="wp-content/themes/sage/resources/images/winkelwagen_logo.png" alt="Winkelwagen logo">
                <a href="">Winkelwagen</a>
            </div>
        </div>
    </div>
    <div class="nav-bottom-container">               
        <div class="nav-bottom-left">
            <a href="">Apple accessoires</a>
            <a href="">Samsung accessoires</a>
            <a href="">Huawei accessoires</a>
            <a href="">Overige accessoires</a>
            <a href="">Reparatie</a>
        </div>
        <div class="nav-bottom-right">
            <a href="">Blog</a>
            <a href="">Contact</a>
        </div>
    </div>

    <div class="nav-bottom-container-phones">

    <div class="dropdown" id="dropdown">
        <span><i class="fa-solid fa-bars fa-xl" id="fa-bars"></i></span>
        <div class="dropdown-content" id="dropdown-content">
          <a href="#" class="nav-text">Apple accessoires</a>
          <a href="#" class="nav-text">Samsung accessoires</a>
          <a href="#" class="nav-text">Huawei accessoires</a>
          <a href="#" class="nav-text">Overige accessoires</a>
          <a href="#" class="nav-text">Reparatie</a>
          <a href="#" class="nav-text">Blog</a>
          <a href="#" class="nav-text">Contact</a>
        </div>
    </div>

    <div class="searchbar">
        <input type="text" placeholder="Waar ben je naar op zoek?" name="searchbar">
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
</div>

</section>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
