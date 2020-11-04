@extends('commons.layouts')
@section('content')
<div class="text-center"></div>
    <h2>sign up</h2>
</div>
<div class="row">
    <div class="col-sm-6 offset-sm-3">
    {!!Form::open(['route'=>'signup.post'])!!}
        <div class="form-group">
            {!!Form::label('name','Name')!!}
            {!!Form::text('name',old('name'),['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('email','E-mail')!!}
            {!!Form::email('email',old('email'),['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('password','Pass')!!}
            {!!Form::password('password',['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('password_confirmation','Confirmation')!!}
            {!!Form::password('password_confirmation',['class'=>'form-control'])!!}
        </div>
        {!!Form::submit('登録',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
   </div>
</div>

@endsection(‘content’)