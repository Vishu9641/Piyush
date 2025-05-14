<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Restaurant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="paras1.css" />
    <link rel="stylesheet" href="style/style.css" />
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#food">Category</a></li>
                <li><a href="#food-menu">Menu</a></li>
                <li><a href="#testimonials">Testimonial</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><button type="reserve" name="reserve" onclick="myFunction();" class="button-92">RESERVE NOW</button>
                </li>

            </ul>
            <h1 class="logo">HUNGRY POINT</h1>
        </div>
    </nav>
    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">Eat Right Food</h1>
            <p>EAT HEALTHY, IT IS GOOD FOR OUR HEALTH.</p>
            <a href="#food-menu" class="btn btn-primary">Menu</a>
        </div>
    </section>

    <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About Us</p>
                <h2>We've been making healthy food last for 10 years</h2>
                <p>
                    THE FOUNDER OF THE RESTAURANT ARE A DYNAMIC DUO WHO SHARE A DEEP PASSION FOR FOOD AND HOSPITALITY
                    .THEYHAVE A WEALTH OF EXPERIENCED IN THE CULINARY WORLD AND SHARED VISION TO CREATE A DINING
                    ESTABLISHED THAT OFFERS NOT JUST GREAT FOOD, BUT ALSO A MEMORABLE EXPERIENCE FOR EVERY GUEST. THEIR
                    DEDICATION TO QUALITY, CREATIVITY, AND CUSTOMERS SATISFACTION DRIVES THE RESTAURANT's SUCCESS AND
                    SETS. IT APART FROM THE REST. THROUGH THEIR HARD WORK AND INNOVATIVE SPIRIT, THEY HAVE BROUGHT THEIR
                    DREAM OF A UNIQUE DINNING DESTINATION TO LIFE FOR ALL TO ENJOY.
                </p>
            </div>
            <div class="about-img">
                <img src="https://i.postimg.cc/mgpwzmx9/about-photo.jpg" alt="food" />
            </div>
        </div>
    </section>
    <section id="food">
        <h2>Types of food</h2>
        <div class="food-container container">
            <div class="food-type fruite">
                <div class="img-container">
                    <img src="https://i.postimg.cc/yxThVPXk/food1.jpg" alt="error" />
                    <div class="img-content">
                        <h3>fruite</h3>
                        <a href="https://en.wikipedia.org/wiki/Fruit" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="food-type vegetable">
                <div class="img-container">
                    <img src="https://i.postimg.cc/Nffm6Rkk/food2.jpg" alt="error" />
                    <div class="img-content">
                        <h3>vegetable</h3>
                        <a href="https://en.wikipedia.org/wiki/Vegetable" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="food-type grin">
                <div class="img-container">
                    <img src="https://i.postimg.cc/76ZwsPsd/food3.jpg" alt="error" />
                    <div class="img-content">
                        <h3>grin</h3>
                        <a href="https://en.wikipedia.org/wiki/Grain" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="food-menu">
        <h2 class="food-menu-heading">Food Menu</h2>
        <div class="food-menu-container container">
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="PHOTOS/White-Sauce-Paste-2-.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">WHITE SAUSE PASTA</h2>

                    <p class="food-price">Price: &#8377; 130</p>
                </div>
            </div>

            <div class="food-menu-item">
                <div class="food-img">
                    <img src="PHOTOS/MALAI CHAP.jpg" alt="error" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">MALAI CHAPP</h2>

                    <p class="food-price">Price: &#8377; 150</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="PHOTOS/veg-grilled-sandwich-recipe.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">GRILLED SANDWICH</h2>

                    <p class="food-price">Price: &#8377; 250</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="PHOTOS/MASALA FRIES.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">MASALA FRIES</h2>

                    <p class="food-price">Price: &#8377; 100</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="PHOTOS/WRAPP.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">ALLO TIKKI WRAP</h2>
                    <p class="food-price">Price: &#8377; 90</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="PHOTOS/BURGER.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">BURGER</h2>
                    <p class="food-price">Price: &#8377; 50</p>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials">
        <h2 class="testimonial-title">What Our Customers Say</h2>
        <div class="testimonial-container container">
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="PHOTOS/RAM LAL.jpg" alt="" />
                        <p class="customer-name">RAM LAL SINGH RAWAT</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    VERY TASTY FOOD. GOOD SETTING AND G8 ENVIRONMENT</p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="PHOTOS/GIRL.jpg" alt="" />
                        <p class="customer-name">ALISHA</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    I HAVE BEEN HERE MY WITH SIBLINGS AND ENJOYED FOOD. THE SERVICE IS EXCEPTIONAL.</p>
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="PHOTOS/BOY.jpg" alt="" />
                        <p class="customer-name">SAMEER KHAN</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    NYC place+Good and hygienic Food.Must visit
                </p>

            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact-container container">
            <div class="contact-img">
                <img src="https://i.postimg.cc/1XvYM67V/restraunt2.jpg" alt="" />
            </div>

            <div class="form-container">
                <h2>Contact Us</h2>
                <form id="form" action="userinfo.php" method="post">
                    <input type="text" id="usernames" name="user" placeholder="Your Name" autocomplete="off"
                        onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))"
                        class="form-control" required minlength="3" maxlength="15">

                    <input type="text" name="email" id="email" placeholder="E-Mail" autocomplete="off" onkeyup="ValidateEmail();"
                        class="form-control" required><span id="lblError" style="color: red"></span>
                    <input type="text" name="mobile" id="mobile" autocomplete="off" class="form-control"
                        placeholder="Phone number" onkeypress="return event.charCode>=48 && event.charCode<=57"
                        required>

                    <textarea class="form-control" name="comment" placeholder="Type Your Message" required></textarea>

                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    
                </form>
            </div>

        </div>
    </section>
    <footer id="footer">
        <h2>Restraunt &copy; all rights reserved</h2>
    </footer>
    <!-- .................../ JS Code for smooth scrolling /...................... -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="javascipt/sweet.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['status']; ?>",
                //  text: "You clicked the button!",
                icon: "<?php echo $_SESSION['status_code']; ?>",
                button: "Ok, Done",
            });
        </script>
        <?php
        unset($_SESSION["status"]);
    }
    ?>

    <!-- Including app.js jQuery Script -->
    <script src="javascript/FormValidation.js"></script>
    <script>
        function myFunction() {
            window.location = "reserve.php";
        }
    </script>
    <script type="text/javascript">
    function ValidateEmail() {
        var email = document.getElementById("email").value;
        var lblError = document.getElementById("lblError");
        lblError.innerHTML = "";
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!expr.test(email)) {
            lblError.innerHTML = "Invalid email address.";
        }
    }
</script>

</body>

</html>