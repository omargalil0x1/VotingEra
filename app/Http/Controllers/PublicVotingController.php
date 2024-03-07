<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vote;
use App\Models\PublicVote;

class PublicVotingController extends Controller
{
  public function validator($member_name, $id, $col_name, $voter_name) {

    $public_vote_entry = PublicVote::where('voter_name', $voter_name)->where('vote_owner_id', $id)->get();

    if(count($public_vote_entry) >= 1) {
      return 200;

    } else if(count($public_vote_entry) === 0) {
      return 404;

    }

  }

  public function single_vote($member_name, $id, $colName) {

    $public_vote = new PublicVote;

    $vote_creator_single_row = Vote::find($id);

    if(request()->all()['voting_type'] === "public_voting") {

      if(self::validator($member_name, $id, $colName, request()->all()['voter_name_field']) === 404) {

          if( isset(request()->all()['voter_name_field_102']) ) {

            $public_vote->voter_name = request()->all()['voter_name_field_102'];
            $public_vote->voter_comment = request()->all()["voter_comment_102"];
            $public_vote->voted_for = $colName;
            $public_vote->vote_owner_id = $id;
            $public_vote->counter += 1;
            $public_vote->save();

          } else if( isset(request()->all()['voter_name_field_102']) == false ) {

            // for voter_name_field_202
            $public_vote->voter_name = request()->all()["voter_name_field"];
            $public_vote->voter_comment = request()->all()["voter_comment"];
            $public_vote->voted_for = $colName;
            $public_vote->vote_owner_id = $id;
            $public_vote->counter += 1;
            $public_vote->save();

          }
        } else {
          return view("error/index", ["error_msg" => "Voter Already Used Choose another name!"]);
        }
      }

    $vote_creator_single_row[$colName . "_counter"] += 1;
    $vote_creator_single_row->save();


    return to_route('vote.index');
}

}
