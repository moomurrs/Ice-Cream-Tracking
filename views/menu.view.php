<?php require "partials/head.php"; ?>
<?php require "partials/banner.php"; ?>

<main class="container">
    <div class="row row-cols-1 row-cols-xl-3 gx-4 g-4">

        <div class="col">
            <div class="card border-primary">
                <div class="card-header">
                    <h4 class="card-title">Step 1: Choose a cone</h4>
                </div>
                <div class="card-body">
                    <ul class="fs-4">
                        <li>Normal Cone 🍦</li>
                        <li>Waffle Cone 🧇</li>
                        <li>Bowl (no cone) 🥣</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-danger">
                <div class="card-header">
                    <h4 class="card-title">Step 2: Choose base flavor</h4>
                </div>
                <div class="card-body">
                    <ul class="fs-4">
                        <li class="list-group-items">Chocolate 🍫</li>
                        <li class="list-group-items">Vanilla 🍦</li>
                        <li class="list-group-items">Strawberry 🍓</li>
                        <li class="list-group-items">Cookie Dough 🍪</li>
                        <li class="list-group-items">Butter Pecan 🧈</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-info">
                <div class="card-header">
                    <h4 class="card-title">Step 3: Choose oddity toppings</h4>
                </div>
                <div class="card-body">
                    <ul class="fs-4">
                        <li>Cicadas 🪰</li>
                        <li>Flower petals (Pear Tree) 🌸</li>
                        <li>Oreo's &#174; 🍪</li>
                        <li>Popcorn 🍿</li>
                        <li>Fries 🍟</li>
                        <li>Pepperoni (from Butcher's Block) 🍖</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-success mb-4">
                <a href="/order">
                    <div class="card-header">Order &#9741;</div>
                    <img src="./img/order.jpg" class="img-fluid">
                </a>

                <div class="card-body">
                    <h4 class="card-title">Ready to Order?</h4>
                    <p class="card-text fs-3">
                        Place your order <a href="/order">here! &#9741;</a> Try making a custom ice cream of your
                        choice! Use our ordering system to choose your pickup time.
                    </p>
                </div>
            </div>
        </div>

    </div>

</main>

<?php require "partials/foot.php"; ?>