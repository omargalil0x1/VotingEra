<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\VoteController;

use App\Http\Controllers\PublicVotingController;

Route::get('/', [HomeController::class, 'home'])->name('home.home');

Route::get('/about', [HomeController::class, 'about'])->name('home.about');

// do the vote action.
Route::get('/vote', [VoteController::class, 'index'])->name('vote.index');

// make a vote
Route::get('/vote/{vote_owner}/{vote_id}', [VoteController::class, 'show'])->name('vote.show');

//for public voting
Route::post('/vote/{op_name}/{voteCreator_id}/{colName}/public', [PublicVotingController::class, 'single_vote'])->name('vote.singleVote');

//for private and unseen voting.
Route::post('/vote/{op_name}/{voteCreator_id}/{colName}', [VoteController::class, 'single_vote'])->name('vote.singleVote');

// create vote page
Route::get('/create-vote', [VoteController::class, 'create'])->name('vote.create');

// storing vote
Route::get('/create-vote/create', [VoteController::class, 'store'])->name('vote.store');
