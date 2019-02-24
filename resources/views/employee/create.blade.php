@extends('templates.app')

@section('content')
    <h3 class="mt-3">Добавить сотрудника</h3>
    <hr>
    <form class="" action="{{route('employees.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="firstname">Имя:</label>
            <input type="text" name="firstname" class="form-control">
            @if ($errors->has('firstname'))
                <span class="text-danger">{{ $errors->first('firstname') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="surname">Фамилия:</label>
            <input type="text" name="surname" class="form-control">
            @if ($errors->has('surname'))
                <span class="text-danger">{{ $errors->first('surname') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="fathername">Отчество:</label>
            <input type="text" name="fathername" class="form-control">
        </div>
        @include('providers.gender-component')
        <div class="form-group">
            <label for="payment">Заработная плата:</label>
            <input type="number" required value="0" name="payment" class="form-control">
        </div>
        @include('providers.department-component')
        <button type="submit" class="btn btn-primary">Сохранить</button>
        <a href="{{route('employees.index')}}" class="btn btn-danger">Отмена</a>
    </form>
@endsection
