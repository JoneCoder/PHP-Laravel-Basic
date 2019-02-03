function passError() {
    var password = $('#pass_word').value;
    var reg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/;
    if(reg.test(password())){
        $('#password_error').text('');
    }
    else {
        $('#password_error').text("Your Password Must Contain At Least 8 Characters, 1 Number, 1 Capital Letter & 1 Lowercase Letter!");
    }
}
$('#pass_word').blur(function () {
    passError();
});