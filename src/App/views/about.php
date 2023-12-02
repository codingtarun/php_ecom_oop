<?php include $this->resolve("partials/_header.php"); ?>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12">
                <h1><?php echo $msg; ?></h1>
                <p><?php echo e($danger); ?></p>
            </div>
        </div>
    </div>
    <?php include $this->resolve("partials/_footer-scripts.php"); ?>
</body>

</html>