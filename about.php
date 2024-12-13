


<?php 

    require 'config.php';

    $sql = "SELECT * FROM feedback";
    $result = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About us</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="./stylesheets/about.css">
    </head>
    <body>
        <?php require 'header.php' ?>
        <div class="heading">
            <h2>About Us</h2>
        </div>
        <div class="container">
            <div class="flex-container">
                <div class="flex-item">
                    <h2>Who we are</h2>
                    <p>We are a fast growing startup that was founded in 2013. We have 200 Tripaneers working from our office in Amsterdam and around the world. We’re an inquisitive team of creative problem solvers, tech wizards, and passionate travellers. We’re proud to be leading the charge in bringing the experience travel industry online.</p>
                    <button href="home.php" class=" btn join-team">Explore</button>
                </div>
                <div class="flex-item">
                    <h2>What drives us</h2>
                    <p>We believe that travel can be a positive influence in personal and community growth. The passion to bring together travelers and organizers in new and meaningful ways drive us to innovate. We support the travel industry, and our 7 000+ organizers grow with us. Through this commitment to the travelers everywhere, we consistently provide high-quality content, a superior user experience, and exceptional customer care. We offer you the security, efficiency, and peace-of-mind needed when booking unforgettable holidays. Each travel experience is unique, and each individual involved in creating that experience is unique. We embrace this diversity.</p>
                </div>
                <div class="flex-item">
                    <h2>Collaborate with us</h2>
                    <p>Join us! We’d love for you to be one of our trip organizers or marketing affiliates. Whether you’re a major online travel agent, blogger, or a small tour organizer, we can help you make revenue and build your client network. Our platform is connected to many other businesses, and together we make travel more accessible, and more enriching, for more people.</p>
                    <a href="contact.php" ><button href="contact.php" class="btn join-platform">Get intouch with us</button></a>
                </div>
            </div>
            <section class="info">
                <!-- Legal information content goes here -->
                <div class="legal-info">
                    <h2>Legal Information</h2>
                    <p>Tripaneer is registered with the trade register of the Chamber of Commerce in The Hague, the Netherlands, under registration number 61843962. VAT registration number is NL854513322B01.</p>
                </div>
            </section>
            <section class="review" id="review">
                <h1 class="review-heading">Reviews</h1>
                <div class="border"></div>
                <div class="testimonial-slider">
                    <div class="testimonial-wrapper">


                        <div class="testimonial-item">
                            <img src="./images/profile1.jpg" alt="img">
                            <div class="testimonial-content">
                                <p class="paragraph">"Well organized and well priced. Everything went exactly as promised and our guides were knowledgeable and extremely accommodating."</p>
                                <h3>John Doe</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <?php
                        $count=0;
                        while($row = mysqli_fetch_assoc($result)){
                            if($count>6){
                                break;
                            }
                        ?>
                        <div class="testimonial-item">
                            <img src="./images/profile1.jpg" alt="img">
                            <div class="testimonial-content">
                                <p><?php echo $row['comment']?></p>
                                <h3><?php echo $row['name'] ?></h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <?php 
                               $count++ ;
                                } ?>
                        <div class="testimonial-item">
                            <img src="./images/profile1.jpg" alt="img">
                            <div class="testimonial-content">
                                <p>"The entire preparation of our visit was very well planned and the staff were great.I will recommend highly"</p>
                                <h3>Krish Stanly</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="profile4.jpg" alt="img">
                            <div class="testimonial-content">
                                <p>"Great service! Better than imagine! Highly recommend their service."</p>
                                <h3>Clair Nicolas</h3>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Add more testimonial items as needed -->
                    </div>
                    <button class="prev" onclick="prevTestimonial()">&#10094;</button>
                    <button class="next" onclick="nextTestimonial()">&#10095;</button>
                </div>
            </section>
        </div>
        <script src="./js/about.js"></script>

        <?php require 'footer.php' ?>
    </body>
</html>