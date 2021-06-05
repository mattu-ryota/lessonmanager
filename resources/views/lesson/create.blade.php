@extends('layouts.app')

@section('content')
    <div style="background-color: #EEEEEE" class="mb-5 text-center">
        <h3 >授業登録</h3>
    </div>
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="dayofweek">曜日</label>
            <select class="form-control" id="dayofweek" name="dayofweek">
                <option value="1">月</option>
                <option value="2">火</option>
                <option value="3">水</option>
                <option value="4">木</option>
                <option value="5">金</option>
            </select>
        </div>
        <div class="form-group">
            <label for="time">時限</label>
            <select class="form-control" id="time" name="time">
                <option value="1">1時限</option>
                <option value="2">2時限</option>
                <option value="3">3時限</option>
                <option value="4">4時限</option>
                <option value="5">5時限</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">授業名</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="授業名を入力してください">
            <small id="name" class="form-text text-muted">授業名を入力してください</small>
        </div>
        <div class="form-group">
            <label for="teacher">先生名</label>
            <input type="text" class="form-control" id="teacher" name="teacher" placeholder="先生の名前を入力してください。">
        </div>
        <div class="form-group">
            <label for="descrimination">詳細</label>
            <textarea class="form-control" id="descrimination" name="descrimination" placeholder="授業の詳細を書いてください。"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">登録</button>
    </form>
@endsection
