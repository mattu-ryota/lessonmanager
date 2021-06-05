@extends('layouts.app')

@section('content')
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="name">授業名</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="授業名を入力してください">
            <small id="name" class="form-text text-muted">授業名を入力してください</small>
        </div>
        <div class="form-group">
            <label for="teacher">先生名</label>
            <input type="text" class="form-control" id="teacher" name="teacher" placeholder="先生の名前を入力してください。">
        </div>
        <div class="form-group">
            <label for="dayofweek">曜日</label>
            <select class="form-control" id="dayofweek">
                <option>月</option>
                <option>火</option>
                <option>水</option>
                <option>木</option>
                <option>金</option>
            </select>
        </div>
        <div class="form-group">
            <label for="time">時限</label>
            <select class="form-control" id="time">
                <option>1時限</option>
                <option>2時限</option>
                <option>3時限</option>
                <option>4時限</option>
                <option>5時限</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">登録</button>
    </form>
@endsection
