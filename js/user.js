document.addEventListener("DOMContentLoaded", function() {
    const tabBtns = document.querySelectorAll(".tab");
    const tabContents = document.querySelectorAll(".tabshow");

    function showTab(panelIndex) {
        
        tabContents.forEach(function(content) {
            content.style.display = "none";
        });

        tabContents[panelIndex].style.display = "block";
    }

    showTab(0);

    tabBtns.forEach(function(tabBtn, index) {
        tabBtn.addEventListener("click", function() {
            
            tabBtns.forEach(function(btn) {
                btn.classList.remove("active");
            });

            this.classList.add("active");

            showTab(index);
        });
    });

    const updateButton = document.querySelector(".btn");
    updateButton.addEventListener("click", function() {
        const newPassword = document.getElementById("newPassword").value;
        const confirmPassword = document.getElementById("confirmPassword").value;

        if (newPassword === confirmPassword) {
            alert("Your password is reset successfully!");
        } else {
            alert("Error: New password and confirm password do not match!");
        }
    });
});
