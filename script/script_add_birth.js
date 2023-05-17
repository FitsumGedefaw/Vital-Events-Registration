const form = document.getElementById('myForm');
const errorDiv = document.getElementById('error-div');
let error_messages = [];

function validate_image() {
    const image = document.getElementById("image");
    if (image.value == '') {
      error_messages.push("Please provide image!");
      image.focus();
      return;
    }
  }

function validate_name(){
    const name = document.getElementById('name');
    let patt=/[0-9]+/;
	if( name.value == "" ){
            error_messages.push("Please provide your name!");
            name.focus() ;
            return;
         }
       if( name.value.length < 5 ){
            error_messages.push( "Name must be longer than 5 charcters!" );
            name.focus();
            return;
         }
    if( name.value.match(patt) ){
            error_messages.push( "Name cannot contain a number!" );
            name.focus();
            return;
         }	 
}

function validate_f_name(){
    const f_name = document.getElementById('f_name');
    let patt=/[0-9]+/;
	if( f_name.value == "" ){
            error_messages.push("Please provide your father name!");
            f_name.focus() ;
            return;
         }
       if( f_name.value.length < 5 ){
            error_messages.push( "Father name must be longer than 5 charcters!" );
            f_name.focus();
            return;
         }
    if( f_name.value.match(patt) ){
            error_messages.push( "Father name cannot contain a number!" );
            f_name.focus();
            return;
         }	 
}

function validate_g_name(){
    const g_name = document.getElementById('g_name');
    let patt=/[0-9]+/;
	if( g_name.value == "" ){
            error_messages.push("Please provide your grand father name!");
            g_name.focus() ;
            return;
         }
       if( g_name.value.length < 5 ){
            error_messages.push( "Grand father name Must be Longer than 5 charcters!" );
            g_name.focus();
            return;
         }
    if( g_name.value.match(patt) ){
            error_messages.push( "Grand father name cannot contain a number!" );
            g_name.focus();
            return;
         }	 
}

function validate_ssn(){
    const ssn = document.getElementById('ssn');
	if( ssn.value == "" ){
            error_messages.push("Please provide your ssn!");
            ssn.focus() ;
            return;
         }
       if( ssn.value.length < 5 ||  ssn.value.length > 20){
            error_messages.push( "ssn must between 5 and 20 characters!" );
            ssn.focus();
            return;
         }
}

function validate_birth_date(){
    const birth_date = document.getElementById('birth_date');
    if( birth_date.value == "" ){
        error_messages.push("Please provide your birth date!");
        birth_date.focus();
        return;
     }
}

function validate_birth_place(){
    const birth_place = document.getElementById('birth_place');
    if( birth_place.value == "" ){
        error_messages.push("Please provide your birth place!");
        birth_place.focus();
        return;
     }
}

function validate_sex(){
    const male = document.getElementById('male');
    const female = document.getElementById('female');
    if(!(male.checked || female.checked)){
        error_messages.push("Please select your sex!");
    }
}

form.addEventListener('submit', function(event){
    validate_image();
    validate_name();
    validate_f_name();
    validate_g_name();
    validate_ssn();
    validate_birth_date();
    validate_birth_place();
    validate_sex();
    if(error_messages.length > 0){
        event.preventDefault();
        errorDiv.style.color = "red";
        errorDiv.style.width = "fit-content";
        errorDiv.style.padding = ".2em 1.5em .2em 1em";
        errorDiv.style.borderRadius = ".3em";
        errorDiv.style.marginBottom = "15px";
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
})



