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
                <textarea required name="text-input" class="form-control <?= $comment_err ? 'is-invalid' : '' ?>" id="text-input" placeholder="Type in your message here..."></textarea>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please enter your message
                </div>

                <button type="submit" class="btn btn-success mt-2">Submit</button>
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
                <div class="card-header">Instagram</div>
                <div class="card-body">
                    <h4 class="card-title">Insta Handle</h4>
                    <p class="card-text fs-3">
                        ???
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-warning">
                <div class="card-header">Youtube</div>
                <div class="card-body">
                    <h4 class="card-title">Watch our video!</h4>
                    <p class="card-text fs-3" style="white-space: pre-line;">???
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-danger mb-4 mb-md-5">
                <div class="card-header">???</div>
                <div class="card-body">
                    <h4 class="card-title">???</h4>
                    <p class="card-text fs-3" style="white-space: pre-line;">???
                    </p>
                </div>
            </div>
</main>
<?php require "partials/foot.php"; ?>