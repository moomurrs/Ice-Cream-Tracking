<?php require "partials/head.php"; ?>
<?php require "partials/banner.php"; ?>
<?php require "models/pricing.model.php"; ?>

<main class="container">
    <h4 class="mb-4">Below is your order summary and pickup time</h4>

    <div class="row row-cols-1 row-cols-xl-2 gx-4 g-4">

        <div class="col">
            <div class="card border-primary">
                <div class="card-header">
                    <h4 class="card-title">Receipt</h4>
                </div>

                <div class="card-body fs-4">

                    <ul>
                        <li class="bg-primary rounded-2 p-1 mb-2">Cone: <?= $order['cone-type'] ?>
                            $<?= number_format((float) $cone_type[$order['cone-type']], 2, '.', '') ?></li>
                        <?php
                        foreach ($order['flavor-type'] as $f) {
                            $price = number_format((float) $flavor_type[$f], 2, '.', '');

                            echo "<li class='bg-info rounded-2 p-1 mb-2'>Flavor: $f $$price</li>";
                        }

                        foreach ($order['topping-type'] as $t) {
                            $price = number_format((float) $topping_type[$t], 2, '.', '');

                            echo "<li class='bg-success rounded-2 p-1 mb-2'>Topping: $t $$price</li>";
                        }

                        ?>

                        <p><b>Total</b>:
                            <?php
                            $total = 0.0;

                            $total += $cone_type[$order['cone-type']];

                            foreach ($order['flavor-type'] as $f) {
                                $total += number_format((float) $flavor_type[$f], 2, '.', '');
                            }

                            foreach ($order['topping-type'] as $t) {
                                $total += number_format((float) $topping_type[$t], 2, '.', '');
                            }

                            echo '$' . number_format((float) $total, 2, '.', '');;
                            ?>
                        </p>

                    </ul>

                </div>
            </div>
        </div>

        <div class="col">
            <div class="card <?= $is_ready ? 'border-success' : 'border-danger' ?> mb-4">
                <div class="card-header">
                    <h4 class="card-title">Order Status: <?= $is_ready ? 'Ready!' : 'In Progress...' ?></h4>
                </div>

                <div class="card-body fs-4">
                    <p>Pickup time: <span class="fs-2 fw-bold">
                            <?= $human_time ?></span><span class="fs-5">pm <em>EST</em></span>
                    </p>
                </div>
            </div>
        </div>


    </div>

</main>



<?php require "partials/foot.php"; ?>