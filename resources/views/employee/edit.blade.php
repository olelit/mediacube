@extends('templates.app')

@section('content')
    <h3 class="mt-3">Редактировать сотрудника</h3>
    <hr>
    <form action="{{route('employees.update',$employee)}}" method="post">
    @method('PUT')
        @csrf
        <div class="form-group">
            <label for="firstname">Имя:</label>
            <input type="text" name="firstname" value="{{$employee->firstname}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="surname">Фамилия:</label>
            <input type="text" name="surname" value="{{$employee->surname}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="fathername">Отчество:</label>
            <input type="text" name="fathername" value="{{$employee->fathername}}" class="form-control">
        </div>
        @include('providers.gender-component')
        <div class="form-group">
            <label for="payment">Заработная плата:</label>
            <input type="number" required name="payment" value="{{$employee->payment}}" class="form-control">
        </div>
        @include('providers.department-component')
        <button type="submit" class="btn btn-primary">Сохранить</button>
        <a href="{{route('employees.index')}}" class="btn btn-danger">Отмена</a>
</form>
@endsection

