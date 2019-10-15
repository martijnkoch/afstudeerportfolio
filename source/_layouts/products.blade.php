@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="page-top-section set-bg" data-setbg="/assets/img/bg-7.jpg">
    <div class="page-info">
    </div>
</section>

<section class="games-section">
    <div class="container">
        <div class="col-xl-7 col-lg-8 col-md-7">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="game-item">
                        @yield('products')
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection