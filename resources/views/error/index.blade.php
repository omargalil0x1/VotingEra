@extends('components.main')

@section('title', 'Public Vote')

@section('main-navbar')
  @parent
@endsection


@section('main-content')
  <br> <br> <br>
  <div style="margin-left: 30px; margin-right: 30px" class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Vote Already Exists</h4>
  <p> Public Voter Name already Exists, consider changing it! </p>
  <hr>
  </div>
@endsection
