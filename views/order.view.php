<?php require "partials/head.php"; ?>
<?php require "partials/banner.php"; ?>

<main class="container">

    <?php 
        echo "<h1 class='bg-primary rounded-3 px-3 py-1'>We're currently Closed! Please come back later.</h1>"
    ?>

    <h4 class="mb-4">Our menu is in three easy steps: Cone type, base flavor, and toppings!</h4>

    <form accept="/order" method="post" class="needs-validation" novalidate>
        <div class="row row-cols-1 row-cols-xl-3 gx-4 g-4">

            <div class="col">
                <div class="card border-primary">
                    <div class="card-header">
                        <h4 class="card-title">Step 1: Choose a cone</h4>
                    </div>

                    <div class="card-body fs-4">

                        <div class="form-check <?= $cone_err ? 'is-invalid' : '' ?>">

                            <input class="form-check-input" type="radio" name="cone-type" value="normal" <?= $open ? '' : 'disabled' ?>
                                id="normalCone">
                            <label class="form-check-label" for="normalCone">
                                Normal Cone 🍦<span
                                    class="fs-6">(+$<?= number_format((float) $cone_type["normal"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cone-type" value="waffle" <?= $open ? '' : 'disabled' ?>
                                id="waffleCone">
                            <label class="form-check-label" for="waffleCone">
                                Waffle Cone 🧇 <span
                                    class="fs-6">(+$<?= number_format((float) $cone_type["waffle"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cone-type" value="bowl" id="noCone" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="noCone">
                                Bowl (no cone) 🥣<span
                                    class="fs-6">(+$<?= number_format((float) $cone_type["none"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="invalid-feedback">
                            <b>Cone type mandatory!</b>
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
                        <div class="form-check <?= $flavor_err ? 'is-invalid' : '' ?>">
                            <input class="form-check-input" type="checkbox" name="flavor-type[]" value="chocolate" id="checkChocolate" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="checkChocolate">
                                Chocolate 🍫<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["chocolate"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flavor-type[]" value="vanilla" id="checkVanilla" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="checkVanilla">
                                Vanilla 🍦<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["vanilla"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flavor-type[]" value="strawberry" id="checkStrawberry" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="checkStrawberry">
                                Strawberry 🍓<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["strawberry"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flavor-type[]" value="cookie_dough" id="checkCookieDough" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="checkCookieDough">
                                Cookie Dough 🍪<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["cookie_dough"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flavor-type[]" value="butter_pecan" id="checkButterPecan" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="checkButterPecan">
                                Butter Pecan 🧈<span
                                    class="fs-6">(+$<?= number_format((float) $flavor_type["butter_pecan"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="invalid-feedback">
                            <b>Flavor type mandatory!</b>
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
                            <input class="form-check-input" type="checkbox" name="topping-type[]" value="cicada" id="checkCicada" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="checkCicada">
                                Cicadas 🪰<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["cicada"], 2, '.', '') ?>)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="topping-type[]" value="flower" id="checkFlower" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="checkFlower">
                                Flower petals (Pear Tree) 🌸<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["flower"], 2, '.', '') ?>)</span>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="topping-type[]" value="oreos" id="checkOreos" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="checkOreos">
                                Oreo's &#174; 🍪<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["oreos"], 2, '.', '') ?>)</span>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="topping-type[]" value="popcorn" id="checkPopcorn" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="checkPopcorn">
                                Popcorn 🍿<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["popcorn"], 2, '.', '') ?>)</span>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="topping-type[]" value="fries" id="checkFries" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="checkFries">
                                Fries 🍟<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["fries"], 2, '.', '') ?>)</span>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="topping-type[]" value="pepperoni" id="checkPepperoni" <?= $open ? '' : 'disabled' ?>>
                            <label class="form-check-label" for="checkPepperoni">
                                Pepperoni (from Butcher's Block) 🍖<span
                                    class="fs-6">(+$<?= number_format((float) $topping_type["pepperoni"], 2, '.', '') ?>)</span>
                            </label>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-success my-4" <?= $open ? '' : 'disabled' ?>>Submit</button>
    </form>

</main>

<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>

<?php require "partials/foot.php"; ?>