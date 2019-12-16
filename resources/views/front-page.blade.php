@extends('layouts.master')

@section('content')


<div id="top" class="flex-container">
    <!-- Right hand side (navbar) -->

    <!--
    <div class="nav d-none d-sm-block">
        <div id="navbar" class="d-flex flex-column fixed-bottom sidenav">
            <ul id="nav-list nav navbar-nav" class="navlist">
                <li class=""><a id='link-top' class="active" href="#top"> <h3>Top </h3></a></li>
                <li class=""><a id='link-about' href="#about"> <h3>About</h3> </a></li>
                <li class=""><a id='link-contact' href="#contact"><h3> Contact</h3> </a></li>
            </ul>
                @include('partials._nav')
        </div>
    </div>
-->
    @include('partials._nav')

    <!-- Left hand side (main content) -->
    <router-view></router-view>

    <!--<home-component></home-component>-->
</div>

@endsection
