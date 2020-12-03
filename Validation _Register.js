

const Username = document.getElementById('Username');
var form = document.getElementById('form');
const Mno = document.getElementById('PhNo');
const Email = document.getElementById('Email')
const Password = document.getElementById('Password');
const ConPassword = document.getElementById('ConPassword');
const submit = document.getElementById('submit');

form.addEventListener('submit', (e) => {

    checkInput();
    e.preventDefault();

});

function checkInput() {

    const UnameValue = Username.value.trim();
    const NumberValue = Mno.value.trim();
    const EmailValue = Email.value.trim();
    const PasswordValue = Password.value.trim();
    const conformPassValue = ConPassword.value.trim();
    var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;

    // Checking Validation
    if (UnameValue === '') {

        // Error msg class
        Error(Username, '*Username cannot be Blank');

    }
    else {
        //Success Msg class
        Success(Username);
    }


    //For Mobile Number
    if ((NumberValue.toString().length) === 10) {
        Success(PhNo);


    }
    else {
        Error(PhNo, '*Mobile is invalid');
    }

    // Password validation
    if (PasswordValue != conformPassValue) {
        Error(ConPassword, "Password Dosn't Match ");
        Error(Password, " ");
    }
    else {
        Success(ConPassword);
        Success(Password);


    }
    //For Email
    if (EmailValue === '') {

        // Error msg class
        Error(Email, '*Email is Required');

    }
    else if (!EmailValid(EmailValue)) {
        Error(Email, '*Email is not Valid');
    } else {
        //Success Msg class
        Success(Email);
    }

}

function Error(input, message) {
    const Control = input.parentElement;
    const small = Control.querySelector('small');
    // add Error message inside small
    small.innerText = message;
    // add error class
    Control.classList.add('Error')
}
function Success(input) {
    const Control = input.parentElement;
    Control.classList.add('Sucess')
}

function EmailValid(email) {
    return /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/.test(email);

}

