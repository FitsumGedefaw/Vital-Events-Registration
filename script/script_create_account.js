const form = document.getElementById("myForm");
const errorDiv = document.getElementById("error-div");

let error_messages = [];

function validate_image() {
  const image = document.getElementById("image");
  if (image.value == '') {
    error_messages.push("Please provide image!");
    image.focus();
    return;
  }
}
function validate_name() {
  const name = document.getElementById("name");
  let patt = /[0-9]+/;
  if (name.value == "") {
    error_messages.push("Please Provide Your Name!");
    name.focus();
    return;
  }
  if (name.value.length < 5) {
    error_messages.push("Name Must be Longer than 5 Charcters!");
    name.focus();
    return;
  }
  if (name.value.match(patt)) {
    error_messages.push("Name Can not Contain a Number!");
    name.focus();
    return;
  }
}

function validate_f_name() {
  const f_name = document.getElementById("f_name");
  let patt = /[0-9]+/;
  if (f_name.value == "") {
    error_messages.push("Please Provide Your Father Name!");
    f_name.focus();
    return;
  }
  if (f_name.value.length < 5) {
    error_messages.push("Father Name Must be Longer than 5 Charcters!");
    f_name.focus();
    return;
  }
  if (f_name.value.match(patt)) {
    error_messages.push("Father Name Can not Contain a Number!");
    f_name.focus();
    return;
  }
}

function validate_g_name() {
  const g_name = document.getElementById("g_name");
  let patt = /[0-9]+/;
  if (g_name.value == "") {
    error_messages.push("Please Provide Your Grand Father Name!");
    g_name.focus();
    return;
  }
  if (g_name.value.length < 5) {
    error_messages.push("Grand Father Name Must be Longer than 5 Charcters!");
    g_name.focus();
    return;
  }
  if (g_name.value.match(patt)) {
    error_messages.push("Grand Father Name Can not Contain a Number!");
    g_name.focus();
    return;
  }
}

function validate_ssn() {
  const ssn = document.getElementById("ssn");
  if (ssn.value == "") {
    error_messages.push("Please Provide Your SSN!");
    ssn.focus();
    return;
  }
  if (ssn.value.length < 5 || ssn.value.length > 20) {
    error_messages.push("SSN Must Between 5 and 20 Characters!");
    ssn.focus();
    return;
  }
}

function validate_birth_date() {
  const birth_date = document.getElementById("birth_date");
  if (birth_date.value == "") {
    error_messages.push("Please provide your birth date!");
    birth_date.focus();
    return;
  }
}

function validate_birth_place() {
  const birth_place = document.getElementById("birth_place");
  if (birth_place.value == "") {
    error_messages.push("Please provide your birth place!");
    birth_place.focus();
    return;
  }
}

function validate_email() {
  let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  const email = document.getElementById("email");
  if (email.value == "") {
    error_messages.push("Please provide your email!");
    email.focus();
    return;
  }
  if (!email.value.match(mailformat)) {
    error_messages.push("Invalid email format!");
    email.focus();
    return;
  }
}

function validate_password() {
  const password = document.getElementById("pass");
  if (password.value == "") {
    error_messages.push("Please provide your password!");
    password.focus();
    return;
  }
  if (password.value.length < 7 || password.value.length > 20) {
    error_messages.push("Password must between seven and twenty characters!");
    password.focus();
    return;
  }
}

function validate_sex() {
  const male = document.getElementById("male");
  const female = document.getElementById("female");
  if (!(male.checked || female.checked)) {
    error_messages.push("Please select your sex!");
  }
}

form.addEventListener("submit", function (event) {
  validate_image();
  validate_name();
  validate_f_name();
  validate_g_name();
  validate_ssn();
  validate_birth_date();
  validate_birth_place();
  validate_email();
  validate_password();
  validate_sex();
  if (error_messages.length > 0) {
    event.preventDefault();
    errorDiv.style.color = "red";
    errorDiv.style.width = "fit-content";
    errorDiv.style.padding = ".2em 1.5em .2em 1em";
    errorDiv.style.borderRadius = ".3em";
    errorDiv.style.marginBottom = "10px";
    errorDiv.style.marginTop = "10px";
    errorDiv.style.outline = "1px solid rgb(222, 129, 22)";
    errorDiv.style.height = "2.5em";
    errorDiv.style.boxShadow = " 2px 2px 5px red,-2px -2px 6px red";
    errorDiv.style.display = "flex";
    errorDiv.style.alignItems = "center";
    errorDiv.style.justifyContent = "center";
    errorDiv.style.fontWeight = "bold";
    errorDiv.innerText = error_messages[0];
    error_messages = [];
  }
});
