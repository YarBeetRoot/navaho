<ul id="top-menu" class="nav navbar-nav navbar-right main-nav">

    @php

        if (Voyager::translatable($items)) {
            $items = $items->load('translations');
        }

    @endphp

    @foreach ($items as $item)

        @php
            $originalItem = $item;
            if (Voyager::translatable($item)) {
                $item = $item->translate($options->locale);
            }

            $isActive = null;
            $styles = null;
            $icon = null;

            // Background Color or Color
            if (isset($options->color) && $options->color == true) {
                $styles = 'color:'.$item->color;
            }
            if (isset($options->background) && $options->background == true) {
                $styles = 'background-color:'.$item->color;
            }

            // Check if link is current
            if(url($item->link()) == url()->current()){
                $isActive = 'active';
            }

            // Set Icon
            if(isset($options->icon) && $options->icon == true){
                $icon = '<i class="' . $item->icon_class . '"></i>';
            }

        @endphp

        <li class="{{ $isActive }}">
            <a href="{{ route($item->route) }}" target="{{ $item->target }}" style="{{ $styles }}">
                {!! $icon !!}
                {{ $item->title }}
            </a>
            {{--@if(!$originalItem->children->isEmpty())
                @include('voyager::menu.default', ['items' => $originalItem->children, 'options' => $options])
            @endif--}}
        </li>
    @endforeach

</ul>
{{--
<ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
    <li class="active"><a href="index.html">Home</a></li>
    <li><a href="feature.html">Feature</a></li>
    <li><a href="service.html">Service</a></li>
    <li><a href="portfolio.html">Portfolio</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="blog-archive.html">Blog Archive</a></li>
            <li><a href="blog-single-with-left-sidebar.html">Blog Single with Left Sidebar</a></li>
            <li><a href="blog-single-with-right-sidebar.html">Blog Single with Right Sidebar</a></li>
            <li><a href="blog-single-with-out-sidebar.html">Blog Single with out Sidebar</a></li>
        </ul>
    </li>
    <li><a href="404.html">404 Page</a></li>
    <li><a href="contact.html">Contact</a></li>
</ul>--}}
