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
    </div>
  <div class="medal-div">
    <img src="medal.png" class="medal-pic">
  </div>

<div class="acad-div">
<div class="acad-colleges">
  <div>
  <img src="Colleges/caslogo.png" class="colleges-logo">
  </div>
  <div class="texts">
    <div>
    <h3>Arts & Science</h3>
    </div>
    <div>
    <p>The College of Arts and Sciences is committed to the total development of the <br>individual so he could be a meaningful service to the nation and the world.</p>
    </div>
    <div>
        <ul>
          <li>Bachelor in Public Administration</li>
          <li>Bachelor of Science in Psychology</li>
          <li>Bachelor of Science in Social Work</li>
        </ul>
    </div>
  </div>
  <div>
    <button class="div-btn">View more</button>
  </div>
  </div>
</div>

<div class="acad-div">
<div class="acad-colleges">
  <div>
  <img src="Colleges/cbm.png" class="colleges-logo">
  </div>
  <div class="texts">
    <div>
    <h3>Business Management</h3>
    </div>
    <div>
    <p>To nurture a vibrant culture of academic wellness responsive to the challenges <br>of technology and the global community.</p>
    </div>
    <div>
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
  </div>
  <div>
    <button class="div-btn">View more</button>
  </div>
  </div>
</div>
<div class="acad-div">
<div class="acad-colleges">
  <div>
  <img src="Colleges/ccj.png" class="colleges-logo">
  </div>
  <div class="texts">
    <div>
    <h3>Criminal Justice</h3>
    </div>
    <div>
    <p>To nurture a vibrant culture of academic wellness responsive to the challenges <br>of technology and the global community.</p>
    </div>
    <div>
    <ul>
       <li>Bachelor of Science in Criminology</li>
    </ul>
    </div>
  </div>
  <div>
    <button class="div-btn">View more</button>
  </div>
  </div>
</div>
<div class="acad-div">
<div class="acad-colleges">
  <div>
  <img src="Colleges/ced.png" class="colleges-logo">
  </div>
  <div class="texts">
    <div>
    <h3>Education</h3>
    </div>
    <div>
    <p>The college conducted regular research trainings, research colloquium for<br> faculty and students and had taken steps in making research a mainstream<br> activity that could generate useful and significant knowledge.</p>
    </div>
    <div>
    <ul>
       <li>Bachelor of Secondary Education Major in English </li>
       <li>Bachelor of Secondary Education Major in Mathematics</li>
       <li>Bachelor of Secondary Education Major in Science</li>
       <li>Bachelor in Elementary Education</li>
    </ul>
    </div>
  </div>
  <div>
    <button class="div-btn">View more</button>
  </div>
  </div>
</div>
<div class="acad-div">
<div class="acad-colleges">
  <div>
  <img src="Colleges/cet.png" class="colleges-logo">
  </div>
  <div class="texts">
    <div>
    <h3>Engineering & Technology</h3>
    </div>
    <div>
    <p>To nurture a vibrant culture of academic wellness responsive to the challenges<br> of technology and the global community.</p>
    </div>
    <div>
        <ul>
          <li>Bachelor of Science in Industrial Engineering</li>
          <li>Bachelor of Science in Industrial Technology Major in Electronics</li>
          <li>Bachelor of Science in Industrial Technology Major in Electrical</li>
        </ul>
    </div>
  </div>
  <div>
    <button class="div-btn">View more</button>
  </div>
  </div>
</div>
<div class="acad-div">
<div class="acad-colleges">
  <div>
  <img src="Colleges/chtm.png" class="colleges-logo">
  </div>
  <div class="texts">
    <div>
    <h3>Hospitality & Tourism Management</h3>
    </div>
    <div>
    <p>Our program is designe to prepare students for leadership positions in hotels,<br> resorts, clubs, etc., In addition to bot management and industry – specific<br> courses, our program also stresses core concepts such as leadership, ethics<br> diversity and communication.</p>
    </div>
    <div>
       <ul>
          <li>Bachelor of Science in Hospitality Management</li>
          <li>Bachelor of Science in Tourism Management</li>
       </ul>
    </div>
  </div>
  <div>
    <button class="div-btn">View more</button>
  </div>
  </div>
</div>
<div class="acad-div">
<div class="acad-colleges">
  <div>
  <img src="Colleges/cict.png" class="colleges-logo">
  </div>

  <div class="texts">
    <div>
    <h3>Information & Communication Technology</h3>
    </div>
    <div>
    <p>To nurture a vibrant culture of academic wellness responsive to the challenges <br>of technology and the global community.</p>
    </div>
    <div>
    <ul>
        <li>Bachelor of Science in Computer Science</li>
        <li>Bachelor of Science in Information Systems</li>
    </ul>
    </div>
  </div>
  <div>
    <button class="div-btn">View more</button>
  </div>
  </div>
</div>
<div class="acad-div">
<div class="acad-colleges">
  <div>
  <img src="Colleges/caslogo.png" class="colleges-logo">
  </div>
  <div class="texts">
    <div>
    <h3>Graduate Studies</h3>
    </div>
    <div>
    <p>Graduate programs in Master of Arts in Teaching, majors in Mathematics,<br> Filipino, English and Social paved the way to the development of Master of Arts<br> in Educational Management. Classes were held at the second floor Sunshine<br> Mall in Taguig City.</p>
    </div>
    <div>
    <ul>
      <li>Master of Arts in Education Major in Educational Management</li>
      <li>Master in Business Administration</li>
      <li>Master of Science in Criminal Justice</li>
      <li>Master in Public Administration</li>
    </ul>
    </div>
  </div>
  <div>
    <button class="div-btn">View more</button>
  </div>
  </div>
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