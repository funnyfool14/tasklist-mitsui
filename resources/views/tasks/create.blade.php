@extends('commons.layouts')
@section('content')
@include('commons.error')
<h1>タスクを追加する</h1>
<div class="row">
    <div class="col-6">
        {!!Form::model($task,['route'=>'tasks.store'])!!}
            <div class="form-group">
                {!!Form::label('title','タスク')!!}
                {!!Form::text('title',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('content','詳細')!!}
                {!!Form::text('content',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('deadline','期日')!!}
                {!!Form::text('deadline',null,['class'=>'form-control'])!!}
            </div>
            {{--ボタンを押すとインスタンスが生成される？--}}
            {!!Form::submit('追加',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
@endsection(‘content’)