@extends('layouts.app')

@section('content')

    <p>授業名:{{$lesson->name}}</p>
    <p>先生名:{{$lesson->teacher}}</p>
    <p>曜日:{{$lesson->dayofweek}}</p>
    <p>時限:{{$lesson->time}}</p>
    <p>詳細:{{$lesson->description}}</p>

    <form method="POST">
        <div class="form-group">
            <label for="teacher">課題名</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="課題名を入れてください。">
        </div>
        <div class="form-group">
            <label for="dayofweek">締切日</label>
            <input type="datetime-local" name="deadline" >
        </div>
        <div class="form-group">
            <label for="descrimination">詳細</label>
            <textarea class="form-control" id="descrimination" name="description" placeholder="授業の詳細を書いてください。"></textarea>
        </div>
        <input type="hidden" name="lesson_id" value="{{$lesson->id}}">
        <button type="submit" class="btn btn-primary">登録</button>
    </form>
@endsection
