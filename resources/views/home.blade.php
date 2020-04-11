@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="top">
                      <div class="cen">
                        <ul>
                          <li><a href="#">Tokyo</li>
                          <li><a href="#">Yokohama</li>
                          <li><a href="#">Kyoto</li>
                          <li><a href="#">Osaka</li>
                          <li><a href="#">Sapporo</li>
                          <li><a href="#">Nagoya</li>
                        </ul>
                      </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <a href="/"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
