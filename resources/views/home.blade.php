@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col s12 m4 l3">
            <sidebar-section></sidebar-section>
        </div>
        <div class="col s12 m8 l9">
            <table-section></table-section>
        </div>
    </div>
</div>

@endsection
