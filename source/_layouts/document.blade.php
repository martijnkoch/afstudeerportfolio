@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
    <div class="page-info">
        <h2>Games</h2>
        <div class="site-breadcrumb">
            <a href="">Home</a>  /
            <span>Games</span>
        </div>
    </div>
</section>
    <section class="games-single-page">
        <div class="container">
            <div class="game-single-preview">
                <img src="/assets/img/greenhouse-logo.jpg" alt="">
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7 game-single-content document-text">
                        @yield('document')
                </div>
            </div>
        </div>
    </section>
@endsection