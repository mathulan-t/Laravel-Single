@extends ('layouts.main')


@section('content')

          <!-- FULL COLUMN
      ============================== -->

      @include('partials.shortcuts.column')

    <!-- SERVICE
      ============================== -->

      @include('partials.shortcuts.service')


    <!-- SKILLS
      ============================== -->
      @include('partials.shortcuts.skills')

    <!-- ABOUT
      ============================== -->

      @include('partials.shortcuts.about')

          <!-- COUNTERS
      ============================== -->
      @include('partials.shortcuts.counters')

          <!-- PORTFOLIO
      ============================== -->

      @include('partials.shortcuts.portfolio')

       <!-- NEW PROJECT
      ============================== -->

      @include('partials.shortcuts.projects')

    <!-- PRICING
      ============================== -->

      @include('partials.shortcuts.pricing')

      <!-- TEAM
      ============================== -->

      @include('partials.shortcuts.team')

      <!-- BLOG
      ============================== -->

      @include('partials.shortcuts.blog')


     <!-- CONTACT
      ============================== -->
      @include('partials.shortcuts.contact')

      <!-- MAP
        =================================== -->
        @include('partials.shortcuts.map')

@endsection
