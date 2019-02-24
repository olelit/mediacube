@extends('templates.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('departments.create')}}" class="btn btn-success">Добавить отдел</a>

        </div>
    </div>

    @include('partials.delete-messages')

    <table class="table">
        <thead>
            <th>№</th>
            <th>Название отдела</th>
            <th>Количество сотрудников</th>
            <th>Самая высокая зарплата</th>
            <th>Действия</th>
        </thead>
        <tbody>
            @foreach($departments as $key => $value)
                <tr>
                    <th>{{++$key}}</th>
                    <td>{{$value->name}}</td>
                    <td>{{$value->employees->count()}}</td>
                    <td>{{$value->employees->max('payment') ?? "Нет сотрудников"}}</td>
                    <td>
                        <a title="Изменить" class="btn btn-primary" href="{{route('departments.edit',['department' => $value])}}"><i class="fas fa-pen-square"></i></a>
                        <a title="Удалить" class="btn btn-danger delete-data" href="{{route('departments.destroy',['id' => $value->id])}}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>

                @endforeach
        </tbody>
    </table>
@endsection
