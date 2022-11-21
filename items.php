<!-- item section -->


<section class="h-100 gradient-custom">
    <!-- add button -->
    <div class="container py-5">
        <div class="d-flex align-items-end ">
            <div class="ms-auto">
                <a href="#modal-product" onclick="clear_product()" data-bs-toggle="modal" class="btn btn-success btn-rounded px-4 rounded-pill"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add product</a>
            </div>
        </div>
        <!-- add button -->


        <div class="row d-flex justify-content-evenly my-4 ">

            <div class="col-lg-3 col-md-6 col-sm-6 ">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">1-string</h5>
                    </div>

                    <?php
                    //PHP CODE HERE
                    foreach ($strings as $product) {

                    ?>

                        <div class="card-body" id="<?php echo $product['id']  ?>" onclick="get_product(<?php echo $product['id']  ?>)">
                            <!-- Single item -->
                            <div class="row ">
                                <div class="row-cols-1  col-md-12 mb-4 mb-lg-0d">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded w-100" data-mdb-ripple-color="light">
                                        <div style="width: 100%; height: 250px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(image/products/<?php echo $product['picture']  ?>);">

                                        </div>
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p data-product="<?php echo $product['title']  ?>"><strong><?php echo $product['title']  ?></strong></p>
                                    <p data-product="<?php echo $product['color']  ?>">Color: <?php echo $product['color']  ?></p>
                                    <p data-product="<?php echo $product['description']  ?>" class="text-truncate"><?php echo $product['description']  ?></p>

                                    <!-- Quantity -->
                                    <div class="form-outline d-flex justify-content-between align-items-center">
                                        <label class="form-label" for="form1">Quantity :</label>
                                        <input id="form1" min="0" name="quantity" data-product="<?php echo $product['quantity']  ?>" value="<?php echo $product['quantity']  ?>" type="number" class="form-control w-50" />

                                    </div>
                                    <!-- Quantity -->

                                    <!-- Price -->
                                    <p class="text-start text-md-end">
                                        <strong data-product="<?php echo $product['prix']  ?>">$<?php echo $product['prix']  ?></strong>
                                    </p>
                                    <!-- Price -->

                                    <!-- Data -->
                                    <div data-product="<?php echo $product['category']  ?>">
                                    </div>
                                    <!-- Data -->
                                </div>
                            </div>
                            <!-- Single item -->
                        </div>
                        <hr>
                    <?php

                    }
                    //DATA FROM getproducts() FUNCTION
                    ?>
                </div>
            </div>

            <!-- right here second  -->
            <div class="col-lg-3 col-md-6 col-sm-6 ">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">2-Wind</h5>
                    </div>

                    <?php
                    //PHP CODE HERE
                    foreach ($winds as $product) {

                    ?>

                        <div class="card-body" id="<?php echo $product['id']  ?>" onclick="get_product(<?php echo $product['id']  ?>)">
                            <!-- Single item -->
                            <div class="row ">
                                <div class="row-cols-1  col-md-12 mb-4 mb-lg-0d">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded w-100" data-mdb-ripple-color="light">
                                        <div style="width: 100%; height: 250px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(image/products/<?php echo $product['picture']  ?>);">

                                        </div>
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p data-product="<?php echo $product['title']  ?>"><strong><?php echo $product['title']  ?></strong></p>
                                    <p data-product="<?php echo $product['color']  ?>">Color: <?php echo $product['color']  ?></p>
                                    <p data-product="<?php echo $product['description']  ?>" class="text-truncate"><?php echo $product['description']  ?></p>

                                    <!-- Quantity -->
                                    <div class="form-outline d-flex justify-content-between align-items-center">
                                        <label class="form-label" for="form1">Quantity :</label>
                                        <input id="form1" min="0" name="quantity" data-product="<?php echo $product['quantity']  ?>" value="<?php echo $product['quantity']  ?>" type="number" class="form-control w-50" />

                                    </div>
                                    <!-- Quantity -->

                                    <!-- Price -->
                                    <p class="text-start text-md-end">
                                        <strong data-product="<?php echo $product['prix']  ?>">$<?php echo $product['prix']  ?></strong>
                                    </p>
                                    <!-- Price -->

                                    <!-- Data -->
                                    <div data-product="<?php echo $product['category']  ?>">
                                    </div>
                                    <!-- Data -->
                                </div>
                            </div>
                            <!-- Single item -->
                        </div>
                        <hr>
                    <?php

                    }
                    //DATA FROM getproducts() FUNCTION
                    ?>
                </div>
            </div>
            <!-- right here therd  -->
            <div class="col-lg-3 col-md-6 col-sm-6 ">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">3-Percussion</h5>
                    </div>

                    <?php
                    //PHP CODE HERE
                    foreach ($percussions as $product) {

                    ?>

                        <div class="card-body" id="<?php echo $product['id']  ?>" onclick="get_product(<?php echo $product['id']  ?>)">
                            <!-- Single item -->
                            <div class="row ">
                                <div class="row-cols-1  col-md-12 mb-4 mb-lg-0d">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded w-100" data-mdb-ripple-color="light">
                                        <div style="width: 100%; height: 250px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(image/products/<?php echo $product['picture']  ?>);">

                                        </div>
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p data-product="<?php echo $product['title']  ?>"><strong><?php echo $product['title']  ?></strong></p>
                                    <p data-product="<?php echo $product['color']  ?>">Color: <?php echo $product['color']  ?></p>
                                    <p data-product="<?php echo $product['description']  ?>" class="text-truncate"><?php echo $product['description']  ?></p>

                                    <!-- Quantity -->
                                    <div class="form-outline d-flex justify-content-between align-items-center">
                                        <label class="form-label" for="form1">Quantity :</label>
                                        <input id="form1" min="0" name="quantity" class="quantity-pro" data-product="<?php echo $product['quantity']  ?>" value="<?php echo $product['quantity']  ?>" type="number" class="form-control w-50" />

                                    </div>
                                    <!-- Quantity -->

                                    <!-- Price -->
                                    <p class="text-start text-md-end">
                                        <strong data-product="<?php echo $product['prix']  ?>">$<?php echo $product['prix']  ?></strong>
                                    </p>
                                    <!-- Price -->

                                    <!-- Data -->
                                    <div data-product="<?php echo $product['category']  ?>">
                                    </div>
                                    <!-- Data -->
                                </div>
                            </div>
                            <!-- Single item -->
                        </div>
                        <hr>
                    <?php

                    }
                    //DATA FROM getproducts() FUNCTION
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- item section -->