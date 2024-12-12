function validateForm() {
    var firstName = document.getElementById("Fname").value;
    var lastName = document.getElementById("Lname").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var message = document.getElementById("message").value;
    var privacy = document.getElementById("privacy").checked;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (firstName == "" || lastName == "" || email == "" || mobile == "" || message == "" || !privacy) {
        alert("All fields are required and privacy policy must be agreed to.");
        return false;
    }

    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    return true;
}
