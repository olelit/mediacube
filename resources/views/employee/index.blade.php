@extends('templates.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{route('employees.create')}}" class="btn btn-success">Добавить сотрудника</a>
        </div>
    </div>

    @include('partials.delete-messages')

    <table class="table">
        <thead>
            <th>№</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Пол</th>
            <th>Заработная плата</th>
            <th>Отделы</th>
            <th>Действия</th>
        </thead>
        <tbody>
            @if(count($employees) > 0)
            @foreach($employees as $key=>$value)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$value->firstname}}</td>
                    <td>{{$value->surname}}</td>
                    <td>{{$value->fathername ?? "неизвестно"}}</td>
                    <td>{{$value->gender->name ?? "неизвестно"}}</td>
                    <td>{{$value->payment}}</td>
                    <td>{{ implode(", ",$value->departments->pluck('name')->toArray()) }}</td>
                    <td>
                        <a title="Изменить" class="btn btn-primary" href="{{route('employees.edit',['department' => $value])}}"><i class="fas fa-pen-square"></i></a>
                        <a title="Удалить" class="btn btn-danger delete-data" href="{{route('employees.destroy',['id' => $value->id])}}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>

                @endforeach
                @else

                <tr>
                    <td>
                        Нет информации о сотрудниках
                    </td>
                </tr>

        @endif
        </tbody>
    </table>
@endsection
