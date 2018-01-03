@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <form class="col s6 offset-l3" method="POST" action="{{ route('register') }}">
            <legend><h4 >Register</h4></legend>
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field">
                    <i class="material-icons prefix">person</i>
                    <input id="name" name="name" type="text" class="validate" required>
                    <label for="name" data-error="{{ $errors->has('name') ? ' wrong' : '' }}" data-success="right">Name</label>
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="text" class="validate" required>
                    <label for="email" data-error="{{ $errors->has('email') ? ' wrong' : '' }}" data-success="right">Email</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="input-field">
                    <i class="fa fa-key prefix"></i>
                    <input id="password" type="password" name="password" class="validate" required>
                    <label for="password" data-error="{{ $errors->has('password') ? ' wrong' : '' }}" data-success="right">Password</label>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="input-field">
                    <i class="fa fa-key prefix"></i>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="validate" required>
                    <label for="password_confirmation" >Confirm Password</label>

                </div>
                <div class="input-field">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>

            </div>
        </form>
    </div>
</div>
@endsection
