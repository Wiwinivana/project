<?php

    use app\models\Buku;
    use app\models\Penerbit;
    use app\models\Penulis;
    use yii\helpers\Html;
    use yii\helpers\Url;

?>

<?php print Html::a('link',['site/index']);
print Url::to(['site/index']);
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Jumlah Buku</h2>

                <div class="kotak">
                    <?= Buku::getCount(); ?>
                    <span style="font-size: 20px">Jumlah Buku</span>
                </div>
                <a class="btn btn-default" href="<?= Url::to(['buku/index']); ?>">Klik disini untuk melihat Buku</a>

            </div>
            <div class="col-lg-4">
                <h2>Jumlah Penerbit</h2>

                <div class="kotakk">
                    <?= Penerbit::getCount(); ?>
                    <span style="font-size: 20px">Jumlah Penerbit</span>
                </div>
                <a class="btn btn-default" href="<?= Url::to(['penerbit/index']); ?>">Klik disini untuk melihat Penerbit</a>

            </div>
            <div class="col-lg-4">
                <h2>Jumlah Penulis</h2>

                <div class="kotakkk">
                    <?= Penerbit::getCount(); ?>
                    <span style="font-size: 20px">Jumlah Penulis</span>
                </div>
                <a class="btn btn-default" href="<?= Url::to(['penulis/index']); ?>">Klik disini untuk melihat Penulis</a>
                 
            </div>
        </div>

    </div>
</div>
