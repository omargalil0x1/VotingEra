
let createVoteForm = document.getElementById("create-vote-form");

let ownerInput = document.getElementById('vote-owner-field');

let memberSelect = document.getElementById('vote-member-select-op-1');

let memberSelect2 = document.getElementById('vote-member-select-op-2');

let voteDeadlineSelect = document.getElementById('vote-deadline-select');

let createVoteButton = document.getElementById('create-vote-btn');

const now = new Date();

const day = String(now.getDate()).padStart(2, '0');
const month = String(now.getMonth() + 1).padStart(2, '0');
const year = now.getFullYear();

const currentDate = `${month}/${day}/${year}`;

createVoteForm.onsubmit = function (event) {

    let fields_filled = false;
    let ops_same = false;
    let same_date = false;


    if(voteDeadlineSelect.value === currentDate) {
        same_date = true;
    }


    if(ownerInput.value.length === 0 || memberSelect2.checked === false || memberSelect.checked === false ||  voteDeadlineSelect.value.length === 0) {
        fields_filled = false;
    } else {
        fields_filled = true;
    }

    if(memberSelect.value === memberSelect2.value) {
        ops_same = true;
    } else {
        ops_same = false;
    }

    console.log(ops_same);

    if(ops_same === true || fields_filled == false || same_date == true) {
        event.preventDefault();

    }
}
