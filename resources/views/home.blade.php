@extends('layouts.app')
@section('content')
@if (session()->has('message') || session()->has('status'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
@elseif(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show">
    {{ session()->get('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
@endif
@stop