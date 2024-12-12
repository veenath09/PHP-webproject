document.addEventListener('DOMContentLoaded', function() {
    const signUpForm = document.querySelector('.signup_form form');

    signUpForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const firstName = signUpForm.querySelector('input[name="fname"]').value.trim();
        const lastName = signUpForm.querySelector('input[name="lname"]').value.trim();
        const email = signUpForm.querySelector('input[name="email"]').value.trim();
        const password = signUpForm.querySelector('input[name="password"]').value.trim();
        const confirmPassword = signUpForm.querySelector('input[name="cpassword"]').value.trim();
        const checkBox = signUpForm.querySelector('#checkbox').checked;

        // Validation
        const errorMessages = [];

        if (!firstName || !lastName || !email || !password || !confirmPassword) {
            errorMessages.push('All fields are required.');
        }

        if (password !== confirmPassword) {
            errorMessages.push('Password and confirm password do not match.');
        }

        if (!checkBox) {
            errorMessages.push('Please agree to the terms and conditions.');
        }

        if (errorMessages.length > 0) {
            // Display error messages
            alert(errorMessages.join('\n'));
        } else {
            // Submit the form
            signUpForm.submit();
        }
    });
});
