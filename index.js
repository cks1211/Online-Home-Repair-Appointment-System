function validatePassword() {
    let div = document.querySelector('div.password');
    let password = document.querySelector('input#password.form-control');
    let confirm = document.querySelector('input#confirm-password.form-control');
    console.log(password.value);
    console.log(confirm.value);
    if (password.value != confirm.value) {
        div.classList.add('is-invalid');
        password.classList.add('is-invalid');
        confirm.classList.add('is-invalid');
    } else {
        div.classList.remove('is-invalid');
        password.classList.remove('is-invalid');
        confirm.classList.remove('is-invalid');
    }
}

function validateEmail() {
    let email = document.querySelector('input.form-control.email');
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (! re.test(email.value.toLowerCase())) {
        email.classList.add('is-invalid');
    } else {
        email.classList.remove('is-invalid');
    }
}

function validateDOB() {
    let dob = document.querySelector('input.form-control.DOB');
    let re = /^\d{4}-\d{2}-\d{2}$/;
    if (! re.test(dob.value.toLowerCase())) {
        dob.classList.add('is-invalid');
    } else {
        dob.classList.remove('is-invalid');
    }
}

function validateCNum() {
    let re = /^0\d{9,10}$/;
    let CNum = document.querySelector("input.form-control.CNum")
    if (! re.test(CNum.value.toLowerCase())) {
        CNum.classList.add('is-invalid');
    } else {
        CNum.classList.remove('is-invalid');
    }
}
