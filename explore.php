<?php
require("includes/header.php");
?>


<section class="what's-on-ur-mind">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <form action="process_form.php" method="post">
                    <div class="form-group">
                        <textarea class="form-control" id="user_thoughts" name="user_thoughts" rows="3" placeholder="Share your thoughts..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
            <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">June 21, 2024</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae.</p>
                        <div class="vote-buttons">
                            <button class="btn btn-outline-primary btn-sm vote-up" onclick="voteUp(this)">
                                <i class="fa fa-thumbs-up"></i>
                            </button>
                            <span class="vote-count">10</span>
                            <button class="btn btn-outline-primary btn-sm vote-down" onclick="voteDown(this)">
                                <i class="fa fa-thumbs-down"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">June 21, 2024</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae.</p>
                        <div class="vote-buttons">
                            <button class="btn btn-outline-primary btn-sm vote-up" onclick="voteUp(this)">
                                <i class="fa fa-thumbs-up"></i>
                            </button>
                            <span class="vote-count">10</span>
                            <button class="btn btn-outline-primary btn-sm vote-down" onclick="voteDown(this)">
                                <i class="fa fa-thumbs-down"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">June 21, 2024</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae.</p>
                        <div class="vote-buttons">
                            <button class="btn btn-outline-primary btn-sm vote-up" onclick="voteUp(this)">
                                <i class="fa fa-thumbs-up"></i>
                            </button>
                            <span class="vote-count">10</span>
                            <button class="btn btn-outline-primary btn-sm vote-down" onclick="voteDown(this)">
                                <i class="fa fa-thumbs-down"></i>
                            </button>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</section>

<?php
require("includes/footer.php");
require("includes/script.php");
?>

