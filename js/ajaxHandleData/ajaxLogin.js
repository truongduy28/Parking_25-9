window.onload = function() {
    const regexUsername = /^[a-zA-Z0-9_\.]{6,100}$/;
    const regexPass = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[a-zA-Z!#$%&? "])[a-zA-Z0-9!#$%&?]{8,20}$/;
    const user = document.querySelector('#user');
    const pass = document.querySelector('#pass');
    const userVal = user.value.trim();
    const passVal = pass.value.trim();
    let check = true;
    if (userVal == '' || userVal == null) {
        handleError(user, 'Tên đăng nhập không được để trống!');
        check = false;
    } else if (!regexUsername.test(userVal)) {
        handleError(user, 'Tài khoản không được chứa ký tự đặc biệt và tối thiểu 6 ký tự!');
        check = false;
    } else {
        handleSuccess(user, 'Hợp lệ!');
        check = true;

    }
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
        check = true;
    }

    user.addEventListener('keyup', function() {
        handleFocusUser();
    });
    pass.addEventListener('keyup', function() {
        handleFocusPass();
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

    // onblur input name
    function handleFocusUser() {
        const userVal = user.value.trim();
        if (userVal === '') {
            handleError(user, 'Tài khoản không được để trống');
        } else if (!regexUsername.test(userVal)) {
            handleError(user, 'Tài khoản không được chứa ký tự đặc biệt và tối thiểu 6 ký tự!');
        } else {
            handleSuccess(user, 'Hợp lệ!');
            check = true;
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
            handleSuccess(pass, 'Hợp lệ!');
            check = true;
        }
    }
    const submit = document.querySelector('#submit');
    submit.addEventListener('click', function(e) {
        e.preventDefault();
        if (check == false) {
            console.log('Data form illegal');
        } else {
            const userVal = user.value.trim();
            const passVal = pass.value.trim();
            $.ajax({
                url: '../funcHandle/login.php',
                type: 'POST',
                data: {
                    user: userVal,
                    pass: passVal
                },
                success: function(response) {
                    console.log(response);
                    response = JSON.parse(response);
                    if (response.status == 0) { //Đăng nhập lỗi
                        alert(response.message);
                    } else { //Đăng nhập thành công
                        window.location.href = "index.php";
                    }
                }
            })
        }
    })
}