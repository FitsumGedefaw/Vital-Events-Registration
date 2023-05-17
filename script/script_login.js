const form = document.getElementById("myForm");
const errorDiv = document.getElementById("error-div");

let error_messages = [];

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


form.addEventListener("submit", function (event) {
  validate_email();
  validate_password();
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
