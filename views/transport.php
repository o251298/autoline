<?php include 'layouts/header.php'; ?>
<div class="col-md-9">
    <h4>All</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="card mb-12">
            <div class="row g-0">
                <div class="col-md-12">
                    <img src="https://cdni.autocarindia.com/Utils/ImageResizer.ashx?n=https://cdni.autocarindia.com/ExtraImages/20200506061525_Mahindra-Scorpio-2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $transport->getName();?></h5>
                        <p class="card-text"><?php echo $transport->getDescription();?></p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include 'layouts/footer.php'; ?>
