const regexPass = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[a-zA-Z!#$%&? "])[a-zA-Z0-9!#$%&?]{8,20}$/;
const regexUsername = /^[a-zA-Z0-9_\.]{6,100}$/;
const regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const regexPhone = /([\+84|84|0]+(3|5|7|8|9|1[2|6|8|9]))+([0-9]{8})\b/;
$(window).ready(function() {
    $('#register-submit').click(function(e) {
        e.preventDefault();
        const user = document.querySelector('#user');
        const mail = document.querySelector('#mail');
        const phone = document.querySelector('#phone');
        const pass = document.querySelector('#pass');
        const repass = document.querySelector('#repass');

        const userVal = $('#user').val().trim();
        const mailVal = $('#mail').val().trim();
        const phoneVal = $('#phone').val().trim();
        const passVal = $('#pass').val().trim();
        const repassVal = $('#repass').val().trim();

        let check = true;

        if (userVal == '' || userVal == null) {
            handleError(user, 'Tên đăng nhập không được để trống!');
            check = false;
        } else if (!regexUsername.test(userVal)) {
            handleError(user, 'Tài khoản không được chứa ký tự đặc biệt và tối thiểu 6 ký tự!');
            check = false;
        } else {
            handleSuccess(user, 'Hợp lệ!');
        }
        // check email
        if (mailVal == '' || mailVal == null) {
            handleError(mail, 'Email không được để trống!');
            check = false;
        } else if (!regexEmail.test(mailVal)) {
            handleError(mail, 'Định dạng email không chính xác');
            check = false;
        } else {
            handleSuccess(mail, 'Hợp lệ!');
        }
        // check phone
        if (phoneVal == '' || phoneVal == null) {
            handleError(phone, 'Số điện không được để trống!');
            check = false;
        } else if (!regexPhone.test(phoneVal)) {
            handleError(phone, 'Định dạng số điện thoại không đúng');
            check = false;
        } else {
            handleSuccess(phone, 'Hợp lệ!');
        }
        // pass check
        if (passVal == '' || passVal == null) {
            handleError(pass, 'Mật khẩu không được để trống!');
            check = false;
        } else if (passVal.length < 8) {
            handleError(pass, 'Mật khẩu được ngắn hơn 8 ký tự ');
            check = false;
        } else if (!regexPass.test(passVal)) {
            handleError(pass, 'Mật khẩu tối thiểu tám ký tự, ít nhất một chữ hoa, một chữ thường và một số');
            check = false;
        } else {
            handleSuccess(pass, 'Hợp lệ!');
        }
        // check repass
        if (repassVal != passVal) {
            handleError(repass, 'Mật khẩu nhập lại không trùng với mật khẩu trước đó');
            check = false;
        }
        if (repassVal == '' || repassVal == null) {
            handleError(repass, 'Mật khẩu không được để trống!');
            check = false;
        } else {
            handleSuccess(repass, 'Hợp lệ!');
        }

        if (check == true) {
            $.ajax({
                url: '../funcHandle/register.php',
                type: 'POST',
                data: {
                    user: userVal,
                    mail: mailVal,
                    phone: phoneVal,
                    pass: passVal
                },
                success: function(data) {
                    $('body').append(data);
                    setTimeout(function() {
                        $('.result').addClass('result_active');
                        $('.isset').addClass('result_active');
                    }, 700);
                    setTimeout(function() {
                        $('.isset').css('opacity', '0');
                    }, 4000);
                }
            })
        }
    })
})

user.addEventListener('keyup', function() {
    handleFocusUser();
});
mail.addEventListener('keyup', function() {
    handleFocusEmail();
});
phone.addEventListener('keyup', function() {
    handleFocusPhone();
});
pass.addEventListener('keyup', function() {
    handleFocusPass();
});
repass.addEventListener('keyup', function() {
    handleFocusRepass();
});

// handle error null
function handleError(input, message) {

    const formControl = input.parentElement;
    const messageForm = formControl.querySelector('.messages');
    messageForm.innerHTML = message;

    messageForm.classList.add('errorMessage');
    messageForm.classList.remove('success');

}
// handle success
function handleSuccess(input, message) {
    const formControl = input.parentElement;
    const messageForm = formControl.querySelector('.messages');
    messageForm.innerHTML = message;

    messageForm.classList.add('success');
    messageForm.classList.remove('errorMessage');
}

// HANDLE ONBLUR-------------------

// onblur input name
function handleFocusUser() {
    const userVal = user.value.trim();
    if (userVal === '') {
        handleError(user, 'Tài khoản không được để trống');
    } else if (!regexUsername.test(userVal)) {
        handleError(user, 'Tài khoản không được chứa ký tự đặc biệt và tối thiểu 6 ký tự!');
    } else {
        handleSuccess(user, 'Hợp lệ!')
    }
}

// onblur input email
function handleFocusEmail() {
    const mailVal = mail.value.trim();
    if (mailVal == '') {
        handleError(mail, 'Email không được để trống!');
    } else if (!regexEmail.test(mailVal)) {
        handleError(mail, 'Định dạng email không chính xác');
    } else {
        handleSuccess(mail, 'Hợp lệ!');
    }
}
// onblur input phone
function handleFocusPhone() {
    const phoneVal = phone.value.trim();
    if (phoneVal === '') {
        handleError(phone, 'Số điện thoại không được để trống!');
    } else if (!regexPhone.test(phoneVal)) {
        handleError(phone, 'Định dạng số điện thoại không hợp lệ!');
    } else {
        handleSuccess(phone, 'Hợp lệ!');
    }
}
// onblur input pass
function handleFocusPass() {
    const passVal = pass.value.trim();
    if (passVal === '') {
        handleError(pass, 'Mật khẩu không được để trống!');
    } else if (passVal.length < 8) {
        handleError(pass, 'Mật khẩu được ngắn hơn 8 ký tự ');
    } else if (!regexPass.test(passVal)) {
        handleError(pass, 'Mật khẩu tối thiểu tám ký tự, ít nhất một chữ hoa, một chữ thường và một số và không chứa ký tự đặc biệt');
    } else {
        handleSuccess(pass, 'Hợp lệ!')
    }
}
// onblur input repass
function handleFocusRepass() {
    const repassVal = repass.value.trim();
    const passVal = pass.value.trim();

    if (repassVal != passVal) {
        handleError(repass, 'Mật khẩu nhập lại không trùng với mật khẩu trước đó');
    } else {
        handleSuccess(repass, 'Hợp lệ!');
    }
}