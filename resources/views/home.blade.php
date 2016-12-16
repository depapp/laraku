@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - {{Auth::user()->name}}</div>
                @if (Auth::user()->jabatan == 'admin')
                  <div class="panel-body">
                    Halaman Admin
                  </div>
                    @else
                  <div class="panel-body">
                    Halaman Member
                  </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
