<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom context-dark bg-overlay-39">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">@yield('section_heading')</h2>
      <ul class="breadcrumbs-custom-path">
        <li><a href="/">Nyumbani</a></li>
        <li><a href="@yield('active_link')">@yield('navbar_active_section')</a></li>
      </ul>
    </div>
    @yield('background')
  </div>
</section>
