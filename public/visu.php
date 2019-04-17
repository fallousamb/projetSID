<div class="row">
    <?php
    if(!empty($_POST)) {
        $errors = array();
        if (empty($_POST['service'])) {
            $errors['service'] = "Merci de choisir un service";
        } else {
            if ($_POST['service'] === 1) {
                $app1 = App::getInstance()->getTable('Hotel')->getHotelsWithInternet();
                $app2 = App::getInstance()->getTable('Hotel')->getHotelsWithoutInternet();
            }?>
            <div class="col-md-4">
                <div class="table table-striped">
                    <thead>
                    <tr>
                        <th>Hôtel qui offre le Service Internet</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?⁼; $app->moyenne; ?></td>
                    </tr>
                    </tbody>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table table-striped">
                    <thead>
                    <tr>
                        <th>Hôtel qui offre le Service Internet</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?⁼; $app2->moyenne; ?></td>
                    </tr>
                    </tbody>
                </div>
            </div>
            <?php
        }
    }
    ?>

</div>
