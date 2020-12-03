const Username = document.getElementById('Uname');

const Password = document.getElementById('Password');
var form = document.getElementById('form');
var submit = document.getElementById('submit');


submit.addEventListener('click', (e) => {
    console.log("lo");
    validation();
    e.preventDefault();

});
function validation() {
    console.log("LOL");

    const UnameValue = Username.value.trim();
    const PassValue = Password.value.trim();
    // For User name
    if (UnameValue === '')
        Error(UnameValue, 'Username is Empty');
    else
        Success(Username);

}

function Error(input, message) {
    console.log("EEEE");

    const Control = input.parentElement;
    const small = Control.querySelector('small');
    // add Error message inside small
    small.innerText = message;
    // add error class
    Control.classList.add('Error')
}
function Success(input) {
    console.log("SSS");

    const Control = input.parentElement;
    Control.classList.add('Sucess')
}