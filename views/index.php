<?php include 'layouts/header.php'; ?>
<div class="col-md-9">
    <h4>All</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($result as $item): ?>
        <div class="col">
            <div class="card">
                <img src="https://cdni.autocarindia.com/Utils/ImageResizer.ashx?n=https://cdni.autocarindia.com/ExtraImages/20200506061525_Mahindra-Scorpio-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $item['name']; ?></h5>
                    <p class="card-text"><?php echo $item['description']; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include 'layouts/footer.php'; ?>
