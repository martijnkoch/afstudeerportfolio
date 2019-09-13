@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="page-top-section set-bg" data-setbg="/assets/img/bg-6.jpg">
</section>
    <section class="games-single-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7 game-single-content document-text">
                        @yield('document')
                </div>
            </div>
        </div>
    </section>
@endsection