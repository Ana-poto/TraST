function checkPass() {
    var lowLetter = /[a-z]/
     var upperLetter=/[A-Z]/;
     var number = /[0-9]/;

    var pass=document.getElementById('pass');
    var c_pass=document.getElementById('c_pass');
    var message=  document.getElementById('validation_message');

    if (pass.value.length < 6) {
      message.style.color = 'red';
      message.innerHTML = 'Password must be at least 6 characters !';
    } 
    else if (!upperLetter.test(pass.value) || !lowLetter.test(pass.value) || !number.test(pass.value)) {
      message.style.color = 'red';
      message.innerHTML = 'Password must contain an uppercase and a number!';
    } 
    else {
        if (pass.value === c_pass.value) {
          message.style.color = '#7CFC00';
          message.innerHTML = 'GOOD TO GO!';
        } else {
          message.style.color = 'red';
          message.innerHTML = 'Passwords not matching!';
        }
    }
}
