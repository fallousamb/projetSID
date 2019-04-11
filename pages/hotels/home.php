<div class="row">
    <div class="col-md-8">
        <h1>Les hôtels</h1>
        <?php foreach(App::getInstance()->getTable('Hotel')->getNameHotels() as $hotels): ?>

        <?php endforeach; ?>
    </div>

    <div class="col-md-4" style="padding-top: 10%;">
        <h2>Les services</h2>
        <ul>
            <li>Internet</li>
            <li>Climatisation</li>
            <li>Piscine</li>
        </ul>
    </div>
</div>