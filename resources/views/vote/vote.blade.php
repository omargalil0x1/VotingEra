@extends('components.main')

@section('title', 'Home')

@section('navbar')
    @parent
@endsection

<head>
    @vite('resources/css/vote-cards.css')
</head>

@section('main-content')
    @foreach($all_votes as $single_vote)
        <div id="cards-group">
            <div id="single-vote-card" class="card">

            <div id="main-card-body">

                <h5 class="card-header">{{ $single_vote['vote_owner'] }}</h5>
                <div class="card-body">
                    <h5 class="card-title">Competitors : {{ $single_vote['op1'] }} vs. {{ $single_vote['op2'] }} Poll </h5>
                    <p class="card-text">
                        @if($single_vote['op1_counter'] === 0 && $single_vote['op2_counter'] === 0)

                            <h3> Be the first person to vote for {{ $single_vote['op1'] }} or {{ $single_vote['op2'] }} </h3>

                        @elseif($single_vote['op1_counter'] !== 0 && $single_vote['op2_counter'] === 0)

                            <h2> Be the first person to vote for {{ $single_vote['op2'] }} </h2>

                        @elseif($single_vote['op1_counter'] === 0 && $single_vote['op2_counter'] !== 0)

                            <h2> Be the first person to vote for {{ $single_vote['op1'] }} </h2>

                        @elseif($single_vote['op1_counter'] !== 0 && $single_vote['op2_counter'] !== 0)

                            <h2> Vote for {{ $single_vote['op1'] }} or {{ $single_vote['op2'] }} </h2>

                        @endif
                    </p>
                    <a href="{{ route('vote.show', [$single_vote['vote_owner'], $single_vote['id']]) }}" class="btn btn-primary">Vote</a>
                  
                </div>
                <div class="card-footer text-body-secondary">
                    Deadline : {{ $single_vote['vote_deadline'] }}
                </div>
                @if($single_vote['op1_counter'] !== 0 || $single_vote['op2_counter'] !== 0)
                <div id="progs-stacked" class="progress-stacked">
                      <div id="prgs-bar" class="progress" role="progressbar" aria-label="Segment one"  aria-valuemin="0" aria-valuemax="100"
                      style="width: {{ $single_vote['op1_counter']/($single_vote['op1_counter']+$single_vote['op2_counter'])*100 }}%">
                        <div id="prgs-title" class="progress-bar bg-success">
                          {{ $single_vote['op1'] }}    [{{ round($single_vote['op1_counter']/($single_vote['op1_counter']+$single_vote['op2_counter'])*100) }}%]
                        </div>

                      </div>

                      <div id="prgs-bar" class="progress" role="progressbar" aria-label="Segment two" aria-valuemin="0" aria-valuemax="100"
                      style="width: {{ $single_vote['op2_counter']/($single_vote['op1_counter']+$single_vote['op2_counter'])*100 }}%">
                        <div id="prgs-title" class="progress-bar bg-danger">{{ $single_vote['op2'] }}  [{{ round($single_vote['op2_counter']/($single_vote['op1_counter']+$single_vote['op2_counter'])*100) }}%]</div>
                      </div>
                </div>
                @else
                    <div>
                        <h2> No Insights Yet! </h2>
                    </div>
                @endif
            </div>
        </div>
    @endforeach

@endsection
