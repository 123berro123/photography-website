<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Collage in Header</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Navigation Bar */
        .nav {
            width: 100%;
            top: 0;
            left: 0;
            z-index: 100;
            padding: 10px 20px;
            font-family: "Trirong", serif;
            background-color: white; /* Optional: Add a background color */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: Add a slight shadow for depth */
            position: fixed; /* Keeps the nav fixed at the top */
        }

        .nav ul {
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .nav ul li {
            display: inline-block;
            margin: 0 40px; 
        }

        .nav ul li a {
            text-decoration: none;
            color: #5C4033;
            font-size: 18px;
            font-weight: bold;
            padding: 10px 15px;
            transition: background 0.3s, color 0.3s;
            border-radius: 5px;
        }

        .nav ul li a:hover {
            background: #fff;
            color: #333;
        }

        /* Logo Styling */
        .nav ul .logo {
          position: relative;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav ul .logo img {
            height: 100px;
            width: 130px; /* Maintain aspect ratio */
        }

        /* Responsive Navigation */
        @media (max-width: 768px) {
            .nav {
                padding: 10px;
            }

            .nav ul {
                flex-direction: row; /* Stack items vertically */
                gap: 10px;
                align-items: center; /* Center align items */
            }

            .nav ul li a {
                font-size: 16px; /* Adjust font size for smaller screens */
                padding: 8px 12px;
            }

            .nav ul .logo {
                margin-bottom: 10px; /* Add spacing below the logo */
            }

            .nav ul .logo img {
                height: 40px; /* Adjust logo size for smaller screens */
            }
        }

        /* Mobile Menu Toggle */
        .nav-toggle {
            display: none; /* Hidden by default */
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
            color: #5C4033;
        }

        /* Show toggle button for small screens */
        @media (max-width: 768px) {
            .nav-toggle {
                display: block;
            }

            .nav ul {
                display: none; /* Hidden initially */
                flex-direction: column;
                background-color: #EADDCA; /* Match background */
                width: 100%; /* Full width */
                position: absolute;
                left: 0;
                z-index: 99;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .nav ul.active {
                display: flex; /* Show menu when active */
            }
        }
    </style>
</head>
<body>
    <header class="hero">
        <div class="overlay">
            <nav class="nav">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="logo">
                        <img src="assets/images/logopng.png" alt="Logo">
                    </li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            
        </div>
        
    </header>
</body>
</html>
