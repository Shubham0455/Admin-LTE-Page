<?php
    include_once('conn.php');
    $qry = "SELECT * FROM `sub`"; 
    $res = mysqli_query($conn,$qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Science Course in Surat | Web Devlopment Course in Surat | CDMI</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/all.css">
    <link rel="shortcut icon" href="https://www.cdmi.in/assets/front/images/cdmi-favicon.ico" type="image/x-icon">
    <script src="js/all.js"></script>
</head>

<body>
    <div class="body-width">


        <div class="w-100">
            <div class="w-1170">
                <header>

                    <div class="w-33 none">

                        <!-- <div class="w-16"> -->
                        <div class="first">

                            <i class="fa-regular fa-envelope "></i><span>info@cdmi.in </span>
                        </div>
                        <!-- </div> -->
                        <!-- <div class="w-16"> -->
                        <div class="first display-none">

                            <i class="fa-solid fa-certificate "></i><span>Verify Certificate </span>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="w-33 centerss">
                        <h2>HAVE ANY QUESTION ? +91 90333 16003</h2>
                    </div>
                    <div class="last">
                        <div class="select">
                            <select name="select City Surat:" id="">
                                <option value="Select City:Surat">Select City:Surat <span class="paddings"><i
                                            class="ri-arrow-down-s-line"></span> </i>
                                </option>
                                <option value="Surat">Surat</option>
                                <option value="Navasari">Navasari</option>
                                <option value="Ahemdabad">Ahemdabad</option>
                            </select>
                            <div class="icons-alls">

                                <span class="icon"><i class="fa-brands fa-facebook fa-lg"></i></span>
                                <span class="icon"><i class="fa-brands fa-x-twitter fa-lg"></i></span>
                                <span class="icon"><i class="fa-brands fa-google-plus-g fa-lg"></i></span>
                                <span class="icon"><i class="fa-brands fa-linkedin fa-lg"></i></span>
                                <span class="icon"><i class="fa-brands fa-instagram fa-lg"></i></span>
                                <span class="icon"><i class="fa-brands fa-youtube fa-lg"></i></span>
                                <span class="icon"><i class="fa-brands fa-whatsapp fa-lg"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;

                                <button>
                                    <a href="login.php">Login</a>
                                </button>
                            </div>
                        </div>

                    </div>
                </header>
            </div>
        </div>
        <div class="nav-fixed">


            <div class="w-1170">
                <nav>
                    <div class="logo">
                        <img src="https://www.cdmi.in/assets/front/images/creative-logo-blue.svg" alt="">
                    </div>
                    <ul>
                        <li><a class="color-permanent" href="index.html">Home</a></li>
                        <li><a href="#">Courses <i class="ri-arrow-down-s-line"></i></a>
                            <div class="show">
                                <div class="menu">
                                            <?php
                                                while($row = mysqli_fetch_assoc($res))
                                                {
                                                    
                                                    $qry1 = "SELECT * FROM `add`";
                                                    $run = mysqli_query($conn,$qry1);
                                                    $row1 = mysqli_fetch_assoc($run);
                                                ?> 
                                                <div class="box">
                                                    <ul>
                                                    <h2><?php echo $row1['name'];?></h2>
                                                    <li><a href="#"><i class="fa-regular fa-circle-check fa-xl"></i>
                                                    <?php echo $row['sub_title'];?></a></li>
                                                    </ul>
                                                </div>
                                                <?php   
                                                }
                                            ?>
                                        
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Activities <i class="ri-arrow-down-s-line"></i></a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Know us <i class="ri-arrow-down-s-line"></i></a></li>
                        <li><a href="#">Get In Touch</a></li>
                        <li><a href="#">Student Zone <i class="ri-arrow-down-s-line"></i> </a></li>
                    </ul>
                    <div class="menu-icons">
                        <i class="ri-menu-line"></i>
                    </div>
                </nav>

            </div>
        </div>
        <div class="slide-image ">
            <img src="https://www.cdmi.in/sliders/Vacation.webp" alt="">
        </div>
        <div class="w-1170">
            <div class="top-text">
                <h2>CREATIVE COURSE</h2>
                <h1>Offered Courses</h1>
            </div>
            <div class="cards">

                <div class="card">
                    <div class="ori-card">
                        <img src="https://www.cdmi.in/courses@1x/data-science.webp" alt="">
                        <h2>Development Courses</h2>
                        <hr size="1" color="gray">
                        <div class="flex">
                            <div class="star">
                                <img src="star.png.png" alt="" width="">
                            </div>
                            <button>Know More...!</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="ori-card">
                        <img src="https://www.cdmi.in/courses@1x/_0057_4_VFX.webp" alt="">
                        <h2>Design Courses</h2>
                        <hr>
                        <div class="flex">
                            <div class="star">
                                <img src="star.png.png" alt="" width="">
                            </div>
                            <button>Know More...!</button>
                        </div>
                    </div>
                </div>



                <div class="card">
                    <div class="ori-card">
                        <img src="https://www.cdmi.in/courses@1x/laravel-training-institute.jpg" alt="">
                        <h2>Programming IT</h2>
                        <hr>
                        <div class="flex">
                            <div class="star">
                                <img src="star.png.png" alt="" width="">
                            </div>
                            <button>Know More...!</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="ori-card">
                        <img src="https://www.cdmi.in/courses@1x/_0003_unity.webp" alt="">
                        <h2>Trendy Courses</h2>
                        <hr>
                        <div class="flex">
                            <div class="star">
                                <img src="star.png.png" alt="" width="">
                            </div>
                            <button>Know More...!</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="ori-card">
                        <img src="https://www.cdmi.in/courses@1x/_0048_13_3Ds_Max.webp  " alt="">
                        <h2>Civil-Mech. Engineering</h2>
                        <hr>
                        <div class="flex">
                            <div class="star">
                                <img src="star.png.png" alt="" width="">
                            </div>
                            <button>Know More...!</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="ori-card">
                        <img src="https://www.cdmi.in/courses@1x/_0015_personality-development-training-institute.webp"
                            alt="">
                        <h2>Development Courses</h2>
                        <hr>
                        <div class="flex">
                            <div class="star">
                                <img src="star.png.png" alt="" width="">
                            </div>
                            <button>Know More...!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-last-buttons">
                <button style="cursor: pointer;">View All Courses <i class="fa-solid fa-arrow-right-long fa-lg"
                        style="color: #ffffff;"></i></button>
            </div>
        </div>
        <footer>
            <div class="w-1170">
                <div class="footer-flex">

                    <div class="footer-33">
                        <img src="https://www.cdmi.in/assets/front/images/creative-logo-white.svg" alt="">
                        <p>Creative Design and Multimedia Institute is leading computer training institute in Gujarat.
                            We offers government approved computer training courses in Gujarat.</p>
                        <h3>Follow Us On</h3>
                        <div class="socials">
                            <ul>
                                <li>
                                    <div class="icon"> <i class="fa-brands fa-facebook-f"></i></div>
                                </li>

                                <li>
                                    <div class="icon"> <i class="fa-brands fa-x-twitter"></i></div>
                                </li>

                                <li>
                                    <div class="icon"> <i class="fa-brands fa-google-plus-g"></i></div>
                                </li>

                                <li>
                                    <div class="icon"> <i class="fa-brands fa-instagram"></i></div>
                                </li>

                                <li>
                                    <div class="icon"> <i class="fa-brands fa-youtube"></i></div>
                                </li>

                                <li>
                                    <div class="icon"> <i class="fa-brands fa-whatsapp"></i></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="footer-second">
                        <h2>FEATURE LINKS</h2>
                        <div class="hands icon"><i class="fa-solid fa-hand-point-right "></i><span> About Us</span>
                        </div>
                        <div class="hands icon"><i class="fa-solid fa-hand-point-right "></i><span>Blogs </span></div>
                        <div class="hands icon"><i class="fa-solid fa-hand-point-right "></i><span>Join Us </span></div>
                        <div class="hands icon"><i class="fa-solid fa-hand-point-right "></i><span>Company Login </span>
                        </div>
                        <div class="hands icon"><i class="fa-solid fa-hand-point-right "></i><span> Certificate
                                Verification</span></div>
                    </div>

                    <div class="footer-third">
                        <h2>CONTACT US</h2>
                        <h3>HEAD OFFICE - YOGICHOWK</h3>
                        <div class="add">
                            401-404, 4th Floor, City Center Complex, Nr. Yogichowk, Varachha, Surat.
                        </div>
                        <div class="contact">
                            Mo : <span>+91 90333 16003</span>
                        </div>
                        <h3>OTHER BRANCHES</h3>
                        <div class="icon trans"><i class="fa-solid fa-building-columns"></i><span>Katargam</span></div>
                        <div class="icon trans"><i class="fa-solid fa-building-columns"></i><span>Mota Varachha</span>
                        </div>
                        <div class="icon trans"><i class="fa-solid fa-building-columns"></i><span> Adajan</span></div>
                        <div class="icon trans"><i class="fa-solid fa-building-columns"></i><span>Navsari</span></div>
                        <div class="icon trans"><i class="fa-solid fa-building-columns"></i><span>Dindoli</span></div>
                        <div class="icon trans"><i class="fa-solid fa-building-columns"></i><span> Sarthana</span></div>
                        <div class="icon trans"><i class="fa-solid fa-building-columns"></i><span> Ahmedabad </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="last-footer-mark">
            <div class="w-1170">
                <p>© 2024 All Rights Reserved by Creative Design & Multimedia Institute.</p>
            </div>
        </div>
        <div class="position-fixed">
            <div class="Massage">
                <i class="fa-solid fa-comment fa-2xl" style="color: #ffffff;"></i>
            </div>
            <div class="top-up">
                <i class="fa-solid fa-chevron-up" style="color: #ffffff;"></i>
            </div>
        </div>
    </div>
</body>

</html>