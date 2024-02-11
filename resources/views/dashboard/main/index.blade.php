@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <h6>Wellcome <span class="text-primary">{{ request()->user()->username }}</span>👋👋👋</h6>
    <div class="row align-items-start">
        <a class="col-lg-3 box--items" href="/dashboard/products">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h3>Products</h3>
                    <p class="text-black">{{ $productCount }} <span class="text-primary fs-6">items</span></p>
                </div>
                <div>
                    <i class="bi bi-box-seam custom-icon"></i>
                </div>
            </div>
        </a>
        <a class="col-lg-3 box--items" href="/dashboard/categories">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h3>Categories</h3>
                    <p class="text-black">{{ $categoryCount }} <small class="text-primary fs-6">items</small></p>
                </div>
                <div>
                    <i class="bi bi-tags custom-icon"></i>
                </div>
            </div>
        </a>
        <a class="col-lg-3 box--items" href="/dashboard/team">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h3>Team</h3>
                    <p class="text-black">{{ $teamCount }} <small class="text-primary fs-6">orang</small> </p>
                </div>
                <div>
                    <i class="bi bi-person-check custom-icon"></i>
                </div>
            </div>
        </a>
    @endsection
