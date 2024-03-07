@extends('components.main')

@section('title', 'Home')

@section('navbar')
    @parent
@endsection

<head>
    @vite('resources/css/form.css')
    @vite('resources/js/form.js')
</head>

@section('main-content')
<center>
    <div id="create-vote-block" class="card">
        <h2 style="color: white"> Create Vote </h2>
        <hr style="color: white">

        <form method="GET" action="{{ route('vote.store') }}" id="create-vote-form" class="was-validated">

          <div class="mb-3">
            <label for="validationTextarea" class="form-label">Vote Owner</label>
            <input name="vote_owner" class="form-control" id="vote-owner-field" placeholder="Vote Owner" required/>
            <div class="invalid-feedback">
              Please enter your name.
            </div>
          </div>

          <div class="mb-3">
            <input name="vote_deadline" type="date" id="vote-deadline-select" class="form-select" required aria-label="select example"/>
            <div class="invalid-feedback">Select a Vote Deadline </div>
          </div>

          <div style="display: flex; flex-direction: row;" id="ops-selection-block">
            <div style="width: 100%" class="mb-3">
                <select name="op1" id="vote-member-select-op-1" class="form-select" required aria-label="select example">
                  <option value=""> First Oponent </option>
                  @foreach($all_members as $single_member)
                    <option value="{{ $single_member['name'] }}">{{ $single_member['name'] }} - {{ $single_member['title'] }}</option>
                  @endforeach
                </select>
                <div class="invalid-feedback">Please Select an Oponent Name</div>
            </div>

            <h4 style="color: white; margin-left: 10px; margin-right: 10px"> VS. </h4>

            <div style="width: 100%" class="mb-3">
                <select name="op2" id="vote-member-select-op-2" class="form-select" required aria-label="select example">
                  <option value=""> Second Oponent </option>
                  @foreach($all_members as $single_member)
                    <option value="{{ $single_member['name'] }}">{{ $single_member['name'] }} - {{ $single_member['title'] }}</option>
                  @endforeach
                </select>
                <div class="invalid-feedback">Please Select an Oponent Name</div>
            </div>
          </div>

          <div>
            <input type="hidden" name="op1_counter" value="0">
            <input type="hidden" name="op2_counter" value="0">
          </div>

          <div class="mb-3">
            <button class="btn btn-primary" id="create-vote-btn" type="submit">Creat Poll</button>
          </div>
        </form>
    </div>
</center>
<br>
<br>
@endsection
