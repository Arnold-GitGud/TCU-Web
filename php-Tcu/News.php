<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Page</title>
    <link rel="stylesheet" href="TCU.css">
    <script src="TCU.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            flex-direction: column;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .content-wrapper {
            display: flex;
        }
        .main-container {
            display: flex;
            flex: 3;
            flex-direction: column;
            margin-right: 20px;
        }
        .main-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .main-content img {
            max-width: 300px;
            margin-right: 20px;
            border-radius: 8px;
        }
        .text-content {
            flex: 1;
            display: flex;
            align-items: center;
        }
        .text-content img {
            max-width: 50px;
            margin-right: 15px;
            border-radius: 5px;
        }
        .sidebar {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            height: fit-content;
        }
        h1, h2 {
            color: #d32f2f;
        }
        .announcement-banner {
            background: #d32f2f;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 1.5em;
            font-weight: bold;
            border-radius: 8px;
        }
        .recent-news li {
            list-style: none;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
        }
        .recent-news img {
            max-width: 50px;
            margin-right: 10px;
            border-radius: 5px;
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
    <div class="container">
        <div class="content-wrapper">
            <div class="main-container">
                <div class="main-content">
                    <img src="announcement.jpg" alt="TCU Announcement">
                    <div class="text-content">
                        
                        <div>
                            <div class="announcement-banner">ANNOUNCEMENT</div>
                            <h1>2-DAY REOPENING of TCU ONLINE APPLICATION</h1>
                            <p><strong>Freshmen Admission (2025-2026)</strong></p>
                            <p><strong>Application Period:</strong> February 27, 2025, 8:00 AM - February 28, 2025, 5:00 PM</p>
                            <p>Freshmen Application Link: <a href="#">https://forms.gle/Rs5cNWgp2MYcaP7SA</a></p>
                            <p>ALS Passers Application Link: <a href="#">https://forms.gle/aLrupCnbLmhFgpV37</a></p>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <img src="TCUnews.jpg" alt="Another Announcement">
                    <div class="text-content">
                        
                        <div>
                            <div class="announcement-banner">ANNOUNCEMENT</div>
                            <h1>Schedule of Submission of Requirements</h1>
                            <p><strong>Freshmen Admission Test</strong></p>
                            <p><strong>Submission Date:</strong> March 14, 2025, 7:30 AM - 4:00 PM</p>
                            <p>Location: Taguig City University Auditorium</p>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <img src="TLC.jpg" alt="TCU Announcement">
                    <div class="text-content">
                        
                        <div>
                            <div class="announcement-banner">EVENTS</div>
                            <h1>TCU Night @ TLC Park</h1>
                            
                            <p>𝐂𝐞𝐥𝐞𝐛𝐫𝐚𝐭𝐞 𝐓𝐂𝐔’𝐬 𝟏𝟖𝐭𝐡 𝐅𝐨𝐮𝐧𝐝𝐢𝐧𝐠 𝐀𝐧𝐧𝐢𝐯𝐞𝐫𝐬𝐚𝐫𝐲! Join us on 𝟏𝟒 𝐃𝐞𝐜𝐞𝐦𝐛𝐞𝐫 𝟐𝟎𝟐𝟒 at the 𝐓𝐋𝐂 𝐏𝐚𝐫𝐤 𝐂𝐨𝐧𝐜𝐞𝐫𝐭 𝐆𝐫𝐨𝐮𝐧𝐝𝐬 for the 𝐓𝐂𝐔 𝐍𝐢𝐠𝐡𝐭 𝐚𝐧𝐝 𝐀𝐰𝐚𝐫𝐝𝐢𝐧𝐠 𝐂𝐞𝐫𝐞𝐦𝐨𝐧𝐲, as we come together to honor the…</p>
                            
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <img src="TCUnews.jpg" alt="Another Announcement">
                    <div class="text-content">
                        
                        <div>
                            <div class="announcement-banner">ANNOUNCEMENT</div>
                            <h1>Schedule of Submission of Requirements</h1>
                            <p><strong>Freshmen Admission Test</strong></p>
                            <p><strong>Submission Date:</strong> March 14, 2025, 7:30 AM - 4:00 PM</p>
                            <p>Location: Taguig City University Auditorium</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <h2>Recent News</h2>
                <ul class="recent-news">
                    <li><img src="recent1.jpg" alt="News 1"><a href="#">2-DAY REOPENING of TCU ONLINE APPLICATION</a> <br> February 27, 2025</li>
                    <li><img src="recent2.jpg" alt="News 2"><a href="#">Schedule of Submission of Requirements</a> <br> February 10, 2025</li>
                    <li><img src="recent2.jpg" alt="News 3"><a href="#">Enrollment Schedule for A.Y. 2024-2025</a> <br> January 20, 2025</li>
                </ul>
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