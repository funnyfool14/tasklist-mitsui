@extends('commons.layouts')
@section('content')
@if(count($errors)>0)
    <ul class="alart alart-danger""role-alart">
    @foreach($errors->all() as $error)
        <li class="ml-4">{{$error}}</li>
    @endforeach
    </ul>
@endif    
<h3>タスク編集</h3>
<div class="row">
    <div class="col-6">
    {{--入力欄を大きくする方法と整える方法--}}
    {!!Form::model($task,['route'=>['tasks.update',$task->id],'method'=>'put'])!!}
        <div class="form-group">
            {!!Form::label('title','タスク')!!}
            {!!Form::text('title',null,['class'=>'form-controll'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('content','詳細')!!}
            {!!Form::text('content',null,['class'=>'form-controll'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('deadline','期日')!!}
            {!!Form::text('deadline',null,['class'=>'form-controll'])!!}
        </div>
    </div>
</div>
    {!!Form::submit('更新',['class'=>'btn btn-secondary'])!!}
    {!!Form::close()!!}
@endsection(‘content’)