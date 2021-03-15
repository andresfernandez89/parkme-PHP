<div class="container">
    <h1 class="my-4">ESTACIONAMIENTOS
    <small>Secondary Text</small>
    </h1>
    <?php
        foreach ($object as $key => $vendor) {
    ?>
    <div class="row">
    <div class="col-md-7">
        <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Project One</h3>
        <a class="btn btn-primary" href="#">View Project</a>
    </div>
    </div>
    <hr>
    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
        </a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
        </a>
    </li>
    </ul>
</div>