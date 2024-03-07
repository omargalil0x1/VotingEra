@extends('components.main')

@section('title', 'Home')

@section('navbar')
    @parent
@endsection

<head>
    @vite('resources/css/ops-block.css')
    @vite('resources/css/voting-form.css')
    @vite('resources/js/form-validation.js')
    @vite('resources/js/form-validation-2.js')
    @vite('resources/css/error-badge.css')
</head>

@section('main-content')
    <div id="main-vote-card" class="card text-center">
        <div class="card-header">
            <h2 style="word-spacing: 10px"> {{ $single_vote['op1'] }} vs. {{ $single_vote['op2'] }} </h2>
        </div>
        <div class="card-body">
            <div id="ops-block">

                <div id="vote-card" class="card">
                    <img id="op-img" src="{{Vite::asset($op1_img)}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Competitor</h5>
                        <div class="card-content">
                            <p class="card-text"> {{ $member_101->name }}</p>
                            <p class="card-text"> {{ $member_101->symbol }}</p>
                        </div>
                                                <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-101">
                          Vote
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-101" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Vote</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <!-- focus on this -->
                              <div class="modal-body">

                                <form id="vote_for_op1_form" class="was-validated" action="{{ route('vote.singleVote', [$member_101->name, $single_vote['id'], 'op1']) }}" method="POST">
                                    @csrf

                                    <!-- SELECTING TYPE OF VOTING (PUBLIC/ANONYMOUSE) -->
                                    <div class="mb-3">
                                      <select id="voting_type_select" name="voting_type" class="form-select" required aria-label="select example">
                                        <option value="">Open this select menu</option>
                                        <option value="anonymous_voting">Anonymous Voting</option>
                                        <option value="public_voting">Public Voting</option>
                                      </select>
                                      <div class="invalid-feedback">Please select a voting type</div>
                                    </div>
                                    <!-- END OF VOTING TYPE SELECT -->


                                    <!-- TYPING THE NAME OF VOTER -->
                                    <div class="mb-3">
                                      <input class="form-control" id="voter_name_field" placeholder="Voter Name" required>
                                      <div class="invalid-feedback">
                                        Enter your name to be a public vote
                                      </div>
                                    </div>
                                    <!-- END OF THE VOTER NAME FIELD INPUT -->

                                    <!--  TYPING OF THE VOTER COMMENT -->
                                    <div class="mb-3">
                                      <label for="validationTextarea" class="form-label">Enter a comment for your vote</label>
                                      <textarea id="voter_comment" class="form-control" placeholder="Voter Comment" required></textarea>
                                      <div class="invalid-feedback">
                                        Please enter a comment for the vote.
                                      </div>
                                    </div>
                                    <!-- END OF THE VOTER COMMENT -->





                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="sumbit" class="btn btn-primary">Submit Vote</button>
                                    </div>
                                </form>

                              </div>


                            </div>
                          </div>
                        </div>
                    </div>
                </div>


                <!-- SECOND CARD OF THE VOTING -->

                <div id="vote-card" class="card">
                    <img id="op-img" src="{{Vite::asset($op2_img)}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Competitor</h5>
                        <div id="card-content">
                            <p class="card-text"> {{ $member_102->name }} </p>
                            <p class="card-text"> {{ $member_102->symbol }} </p>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-102">
                          Vote
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-102" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Vote</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <span style="display: none"> this is second modal </span>
                                        <p> hello world of shit </p>
                                        <form id="vote_for_op2_form" class="was-validated" action="{{ route('vote.singleVote', [$member_102->name, $single_vote['id'], 'op2']) }}" method="POST">
                                            @csrf
                                            {{-- action={{ route('vote.singleVote', [$member_102->name, $single_vote['id'], 'op2']) }}--}}

                                            <!-- SELECTING TYPE OF VOTING (PUBLIC/ANONYMOUSE) -->
                                            <div class="mb-3">
                                              <select id="voting_type_select_102" name="voting_type" class="form-select" required aria-label="select example">
                                                <option value="">Open this select menu</option>
                                                <option value="anonymous_voting">Anonymous Voting</option>
                                                <option value="public_voting">Public Voting</option>
                                              </select>
                                              <div class="invalid-feedback">Please select a voting type</div>
                                            </div>
                                            <!-- END OF VOTING TYPE SELECT -->


                                            <!-- TYPING THE NAME OF VOTER -->
                                            <div class="mb-3">
                                              <input class="form-control" id="voter_name_field_102" placeholder="Voter Name" required>
                                              <div class="invalid-feedback">
                                                Enter your name to be a public vote
                                              </div>
                                            </div>
                                            <!-- END OF THE VOTER NAME FIELD INPUT -->

                                            <!--  TYPING OF THE VOTER COMMENT -->
                                            <div class="mb-3">
                                              <label for="validationTextarea" class="form-label">Enter a comment for your vote</label>
                                              <textarea id="voter_comment_102" class="form-control" placeholder="Voter Comment" required></textarea>
                                              <div class="invalid-feedback">
                                                Please enter a comment for the vote.
                                              </div>
                                            </div>
                                            <!-- END OF THE VOTER COMMENT -->

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit Vote</button>
                                            </div>
                                        </form>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="card-footer text-body-secondary">
            DeadLine {{ $single_vote['vote_deadline'] }}
        </div>
    </div>


    <div style="display: flex; flex-direction: row" id="main-vote-card" class="card text-center">

      <!-- LIST OF SHOWING PUBLIC VOTES COMMENTS AND ENTRIES -->
      <div style="width: 100%; margin: 6px" class="list-group">

        @if(count($public_votes) > 0)

          @foreach($public_votes as $single_public_vote)
            @if($single_vote['op1'] == $single_vote[$single_public_vote['voted_for']])
              <a style="margin-bottom: 5px" class="list-group-item list-group-item-action active" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{ $single_public_vote['voter_name'] }} - {{ $single_vote[$single_public_vote['voted_for']] }}</h5>
                  <small>3 days ago</small>
                </div>
                <p class="mb-1">{{ $single_public_vote['voter_comment'] }}</p>
              </a>
            @endif
          @endforeach

        @else
        <div class="error-badge">
          No Public Votes Yet!
        </div>
        @endif

      </div>


      <!-- veritcal line -->
      <div class="d-flex" style="height: 200px;">
        <div class="vr"></div>
      </div>
      <!-- vertical line -->



      <!-- LIST OF SHOWING PUBLIC VOTES COMMENTS AND ENTRIES -->
      <div style="width: 100%; margin: 6px" class="list-group">
        @if(count($public_votes) > 0)

          @foreach($public_votes as $single_public_vote)
            @if($single_vote['op2'] == $single_vote[$single_public_vote['voted_for']])
              <a style="margin-bottom: 5px" class="list-group-item list-group-item-action active" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{ $single_public_vote['voter_name'] }} - {{ $single_vote[$single_public_vote['voted_for']] }}</h5>
                  <small>3 days ago</small>
                </div>
                <p class="mb-1">{{ $single_public_vote['voter_comment'] }}</p>
              </a>
            @endif
          @endforeach

        @else

        <div class="error-badge">
          No Public Votes Yet!
        </div>

        @endif

      </div>

    </div>
@endsection
