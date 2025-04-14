<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
    <style>
           /* General Reset */
   body {
    margin: 0;
    font-family: Arial, sans-serif;
    margin-left: -10px;
}

/* Header Styling */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    background-color: #161845;
    color: white;
}
main h1{
    color: white;
    margin-left: 15%;
    font-size: 40px;
}

.logo {
    font-size: 1.5em;
    font-weight: bold;
}
.logo:hover{
    color: #f15d01;
}
nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin: 0 10px;
}

nav ul li a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #f15d01;
    border: 1px solid #f15d01 ;
}

#theme-toggle {
    padding: 5px 15px;
    background-color: white;
    color: #161845;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s;
}

#theme-toggle:hover {
    background-color: #f15d01;
    color: #fff;
}
.hrheader{
    height: 4px;
    margin-top: 1px;
    background-color: #f15d01;
}
footer {
    background-color: #1a1919;
    color: white;
    padding: 20px 0;
    text-align: center;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 0 20px;
}

.footer-section {
    flex: 1;
    margin: 10px;
    min-width: 200px;
}

.footer-section h3 {
    font-size: 1.2em;
    margin-bottom: 10px;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin: 5px 0;
}

.footer-section ul li a {
    text-decoration: none;
    color: #ddd;
    transition: color 0.3s;
}

.footer-section ul li a:hover {
    color: #f15d01;
}

.footer-bottom {
    margin-top: 20px;
    padding-top: 10px;
    border-top: 1px solid #fff;
}

#scroll-top {
    margin-top: 10px;
    padding: 5px 15px;
    background-color: #161845;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s;
}

#scroll-top:hover {
    background-color: #f15d01;
    color: #fff;
}
.auth-buttons button {
    margin-left: 10px;
    padding: 5px 15px;
    background-color: white;
    color: #161845;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s;
}

.auth-buttons button:hover {
    background-color: #f15d01;
    color: #fff;
}
img{
width: 100%;
margin-top: -8px;
}
main{
    padding: none;
    margin: none;
    margin-left: -2px ;
    padding: none ;
    background-color: white;
}
/* Modal Styling */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: white;
    padding: 20px;
    width: 555px;
    border-radius: 10px;
    text-align: left;
    position: relative;
}
.input-box {
    width: 100%;
    margin-top: 5px;
  }
  .input-box label {
    font-size: 1em;
    margin-bottom: 2px;
  }
#login-modal .modal-content {
    width: 450px;
}
.modal .column {
    display: flex;
    column-gap: 15px;
  }
#signup-moblie{
    width: 230px;
}
#singnup-birthdate{
    width: 250px;
}
.modal-content h2 {
    margin-bottom: 1px;
    margin-top: 3px;
    text-align: center;
}
.modal-content hr{
    margin-bottom: 10px;
}
.modal-content form {
    display: flex;
    flex-direction: column;
}

.modal-content input,select,option,textarea{
    margin-bottom: 10px;
    padding: 8px;
    font-size: 1em;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.modal-content button {
    padding: 10px;
    background-color: #161845;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    cursor: pointer;
}

.modal-content button:hover {
    background-color: #f15d01;
}
.login-footer {
      margin-top: 10px;
      font-size: 14px;
      text-align: center;
}
.close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 1.5em;
    cursor: pointer;
    color: #333;
}
.gender{
    display: flex;
}
.gender input{
    margin-left: 15px;
}
@media screen and (max-width: 375px) {
    header{
        width: 200%;
        padding-right: 450px;
    }
    .logo {
        font-size: 1.0em;
    }
    main{
        height: 900px;
    }
    footer{
        width: 280%; 
    }
    .form .column {
      flex-wrap: wrap;
    }
    .form :where(.signup-gender, .gender) {
      row-gap: 15px;
    }
  }
  .containerc {
            max-width: 1500px; /* Wider container */
            margin: 0 auto;
            background-color: white;
            padding: 25px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: flex; /* Use flexbox for layout */
            gap: 20px; /* Spacing between image and text */
            align-items: flex-start; /* Align items to the top */
            font-size: 1.3rem;
        }
     main h1{
        color: #161845;
    }
        .image-container {
            margin-top: 25px;
            flex: 1; /* Image takes up available space */
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px; /* Rounded corners for image */
            box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
        }

        .text-content {
            flex: 2; /* Text takes up more space */
        }

        .established {
            font-style: italic;
            color: #777;
            margin-bottom: 10px;
        }

        .highlight {
            font-weight: bold;
            color: #f15d01;
        }
        .university{
            font-weight: bold;
            color: #161845;
        }
    
        @media (max-width: 768px) {
            .container {
                flex-direction: column; /* Stack image and text vertically */
                align-items: center; /* Center items */
            }
            .image-container{
                width: 100%;
                margin-bottom: 20px;
            }
        }
        .containerl {
            background-color: #161845;
            padding: 40px;
            border-radius: 8px;
            margin-left: 100px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 40px;
            width: 100%; /* Occupy 80% of the viewport width */
            max-width: 1300px; /* Set a maximum width */
        }

        .section-title {
            font-size: 2.0rem;
            margin-bottom: 30px;
            color: white;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
            gap: 20px; /* Space between stats */
            margin-bottom: 30px;
        }

        .stat {
            flex: 1 1 200px; /* Each stat takes up at least 200px */
        }

        .stat-number {
            font-size: 4em;
            color: white; /* Teal color */
            font-weight: bold;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1em;
            color: #555;
        }

        .hr-line {
            border: none;
            border-top: 2px solid white;
            margin: 20px auto;
            width: 80%;
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            .stat-number {
                font-size: 2.5em; /* Smaller font on small screens */
            }
        }
        .achivment {
            padding: 30px;
            max-width: 80%; /* Adjust as needed */
            margin: 0 auto;
        }

        .achivment h1 {
            text-align: left; /* Align to the left */
        }

        .achivment p {
            text-align: justify;
            font-size: 1.3rem;
            color: white;
            margin-bottom: 20px; /* Add some space between paragraph and image section */
        }

        .achivment .awards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); /* Responsive grid */
            grid-gap: 20px;
            border: 1px solid white;
            border-radius: 5px;
            padding: 10px;
        }

        .achivment .award-item {
            padding: 10px;
            color: white;
            text-align: center;
            border-radius: 5px;
        }
        .achivment .award-item img{
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            display: block; /* Prevents image from creating extra space */
            margin: 0 auto; /* Centers the image */
        }

        @media (max-width: 600px) {
            .awards-grid {
                grid-template-columns: 1fr; /* Stack on smaller screens */
            }
        }
        /* Mobile First Approach */
@media (max-width: 768px) {
    .hamburger {
        display: block;
    }

    nav ul {
        display: none;
        width: 100%;
        flex-direction: column;
        text-align: center;
    }

    nav ul.active {
        display: flex;
    }

    nav ul li {
        margin: 10px 0;
    }

    .auth-buttons {
        width: 100%;
        text-align: center;
        margin: 10px 0;
    }

    .containerc {
        flex-direction: column;
    }

    .modal-content {
        width: 90% !important;
    }
}

/* Tablet Styles */
@media (min-width: 769px) and (max-width: 992px) {
    .containerc {
        flex-direction: column;
    }

    .stats-container {
        grid-template-columns: repeat(2, 1fr);
    }

    .awards-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Desktop Styles */
@media (min-width: 993px) {
    .containerc {
        flex-direction: row;
    }

    .stats-container {
        grid-template-columns: repeat(3, 1fr);
    }

    .awards-grid {
        grid-template-columns: repeat(6, 1fr);
    }
}
@media (min-width: 769px) and (max-width: 992px){
    #main-header {
        flex-wrap: nowrap;
    }
    
    nav {
        display: block;
        width: auto;
        order: 2;
        margin: 0 1rem;
    }
    
    nav ul {
        display: flex;
        margin: 0;
    }
    
    nav ul li {
        margin: 0 0.5rem;
    }
    
    .auth-buttons {
        order: 3;
    }
    
    .hamburger {
        display: none;
    }
}
.slider-wrapper {
  position: relative;
}
.slider-wrapper .slide-button {
  position: absolute;
  top: 50%;
  outline: none;
  border: none;
  height: 50px;
  width: 50px;
  z-index: 5;
  color: #fff;
  display: flex;
  cursor: pointer;
  font-size: 2.2rem;
  background: #000;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  transform: translateY(-50%);
}
.slider-wrapper .slide-button:hover {
  background: #404040;
}
.slider-wrapper .slide-button#prev-slide {
  left: -25px;
  display: none;
}
.slider-wrapper .slide-button#next-slide {
  right: -25px;
}
.slider-wrapper .image-list {
  display: grid;
  grid-template-columns: repeat(10, 1fr);
  gap: 18px;
  font-size: 0;
  background-size: cover;
  list-style: none;
  margin-bottom: 30px;
  overflow-x: auto;
  scrollbar-width: none;
}
.slider-wrapper .image-list .image-item{
    background-size: cover;
    padding: 10px;
    border-radius: 10px;
}
.slider-wrapper .image-list::-webkit-scrollbar {
  display: none;
}
 .image-item {
  width: 250px;
  height: 300px;
  background-size: cover;
  border-radius: 5px;
}
.container .slider-scrollbar {
  height: 24px;
  width: 100%;
  display: flex;
  align-items: center;
}
.slider-scrollbar .scrollbar-track {
  background: #ccc;
  width: 100%;
  height: 2px;
  display: flex;
  align-items: center;
  border-radius: 4px;
  position: relative;
}
.slider-scrollbar:hover .scrollbar-track {
  height: 4px;
}
.slider-scrollbar .scrollbar-thumb {
  position: absolute;
  background: #000;
  top: 0;
  bottom: 0;
  width: 50%;
  height: 100%;
  cursor: grab;
  border-radius: inherit;
}
.slider-scrollbar .scrollbar-thumb:active {
  cursor: grabbing;
  height: 8px;
  top: -2px;
}
.slider-scrollbar .scrollbar-thumb::after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: -10px;
  bottom: -10px;
}
/* Styles for mobile and tablets */
@media only screen and (max-width: 1023px) {
  .slider-wrapper .slide-button {
    display: none !important;
  }
  .slider-wrapper .image-list {
    gap: 10px;
    margin-bottom: 15px;
    scroll-snap-type: x mandatory;
  }
  .slider-wrapper .image-list .image-item {
    width: 280px;
    height: 380px;
  }
  .slider-scrollbar .scrollbar-thumb {
    width: 20%;
  }
}
/* Stats Section Animations */
.stats-container {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s ease-out forwards;
    animation-delay: 0.3s;
}

.stat {
    perspective: 1000px;
    transform-style: preserve-3d;
    transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.stat:hover {
    transform: translateY(-10px) rotateX(10deg);
}

.stat-number {
    position: relative;
    display: inline-block;
    font-size: 4em;
    color: white;
    font-weight: bold;
    overflow: hidden;
}

.stat-number::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 3px;
    background: #f15d01;
    animation: underlineExpand 1.5s ease-out forwards;
    animation-delay: 1s;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes underlineExpand {
    from {
        width: 0;
    }
    to {
        width: 100%;
    }
}

/* Number Counting Animation */
@keyframes countUp {
    from {
        opacity: 0;
        transform: translateY(20px) scale(0.8);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.stat-number {
    animation: countUp 1s ease-out forwards;
}

/* Staggered Animations */
.stat:nth-child(1) { animation-delay: 0.2s; }
.stat:nth-child(2) { animation-delay: 0.4s; }
.stat:nth-child(3) { animation-delay: 0.6s; }

/* Add this for number increment animation */
.stat-number {
    --target-number: 0;
    animation: numberIncrement 2s ease-out forwards;
}

@keyframes numberIncrement {
    from { --target-number: 0; }
    to { --target-number: attr(data-target); }
}

.stat-number::after {
    content: counter(number);
    counter-reset: number var(--target-number);
}
#img {
  position: relative;
  width: 100%;
  height: 70vh;
  overflow: hidden;
  border-radius: 15px;
  box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

#img img {
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0;
  animation: slider 15s infinite linear;
  border-radius: inherit;
}

#img img:nth-child(1) { animation-delay: 0s; }
#img img:nth-child(2) { animation-delay: 5s; }
#img img:nth-child(3) { animation-delay: 10s; }

@keyframes slider {
  0% {
    opacity: 0;
    transform: scale(1.1);
  }
  5% {
    opacity: 1;
    transform: scale(1);
  }
  25% {
    opacity: 1;
    transform: scale(1);
  }
  30% {
    opacity: 0;
    transform: scale(0.9);
  }
  100% {
    opacity: 0;
    transform: scale(0.9);
  }
}

/* Optional hover pause */
#img:hover img {
  animation-play-state: paused;
}

/* Navigation indicators */
#img::after {
  content: '';
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 10px;
  z-index: 2;
}

#img::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 60px;
  background: linear-gradient(transparent, rgba(0,0,0,0.5));
  z-index: 1;
}

#img:hover::after {
  content: '◄ ● ● ►';
  color: white;
  font-size: 1.2rem;
  text-shadow: 0 2px 5px rgba(0,0,0,0.5);
}

/* Mobile optimization */
@media (max-width: 768px) {
  #img {
    height: 50vh;
  }
  @keyframes slider {
    0% { opacity: 0; transform: scale(1.05); }
    5% { opacity: 1; transform: scale(1); }
    25% { opacity: 1; transform: scale(1); }
    30% { opacity: 0; transform: scale(0.95); }
    100% { opacity: 0; transform: scale(0.95); }
  }
}
.footer {
            background-color:#1a1919;
            color: white;
            padding: 40px 20px;
            font-family: Arial, sans-serif;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: space-between;
        }

        .quick-links {
            display: flex;
            gap: 40px;
        }

        .link-column {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer h3 {
            color: #fff;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .footer a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: #fff;
        }

        .contact-info {
            text-align: right;
        }

        .address {
            margin: 20px 0;
            line-height: 1.5;
        }

        .copyright {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #555;
            color: #aaa;
            font-size: 14px;
        }

        .visit-us {
            text-align: center;
            margin-top: 15px;
            color: #ccc;
        }

        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
            }
            
            .quick-links {
                flex-direction: column;
                gap: 20px;
            }
            
            .contact-info {
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <header id="main-header">
        <img src="sankalchand-patel-university-spu_vy3euk.png" style="width: 100px;" >
        <div class="logo">Student Management System</div>
        <nav>
            <ul>
                <li><a href="#home">About As</a></li>
                <li><a href="#about">Enrollments</a></li>
                <li><a href="#contact">Awards & Ranking</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <button id="login-btn">Login</button>
            <button id="signup-btn">Sign Up</button>
        </div>
    </header>
    <hr class="hrheader">
    <main style="height: 2390px;margin-left: 5px;margin-top:-8px;">
    <div id="img">
  <img src="cjp.jpg" alt="Slide 1">
  <img src="cjp1.png" alt="Slide 2">
  <img src="cjp2.png" alt="Slide 3">
</div>
     <hr class="hrheader" style="margin-top:0px;"><section id="home" class="section">
     <h1>Welcome To Shri C. J. Patel College Of Computer Studies</h1>
     <div class="containerc" style="border: 2px solid #161845;">
        <div class="image-container">
            <img src="OIP.jpg" alt="College Building">  </div>
        <div class="text-content">
            <p>
                Shri C.J. Patel College of Computer Studies is one of the leading
                institutes in the North Gujarat region imparting quality computer
                education, keeping in mind the present and future requirements of IT
                professionals. The institute started its first batch of three-year full-time
                <span class="highlight">BCA</span> program and one-year full time <span class="highlight">PGDCA</span> program in the year 1999
                with a mission to provide excellent professional education in Computer
                Science to young students so as to meet the needs of the field of
                Information Technology. Currently in the field of computer science
                under the umbrella of <span class="university">Sankalchand Patel University</span>, the institute aims to
                develop technically sharpened IT professionals.
            </p>
            <p>
                Dedicated to cultivating a cadre of technically adept IT professionals,
                the college envisions a future where graduates excel in the dynamic
                field of computer science. The mission embarked upon two decades
                ago continues to drive the institute's pursuit of excellence in providing
                top-notch education that aligns with both present industry standards
                and future advancements in technology. Under the leadership of
                <span class="university">Sankalchand Patel University</span>, Shri C.J. Patel College of Computer
                Studies remains at the forefront of shaping the IT landscape, preparing
                students for successful careers in the ever-evolving realm of
                Information Technology.
            </p>
            <div class="established">Established in 1999,</div>
            <p>
                Shri C.J. Patel College of Computer Studies stands as a beacon of quality computer education in the North Gujarat region. Pioneering the way in professional training for IT enthusiasts, the institute initiated its inaugural batch offering a comprehensive three-year full-time <span class="highlight">BCA</span> program and a one-year full-time <span class="highlight">PGDCA</span> program. With an unwavering commitment to meeting the evolving demands of the Information Technology sector, the institution operates under the auspices of <span class="university">Sankalchand Patel University</span>.
            </p>
        </div>
    </div></section>
     <hr class="hrheader" style="margin-top:30px;"><section id="about" class="section">
     <div class="containerl" style="border-radius: 30px;">
        <div class="hr-line">
        <h2 class="section-title">Shri C.J. Patel College of Computer Studies at a Glance</h2>
        <div class="stats-container">
            <div class="stat">
                <div class="stat-number">770+</div>
                <div class="stat-label">Current Enrollments</div>
            </div>
            <div class="stat">
                <div class="stat-number">15+</div>
                <div class="stat-label">Qualified Staff</div>
            </div>
            <div class="stat">
                <div class="stat-number">250+</div>
                <div class="stat-label">Placements</div>
            </div>
        </div>
        <div class="hr-line"></div>
    </div></section>
    <hr class="hrheader" style="margin-top:60px;"> <section id="contact" class="section">
    <div class="achivment">
        <h1>Awards & Ranking</h1>
        <p style="color:#161845;font-size:23px;">Sankalchand Patel University is committed to provide high quality education through Quality Teaching, Research, Consultancy and Community outreach services. The University is committed to continuous improvement in the academic and administrative processes by fostering Cooperation, Innovation, Professionalism, and Integrity.</p>

        <div class="slider-wrapper">
       
        <ul class="image-list" style="background-color: #161845;padding:5px;border-radius: 10px;">
          <a href="Screenshot 2025-01-26 180022.png"><img class="image-item" src="Screenshot 2025-01-26 180022.png" alt="img-1" /></a>
          <a href="Screenshot 2025-01-26 180047.png"><img class="image-item" src="Screenshot 2025-01-26 180047.png" alt="img-2" /></a>
          <a href="Screenshot 2025-01-26 180109.png"><img class="image-item" src="Screenshot 2025-01-26 180109.png" alt="img-3" /></a>
          <a href="Screenshot 2025-01-26 180119.png"><img class="image-item" src="Screenshot 2025-01-26 180119.png" alt="img-4" /></a>
          <a href="Screenshot 2025-01-26 180144.png"><img class="image-item" src="Screenshot 2025-01-26 180144.png" alt="img-5" /></a>
          <a href="Screenshot 2025-01-26 180203.png"><img class="image-item" src="Screenshot 2025-01-26 180203.png" alt="img-6" /></a>
          
        </ul>
       
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div>
        </div>
    </div></section>
    <hr class="hrheader" style="margin-top:0px;">
       <!-- Login Modal -->
    <div id="login-modal" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="login-modal">&times;</span>
            <h2>Login</h2><hr>
            <form action="login.php" method="POST">
                <label for="login-email">Email:</label>
                <input type="email" name="login-email" id="login-email" placeholder="Enter your email" required>
                <label for="login-password">Password:</label>
                <input type="password" name="login-password" id="login-password" placeholder="Enter your password" required>
                <button type="submit" name="login">Login</button>
            </form>
            
        </div>
    </div>
    

    <!-- Sign Up Modal -->
    <div id="signup-modal" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="signup-modal">&times;</span>
            <h2>Sign Up</h2><hr>
            <form action="sign_up.php" method="POST">
                <label for="signup-name">Name:</label>
                <input type="text" name='signup-name' id="signup-name"maxlength="50" placeholder="Enter your name" required>
                <label for="signup-email">Email:</label>
                <input type="email" id="signup-email" name="signup-email"maxlength="50" placeholder="Enter your email" required>
                <label for="singnup-gender">Gender:</label>
                <div class="gender">
                <input type="radio" id="singnup-gender" name="singnup-gender" value="Male">Male
                <input type="radio" id="singnup-gender" name="singnup-gender" value="Female">Female
                <input type="radio" id="singnup-gender" name="singnup-gender" value="Other">Other
                </div>
                <div class="column">
                    <div class="input-box">
                <label for="signup-moblie">Contect Number:</label>
                <input type="number" id="signup-moblie" name="signup-moblie"  min="1000000000" max="9999999999" oninput='this.value = this.value.slice(0, 10)' placeholder="Enter your moblie" required>
                 </div>
                 <div class="input-box">
                <label for="singnup-birthdate">Birth Date:</label><br>
                <input type="date" id="singnup-birthdate" name="singnup-birthdate" placeholder="dd-mm-yyyy" required>
                </div>
               </div>
                <label for="signup-city">City</label>
                <select name="city" id="city">
                    <option value="select" >Select</option>
                    <option value="mehsana">Mehsana</option>
                    <option value="amdabhad">Amdabhad</option>
                    <option value="ganthinager">Ganthinager</option>
                </select>
                <label for="signup-address">Address</label>
                <textarea name="signup-address" id="signup-address" placeholder="Enter your Address" required></textarea>
                <label for="type">Type</label>
                <select id="type" name="type" onchange="showCodeFields()" required>
                    <option value="">Select Type</option>
                    <option value="Admin">Admin</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Student">Student</option>
                </select>
                
                <div id="adminCodeField" style="display: none;">
                    <label for="adminCode">Admin Code</label>
                    <input type="password" id="adminCode" name="adminCode" placeholder="Enter admin code">
                    <input type="checkbox" id="toggleVisibility1" onclick="togglePasswordVisibility('adminCode')">
                    <label for="toggleVisibility1">Show Admin Code</label>
                </div>
                <div id="facultyCodeField" style="display: none;">
                    <label for="facultyCode">Faculty Code</label>
                    <input type="password" id="facultyCode" name="facultyCode" placeholder="Enter faculty code">
                    <input type="checkbox" id="toggleVisibility2" onclick="togglePasswordVisibility('facultyCode')">
                    <label for="toggleVisibility2">Show Faculty Code</label>
                </div>
                <div id="Studentsem" style="display: none; ">
                    <label for="Studentsem">Sem</label>
                    <select name="sem" id="sem" style="width:100px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <input type="text" pattern="\d{12}" maxlength="12" placeholder="Enter the PRN NO" required>
                </div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" 
                        placeholder="Enter your password" >
    
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" 
                       placeholder="Confirm your password" >
    
                <!-- Checkbox to toggle visibility -->
                <div>
                    <input type="checkbox" id="toggleVisibility2" onclick="togglePasswordVisibility2()">
                    <label for="toggleVisibility2">Show Password's</label>
                </div>
                <button type="submit" name="signup">Sign Up</button>
            </form>
        </div>
    </div>
    </main>
    
    <footer class="footer">
        <div class="footer-content" >
            <div class="quick-links" style="width: 200px;height: 100px;">
             <img src="sankalchand-patel-university-spu_vy3euk.png"  alt="">
            </div>

            <div class="contact-info">
                <h3>Contact Us</h3>
                <p><a href="tel:+919824636362">+91 9824636362</a></p>
                <p><a href="mailto:fcs.cjcs@spu.ac.in">fcs.cjcs@spu.ac.in</a></p>
                
                <div class="address">
                    Sankalchand Patel Vidhyadham, Visnagar-384315,<br>
                    Dist- Mehsana, Gujarat (INDIA).
                </div>
            </div>
        </div>

        <div class="copyright">
            Copyright © 2025 Shri C. J. Patel College Of Computer Studies
        </div>

        <div class="visit-us">
            For more visit us
            <button id="scroll-top">Scroll to Top</button>
        </div>
    </footer>
       
    <script>
  
 
  // Scroll to top functionality
  const scrollTopBtn = document.getElementById('scroll-top');
  scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({
          top: 0,
          behavior: 'smooth',
      });
  });
  // Modal open and close logic
  const loginBtn = document.getElementById('login-btn');
  const signupBtn = document.getElementById('signup-btn');
  const loginModal = document.getElementById('login-modal');
  const signupModal = document.getElementById('signup-modal');
  const closeButtons = document.querySelectorAll('.close');
  
  // Open Login Modal
  loginBtn.addEventListener('click', () => {
      loginModal.style.display = 'flex';
  });
  
  // Open Sign Up Modal
  signupBtn.addEventListener('click', () => {
      signupModal.style.display = 'flex';
  });
  
  // Close Modals
  closeButtons.forEach(btn => {
      btn.addEventListener('click', (e) => {
          const modalId = e.target.getAttribute('data-modal');
          document.getElementById(modalId).style.display = 'none';
      });
  });
  
  // Close Modal on Outside Click
  window.addEventListener('click', (e) => {
      if (e.target.classList.contains('modal')) {
          e.target.style.display = 'none';
      }
  });
  function showCodeFields() {
    const type = document.getElementById("type").value;
    const adminCodeField = document.getElementById("adminCodeField");
    const facultyCodeField = document.getElementById("facultyCodeField");
   const  studentsem=document.getElementById("Studentsem");
    // Hide all fields by default
    adminCodeField.style.display = "none";
    facultyCodeField.style.display = "none";
    studentsem.style.display = "none";
    if (type === "Admin") {
        adminCodeField.style.display = "block";
    } else if (type === "Faculty") {
        facultyCodeField.style.display = "block";
    }else if (type === "Student") {
        studentsem.style.display = "block";
    }
}

function togglePasswordVisibility(fieldId) {
    const field = document.getElementById(fieldId);
    if (field.type === "password") {
        field.type = "text";
    } else {
        field.type = "password";
    }
}

function togglePasswordVisibility2() {
    const passwordField = document.getElementById("password");
    const confirmPasswordField = document.getElementById("confirmPassword");

    const fields = [passwordField, confirmPasswordField];

    fields.forEach(field => {
        if (field.type === "password") {
            field.type = "text"; // Show password
        } else {
            field.type = "password"; // Hide password
        }
    });
}

function validatePasswords() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
        alert('Passwords do not match!');
        return false; // Prevent form submission
    }
    return true;
}

function validateForm(event) {
    // Prevent the default form submission
    event.preventDefault();

    const typeDropdown = document.getElementById("type").value;
    const adminCode = document.getElementById("adminCode").value.trim();
    const validCode = "12345"; // Replace with your actual admin code

    // Validate admin code only if type is "Admin"
    if (typeDropdown === "Admin" && adminCode !== validCode) {
        alert("Invalid Admin Code.");
        return false; // Prevent form submission
    }

    // Validate passwords
    if (!validatePasswords()) {
        return false; // Prevent form submission
    }

    // If everything is valid, show success and redirect
    alert("Registration successful!");
    window.location.href = 'smslog.html'; // Redirect to the next page
    return false; // Prevent form default submission
}
// Forget Password Modal
const forgetPasswordLink = document.querySelector('.login-footer a');
const forgetPasswordModal = document.getElementById('forget-password-modal');
const backToLoginLink = document.getElementById('back-to-login');

// Open Forget Password Modal
forgetPasswordLink.addEventListener('click', (e) => {
    e.preventDefault(); // Prevent the default anchor behavior
    loginModal.style.display = 'none'; // Close login modal
    forgetPasswordModal.style.display = 'flex'; // Open forget password modal
});

// Back to Login Modal
backToLoginLink.addEventListener('click', (e) => {
    e.preventDefault(); // Prevent the default anchor behavior
    forgetPasswordModal.style.display = 'none'; // Close forget password modal
    loginModal.style.display = 'flex'; // Open login modal
});


  // Add smooth scrolling to navigation links
  document.querySelectorAll('nav a').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('href');
    document.querySelector(targetId).scrollIntoView({
      behavior: 'smooth'
      
    });
  });
});
const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
    const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
    
    // Handle scrollbar thumb drag
    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
        
        // Update thumb position on mouse move
        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;
            // Ensure the scrollbar thumb stays within bounds
            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
            
            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
        }
        // Remove event listeners on mouse up
        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }
        // Add event listeners for drag interaction
        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });
    // Slide images according to the slide button clicks
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });
     // Show or hide slide buttons based on scroll position
    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
    }
    // Update scrollbar thumb position based on image scroll
    const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
    }
    // Call these two functions when image list scrolls
    imageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
    });
}
window.addEventListener("resize", initSlider);
window.addEventListener("load", initSlider);
// Number counting animation
function animateNumbers() {
    const stats = document.querySelectorAll('.stat-number');
    
    stats.forEach(stat => {
        const target = parseInt(stat.textContent);
        let count = 0;
        
        const animate = () => {
            const increment = target / 50;
            count = Math.min(target, count + increment);
            stat.textContent = Math.floor(count) + '+';
            
            if(count < target) {
                requestAnimationFrame(animate);
            }
        };
        
        requestAnimationFrame(animate);
    });
}

// Intersection Observer for scroll-triggered animation
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            animateNumbers();
            observer.unobserve(entry.target);
        }
    });
});

observer.observe(document.querySelector('.stats-container'));


    </script>
</body>
</html>