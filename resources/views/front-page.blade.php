@extends('layouts.master')

@section('content')


<div id="top" class="flex-container">
    <div class="nav d-none d-sm-block">
        <div id="navbar" class="d-flex flex-column fixed-bottom sidenav">
            <ul id="nav-list nav navbar-nav" class="navlist">
                <li class=""><a id='link-top' class="active" href="#top"> <h3>Top </h3></a></li>
                <li class=""><a id='link-about' href="#about"> <h3>About</h3> </a></li>
                <li class=""><a id='link-contact' href="#contact"><h3> Contact</h3> </a></li>
            </ul>
        </div>

    </div>

    <div class="main right">
        <div class='section'>
            <h2 class='text-name'>FAVORITE BLOG</h2>
            <hr />
            <h2>Open Source, Application Development, & Artificial Intelligence</h2>
        </div>

        <div id='about' class='section'>
            <h2>About</h2>
            <hr />
            <h4>I enjoy: Working with Pytorch, sklearn, Nextcloud, and pfSense</h4>
            <h4>Building web-sites using: Laravel, Falcon - worlds worst front-end designer</h4>


        </div>

        <div id="contact" class='section'>
            <h2>Contact</h2>
            <h3>To contact me.</h3>
            <h3><a href="scot@scotfavorite.com">scot@scotfavorite.com</a></h3>
            <h3>Phone: 330.548.2019</h3>
        </div>


    </div>
</div>

@endsection
