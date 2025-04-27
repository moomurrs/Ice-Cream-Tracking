<?php require "partials/head.php"; ?>
<?php require "partials/banner.php"; ?>

<main class="container">
    <h4 class="mb-4">Our menu is in three easy steps: Cone type, base flavor, and toppings!</h4>

    <form accept="/order" method="post">
        <div class="row row-cols-1 row-cols-xl-3 gx-4 g-4">

            <div class="col">
                <div class="card border-primary">
                    <div class="card-header">
                        <h4 class="card-title">Step 1: Choose a cone</h4>
                    </div>

                    <div class="card-body fs-4">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                            <label class="form-check-label" for="radioDefault1">
                                Normal Cone 🍦<span
                                    class="fs-6">(+$<?= number_format((float) $cone_type["normal"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2">
                            <label class="form-check-label" for="radioDefault2">
                                Waffle Cone 🧇 <span
                                    class="fs-6">(+$<?= number_format((float) $cone_type["waffle"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault3">
                            <label class="form-check-label" for="radioDefault3">
                                Bowl (no cone) 🥣<span
                                    class="fs-6">(+$<?= number_format((float) $cone_type["none"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
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
                            <li class="list-group-items">Chocolate 🍫<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["chocolate"], 2, '.', '') ?>)</span>
                            </li>
                            <li class="list-group-items">Vanilla 🍦<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["vanilla"], 2, '.', '') ?>)</span>
                            </li>
                            <li class="list-group-items">Strawberry 🍓<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["strawberry"], 2, '.', '') ?>)</span>
                            </li>
                            <li class="list-group-items">Cookie Dough 🍪<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["cookie_dough"], 2, '.', '') ?>)</span>
                            </li>
                            <li class="list-group-items">Butter Pecan 🧈<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["butter_pecan"], 2, '.', '') ?>)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-info">
                    <div class="card-header">
                        <h4 class="card-title">Step 3: Choose <em>bizzare</em> toppings</h4>
                    </div>
                    <div class="card-body">
                        <ul class="fs-4">
                            <li>Cicadas 🪰<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["cicada"], 2, '.', '') ?>)</span>
                            </li>
                            <li>Flower petals (Pear Tree) 🌸<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["flower"], 2, '.', '') ?>)</span>
                            </li>
                            <li>Oreo's &#174; 🍪<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["oreos"], 2, '.', '') ?>)</span>
                            </li>
                            <li>Popcorn 🍿<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["popcorn"], 2, '.', '') ?>)</span>
                            </li>
                            <li>Fries 🍟<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["fries"], 2, '.', '') ?>)</span>
                            </li>
                            <li>Pepperoni (from Butcher's Block) 🍖<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["pepperoni"], 2, '.', '') ?>)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-success mt-2">Submit</button>
    </form>

</main>

<?php require "partials/foot.php"; ?>