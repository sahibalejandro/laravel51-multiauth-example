@extends('user.layout.dashboard')

@section('contentheader')
    <section class="content-header">
        <h3 class="text-center">@yield('pageheader')</h3>
    </section>
@endsection

@section('content')
    <section class="content">
        @yield('pagecontent')
    </section>
@endsection