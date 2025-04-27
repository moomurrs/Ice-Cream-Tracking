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
                            <input class="form-check-input" type="radio" name="coneType" value="normal" id="normalCone">
                            <label class="form-check-label" for="normalCone">
                                Normal Cone 🍦<span
                                    class="fs-6">(+$<?= number_format((float) $cone_type["normal"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="coneType" value="waffle" id="waffleCone">
                            <label class="form-check-label" for="waffleCone">
                                Waffle Cone 🧇 <span
                                    class="fs-6">(+$<?= number_format((float) $cone_type["waffle"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="coneType" value="bowl" id="noCone">
                            <label class="form-check-label" for="noCone">
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

                    <div class="card-body fs-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="chocolate" id="checkChocolate">
                            <label class="form-check-label" for="checkChocolate">
                                Chocolate 🍫<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["chocolate"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="vanilla" id="checkVanilla">
                            <label class="form-check-label" for="checkVanilla">
                                Vanilla 🍦<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["vanilla"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="strawberry" id="checkStrawberry">
                            <label class="form-check-label" for="checkStrawberry">
                                Strawberry 🍓<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["strawberry"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="cookie_dough" id="checkCookieDough">
                            <label class="form-check-label" for="checkCookieDough">
                                Cookie Dough 🍪<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["cookie_dough"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="butter_pecan" id="checkButterPecan">
                            <label class="form-check-label" for="checkButterPecan">
                                Butter Pecan 🧈<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["butter_pecan"], 2, '.', '') ?>)</span>
                            </label>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col">
                <div class="card border-info">
                    <div class="card-header">
                        <h4 class="card-title">Step 3: Choose <em>bizzare</em> toppings</h4>
                    </div>
                    <div class="card-body fs-4">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="cicada" id="checkCicada">
                            <label class="form-check-label" for="checkCicada">
                                Cicadas 🪰<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["cicada"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flower" id="checkFlower">
                            <label class="form-check-label" for="checkFlower">
                                Flower petals (Pear Tree) 🌸<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["flower"], 2, '.', '') ?>)</span>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="oreos" id="checkOreos">
                            <label class="form-check-label" for="checkOreos">
                                Oreo's &#174; 🍪<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["oreos"], 2, '.', '') ?>)</span>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="popcorn" id="checkPopcorn">
                            <label class="form-check-label" for="checkPopcorn">
                                Popcorn 🍿<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["popcorn"], 2, '.', '') ?>)</span>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="fries" id="checkFries">
                            <label class="form-check-label" for="checkFries">
                                Fries 🍟<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["fries"], 2, '.', '') ?>)</span>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="pepperoni" id="checkPepperoni">
                            <label class="form-check-label" for="checkPepperoni">
                                Pepperoni (from Butcher's Block) 🍖<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["pepperoni"], 2, '.', '') ?>)</span>
                            </label>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-success my-4">Submit</button>
    </form>

</main>

<?php require "partials/foot.php"; ?>