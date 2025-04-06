<?php require "partials/head.php"; ?>
<?php require "partials/banner.php"; ?>

<div class="container">
    <div class="row row-cols-2 row-cols-lg-4 gy-1 gx-1">
        <div class="col">
            <div class="card">a</div>
        </div>
        <div class="col">
            <div class="card">b</div>
        </div>
        <div class="col">
            <div class="card">c</div>
        </div>
        <div class="col">
            <div class="card">d</div>
        </div>
    </div>

    <br />

    <form>
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" placeholder="user@email.com" class="form-control">
        <input type="range" id="range" class="form-range">
        <select class="form-select">
            <option>one</option>
            <option>two</option>
        </select>
        <button>Submit</button>
    </form>

    <form>
        <div class="input-group">
            <div class="input-group-text">$</div>
            <input type="number" class="form-control" />
            <button class="btn btn-primary">+</button>
        </div>
    </form>

    <br />

    <!-- floating label -->
    <form class="needs-validation" novalidate>
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" placeholder="user@email.com" required class="form-control">

        <div class="invalid-feedback">
            Enter email
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>

    <br />

    <button class="btn btn-outline-danger" data-bs-toggle="button" arias-pressed="false">Toggle</button>

    <br />

    <div class="alert alert-danger alert-dismissible" role="alert">
        Alert
        <button class="btn-close" aria-label="close" data-bs-dismiss="alert"></button>
    </div>

    <br />

    <div class="container">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">Open</button>
        <div class="modal fade" id="modal">
            <div class="modal-dialog">
                <div class="modal-content">wow</div>
            </div>
        </div>

    </div>

</div>

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