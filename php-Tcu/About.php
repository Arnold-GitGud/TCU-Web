<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Page</title>
    <link rel="stylesheet" href="TCU.css">
    <script src="TCU.js"></script>
    <style>
        /* Style for the video background */
        .video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Content styles */
        .content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            font-size: 2rem;
            top: 50%;
            transform: translateY(-50%);
        }
        .below-section {
            position: relative;
            z-index: 2;
            background: white;
            color: black;
            text-align: center;
            padding: 50px 20px;
            font-size: 1.5rem;
            margin-top: 100vh; /* Moves this section below the full-screen video */
        }
    </style>
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
  <div>

  </div>
  <div class="video-container">
        <video autoplay muted loop>
            <source src="tcuavp.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="content">
    </div>
  <div class="below-section">
      <div class="about-tcu">
            <div>
            <img src="TCU-logo.png" class="tcu-logo-size">
            </div>
            <div class="sub-about">
              <div>
                <h4 style="text-align: left;">Investing in the Lives of Students Since 2006</h4>
              </div>
              <div>
                <p class="text-about">Motivated by the urgent need to serve the youth of a burgeoning Taguig City, the Local Government Administration enacted Ordinance No. 29 series 2004, titled “An Ordinance Establishing the Pamantasan ng Taguig and Appropriating Funds Therefor.” This initiative was one of the offshoots of the provisions outlined in the Local Government Code. Subsequently, Pamantasan ng Taguig underwent a renaming process and was rebranded as Taguig City University, following the enactment of City Ordinance No. 13, Series of 2009.</p>
              </div>
              <div class="text-about">
                <p>All students enrolled at TCU are beneficiaries of the City’s scholarship program wherein their educational expenses are covered by funds allocated from the Taguig City Government, financed by the taxes of its residents. This commitment is aligned with the City Administration’s overarching goal of continually improving access to quality education, enhancing completion rates, fostering a culture of excellence among Taguig residents, and ultimately facilitating a better and more prosperous life for its populace.</p>
              </div>
              <div class="text-about">
                <p>TCU flourishes with the unwavering support of the Taguig City Government, under the leadership of Mayor Maria Laarni L. Cayetano, who has spearheaded the city into a Transformative, Lively, and Caring “PROBINSYUDAD™”<br>

                TCU has garnered national recognition for its myriad of academic and extracurricular achievements. As a young institution, TCU showcases exemplary academic performance in board examinations, affirming its dedication to academic excellence.<br>

                Likewise, it has proven its remarkable achievements in various fields such as cultural, scientific, technological, and sports in local, national, and international competitions. </p>
              </div>
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