
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Page</title>
    <link rel="stylesheet" href="TCU.css">
    <script src="TCU.js"></script>
</head>
<body>
    <header>
    <div class="header-container">
            
            <div class="logo">
                <img src="TCU-logo.png" alt="School Logo">
                <span class="school-name">Taguig City University</span>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="<?php echo 'TCU.php'; ?>">Home</a></li>
                    <li><a href="<?php echo 'About.php'; ?>">About</a></li>
                    <li><a href="<?php echo 'News.php'; ?>">News</a></li>
                    <li><a href="https://www.facebook.com/TaguigCityUniversity" target="_blank">Admission</a></li>
                    <li><a href="<?php echo 'Academics.php'; ?>">Academics</a></li>
                </ul>
            </nav>
            <div class="right-container">
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button type="submit">🔍</button>
                </div>
                <div class="burger" onclick="toggleMenu()">
                 <div></div> 
                 <div></div>
                 <div></div>
                </div>
                
            </div>
    </header>

    <div class="side-menu">
        <span class="close-btn" onclick="toggleMenu()">&times;</span>
        <ul>
            <li><a href="#portal">Portal</a></li>
            <li><a href="#research">Research</a></li>
            <li><a href="#library">Library</a></li>
            <li><a href="#community-extension">Community Extension</a></li>
            <li><a href="#careers">Careers</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
<main>
<div class="carousel">
    <div class="carousel-inner">
        <?php
        $imageDir = "carousel-img/"; // Folder containing images
        $images = glob($imageDir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
        foreach ($images as $index => $image) {
            echo '<div class="carousel-item' . ($index === 0 ? ' active' : '') . '">
                    <img src="' . $image . '" alt="Image">
                  </div>';
        }
        ?>
    </div>
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>

    <!-- Pagination Dots -->
    <div class="carousel-dots">
        <?php foreach ($images as $index => $image) : ?>
            <span class="dot" onclick="goToSlide(<?= $index ?>)"></span>
        <?php endforeach; ?>
    </div>
</div>

</main>
<div class="main2">
<div class="title-course">
    <div>
        <img src="TCU-logo.png">    
    </div>
    <div>
    <h2>TAGUIG CITY UNIVERSITY 
        <br>OFFERS THESE COURSES:</h2>
    </div>  
    
</div>
    <div class="courses">
    <div class="category">
                <h3>ARTS AND SCIENCES</h3>
                <ul>
                    <li>Bachelor in Public Administration</li>
                    <li>Bachelor of Science in Psychology</li>
                    <li>Bachelor of Science in Social Work</li>
                </ul>
            </div>
            <div class="category">
                <h3>INFORMATION AND COMMUNICATION TECHNOLOGY</h3>
                <ul>
                    <li>Bachelor of Science in Computer Science</li>
                    <li>Bachelor of Science in Information Systems</li>
                </ul>
            </div>
            <div class="category">
                <h3>HOSPITALITY & TOURISM MANAGEMENT</h3>
                <ul>
                    <li>Bachelor of Science in Hospitality Management</li>
                    <li>Bachelor of Science in Tourism Management</li>
                </ul>
            </div>
            <div class="category">
                <h3>CRIMINAL JUSTICE</h3>
                <ul>
                    <li>Bachelor of Science in Criminology</li>
                </ul>
            </div>
            <div class="category">
                <h3>EDUCATION</h3>
                <ul>
                    <li>Bachelor of Secondary Education Major in English </li>
                    <li>Bachelor of Secondary Education Major in Mathematics</li>
                    <li>Bachelor of Secondary Education Major in Science</li>
                    <li>Bachelor in Elementary Education</li>
                </ul>
            </div>
            <div class="category">
                <h3>BUSINESS MANAGEMENT</h3>
                <ul>
                    <li>Bachelor of Science in Entrepreneurship</li>
                    <li>Bachelor of Science in Business Administration
                    Major:</li>
                    <ol>
                        <li>Human Resource Management</li>
                        <li>Marketing Management</li>
                    </ol>
                    <li> Bachelor of Science in Office Administration</li>
                </ul>
            </div>
            <div class="category">
                <h3>GRADUATE STUDIES</h3>
                <ul>
                    <li>Master of Arts in Education Major in Educational Management</li>
                    <li>Master in Business Administration</li>
                    <li>Master of Science in Criminal Justice</li>
                    <li>Master in Public Administration</li>
                </ul>
            </div>
    </div>    
            
</div>

<div class="TCU-CEA">
    <div>
        <img src="TCUCEA.jpg">
    </div>
    <div>
        <h1 class="large-text">TCUCEAA: Taguig City University <br>
            City Educational Assistance Allowance</h1>
    </div>
    <div>
        <h3 class="medium-text">"Investing in <span style="color: #FFBE00;">Education</span>  Investing in the City's <br>Foundation"
        </h3>
    </div>
    <div>
        <p class="small-text">All TCU students are scholars of the City in so far as their education is paid for by funds from the Taguig City Government<br> coming from the people’s taxes. This is in line with the City Administration’s quest to continue improving access to quality<br> education, enhance completion rate, nurture a culture of excellence among Taguig residents, and ultimately achieve a better<br> and more prosperous life for the people of Taguig.
        </p>
    </div>
</div>

<div class="AUE">
    <div class="Announcement">
        <div>
        <h2>Announcement</h2>
        </div>

        <div class="line">
        </div>
        <div class="div-pic">
            <img src="announcement.jpg" class="AUE-pic">
        </div>
        <div>
            <p>Schedule of Submission of Requirments for TCU Freshman Admission Test</p>
        </div>
        <div>
            <button class="div-btn">View more</button>
        </div>
        
    </div>
    <div class="Uni-news">
        <div>
        <h2>University News</h2> 
        </div>

        <div class="line">
        </div>
        <div class="div-pic">
            <img src="TCUnews.jpg" class="AUE-pic">
        </div>
        <div>
            <p>Schedule of Submission of Requirments for TCU Freshman Admission Test</p>
        </div>
        <div>
            <button class="div-btn">View more</button>
        </div>
    </div>
    <div class="Events">
        <div>
        <h2>Events</h2>
        </div>

        <div class="line">
        </div>
        <div class="div-pic">
            <img src="TCUEvents.jpg" class="AUE-pic">
        </div> 
        <div>
            <p>Schedule of Submission of Requirments for TCU Freshman Admission Test</p>
        </div>
        <div>
            <button class="div-btn">View more</button>
        </div>
    </div>
</div>
<div class="colleges">
<div class="div-choose">
    <p class="choose">
     University Colleges
    </p>
</div>


    <div class="course-grid">
        
        <div class="course-info"> 
            <p class="cict-dept">Information & Communication and Technology</p>
            <a href="cict-department.html" target="blank_">
            <img class="cict" src="Colleges/cict.png"> 
            </a>
        </div>  

        <div class="course-info"> 
            <p class="cict-dept">Engineering and Technology</p>
           <img class="hospi" src="Colleges/cet.png">
        </div>  

        <div class="course-info"> 
            <p class="cict-dept">Hospitality and Tourism Management</p>
          <img class="chtm" src="Colleges/chtm.png">
        </div> 


    
    </div>

    <div class="course-grid">
        
        <div class="course-info"> 
            <p class="cict-dept">Arts and Science</p>
            <img class="cict" src="Colleges/caslogo.png">
        </div>  

        <div class="course-info"> 
            <p class="cict-dept">Criminal Justice</p>
            <img class="hospi" src="Colleges/ccj.png">
        </div>  

        <div class="course-info"> 
            <p class="cict-dept">Education</p>
           <img class="chtm" src="Colleges/ced.png">
        </div> 
    
    </div>

    <div class="course-grid2">
        
        <div class="course-info"> 
            <p class="cict-dept">Business Management</p>
            <img class="cict" src="Colleges/cbm.png">
        </div>  

        <div class="course-info"> 
            <p class="cict-dept">Graduate School</p>
            <img class="hospi" src="Colleges/grad.png">
        </div>   
 
    </div>
</div>
<div class="mvp">
    <div class="div-mvp">
        <img src="vision.jpg" class="mvp-pic">
    </div>
    <div class="div-mvp">
        <img src="mission.jpg" class="mvp-pic">
    </div>
    <div class="div-mvp">
        <img src="phil.jpg" class="mvp-pic">
    </div>
    
</div>

<div class="board">
        <img src="board.png">
</div>
<div class="board">
        <img src="board2.png">
</div>
<footer>
    <div class="footer-container">
        <div class="footer-left">
            <div>
            <h2>Taguig City University</h2>
            </div>
            <div>
            <p>
                General Santos Avenue, Central Bicutan, City of Taguig<br>
                8635-8300 | Registrar: 8635-8300 (7204) / 09618872644
            </p>
            </div>
            <div>
            <p>Total Visitors: <span class="visitor-counter">037921</span></p>
            </div>
            <div>
            <p>Copyright &copy; 2025 Taguig City University.</p>
            </div>
        </div>
        <div class="footer-right">
            <div>
            <h3>Quick Links</h3>
            </div>
            <div> 
            <ul>
                <li><a href="#">Admission</a></li>
                <li><a href="#">E-Books Access</a></li>
                <li><a href="#">Guidance and Testing Center</a></li>
                <li><a href="#">Lani Scholarship</a></li>
                <li><a href="#">Office of the Student Affairs</a></li>
                <li><a href="#">Registrar’s Office</a></li>
                <li><a href="#">Taguig City Scholarship Program</a></li>
            </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Developed by TCU-MIS Department</p>
        <p><a href="#">Privacy Policy</a></p>
    </div>
</footer>


</body>
</html>


