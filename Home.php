<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles.css">
  <style>

body, h1, h2, h3, p, button {
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background-color: gainsboro; 
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1, h2, h3 {
  color: white;
  text-align: center; 
}

header {
  text-align: center;
  background-color: forestgreen; 
  color: white;
  padding: 20px 0;
}

.logo {
  max-width: 150px;
  height: auto;
}

.nav-links {
  text-align: center;
  margin: 20px 0;
}

.nav-links a {
  margin: 0 15px;
  color: dimgray; 
  text-decoration: none;
  padding: 8px 16px;
  border-radius: 5px;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.nav-links a:hover {
  background-color: mediumseagreen;
  color: white;
}

.cta-button {
  text-align: center;
  margin: 20px 0;
}

.cta-button a {
  display: inline-block;
  padding: 10px 20px;
  background-color: mediumseagreen; 
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.cta-button a:hover {
  background-color: seaGreen; 
}

.discount-section {
  padding: 30px;
  text-align: center;
}

.discount-image img {
  max-width: 100%;
  height: auto;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.discount-image img:hover {
  transform: scale(1.05);
}

.discount-section h2 {
  font-size: 2rem;
  color: mediumseagreen; 
  margin-bottom: 20px;
}


  </style>




  <title>RSR General Stores</title>
</head>
<body>
  <header>
  <img src="RSR.png" alt="RSR General Stores Logo" class="logo">
    <h1>Welcome to RSR General Stores</h1>
    <p>Unveiling Quality and Convenience: RSR General Stores!</p>
  </header>

  <nav class="nav-links">
    <a href="home.php">Home</a>
    <a href="general.html">General</a>
    <a href="stationary.html">Stationary</a>
    <a href="dairy.html">Dairy</a>
    
    <a href="aboutus.html">About Us</a>
    
  </nav>

  
  <main>
    <section class="discount-section">
      <h2>Grocery Discounts</h2><br><br>
      <div class="discount-image">
        <img src="grocerydiscounts.jpg" alt="Special Grocery Discounts">
      </div>
    </section>
    
    <section class="discount-section">
      <h2>Stationery Discounts</h2><br><br>
      <div class="discount-image">
        <img src="stationarydiscount.jpg" alt="Special Stationery Discounts" width="710" height="700">
      </div>
    </section>
  </main>
  
  <div class="cta-button">
    <a href="products.html">Explore More</a>
    
  </div>


</body>
</html>
