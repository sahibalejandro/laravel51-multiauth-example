@extends('layout')

@section('type')
<body class="login-page">
    <div class="login-box">
        <div class="login-box-logo">
            <h3 class="text-center"><span>Admin</span><span><b>LOGIN</b></span></h3>
        </div>
        <div class="login-box-body">
            {!! Form::open() !!}
            <div class="form-group">
                {!! Form::text('email', '', array('required','class' => 'form-control', 'placeholder' => 'Email')) !!}
            </div>
            <div class="form-group">
                {!! Form::password('password', array('required', 'class' => 'form-control', 'placeholder' => 'Password')) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Login', array('type' => 'submit', 'class' => 'btn btn-success center-block')) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="login-demo-credentials">
            <h4 class="text-center">Demo credentials</h4>
            <p class="text-center">Email : <b>admin@admin.be</b><br/>Password : <b>admin</b></p>
        </div>
    </div>
</body>
@endsection