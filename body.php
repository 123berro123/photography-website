<head>
    <link rel="stylesheet" href="css/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<section class="header-photo">
    <img src="assets/images/sc2.png" alt="Header Photo" class="header-image">
</section>
<div class="featured">
    <p>feautured</p>
    <h4>Posts</h4>
</div>

<div class="card-container">
    <!-- Card 1 -->
    <div class="card">
        <img src="assets/images/beautiful-blonde-woman-with-makeup-avatar-for-a-beauty-salon-illustration-in-the-cartoon-style-vector.jpg" 
            alt="Zion National Park Elopement" class="image">
        <div class="content">
            <h2>Zion National Park, Utah Elopement</h2>
            <p>Selena & Jonathan</p>
            <a href="#" class="button">View Post</a>
        </div>
    </div>
    <!-- Card 2 -->
    <div class="card">
        <img src="assets/images/beautiful-blonde-woman-with-makeup-avatar-for-a-beauty-salon-illustration-in-the-cartoon-style-vector.jpg" 
            alt="Sample Post 2" class="image">
        <div class="content">
            <h2>Mountain Adventure</h2>
            <p>Michael & Sarah</p>
            <a href="#" class="button">View Post</a>
        </div>
    </div>
    <!-- Card 3 -->
    <div class="card">
        <img src="assets/images/beautiful-blonde-woman-with-makeup-avatar-for-a-beauty-salon-illustration-in-the-cartoon-style-vector.jpg" 
            alt="Sample Post 3" class="image">
        <div class="content">
            <h2>Beachside Wedding</h2>
            <p>Emily & James</p>
            <a href="#" class="button">View Post</a>
        </div>
    </div>
</div>

<div class="kind">
    <h1>KIND WORDS</h1>
    <p>"AMAZING! Seriously, speechlessly stunning. It's rare to find a photographer that sends you final photos where you love and are impressed with every single one of them. But even a year later I STILL look and post mine in complete AWE of how they came out. Amazing raw talent, amazing personality. I literally wouldn't book anyone else.".</p>
    <h3>- Al Fox Carraway</h3>
</div>
<div class="testimonial-carousel">
    <div class="testimonial">
        <p>"Amazing experience! The photos are stunning."</p>
        <h3>- Jane Doe</h3>
    </div>
    <div class="testimonial">
        <p>"Captured our special day perfectly. Highly recommend!"</p>
        <h3>- John Smith</h3>
    </div>
    <div class="testimonial">
        <p>"The quality and creativity exceeded our expectations!"</p>
        <h3>- Sarah Johnson</h3>
    </div>
    <div class="testimonial">
        <p>"The quality and creativity exceeded our expectations!"</p>
        <h3>- Sarah Johnson</h3>
    </div>
    <div class="testimonial">
        <p>"The quality and creativity exceeded our expectations!"</p>
        <h3>- Sarah Johnson</h3>
    </div>
</div>
<a href="#" class="back-to-top">↑</a>
<section class="newsletter">
    <h2>Stay Updated</h2>
    <p>Subscribe to our newsletter for the latest updates and offers.</p>
    <form>
        <input type="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
    </form>
</section>
<div class="photo-collage">
        <img src="assets/images/ph3.jpg" alt="Photo 1">
        <img src="assets/images/ph3.jpg" alt="Photo 2">
        <img src="assets/images/ph3.jpg" alt="Photo 3">
        <img src="assets/images/ph3.jpg" alt="Photo 4">
        <img src="assets/images/ph3.jpg" alt="Photo 5">
        <img src="assets/images/ph3.jpg" alt="Photo 6">
        <div class="overlay">@leenberro_</div>
    </div>


<script>
    const backToTop = document.querySelector('.back-to-top');

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTop.style.display = 'block';
    } else {
        backToTop.style.display = 'none';
    }
});

backToTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

    </script>

<style>
    .photo-collage {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 5px;
    position: relative;
    max-width: 90%;
    overflow: hidden;
}

.photo-collage img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 5px;
}

.photo-collage .overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #5C4033;
    background-color: #f4f4f9;
    font-family: "Trirong", serif;
    padding: 10px 20px;
    font-size: 1.2rem;
    font-weight: bold;
    text-align: center;
}
    .newsletter {
    text-align: center;
    padding: 40px;
    background-color: #f9f5ef;
    border-radius: 10px;
    margin: 40px auto;
    max-width: 600px;
}

.newsletter h2 {
    font-size: 2rem;
    color: #8e735b;
}

.newsletter p {
    font-size: 1rem;
    margin: 10px 0;
    color: #555;
}

.newsletter input {
    padding: 10px;
    width: 70%;
    margin-right: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.newsletter button {
    padding: 10px 20px;
    background-color: #8e735b;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.newsletter button:hover {
    background-color: #704a3b;
}

.back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #8e735b;
    color: #fff;
    padding: 10px 15px;
    text-align: center;
    border-radius: 50%;
    display: none;
    font-size: 18px;
    cursor: pointer;
    z-index: 1000;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.back-to-top:hover {
    background-color: #704a3b;
    transform: scale(1.1);
}

    .testimonial-carousel {
        position: relative;
        top:30px;
    display: flex;
    overflow-x: auto;
    gap: 20px;
    padding: 20px;
    scroll-snap-type: x mandatory;
    background: #f9f5ef;
}

.testimonial {
    flex: 0 0 300px;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    scroll-snap-align: center;
    text-align: center;
}

.testimonial p {
    font-style: italic;
    color: #555;
}

.testimonial h3 {
    color: #8e735b;
    margin-top: 10px;
}

     /* General styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column; /* Stack all elements vertically */
    align-items: center;
}

/* Header section */
.header-photo {
    width: 100%;
    margin-bottom: 20px;
}

.header-image {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-bottom: 10px solid #fff;
}

/* Featured Section */
.featured {
    text-align: center;
    margin-top: 50px;
    font-family: "Trirong", serif;
}

.featured p {
    font-size: 30px;
    line-height: 1.6;
    margin: 0;
}

.featured h4 {
    font-size: 2rem;
    text-transform: uppercase;
    margin: 10px 0;
    font-family: "Sofia", sans-serif;
    color: #8e735b;
}

/* Card Container */
.card-container {
    display: flex;
    flex-direction: row; /* Stack cards vertically */
    align-items: center;
    gap: 40px;
    margin: 40px auto;

}

.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    max-width: 300px;
    text-align: center;
    position: relative;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.card .image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.card .content {
    padding: 20px;
    background-color: #faf8f6;
}

.card h2 {
    font-size: 18px;
    margin: 8px 0;
    color: #444;
}

.card p {
    font-size: 14px;
    color: #888;
    margin: 5px 0;
    padding:10px;
}

.card .button {
    padding: 10px 20px;
    background-color: #8e735b;
    color: #fff;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.card .button:hover {
    background-color: #704a3b;
}

/* Kind Words Section */
.kind {
    width:100%;
    text-align: center;
    margin-top: 60px;
    padding: 40px;
    background-color: #f9f5ef;
    max-width: 1500px;
    margin: 0;
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    
}

.kind h1 {
    font-size: 2.5rem;
    color: #8e735b;
    margin-bottom: 20px;
}

.kind p {
    font-size: 1.2rem;
    color: #555;
    font-style: italic;
    margin-bottom: 20px;
}

.kind h3 {
    font-size: 1.5rem;
    color: #8e735b;
}

/* Responsive Design */
@media (max-width: 768px) {
    .card-container {
        flex-direction: column;
        align-items: center;
    }

    .card {
        max-width: 100%;
    }
}


</style>