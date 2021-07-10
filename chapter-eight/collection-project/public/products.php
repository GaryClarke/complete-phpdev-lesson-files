<?php

use App\Model\ProductRepository;

include 'includes/header.php';

// Get product record -> name, description, price, image-name
$id = $_REQUEST['id'];
$productRepo = new ProductRepository();
$product = $productRepo->findById($id);

// Get a collection of reviews which relate to the product
$reviews = $product->getReviews();

// Get only review which have a body
$reviewsWithBody = $reviews->filter(function($review) {

    return !empty($review->getBody());
});

// Get ratings and rating count
$ratings = $reviews->column('rating')->countValues()->krsort();

?>
<main class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <img src="./img/<?= $product->getImageName() ?>" alt="3d printer"
                         style="max-width: 300px; margin-bottom: 20px">
                    <h3 class="card-title"><?= $product->getName() ?> <span
                                class="badge bg-danger rounded-pill">
                            $<?= $product->getDisplayPrice() ?></span></h3>
                    <p class="card-text"><?= $product->getDescription() ?></p>
                    <a href="#" class="btn btn-primary">Buy this sucker!</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <h3>Product Rating</h3>
            <ul class="list-group">

                <?php foreach ($ratings as $rating => $count): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="badge bg-dark rounded-pill">
                            <?= str_repeat('⭐', $rating) ?>
                        </span>
                        <b><?= $count ?></b>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>



    <br>
    <hr>
    <h3>Customer Reviews</h3>
    <ul class="list-group">

        <?php foreach ($reviewsWithBody as $review): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <p><?= $review->getBody() ?>
                    <i class="text-muted"><?= $review->getPublicationDate()->format('M Y') ?></i>
                </p>
                <span class="badge bg-dark rounded-pill"><?= str_repeat('⭐', $review->getRating()) ?></span>
            </li>
        <?php endforeach; ?>
    </ul>

</main>












