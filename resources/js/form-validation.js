let voting_type_select = document.getElementById('voting_type_select'); // for public or anonymous voting.
let voter_name_field = document.getElementById('voter_name_field');
let voter_comment = document.getElementById('voter_comment');
// vote_for_op1_form.

let form1 = document.getElementById('vote_for_op1_form');


voting_type_select.onclick = function(event) {

  if(voting_type_select.value === "public_voting") {

    console.log("Public voting must be performed");

    voter_name_field.disabled = false;
    voter_comment.disabled = false;

    voter_name_field.setAttribute('name', 'voter_name_field');
    voter_comment.setAttribute('name', 'voter_comment');

    if(form1.attributes.action.value.endsWith('/public') === false) {
      //replace it with public voting url
      form1.attributes.action.value += "/public"
    }

  } else if(voting_type_select.value === "anonymous_voting") {

    console.log("Anonymouse voting must be performed");
    voter_name_field.disabled = true;
    voter_comment.disabled = true;

    try {
      //replace it with private voting url
      form1.attributes.action.value = form1.attributes.action.value.replace('/public', '');
    } catch(error) {
      console.log("Not there!")
    }


    // remove attributes of name in order not to send unimportant data fields request.
    voter_name_field.removeAttribute('name');
    voter_comment.removeAttribute('name');

  }
}
