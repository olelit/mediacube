<div class="form-group">
    <label for="gender_id">Отделы:</label>
    @foreach($gendersProvider as $gender)
        <br>
        <input type="radio" @if(isset($employee) && $employee->gender_id == $gender->id) checked @endif name="gender_id" value="{{$gender->id}}" class="">{{$gender->name}}
    @endforeach
</div>
