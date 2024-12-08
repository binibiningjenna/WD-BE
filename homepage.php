<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMAR's Portfolio</title>
    <link rel="icon" type="image/x-icon" href="https://rb.gy/meegx">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
        body {
            background-color: #000000;
            color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #ffffff;
            font-size: 1.5rem;
            margin-top: 0;
        }
        h2 {
            font-size: 3rem;
        }
        
        h3 {
            padding-top: 20px;
            font-weight: bold;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 15px;
        }

        .logo {
            width: 70px;
        }

        .intro {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            padding: 20px;
        }

        .intro-image {
            width: 100%;
            max-width: 400px;
            margin-top: 20px;
        }

        .projects-section {
            padding: 10px 15px;
            text-align: center;
        }

        .project-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px; 
        }

        .project-card {
            background-color: #1f1f1f;
            border-radius: 20px;
            padding: 30px;
            margin: 20px;
            position: relative;
            overflow: hidden;
            width: 300px; 
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .project-preview {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 20px;
            position: relative;
            z-index: 1;
        }

        .project-card:hover {
            opacity: 1;
        }

        .btn-custom {
            background-color: #ffec44;
            color: black;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 20px;
            transition: background-color 0.3s;
            text-decoration: none;
            margin-top: 15px;
            z-index: 3;
        }

        .btn-custom:hover {
            background-color: white;
            color: black;
        }

        @media (min-width: 768px) {
            .intro {
                flex-direction: row;
                text-align: left;
            }

            .intro-image {
                max-width: 40%;
                margin-top: 0;
            }

            .project-card {
                max-width: 350px;
            }
        }

        .separator {
            border-top: 2px solid #ffec44;
            width: 90%;
            margin: 50px auto;
        }

        .social-links a {
            text-decoration: none; 
            border: none;         
            margin: 0 15px;      
        }

        .social-links a img {
            display: inline-block;
            transition: transform 0.3s ease-in-out;
        }

        .social-links a:hover img {
            transform: scale(1.1); 
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <div class="header">
        <img src="assets/images/logo.png" alt="Logo" class="logo">
    </div>

    <!-- Intro Section -->
    <div class="intro">
        <div class="intro-text">
            <h1>HELLO!</h1>
            <h2>I'm <span style="color: #fbff0e;">Jenna Miles</span></h2>
            <h3 style="padding-top: 0; font-weight: lighter;">Future Web Developer</h3>
        </div>
        <img src="assets/images/myprofile.png" alt="Jenna Miles" class="intro-image">
    </div>

    <div class="separator"></div>

    <!-- Projects Section -->
    <div class="projects-section">
        <h1>MY PORTFOLIO</h1>
        <h5>This is my projects in Web Development - Back End</h5>
        <div class="project-container">
            <div class="project-card">
                <img src="assets/images/activity08.png" alt="Project 1" class="project-preview">
                
                <h3>Project 1</h3>
                <p>A dynamic site showcasing the Islands of Personality, highlighting unique traits and cherished memories.</p>
                <a href="A08/index.php" target="_blank" class="btn btn-custom">View Project</a>
            </div>
            <div class="project-card">
                <img src="assets/images/Coming Soon.png" alt="Project 2" class="project-preview">
                
                <h3>Project 2</h3>
                <p>Stay tuned! A fresh project is launching soon, and you won't want to miss it!</p>
                <a href="https://tse3.mm.bing.net/th?id=OIP.cpKI3pJxBNBptBUbIPIeDQHaEK&pid=Api&P=0&h=180" target="_blank" class="btn btn-custom">View Project</a>
            </div>
            <div class="project-card">
                <img src="assets/images/Coming Soon.png" alt="Project 3" class="project-preview">
             
                <h3>Project 3</h3>
                <p>Stay tuned! A fresh project is launching soon, and you won't want to miss it!</p>
                <a href="https://tse3.mm.bing.net/th?id=OIP.cpKI3pJxBNBptBUbIPIeDQHaEK&pid=Api&P=0&h=180" target="_blank" class="btn btn-custom">View Project</a>
            </div>
            <div class="project-card">
                <img src="assets/images/Coming Soon.png" alt="Project 4" class="project-preview">
            
                <h3>Project 4</h3>
                <p>Stay tuned! A fresh project is launching soon, and you won't want to miss it!</p>
                <a href="https://tse3.mm.bing.net/th?id=OIP.cpKI3pJxBNBptBUbIPIeDQHaEK&pid=Api&P=0&h=180" target="_blank" class="btn btn-custom">View Project</a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div style="background-color: #1f1f1f; padding: 40px 0; margin-top: 50px;">
        <div class="container text-center">
            <p style="color: #fbff0e; font-size: 1.5rem; font-weight: bold;">Let's Connect!</p>
            <p style="color: #f5f5f5; font-size: 1rem;">Feel free to reach out or check out my work on GitHub and LinkedIn</p>
            
            <!-- Social Icons -->
            <div class="social-links">
                <!-- Email Button -->
                <a href="mailto:atienzajennamiles@gmail.com" target="_blank">
                    <img src="assets/images/email.png" alt="Email" style="width: 50px; height: 50px;">
                </a>

                <!-- GitHub Button -->
                <a href="https://github.com/binibiningjenna" target="_blank">
                    <img src="assets/images/github.png" alt="GitHub" style="width: 50px; height: 50px;">
                </a>

                <!-- LinkedIn Button -->
                <a href="https://www.linkedin.com/in/jenna-miles-reyes-4593b1246/" target="_blank">
                    <img src="assets/images/linkedin.png" alt="LinkedIn" style="width: 50px; height: 50px;">
                </a>
            </div>

            <p style="color: #f5f5f5; margin-top: 20px; font-size: 0.9rem;">&copy; 2024 Jenna Miles | All Rights Reserved</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>