<div class="form-group">
    <label for="departments">Отделы:</label>
    <select class="form-control" name="departments[]" multiple id="">
        @foreach($departmentProvider as $department)
            <option @if(isset($employee) && $employee->departments->contains('id',$department->id)) selected @endif value="{{$department->id}}">{{$department->name}}</option>
        @endforeach
    </select>
    @if ($errors->has('departments'))
        <span class="text-danger">{{ $errors->first('departments') }}</span>
    @endif
</div>
