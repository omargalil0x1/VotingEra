<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vote;
use App\Models\Vote_Member;

use App\Models\PublicVote;

class VoteController extends Controller
{
    public function resolverSrc($op_name) {
        $name = strtolower($op_name);

        $new_img_src = str_replace(" ", "_", $name);

        return 'resources/images/' . $new_img_src . '.jpg';
    }

    public function index() {
        return view('vote/vote', ['all_votes' => Vote::all()]);
    }

    public function create() {
        return view('vote/create', ['all_members' => Vote_Member::all()]);
    }

    public function show($vote_owner, $id) {

        $public_votes = PublicVote::where('vote_owner_id', $id)->get();

        $member_main = Vote::find($id);

        $member1 = Vote_Member::where('name', $member_main->op1)->first();
        $member2 = Vote_Member::where('name', $member_main->op2)->first();

        return view('vote/show', [
            'single_vote' => Vote::where("vote_owner", $vote_owner)->first(),
            'op1_img' => self::resolverSrc(Vote::where("vote_owner", $vote_owner)->first()['op1']),
            'op2_img' => self::resolverSrc(Vote::where("vote_owner", $vote_owner)->first()['op2']),
            'member_101' => $member1,
            'member_102' => $member2,
            'public_votes' => $public_votes

        ]);
    }

    public function store() {

        $vote_owner = request()->all()['vote_owner'];
        $vote_deadline = request()->all()['vote_deadline'];
        $op1 = request()->all()['op1'];
        $op2 = request()->all()['op2'];
        $op1_counter = request()->all()['op1_counter'];
        $op2_counter = request()->all()['op2_counter'];

        $vote = new Vote;
        $vote->vote_owner = $vote_owner;
        $vote->vote_deadline = $vote_deadline;
        $vote->op1 = $op1;
        $vote->op2 = $op2;
        $vote->op1_counter = $op1_counter;
        $vote->op2_counter = $op2_counter;

        $vote->save();

        return to_route('vote.index');
    }

    public function single_vote($member_name, $id, $colName) {
        $vote_creator_single_row = Vote::find($id);

        // dd($member_name, $id, $colName);

        $vote_creator_single_row[$colName . "_counter"] += 1;
        $vote_creator_single_row->save();

        return to_route('vote.index');
    }
}
