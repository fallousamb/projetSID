<div class="row">
    <div class="col-md-8">
        <h3 style="padding-bottom: 30px;">Liste des hôtels avec internet</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>Nom de l'hotel</td>
                <td>Note</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach(App::getInstance()->getTable('Hotel')->getHotelsWithInternet() as $hotels): ?>
                <tr>
                    <td><?= $hotels->nom_hotel; ?></td>
                    <td><?= $hotels->moyenne; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <div class="col-md-4" style="padding-top: 10%; padding-left: 5%;">
        <h2>Les services</h2>
        <ul>
            <li><a href="?p=internet">Internet</a></li>
            <li><a href="?p=clim">Climatisation</li>
            <li><a href="?p=piscine">Piscine</li>
        </ul>
    </div>
</div>