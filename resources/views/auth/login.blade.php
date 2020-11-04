@extends('commons.layouts')
@section('content')
<div class="text-center">
    <h2>login</h2>
</div>
<div class="row">
    <div class="col-sm-6 offset-sm-3">
        {!!Form::open(['route'=>'login.post'])!!}
            <div class="form-group">
                {!!Form::label('email','E-mail')!!}
                {!!Form::email('email',old('email'),['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('password','Pass')!!}
                {!!Form::password('password',['class'=>'form-control'])!!}
            </div>
            {!!Form::submit('Login',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
        <h3 class="mt-4">New user?      {!!link_to_route('signup.get','Sign up now!')!!}</h3>
    </div>
</div>
@endsection(‘content’)
