<?php require "partials/head.php"; ?>
<?php require "partials/banner.php"; ?>

<main class="container">
    <div class="card border-primary mb-4">
        <div class="card-header">Welcome!</div>
        <div class="card-body">
            <img src="./img/icecream1.jpg" class="img-thumbnail w-50 float-start mx-2 rounded-3">
            <h4 class="card-title">Taster Beware, You're In For a Scare</h4>
            <p class="card-text fs-3">Here at <span class="fw-bold">Jojo's</span> <span class="fst-italic">Bizzare</span> Ice Cream shop 🍦, we serve a range of strange and bizzare flavors to whet your curiosity! 😱
                Ever read Ripley's <span class="fst-italic">Believe or Not!&#8482;</span> and wasn't grossed out? Do you like the random nature of Jelly Beans&#8482;? Come and try the horrors with your taste-buds! 😎</p>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 gy-4 gx-4">
        <div class="col">
            <div class="card border-info">
                <a href="/menu">
                    <div class="card-header">Menu &#9741;</div>
                </a>
                <div class="card-body">
                    <h4 class="card-title">Bizzare Flavors and Where to Find Them</h4>
                    <p class="card-text fs-3">
                        Take a look at our menu to begin your journal into the paranormal unique flavors!
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-success">
                <a href="/order">
                    <div class="card-header">Order &#9741;</div>
                </a>
                <div class="card-body">
                    <h4 class="card-title">Ready to Order?</h4>
                    <p class="card-text fs-3">
                        Place your order <a href="/order">here! &#9741;</a> Try making a custom ice cream of your choice! Use our ordering system to choose your pickup time.
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-warning">
                <a href="/gallery">
                    <div class="card-header">Gallery &#9741;</div>
                </a>
                <div class="card-body">
                    <h4 class="card-title">Not convinced? Check out our picture gallery of what's available!</h4>
                    <p class="card-text fs-3">
                        Here's a small selection to peek your
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-danger mb-4 mb-md-5">
                <a href="/contact">
                    <div class="card-header">Contact &#9741;</div>
                </a>
                <div class="card-body">
                    <h4 class="card-title">Catering, Questions, or Suggestions?</h4>
                    <p class="card-text fs-3">
                        We'd love to get in touch! DM for us catering events, ill-fated flavor suggestions, and other questions. See our other socials here.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <p class="text-start fst-italic">Stock Photo credit belongs to
        <a class="icon-link" href="https://www.pexels.com/">
            <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
            </svg>
            Pexels
        </a> and
        <a class="icon-link" href="https://unsplash.com/">
            <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
            </svg>
            Unsplash
        </a>
    </p>

</main>

<?php require "partials/foot.php"; ?>