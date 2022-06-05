const section = document.querySelector("section")
const form = section.querySelector("form");
const titleInput = form.querySelector('input[name="title"]');
const textInput = form.querySelector('textarea[name="text"]');


function markValidation(element, condition) {
    !condition ? element.classList.add('not-valid') : element.classList.remove('not-valid');
}
function validateTitle() {
    const condition = titleInput.value.length <= 40;
    markValidation(titleInput, condition);
}
function validateText() {
    const condition = textInput.value.length <= 300;
    markValidation(textInput, condition);
}


textInput.addEventListener('keyup', validateText);
titleInput.addEventListener('keyup', validateTitle);