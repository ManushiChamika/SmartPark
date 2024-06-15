<?php 

    require 'config.php';

?>

<?php 

        $memberId="";
        $FeedBack="";
    if(isset($_POST['fsubmit'])){
        
        $memberId=$_POST['mID'];
        $FeedBack=$_POST['feedback'];

        $sql = "INSERT INTO feedbacktable(Feedbacks,MemberId)values('$FeedBack','$memberId')";
                    if($con->query($sql))
                    {
                        echo "Inserted successfully";
                    }
                    else
                    {
                        echo "Error:". $con->error;
                    }
        
        header('location:contact.php');


    }

?>

<html>
    <head>
        <title>SmartPark</title>
        <link rel="stylesheet" href="feedback.css">
    </head>

    <body style="background-image: url(background5.jpg);">



            <div class="wrapper">
                <h3>Write Your Feedback Shortly</h3>
                <form action="feedback.php" method="post">
                    
                    Member ID<input type="text" placeholder="E.g: T3456" name="mID" required>
                    <textarea name="feedback" cols="30" rows="5" placeholder="Your opinion..." required></textarea>
                    <div class="btn-group">
                        <button type="submit" class="btn submit" name="fsubmit">Submit</button>
                        <button class="btn cancel">Cancel</button>
                    </div>
                </form>
            </div>

       


    </body>
</html>