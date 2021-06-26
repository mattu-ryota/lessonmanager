<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Task;
use App\Progress;


class LessonController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //todo;タスクの情報をデータベースから取ってくる
    $Tasks=Task::all();

        $events=[['名前'=>'課題1','締切日'=>'2021-06-15','色'=>'black'],
    ['名前'=>'課題2','締切日'=>'2021-06-30','色'=>'red']];

        return view('home',compact('events','Tasks'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list($date)
    {
        $day=new Carbon($date);
        $youbi=$day->dayOfWeek;


        Lesson::where()->dayOfWeek();

        $daylessons=[
            "1時限"=>"国語",
            "2時限"=>"数学",
            "3時限"=>"理科",
            "4時限"=>"社会",
            "5時限"=>"英語",
            "6時限"=>"体育",

        ];
        return view('day',compact("daylessons"));
    }




    /**
     *授業作成のページ
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lesson/create');
    }

    /**
     * 授業登録の関数
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $lesson= new Lesson();
        $lesson->name=$request->request->get("name");
        $lesson->teacher=$request->request->get("teacher");
        $lesson->description=$request->request->get("description");
        $lesson->dayofweek=$request->request->get("dayofweek");
        $lesson->time=$request->request->get("time");
        $lesson->save();

        $user = Auth::user();

        $user->lessons()->attach($lesson);


        return redirect("/");
    }

    /**
     * 授業詳細のページ
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson=Lesson::find($id);


        return view('lesson/show',["lesson"=>$lesson]);
    }

    /**
     * タスクの登録の関数
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $Task=new Task();
        $Task->name=$request->request->get('name');
        $Task->deadline=$request->request->get('deadline');
        $Task->description=$request->request->get('description');
        $Task->lesson_id=$request->request->get('lesson_id');
        $Task->save();
        return redirect('/');
    }

    /**
     * 進行状況
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function progress(Request $request, $id)
    {
        $progress=new Progress();
        $progress->user_id=$request->request->get('user_id');
        $progress->task_id=$request->request->get('task_id');
        $progress->progress=$request->request->get('progress');
        $progress->save();
        return redirect('/');
    }

    /**
     * 削除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
