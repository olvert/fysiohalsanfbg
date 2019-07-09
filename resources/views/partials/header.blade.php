<header class="banner">
  <div class="pt-8">
    <div class="container flex justify-between items-center">
      <img class="w-24 flex-none" src="@asset('images/logotypes/fysiohalsan_main.png')">
      <nav class="nav-primary-desktop inline-block -mr-4">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
