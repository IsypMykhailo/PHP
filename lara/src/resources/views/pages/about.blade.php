@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Forms </div>
                    <div class="card-body">
                        <form method="POST" action="/profile">
                            @csrf
                            @method('PUT')
                            ...
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content3')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Вкрапления </div>
                    <div class="card-body">
                        @php
                            echo "Work @php";
                            $isActive = true;
                            $hasError = true;
                        @endphp

                        <?php
                        echo "Work ?php";
                        ?>

                        <span @class([
                                'p-4',
                                'font-bold' => $isActive,
                                'text-gray-500' => !$isActive,
                                'bg-red' => $hasError
                                ])>test</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content2')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Упраляющие конструкции и циклы </div>
                    <div class="card-body">
                        <ul>
                            @for($i = 0; $i < 10; $i++)
                                <li>The current value is {{ $i }}</li>
                            @endfor
                        </ul>
                        <div>
                            @switch($forCase)
                                @case(1)
                                First case...
                                @break

                                @case(2)
                                Second case...
                                @break

                                @default
                                Default case
                            @endswitch
                        </div>

                        <div>
                            @if(isset($records) && is_array($records) && count($records) === 1)
                                I have one record!
                            @elseif(isset($records) && is_array($records) && count($records) > 1)
                                I have multiple record!
                            @else
                                I don't have any records!
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content1')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        В blade я принимаю данные по переданным ключам, {{ $varName }}.<br>
                        @isset($varName111)
                            {{ $varName111 }}
                        @endisset
                        Таким образом, я избавлен от необходимости писать viewBug и другие оболочки
                        <div>
                            @auth
                                Пользователь аутентифицирован...
                            @endauth

                            @guest
                                    Пользователь не аутентифицирован...
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    &copy 2022 ITSTEP
    @include('inc.counter', ['$varName'=>'Qwerty'])
@endsection
