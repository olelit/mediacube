@extends('templates.app')

@section('content')
    <h3 class="mt-3">Редактировать отдел</h3>
    <hr>
    <form action="{{route('departments.update',$department)}}" method="post">
    @method('PUT')
        @csrf

    <div class="form-group">
        <label for="name">Название отдела:</label>
        <input type="text" name="name" class="form-control" value="{{$department->name}}">
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
    <a href="{{route('departments.index')}}" class="btn btn-danger">Отмена</a>
</form>
@endsection
