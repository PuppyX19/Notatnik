const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');
const loginInput = form.querySelector('input[name="login"]');
const confirmedPasswordInput = form.querySelector('input[name="repeat-password"]');



function arePasswordsSame(password, confirmedPassword) {
    return password === confirmedPassword;
}
function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email) && email.length <= 100;
}
function markValidation(element, condition) {
    !condition ? element.classList.add('not-valid') : element.classList.remove('not-valid');
}
function validateEmail() {
    setTimeout(function () {
            markValidation(emailInput, isEmail(emailInput.value));
        },
        1000
    );
}
function validateLogin() {
    const condition = loginInput.value.length <= 100;
    markValidation(loginInput, condition);
}

function validatePassword() {
    setTimeout(function () {
            const condition = arePasswordsSame(
                confirmedPasswordInput.previousElementSibling.value,
                confirmedPasswordInput.value
            );
            markValidation(confirmedPasswordInput, condition);
        },
        1000
    );
}
emailInput.addEventListener('keyup', validateEmail);
loginInput.addEventListener('keyup', validateLogin);
confirmedPasswordInput.addEventListener('keyup', validatePassword);