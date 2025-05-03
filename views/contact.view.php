<?php require "partials/head.php"; ?>
<?php require "partials/banner.php"; ?>

<main class="container">
    <div class="card border-primary mb-4">
        <div class="card-header">Questions, Requests, or Catering?</div>
        <div class="card-body">
            <h4 class="card-title">Quickly send us your questions or request below</h4>

            <form action="/contact" method="post">

                <label for="question-type" class="form-label">Question Type</label>
                <select name="question-type" class="form-select" id="question-type">
                    <option>General Question</option>
                    <option>Catering</option>
                    <option>Requests</option>
                </select>
                <textarea required name="text-input" class="form-control <?= $comment_err ? 'is-invalid' : '' ?>"
                    id="text-input" placeholder="Type in your message here..."></textarea>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please enter your message
                </div>

                <button type="submit" class="btn btn-success mt-2" id="liveToastBtn">Submit</button>
            </form>

        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 gy-4 gx-4">
        <div class="col">
            <div class="card border-info">
                <div class="card-header">Call or Email</div>
                <div class="card-body">
                    <h4 class="card-title">Fancy a chat or email?</h4>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Phone:</th>
                                <td><a href="tel:+8121234567">(812)-123-4567</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Email:</th>
                                <td><a href="mailto:jojosIceCream@Bizare.com">jojosIceCream@Bizare.com</a></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-success">
                <a href="www.instagram.com">
                    <div class="card-header">Instagram</div>
                    <img src="./img/instagram.jpg" class="img-fluid">
                </a>
                <div class="card-body">

                    <h4 class="card-title">Insta Handle</h4>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-warning mb-4">
                <a href="www.youtube.com">
                    <div class="card-header">Youtube</div>
                    <img src="./img/youtube.jpg" class="img-fluid">
                </a>
                <div class="card-body">
                    <h4 class="card-title">Watch our channel!</h4>
                </div>
            </div>
        </div>

            <?php if ($show_toast): ?>
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <strong class="me-auto fs-4">Message Received 📨</strong>
                            <button type="button" class="btn-close ms-2 mb-1" data-bs-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="toast-body fs-6">
                            We'll get back to you as soon as we can.
                        </div>
                    </div>
                </div>
            <?php endif; ?>
</main>

<script>
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')

    if (toastTrigger) {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
        toastTrigger.addEventListener('click', () => {
            toastBootstrap.show()
        })
    }
</script>
<?php require "partials/foot.php"; ?>