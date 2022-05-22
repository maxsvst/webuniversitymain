<div class="container">
    <form action="/contact/send" method="POST" class="my-5">

        <h2 class="my-5">Send message</h2>

        <div class="container p-5">
            <?php
                if(isset($args)) {
                    foreach($args as $value) {
                        echo '<p>'.$value.'</p>';
                    }
                }
            ?>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="Email" class="form-control" id="mail" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="row">
            <div class="col">
                <button class="btn btn-primary w-20" type="submit">Send</button>
            <!-- </div>
            <div class="col"> -->
                <button class="btn btn-danger w-20" type="reset">Cancel</button>
            </div>
        </div>
    </form>

</div>
