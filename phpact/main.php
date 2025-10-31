<section class="bg-danger text-light text-center p-5">
  <div class="container">
    <h1 class="display-4 fw-bold">
      <i class="bi bi-cup-hot"></i> Welcome to FastFood Express!
    </h1>
    <p class="lead">
      Your one-stop hub for Jollibee, McDonald's, KFC, Mang Inasal, BonChon, and Greenwich favorites.
    </p>
    <a href="menu.php" class="btn btn-warning btn-lg">
      <i class="bi bi-cart4"></i> Order Now
    </a>
  </div>
</section>

<section class="container my-5">
  <h2 class="text-center mb-4">Featured Favorites</h2>
  <div class="row g-4">
    <?php
    $foods = [
      ["images/jolli.jpg", "🍗 Jollibee Chickenjoy", "Crispylicious, juicylicious fried chicken loved by all."],
      ["images/mcdo.jpg", "🍔 McDonald's Big Mac", "Iconic double-decker burger with special sauce."],
      ["images/kfc.jpg", "🍗 KFC Bucket Meal", "The Colonel's secret recipe chicken served by the bucket."],
      ["images/inasal.jpg", "♨️ Mang Inasal PM1", "Grilled chicken with unlimited rice and a Pinoy twist."],
      ["images/bonchon.jpg", "🍗 BonChon Korean Chicken", "Crispy, saucy Korean-style fried chicken goodness."],
      ["images/greenwich.jpg", "🍕 Greenwich Overload Pizza", "Fully loaded pizza topped with meats and veggies."]
    ];

    foreach ($foods as $food) {
      echo '
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <img src="'.$food[0].'" class="card-img-top food-img" alt="">
          <div class="card-body">
            <h5 class="card-title">'.$food[1].'</h5>
            <p class="card-text">'.$food[2].'</p>
          </div>
        </div>
      </div>';
    }
    ?>
  </div>
</section>
