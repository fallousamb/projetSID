<h1 style="text-align: center">Visualasation</h1>
<?php
if(!empty($_POST)) {
    if(!empty($_POST['service'])) {
        if ($_POST['service'] == 1){
            $app = App::getInstance()->getTable('Hotel')->getHotelsWithInternet();
            $app1 = App::getInstance()->getTable('Hotel')->getHotelsWithoutInternet();

        ?>
        <div class="row">
            <div class="col-md-4">
                <div class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Hôtel qui offre le Service Internet</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?= $app[0]->moyenne; ?></td>
                    </tr>
                    </tbody>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Hôtel qui n'offre pas le Service Internet</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?= $app1[0]->moyenne; ?></td>
                    </tr>
                    </tbody>
                </div>
            </div>

        </div>

    <?php
        }
    }?>
        <div class="col-md-4">
            <table  class="table table-striped" style="text-align: center">
                <thead align="center">
                <tr>
                    <th scope="col">Statistique</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><canvas id="doughnut-chart" width="500" height="350"></canvas></td>
                </tr>
                </tbody>
            </table>
        </div>
    <?php

}
