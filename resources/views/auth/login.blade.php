@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">
            <form class="col s6 offset-l3" method="POST" action="{{ route('login') }}">
                <legend><h4 >Login</h4></legend>
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="text" class="validate"required>
                        <label for="email" data-error="{{ $errors->has('email') ? ' wrong' : '' }}" data-success="right">Email</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="input-field">
                        <i class="fa fa-key prefix"></i>
                        <input id="icon_prefix" name="password" type="password" class="validate"required>
                        <label for="icon_prefix" data-error="{{ $errors->has('password') ? ' wrong' : '' }}" data-success="right">Password</label>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="input-field">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                    <p>
                        <input type="checkbox" name="remember" id="test5" />
                        <label for="test5">Remember</label>
                    </p>
                    <p>
                        <a href="{{ route('password.request') }}" class="btn btn-link">Forgate Password</a>
                    </p>
                </div>
            </form>
    </div>
</div>
@endsection
