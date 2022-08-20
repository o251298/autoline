<?php include 'layouts/header.php'; ?>
<div class="col-md-9">
    <h4>All</h4>
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://cdni.autocarindia.com/Utils/ImageResizer.ashx?n=https://cdni.autocarindia.com/ExtraImages/20200506061525_Mahindra-Scorpio-2.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $transport->getName();?> <strong style="color: darkgrey; font-weight: lighter">(<?php echo $transport->getColor();?>)</strong></h5>
                    <p class="card-text"><?php echo $transport->getDescription();?></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Amount</th>
                            <th scope="col">Color</th>
                            <th scope="col">Speed</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"><?php echo $transport->getAmount();?></th>
                            <td><?php echo $transport->getColor();?></td>
                            <td><?php echo $transport->getSpeed();?></td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary">Primary</button>
                </div>
            </div>
        </div>
    </div>


</div>
<?php include 'layouts/footer.php'; ?>
