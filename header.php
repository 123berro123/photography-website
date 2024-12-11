<head>
    <link rel="stylesheet" href="css/stylee.css">
</head>
<body>
<section class="hero">
    <div class="hero-content">
        <h1>“You don’t take a photograph, you make it.” </h1>
        <p>– Photo Heaven</p>
    </div>
</section>
        <div class="overlay">
            <?php include 'nav.php' ?>
            <div class="collage-wrapper">
                <div class="image-collage">
                    <div class="image-container">
                        <img src="assets/images/IMG-20241126-WA0025.jpg" alt="Image 1">
                    </div>
                    <div class="image-container">
                        <img src="assets/images/IMG-20241126-WA0026.jpg" alt="Image 2">
                    </div>
                    <div class="image-container">
                        <img src="assets/images/IMG-20241126-WA0027.jpg" alt="Image 3">
                    </div>
                </div>
            </div>
        </div>
        <div class="reimagine-text">
            <h2>
                <span class="highlight">Reimagine</span> 
                <span class="small">Your</span> 
                <span class="large">Elopement</span>
            </h2>
        </div>
        
    </header>
    <style>
       .hero {
    position: relative;
    top:150px;
    width: 100%;
    height: 190px; /* Reduced height */
    background-color: #EADDCA;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-content {
    text-align: center;
    color: #fff;
    animation: fadeIn 2s ease-in-out;
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 10px;
    font-family: "Sofia", sans-serif;
}

.hero p {
    font-size: 1.5rem;
    margin-bottom: 20px;
    padding-bottom:10px;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    
}

.reimagine-container {
    position: absolute;
    top: calc(50% + 100px); 
    transform: translateY(-50%);
    text-align: center;
}

.reimagine-text {
    font-family: "Trirong", Georgia, Times, "Times New Roman", serif;
    color: #5C4033;
    text-align: center;
    margin: 0;
    line-height: 1.2;
    text-transform: uppercase;
}

.reimagine-text .highlight {
    display: block;
    font-size: 4rem;
    font-weight: bold;
}

.reimagine-text .small {
    font-size: 1rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #333;
}

.reimagine-text .large {
    font-size: 4rem;
    font-weight: 300;
    line-height: 1;
}

@media (max-width: 768px) {
    .reimagine-text h2 {
        font-size: 2.5rem;
    }
    .reimagine-text .highlight {
        font-size: 2.5rem;
    }
    .reimagine-text .small {
        font-size: 0.9rem;
    }
    .reimagine-text .large {
        font-size: 2.5rem;
    }
}
</style>
</body>
