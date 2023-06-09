{{-- <div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div> --}}

<div id="" class="s-wrap site-wrapper">

    <!-- site header
    ================================================== -->
    <header class="s-header">

        <div class="header__top">
            <div class="header__logo">
                <a class="site-logo" href="index.html">
                    <img src="images/logo.svg" alt="Homepage">
                </a>
            </div>
        </div> <!-- end header__top -->




<nav class="header__nav-wrap">

    <ul class="header__nav">
        <li class="current"><a href="{{ route('inicio') }}">Inicio</a></li>
        <li class="has-children">
            <a href="{{ route('citas') }}">citas</a>
            {{-- <ul class="sub-menu">
            <li><a href="category.html">Lifestyle</a></li>
            <li><a href="category.html">Health</a></li>
            <li><a href="category.html">Family</a></li>
            <li><a href="category.html">Management</a></li>
            <li><a href="category.html">Travel</a></li>
            <li><a href="category.html">Work</a></li>
            </ul> --}}
        </li>
        {{-- <li class="has-children"> --}}
            {{-- <a href="#0" title="">Blog Posts</a>
            <ul class="sub-menu">
            <li><a href="single-video.html">Video Post</a></li>
            <li><a href="single-audio.html">Audio Post</a></li>
            <li><a href="single-gallery.html">Gallery Post</a></li>
            <li><a href="single-standard.html">Standard Post</a></li>
            </ul> --}}
        {{-- </li> --}}
        <li><a href="styles.html" title="">Perfil</a></li>
        <li><a href="{{ route('sobremi') }}" title="">Sobre Mí</a></li>
        <li><a href="{{ route('contacto') }}" title="">Contacto</a></li>
    </ul> <!-- end header__nav -->

    <ul class="header__social">
        <li class="ss-facebook">
            <a href="https://facebook.com/">
                <span class="screen-reader-text">Facebook</span>
            </a>
        </li>
        <li class="ss-twitter">
            <a href="#0">
                <span class="screen-reader-text">Twitter</span>
            </a>
        </li>
        <li class="ss-dribbble">
            <a href="#0">
                <span class="screen-reader-text">Dribbble</span>
            </a>
        </li>
        <li class="ss-pinterest">
            <a href="#0">
                <span class="screen-reader-text">Behance</span>
            </a>
        </li>
    </ul>

</nav> <!-- end header__nav-wrap -->
