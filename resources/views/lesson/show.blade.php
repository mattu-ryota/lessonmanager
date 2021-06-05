@extends('layouts.app')

@section('content')

    <p>授業名:{{$lesson->name}}</p>
    <p>先生名:{{$lesson->teacher}}</p>
    <p>曜日:{{$lesson->dayofweek}}</p>
    <p>時限:{{$lesson->time}}</p>
    <p>詳細:{{$lesson->description}}</p>
    <p>課題一覧</p>
        @foreach($lesson->tasks()->get() as $task)
            <p>{{$task->name}}</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>
        @endforeach

    <form method="POST">
    @csrf
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
    <div class="container">
        <h1>チャット</h1>
        <div>
            <li>メッセージ１</li>
            <li>メッセージ１</li>
            <li>メッセージ１</li>
            <li>メッセージ１</li>
        </div>
        <div class="form-group">
            <form action="/lesson/1/chat/create" method="POST">
                @csrf
                <input type="hidden" value="{{Auth::id()}}" name="user_id">
                <input type="hidden" value="1" name="lesson_id">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" aria-describedby="file">
                        <label class="custom-file-label" for="file">ファイル</label>
                    </div>
                </div>
                    <label for="message">メッセージ</label>
                <textarea class="form-control" id="message" name="message" placeholder="メッセージ"></textarea>
            <button type="submit" class="btn btn-primary">送信</button>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/lesson/1/progress/create" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">課題1</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" value="{{Auth::id()}}" name="user_id">
                        <input type="hidden" name="task_id" value="1">
                        <div class="form-group">

                            <label for="progress">進行状況</label>
                            <input type="range" class="form-control-range" id="progress" name="progress" value="0">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
