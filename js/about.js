let slideIndex = 0;

        function showTestimonials() {
            const testimonials = document.querySelectorAll('.testimonial-item');
            if (slideIndex >= testimonials.length) {
                slideIndex = 0;
            }
            if (slideIndex < 0) {
                slideIndex = testimonials.length - 1;
            }
            testimonials.forEach((testimonial) => {
                testimonial.style.display = 'none';
            });
            testimonials[slideIndex].style.display = 'block';
        }

        function nextTestimonial() {
            slideIndex++;
            showTestimonials();
        }

        function prevTestimonial() {
            slideIndex--;
            showTestimonials();
        }

        
        showTestimonials();

        document.addEventListener("DOMContentLoaded", function() {
            
            const joinTeamButton = document.querySelector(".join-team");
            
           
            joinTeamButton.addEventListener("click", function(event) {
                
                window.location.href = "home.php";
               
            });

            const joinPlatformButton = document.querySelector(".join-platform");

            joinPlatformButton.addEventListener("click", function(event) {
                window.location.href = "signin.php";
            });
        });