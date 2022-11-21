<div class="container-fluid">
    <section>
        <div class="row">
            <div class="col-12 mt-3 mb-1">
                <h5 class="text-uppercase">Minimal Statistics Cards</h5>
                <p>Statistics on minimal cards.</p>
            </div>
        </div>

        <div class="row d-flex justify-content-evenly">
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 class="text-danger"><?php
                                                        echo countProduct(); ?></h3>
                                <p class="mb-0">Total products</p>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-rocket text-danger fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 class="text-success"><?php
                                                            echo countAdmin(); ?></h3>
                                <p class="mb-0">Total admins</p>
                            </div>
                            <div class="align-self-center">
                                <i class="far fa-user text-success fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>