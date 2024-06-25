<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traveldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password
    $sql = "SELECT * FROM signdb WHERE travmail='$username' AND trav_pass='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Username and password are correct, set session variables and redirect to home page
        $_SESSION['user'] = $username;
        header("Location: home-two.php"); // Change this to the actual home page URL
        exit();
    } else {
        // Invalid username or password, redirect back to login page
        header("Location: login.php");
        exit();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Home </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/templatemo-main.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style-two.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

<a href="logout.php">
<button class="Btn" style=" 
    background-color: transparent;
    float: right;
    margin: 30px;">


  <div class="sign">
    <svg viewBox="0 0 512 512">
      <path
        d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
      ></path>
    </svg>
  </div>

  <div class="text">Logout</div>


</button>

</a>



  
    <div class="fixed-side-navbar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span>Intro</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#services"><span>Information</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio"><span>Resorts</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#our-story"><span>Review</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact-us"><span>Contact Us</span></a></li>
        </ul>
    </div>

    <div class="parallax-content baner-content" id="home">
        <div class="boxOne">

        </div>
        <div class="container">
            <div class="first-content">
                <h1>SiargaoEscape</h1>
                <span><em>Travel the Philippines with us </em</span>
                <div class="primary-button">
                    <a href="#services">Discover More</a>
                </div>
            </div>
        </div>
    </div>


    <div class="service-content" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-text">
                        <h4>More About SiargaoEscape</h4>
                        <div class="line-dec"></div>
                        <p>Travelinks is featuring the wonderfull Siargao Island. Siargao Island is indeed a wonderful destination known for its pristine beaches, crystal-clear waters, and excellent surfing spots. In addition to surfing, visitors can explore the natural beauty of the island, including the stunning rock pools of Magpupungko, the picturesque palm tree-lined roads, and the vibrant local culture. It's also a great place to enjoy delicious seafood and immerse yourself in the laid-back island lifestyle.</p>
                        <ul>
                            <li>-  Cloud 9 Surfing </li>
                            <li>-  Magpopongko White Beach</li>
                            <li>-  Sohoton Cove</li>
                            <li>-  Daku Island</li>
                        </ul>
                        <div class="primary-button">
                            <a href="#portfolio">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Cloud 9 Surfing</h4>
                                <div class="line-dec"></div>
                                <p>Cloud 9 is one of the best surf spots in the world. This is an incredible wave touched by the Pacific Ocean's swell and winds.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4> Magpopongko White Beach</h4>
                                <div class="line-dec"></div>
                                <p> Magpupungko rock pools are natural tidal pools.This frames dozens of natural jewel-toned saltwater pools scattered unevenly.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Sohoton Cove</h4>
                                <div class="line-dec"></div>
                                <p>Sohoton Cove is a group of interconnected natural pools. A handful of hidden gems, such as the Tiktikan Lagoon and the Jellyfish Sanctuary.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Daku Island</h4>
                                <div class="line-dec"></div>
                                <p></p>Daku is a Visayan term for “Big”. It is very known for its white powdery sand and crystal beach waters. You can swim, do snorkeling and have a stroll inside the community to feel the island vibe and to know a little bit of Siargaonon culture.
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    
  
    <div class="parallax-content projects-content" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonials-item">
                            <a href="image4.jpg" data-lightbox="image-1" style="display: block; height: 250px;"><img src="img/image4.jpg" alt="" style="height: 250px;"></a>

                                <div class="text-content">
                                    <h4>Guyam island</h4>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/image5.jpg" data-lightbox="image-1"style="display: block; height: 250px;"><img src="img/image5.jpg" alt="" style="height: 250px;"></a>
                                <div class="text-content">
                                    <h4>Cloud 9 Surfing</h4>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/image6.jpg" data-lightbox="image-1" style="display: block; height: 250px;"><img src="img/image6.jpg" alt=""style="height: 250px;"></a>
                                <div class="text-content">
                                    <h4>Magpopongko White Beach</h4>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/image7.jpg" data-lightbox="image-1"style="display: block; height: 250px;"><img src="img/image7.jpg" alt="" style="height: 250px;"></a>
                                <div class="text-content">
                                    <h4>Sohoton Cove</h4>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/image8.jpg" data-lightbox="image-1"style="display: block; height: 250px;"><img src="img/image8.jpg" alt="" style="height: 250px;" ></a>
                                <div class="text-content">
                                    <h4>Sugba Lagoon</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/image9.jpg" data-lightbox="image-1" style="display: block; height: 250px;" ><img src="img/image9.jpg" alt="" style="height: 250px;"></a>
                                <div class="text-content">
                                    <h4>Tayangban Cave Pool</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/image10.jpg" data-lightbox="image-1"style="display: block; height: 250px;"><img src="img/image10.jpg" alt="" style="height: 250px;"></a>
                                <div class="text-content">
                                    <h4>Naked Island</h4>
                          
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/image11.jpg" data-lightbox="image-1" style="display: block; height: 250px;"><img src="img/image11.jpg" alt="" style="height: 250px;"></a>
                                <div class="text-content">
                                    <h4>Daku</h4>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tabs-content" id="our-story">
        <div class="container text-white py-4">
            <div class="comment-section">
                <h3 class="text-white">Comments</h3>
                <div id="commentsDisplay" class="text-dark p-3 rounded">
                </div>
                <form id="commentForm" class="mt-4">
                    <div class="form-group-name">
                        <label for="name" class="text-white-two">Name</label>
                        <input type="text" class="form-control-name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="comment" class="text-white-two">Comment</label>
                        <textarea class="form-control" id="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="    display: inline-block;
                        font-weight: 700;
                        color: #212529;
                        text-align: center;
                        vertical-align: middle;
                        -webkit-user-select: none;---
                        -moz-user-select: none;
                        -ms-user-select: none;
                        user-select: none;
                        background-color: #64CCC5;
                        border: 1px solid transparent;
                        padding: 0.405rem .95rem;
                        font-size: 1rem;
                        line-height: 1.5;
                        border-radius: .25rem;
                        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
                        display: flex;
                        flex-direction: row-reverse;
                        align-items: center;
                        justify-content: space-around;
                        align-content: flex-start;">Submit
                            <div class="group relative" >
                                
                                    <svg
                                    stroke-linejoin="round"
                                    stroke-linecap="round"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    height="24"
                                    width="24"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-8 hover:scale-125 duration-200 hover:stroke-blue-500"
                                    fill="none"
                                    >
                                    <path fill="none" d="M0 0h24v24H0z" stroke="none"></path>
                                    <path d="M8 9h8"></path>
                                    <path d="M8 13h6"></path>
                                    <path
                                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"
                                    ></path>
                                    </svg>
                                
                               
                            </div>
                    </button>
                </form>
            </div>
        </div>
    </div>


    <div class="parallax-content contact-content" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <div class="row">
                            <form id="contact" action="https://api.web3forms.com/submit" method="POST">
                                <div class="row">
                                   
                                    <div class="col-md-12">
                                      <fieldset>
                                      <input type="hidden" name="access_key" value="27616a76-428c-40e3-b163-06342d02c6ec">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Send Message</button>
                                      </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map">
                    <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d707805.6101807527!2d125.7762330530041!3d9.89301204306753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3304043652d9e9b3%3A0xd4c56a60c9a11b84!2sSiargao%20Island!5e0!3m2!1sen!2sph!4v1708996636394!5m2!1sen!2sph" width="490" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="primary-button">
                <a href="#home">Back To Top</a>
            </div>
           
            <p>Copyright &copy; 2024 Siargao Island</p>
        </div>
    </div>
</div>

    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            document.getElementById(cityName).style.display = "block";  
        }
    </script>

    <script>
        $(document).ready(function(){
         
          $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
    </script>
    <script>
        $('#commentForm').on('submit', function(e) {
            e.preventDefault();
            var name = $('#name').val();
            var comment = $('#comment').val();
            $.ajax({
                url: 'insert_comment.php',
                type: 'POST',
                data: {name: name, comment: comment},
                success: function(data) {
                    loadComments();
                    $('#commentForm')[0].reset();
                }
            });
        });

        function loadComments() {
            $.ajax({
                url: 'fetch_comments.php',
                type: 'GET',
                success: function(response) {
                    $('#commentsDisplay').html(response);
                }
            });
        }

        loadComments();
    </script>
    <script>
        function updateComment(id) {
            var updatedComment = prompt("Edit your comment:");
            if (updatedComment) {
                $.ajax({
                    url: 'update_comment.php',
                    type: 'POST',
                    data: {id: id, comment: updatedComment},
                    success: function(data) {
                        loadComments();
                    }
                });
            }
        }
    </script>

    <script>
        function deleteComment(id) {
            var confirmation = confirm("Are you sure you want to delete this comment?");
            if (confirmation) {
                $.ajax({
                    url: 'delete_comment.php',
                    type: 'POST',
                    data: {id: id},
                    success: function(data) {
                        loadComments();
                    }
                });
            }
        }
    </script>
</body>
</html>
