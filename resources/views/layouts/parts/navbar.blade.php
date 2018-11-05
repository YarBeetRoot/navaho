<!-- BEGIN MENU -->
<section id="menu-area">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('storage/'.setting('site.logo')) }}" alt="Navaho Group Logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                {{ menu('top-menu', 'layouts/parts/top-menu') }}
            </div><!--/.nav-collapse -->
            <a href="#" id="search-icon">
                <i class="fa fa-search">
                </i>
            </a>
        </div>
    </nav>
</section>
<!-- END MENU -->