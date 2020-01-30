
   <nav class="navbar navbar-default navbar-menu navbar-fixed-top js-navbar-top js-toggleClass">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#home">
          <h2>4<span class="logo-span">in</span>1<span class="logo-span">T</span>elecom</h2>
        </a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right ">
          <li class="{{ Request::path() === '/' ? 'current_page_item' : ''}}"><a href="#home">Home</a></li>
          <li class="{{ Request::path() === 'services' ? 'current_page_item' : ''}}"><a href="#services">Services</a></li>
          <li class="{{ Request::path() === 'about' ? 'current_page_item' : ''}}"><a href="#about">About</a></li>
          <li class="{{ Request::path() === 'work' ? 'current_page_item' : ''}}"><a href="#portfolio">Work</a></li>
          <li class="{{ Request::path() === 'pricing' ? 'current_page_item' : ''}}"><a href="#pricing">Pricing</a></li>
          <li class="{{ Request::path() === 'team' ? 'current_page_item' : ''}}"><a href="#team">Team</a></li>
          <li class="{{ Request::path() === 'blog' ? 'current_page_item' : ''}}"><a href="#blog">Blog</a></li>
          <li class="{{ Request::path() === 'contact' ? 'current_page_item' : ''}}"><a href="#contact">Contact Us</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
