<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Gym in Bhagalpur | BroFitness.com</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="mob.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo-removebg-preview.png" alt="Bro Fitness">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Our Services</a></li>
            <li class="item"><a href="subscriptions.php">Subscriptions </a></li>
            <li class="item"><a href="#client-section">Our Equipment Partners</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
            <li class="item"><a href="#Workout-Builder">Workout Builder</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to Bro Health and Fitness CLub</h1>
        <p>Nothing tastes as good as being fit feels. </p>
        <p>The Best Health and Fitness club of Bhagalpur</p>
        <button class="btn">Join Us Now </button>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="img2.png" alt="">
                <h2 class="h-secondary center">Fitness Gym</h2>
                <p class="center">1 month subsription - Rs 1000<br>3 months subscription - Rs2500<br>
                6 months subscription - Rs4500<br>Annual Subscription - Rs 9000 
                <button class="btn">Tap here to know more</button>
                </p>
            </div>
            <div class="box">
                <img src="img3.png" alt="">
                <h2 class="h-secondary center">Zumba and Dance Classes</h2>
                <p class="center">Burn Your Calories and have a lot in fun in our zumba classes<br>
                (Included with Gym membership).Only Zumba Classes sessions packages starting Rs 700 per month 
                <button class="btn">Tap here to know more </button>
            </p>
            </div>
            <div class="box">
                <img src="img4.png" alt="">
                <h2 class="h-secondary center">Yoga Classes</h2>
                <p class="center">Get yourself enrolled at our yoga classes and get training from one of the best 
                    yoga faculty here at Bhagalpur.<br> Packages starting from Rs800 per month
                    <button class="btn">Tap here to know more </button>
                </p>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h1 class="h-primary center">Our Equipment Partners</h1>
        <div id="clients">
            <div class="client-item">
                <img src="part1.jpg" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="part2.jpg" alt="Our Client">
            </div>
          
            <div class="client-item">
                <img src="part3.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="part4.png" alt="Our Client">
            </div>
        </div>

    </section>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form id="form" action="BroFitness.php" method="post" onsubmit="validateForm()">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" required placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" required pattern="^[a-zA-Z0-9_.-]+@[a-zA-Z0-9]*[.-]+[a-z]*$" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="phone" id="phone" required pattern="^\d{10}$" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Enquiry </label>
                    <textarea name="message" id="message" cols="30" rows="7"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="SUBMIT">  
                </div
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.BroFitness.com. All rights reserved!
        </div>
    </footer>
    <script type="text/javascript" href="brofit.js"></script>
</body>
</html>
