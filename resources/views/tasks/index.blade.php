@extends('commons.layouts')
@section('content')
@if(\Auth::check())
    <h3>タスク一覧</h3>
    <table class="table table-striped">
        <thread>
            <tr>
                <th>タスク</th>
                <th>期日</th>
                <th></th>
            </tr>
        </thread>
        <tbody>
            @foreach($tasks as $task)
            @if(\Auth::user()==$task->user)
                <tr> 
                {{--'task'routeのどの部分？--}}
                {{--deadline順に並べるとしたらどうする--}}
                    <td>{!!$task->title!!}</td>
                    <td>{!!$task->deadline!!}</td>
                    <td>{!!link_to_route('tasks.show','詳細',['task'=>$task->id],['class'=>'btn btn-secondary'])!!}</td>
                </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <div class="row col-8">
        <div>
            {{$tasks->links()}}
        </div>
        <div class="ml-4 col-4">
            {!!link_to_route('tasks.create','タスクの追加',[],['class'=>'btn btn-primary btn-block'])!!}
        </div>    
    </div>
@else
<div class="text-center">
<h3>New user?</h3>
<h3>{!!link_to_route('signup.get','Sign up now!')!!}</h3>
</div>
@endif
@endsection(‘content’)