@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Тут будет коллекция сущностей </div>
                    <div class="card-body">
                        <ul>
                        @forelse($entities as $entity)
                            <li data-id="{{$entity->id}}">{{$entity->name}}</li>
                        @empty
                            <li>No Entities</li>
                        @endforelse
                        </ul>

                        <div>
                            <form action="{{route('entity.store')}}" method="POST">
                                @csrf
                                <input type="text" name="name"><br>
                                <input type="text" name="url"><br>
                                <textarea name="description">

                                </textarea><br>
                                <input type="submit" value="save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

