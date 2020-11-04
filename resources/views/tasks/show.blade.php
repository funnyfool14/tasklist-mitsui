@extends('commons.layouts')
@section('content')

@if(\Auth::id()==$task->user_id)
<h3>タスク管理</h3>
　<table class="table">
　    <thread>
　        <tr>
　            <th>タスク</th>
　            <td>{!!$task->title!!}</td>
　        </tr>
　        <tr>
　            <th>詳細</th>
　            <td>{!!$task->content!!}</td>
　        </tr>
　        <tr>
　            <th>期日</th>
　            <td>{!!$task->deadline!!}</td>
　        </tr>
　    </thread>
　</table>
　<div class="row col-8">
　    {!!link_to_route('tasks.edit','編集',['task'=>$task->id],['class'=>'btn btn-secondary'])!!}

　   　   {!!Form::model($task,['route'=>['tasks.destroy',$task->id],'method'=>'delete'])!!}
　        {!!Form::submit('実行済み',['class'=>'btn btn-danger'])!!}
　        {!!Form::close()!!}     
　</div>
　@endif
@endsection(‘content’)