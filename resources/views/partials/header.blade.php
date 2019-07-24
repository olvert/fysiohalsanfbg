<header class="banner fixed shadow lg:shadow-none lg:relative bg-white top-0 inset-x-0 z-50">
  <div class="h-24 pt-6 lg:pt-8">
    <div class="container flex justify-between items-center">
      <img class="w-16 lg:w-24 flex-none" src="@asset('images/logotypes/fysiohalsan_main.png')">
      <nav class="nav-primary-desktop hidden lg:inline-block -mr-4">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
      <button id="open-menu" class="inline-block lg:hidden">
        Meny
      </button>
    </div>
  </div>

  <div id="mobile-menu" class="fixed inset-0 bg-white py-6">
    <div class="container h-full flex flex-col">
      <div class="text-right">
        <button id="close-menu">
          Stäng
        </button>
      </div>
      <div class="flex-grow flex items-center justify-center">
        <nav class="nav-primary-mobile border-solid border-blue border-l-6 pl-4">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'mobile-nav']) !!}
          @endif
        </nav>
      </div>
    </div>
  </div>
</header>
