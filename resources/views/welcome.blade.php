@extends('templates.app')

@section('content')
    <div class="table-responsive">
    <table class="table mt-5">
        <thead>
        <th></th>
        @foreach($departments as $department)
            <th>{{$department->name}}</th>
            @endforeach
        </thead>
        <tbody>
        @if(count($employees) > 0)
            @foreach($employees as $value)
                <tr>
                    <td>{{$value->firstname." ".$value->surname}}</td>
                    @foreach($departments as $department)
                        <td> @if($value->departments->contains('id',$department->id)) <i class="fas fa-check"></i> @endif </td>
                    @endforeach
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
    </div>
@endsection
