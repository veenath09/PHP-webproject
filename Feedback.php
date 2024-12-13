
<!DOCTYPE html>
<html>
    <head>
        <title>Feedbacks</title>
        <link rel="stylesheet" href="./stylesheets/Feedback.css">

    </head>

    <body>
    <?php require 'header.php' ?>
     <div class="feedbackdiv">
       
        
        <div class="container">
            <form action="processFeedback.php" method="post">
                <h1>Give your FEEDBACK</h1>
                

                <div class="id">
                    <input name="date" type="date" placeholder="Date">
                    <i class=" far fa-calendar-alt"></i>
                </div>

                <div class="id">
                    <input type="text"  name="text"placeholder="User Name">
                    <i class=" far fa-user"></i>
                </div>
                <div>
                    <textarea cols="20" rows="7"  name="comment"placeholder="Give your comments here....."></textarea>
                 </div>
                 <button type="submit" >Submit</button>

            
            </form>
        </div>
        </div>
        
    <?php require 'footer.php' ?>

    </body>
    
</html>