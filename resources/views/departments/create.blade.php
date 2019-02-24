@extends('templates.app')

@section('content')
    <h3 class="mt-3">Добавить отдел</h3>
    <hr>
    <form action="{{route('departments.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Название отдела:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
        <a href="{{route('departments.index')}}" class="btn btn-danger">Отмена</a>
    </form>
@endsection
