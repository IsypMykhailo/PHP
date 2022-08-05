@extends('layouts.app')

@section('content')
    @php
        use App\Models\User;
        $username = str_replace('/edit-profile-basic','',$_SERVER['REQUEST_URI']);
        $username = str_replace('/','',$username)
    @endphp

                            @yield('content2')

@endsection
