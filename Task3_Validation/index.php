<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MapVault Systems</title> <!--My website Title-->
    <link rel="shortcut icon" type="mv-icon" href="icons/mv3.png"> <!--link for title logo-->
    <link rel="stylesheet" href="styles.css">
    <!--Google fonts link for "Inter tight" font-->   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--Font Awesome icon CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AOS Library CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    
</head>
<body id="main-body">
    <div class="header">
        <div class="left-section">
            <img class="mv-icon" src="icons/mv_white.png">
        </div>
        <div class="right-section">
            <a href="#home-section" class="header-link">Home</a>
            <a href="#about-us-section" class="header-link">About Us</a>
            <a href="#our-team-section" class="header-link">Our Team</a>
            <a href="#contact-us-section" class="header-link">Contact Us</a>
            <i class="fa-solid fa-user" id="user-sign-in-button" onclick="showSignInPopup()"></i>
        </div>
    </div>

    <!--Body for my Home section-->
    <!--Home Section-->
    <section class="home-background" id="home-section" data-aos="fade-down" data-aos-delay="300">
        <h1 data-aos="fade-left" data-aos-delay="1000">Welcome to MapVault Systems</h1>
        <p data-aos="fade-right" data-aos-delay="1200">Discover the amazing features we offer to help you get started with ease.</p>
        <a href="#" class="explore-button" data-aos="fade-up" data-aos-delay="1500">Explore Now!</a>
    </section>

    <div id="notification" class="notification"></div>

    <!-- About us section -->
    <section class="about" id="about-us-section">
        <h2>Why Choose MapVault Systems?</h2>
        <p class="company-description" data-aos="fade-up" data-aos-delay="100">
            Choosing MapVault Systems means embracing a community-driven, open-source environment that prioritizes transparency, collaboration, and user empowerment. Unlike platforms with limited access or proprietary data, we offer an extensive range of open-access resources and premium options to meet diverse needs. Our commitment to high-quality, certified data ensures reliability and accuracy, backed by industry-standard certifications such as ISO 9001, ISO/IEC 27001, and OGC compliance. Additionally, our user-friendly interface, comprehensive tutorials, and interactive tools make data exploration and analysis accessible to everyone, from beginners to advanced users. Join us to benefit from a platform that not only provides data but also fosters a global community dedicated to sharing knowledge and driving innovation.
        </p>
        <div class="column_one" data-aos="fade-right" data-aos-delay="200">
            <h3>Welcome to MapVault Systems: </h3>
            <p>Embark on a journey with MapVault Systems, your open-source hub for country currencies, statistics, maps, 
                GIS, and remote sensing imagery. 
                    We are a community that thrives on transparency and collaboration, 
                    enabling users to share and explore data while enriching our collective knowledge. 
                    Dive into detailed maps, sophisticated statistics, and cutting-edge geographic data visualizations. 
                    For an enhanced experience, our premium packs offer exclusive insights and features. 
                    Join us to explore the world's data and uncover its stories.</p>
        </div>

        <div class="column_two" data-aos="fade-down" data-aos-delay="300">
            <h3>Empowering Knowledge: </h3>
            <p>MapVault Systems empowers researchers, educators, students, and curious minds with the tools 
                and knowledge to transform data into understanding. Our extensive library includes historical maps,
                real-time satellite imagery, and specialized datasets, supporting a wide range of interests and 
                projects. Discover the power of data and let it drive your research and exploration.</p>
        </div>

        <div class="column_three" data-aos="fade-left" data-aos-delay="300">
            <h3>Transparency and Collaboration: </h3>
        <p>Transparency and collaboration are the cornerstones of MapVault Systems.
                We invite users to contribute their insights and findings, creating a richer understanding for all.
                Access detailed maps, intricate statistics, and advanced geographic data visualizations with ease. 
                For those seeking more, our premium packs provide exclusive benefits, deeper insights, and enhanced functionalities, 
                all designed to elevate your data exploration experience.</p>
        </div>

        <div class="column_four" data-aos="fade-right" data-aos-delay="300">
            <h3>Expertise and Experience: </h3>
            <p>With over 22 years of experience, MapVault Systems has established itself as a leader in open-source data platforms. 
                Specializing in country currencies, statistics, maps, GIS, and remote sensing imagery, 
                our expertise lies in fostering transparency and collaboration within our global community. 
                We offer detailed maps, intricate statistics, and advanced geographic data visualization tools, complemented by 
                premium packs that unlock exclusive insights and features. Certified by ISO 9001, ISO/IEC 27001, and compliant with 
                OGC standards, our commitment to quality ensures reliable and accurate data for researchers, educators, and data 
                enthusiasts worldwide. Join us at MapVault Systems to explore the world's data, uncover its stories, and empower 
                innovation through shared knowledge.</p>
        </div>

        <div class="column_five" data-aos="fade-left" data-aos-delay="300">
            <h3>Certifications and Credentials: </h3>
            <p>At MapVault Systems, we are dedicated to maintaining the highest standards of data quality and user experience. We proudly hold certifications from leading industry organizations:</p>
            <ul>
                <li>ISO 9001: Quality Management Systems</li><br>
                <li>ISO/IEC 27001: Information Security Management</li><br>
                <li>OGC (Open Geospatial Consortium): Compliance for geospatial standards</li><br>
                <li>Esri: Authorized Business Partner and certified for GIS integration</li>
            </ul>
            <p>These certifications ensure our platform meets rigorous standards for quality, security, and interoperability, providing you with reliable and trustworthy data.</p>
        </div>

        <div class="column_six" data-aos="fade-down" data-aos-delay="300">
            <h3>Join Us: </h3>
            <p>Join MapVault Systems on this exciting journey of discovery and innovation. 
                Explore the world's data, uncover its stories, and harness the power of information 
                for a better tomorrow. Our platform is your gateway to endless possibilities, where data 
                meets discovery. Be a part of our community and contribute to a world of shared knowledge 
                and innovation.</p>
        </div>
    </section>

    <!-- This is the team section -->
    <section class="our-team" id="our-team-section">
        <h2>Our Team</h2>
        <div class="our-team-members">
            <div class="our-team-member" data-aos="fade-left" data-aos-delay="500">
                <div class="pic1"></div>
                <div class="info">
                    <p><strong>Luna Rose</strong></p>
                    <p>"As the Chief Financial Officer (CFO), I oversee financial strategy and ensure fiscal responsibility to drive
                        our company's growth and success. My role focuses on optimizing financial performance and 
                    fostering sustainable financial health across all operations."</p>
            </div>
            </div>
            <div class="our-team-member" data-aos="fade-up" data-aos-delay="200">
                <div class="pic2"></div>
                <div class="info">
                    <p><strong>Manish SkyWalker</strong></p>
                    <p>"
                        As the Chief Executive Officer (CEO), I lead our company with a strategic vision, fostering growth and innovation.
                        Guiding our team towards excellence, I ensure we exceed expectations and drive impactful results.
                        Together, we pioneer new opportunities and set benchmarks in our industry."</p>
                </div>
            </div>
            <div class="our-team-member" data-aos="fade-right" data-aos-delay="500">
                <div class="pic3"></div>
                <div class="info">
                    <p><strong>Michael Anderson</strong></p>
                    <p>As the Chief Operations Officer (COO), I oversee operational strategy and ensure seamless execution to drive organizational success
                        and efficiency. My focus is on optimizing processes and fostering a culture of operational excellence within our company.</p>
                </div>
            </div>
        </div>
    </section>

<!-- This is the contact section -->
<section class="contact" id="contact-us-section">
    <div class="contact-us-section" id="contact-us-div" data-aos="fade-up" data-aos-delay="300">
        <div class="contact-us-content">
            <img class="contact-us-img" src="icons/contactus_circle.png" alt="about-us-img" data-aos="zoom-in" data-aos-delay="400">
            <div class="business-info" data-aos="fade-left" data-aos-delay="500">
                <i class="fa-solid fa-envelope"></i><i class="business-data"> E-Mail: <a class="company-links" type="email" href="mailto:#">Send E-mail</a></i>
                <br><br>
                <i class="fa-solid fa-phone"></i><i class="business-data"> Contact: <a class="company-links" type="phone" href="tel:#">Call Now</a></i>
                <br><br>
                <i class="fa-brands fa-linkedin"></i><i class="business-data"> LinkedIn: <a class="company-links" type="LinkedIn" href="#">View Profile</a></i>
            </div>      
        </div>
        <div class="customer-info" data-aos="fade-up" data-aos-delay="700">

        <div class="customer-info" data-aos="fade-up" data-aos-delay="700">
    <form id="contactForm" action="submitForm.php" method="POST" onsubmit="return validateForm()">
        <label class="cust-text-label" for="c-name">Name : </label>
        <br>
        <input class="cust-text" type="text" size="75" id="c-name" name="name" placeholder="Enter Your Name" required>
        <br>
        <br>
        <label class="cust-text-label" for="c-mobile-num">Mobile No.: </label>
        <br>
        <input class="cust-text" type="tel" size="75" id="c-mobile-num" name="mobile" placeholder="Enter your Mobile Number" required pattern="[0-9]{10}">
        <br>
        <br>
        <label class="cust-text-label" for="c-email">E-Mail : </label>
        <br>
        <input class="cust-text" type="email" size="75" id="c-email" name="email" placeholder="Name@example.com" required>
        <br>
        <br>
        <label class="cust-text-label" for="c-query">Feedback / Query : </label>
        <br>
        <textarea id="c-query" name="query" placeholder="Any feedbacks/Queries" style="height:200px" required></textarea>
        <br><br>
        <button class="customer-info-submit-button" type="submit">Submit</button>
    </form>
</div>
</div>
</section>


    <div class="footer"> <!--The footer section-->
        <div class="footer-company-links">
            <a href="#home-section" class="top"><i class="fa-solid fa-arrow-up"></i> To the Top</a>
            <div class="icons">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-snapchat"></i>
                <i class="fa-brands fa-pinterest"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fa-brands fa-linkedin-in"></i>
                <i class="fa-brands fa-threads"></i>
                <i class="fa-brands fa-twitch"></i>
            </div>
        <div class="footer-logo-section"> <!--Footer-logo Section-->
            <img class="non-prof-logo" src="icons/Non-prof.svg" alt="non-Profit-Organization">
            <img class="open-src-logo" src="icons/opensource.svg" alt="open-source">
        </div>
        <div class="footer-links"><!--Header-Right Section-link section-->
            <a href="#" class="footer-link">Terms</a>
            <a href="#" class="footer-link">Privacy</a>
            <a href="#contact-us-div" class="footer-link">Contact</a>
            <a href="#" class="footer-link">Map Vault © 2024</a>
        </div>
        <p> 2024 Map vault systems. All rights reserved.</p>
    </div>  

<!-- AOS Library JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>


    <script src="script.js"></script>

    <!-- ***************************** SIGNIN-SIGNUP MODAL POPUP SECTION ***************************** -->
<!-- Sign-in Modal -->
<div id="signinModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('signinModal')">&times;</span>
        <h2>Sign In</h2>
        <form class="sign-in-up-form" action="register.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required><br>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <button type="submit" name="signIn">Sign In</button>

            <p class="or">
                -------------------- or --------------------
            </p>
            <div class="signin-links">
                <i class="fa-brands fa-google fa-2x"></i>
                <i class="fa-brands fa-linkedin fa-2x"></i>
                <i class="fa-brands fa-facebook fa-2x"></i>
            </div>
            <br>
            <p>Don't have an account? <a onclick="showSignUpPopup()" class="Register-anchor">Register</a></p>
        </form>
    </div>
</div>

<!-- Sign-up Modal -->
<div id="signupModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('signupModal')">&times;</span>
        <h2>Register</h2>
        <form action="register.php" class="sign-in-up-form" method="POST">
            <label for="name">Name</label>
            <input type="name" id="name" name="name" required><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required><br>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br>
            
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required><br>
            <button type="submit" name="signUp">Sign Up</button>
            
            <p class="or">
                -------------------- or --------------------
            </p>
            <div class="signin-links">
                <i class="fa-brands fa-google fa-2x"></i>
                <i class="fa-brands fa-linkedin fa-2x"></i>
                <i class="fa-brands fa-facebook fa-2x"></i>
            </div>
            <br>
            <p>Already have an account? <a onclick="showSignInPopup()" class="Register-anchor">Sign In</a></p>
        </form>
    </div>
</div>

</body>
</html>

