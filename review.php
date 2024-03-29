<!DOCTYPE html>
<html>
<head>
    <title>Diagnostic Review Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="stylez.css">
</head>
<body style="background-color: rgb(167, 226, 170);">
<header class="header">
    <a href="#" class="logo"><i class="fas fa-heartbeat"></i>arogya sanjivani.</a>
    
    
    <nav class="navbar">
      <a href="#review">review</a>
      <a href="index.html">home</a>
    
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>




</header>

    <!-- <h1>Write a Review</h1>
    <form id="reviewForm" action="submit_review.php" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="rating">Rating (1-5):</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required><br>

        <label for="review">Your Review:</label>
        <textarea id="review" name="review" rows="4" required></textarea><br>

        <button type="submit">Submit Review</button>
    </form> -->
    <section class="order" id="order" style="background-color: rgb(167, 226, 170);">
        <h1 class="heading"> <span>customer</span> review form</h1>
        <div class="row">
            <div class="image">
                <img src="brain chemistry.gif"
                    alt="">
            </div>
                <!-- <h1>write a review</h1> -->
            <form action="submit_review.php" method="POST">
                <div class="inputbox">
                    <input type="text" name="name" placeholder="your name">
                  
                </div>
                <div class="inputbox">
                  
                    <!-- <input type="text" name="foodname" placeholder="food name"> -->

                   

                    <input type="number" name="rating" placeholder="rating">

                </div>
                <textarea name="review" placeholder="Write your comments" id="" cols="30" rows="10"></textarea>
                <input type="submit" name="submit" value="submit" class="btn">
            </form>
        </div>

    </section>
    <!-- <div id="reviews"> -->




        <section class="speciality" id="speciality">
          <h1 class="heading">our <span> customer review</span></h1>
          <div class="box-container">
            <div class="box">
                <!-- <img class="image"
                    src="https://img.freepik.com/free-photo/front-view-tasty-meat-burger-with-cheese-salad-dark-background_140725-89597.jpg?w=740&t=st=1693200819~exp=1693201419~hmac=33bff449c2b0c6269c086215baf607254191115a21d09774b1c6da4111eb2ed1"
                    alt=""> -->
                <div class="content">

                   
                    <h6>
                    <?php
        // Connect to your MySQL database
        $host = 'localhost';
        $db_user = "root";
        $db_pass = "";
        $db_name ="review" ;

        $conn = mysqli_connect('localhost','root','','review');

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch and display existing reviews
        $sql = "SELECT name, rating, review FROM reviews ORDER BY created_at DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='review'>";
                echo "<strong>" . htmlspecialchars($row['name']) . "</strong> - Rating: " . $row['rating'] . "<br>";
               
                echo htmlspecialchars($row['review']) . "<br>";
                echo "<br>";
                // echo "</div>";
            }
        } else {
            echo "No reviews yet. Be the first to write a review!";
        }

        mysqli_close($conn);
        ?>
                    </h6>
                </div>
            </div>
         </div>
     </section>
    <!-- </div> -->
</body>
</html>
