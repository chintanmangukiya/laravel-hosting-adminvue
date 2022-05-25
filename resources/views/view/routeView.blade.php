@extends('layouts.main')
@section('content')
    <div id="app">
        {{-- <employee-index /> --}}
        <router-view></router-view>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
