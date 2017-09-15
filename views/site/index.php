<?php

    use app\models\Buku;
    use app\models\Penerbit;
    use app\models\Penulis;
    use app\models\User;
    use app\models\Member;
    use yii\helpers\Html;
    use yii\helpers\Url;

?>

<?php print Html::a('link',['site/index']);
print Url::to(['site/index']);
?>
<div class="site-index">
    <div class="box box-primary">
            <div class="box-header with-border">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                <p>Jumlah Buku</p>
                    <div class="icon">
                    <i class="fa fa-book"></i>
                    </div>
                    <h3><?= Buku::getCount(); ?></h3>
                    <span style="font-size: 30px"></span>
                </div>
                <a class="small-box-footer" href="<?= Url::to(['buku/index']); ?>">Klik disini untuk melihat buku</a>
            </div>
        </div>
            <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                <p>Jumlah Penerbit</p>
                    <div class="icon">
                    <i class="fa fa-user"></i>
                    </div>
                    <h3><?= Penerbit::getCount(); ?></h3>
                    <span style="font-size: 30px"></span>
                </div>
                <a class="small-box-footer" href="<?= Url::to(['penerbit/index']); ?>">Klik disini untuk melihat Penerbit</a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                <p>Jumlah Penulis</p>
                    <div class="icon">
                    <i class="fa fa-user"></i>
                    </div>
                    <h3><?= Penerbit::getCount(); ?></h3>
                    <span style="font-size: 30px"></span>
                </div>
                <a class="small-box-footer" href="<?= Url::to(['penulis/index']); ?>">Klik disini untuk melihat Penulis</a>
            </div>
        </div>
            <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-purple">
                <div class="inner">
                <p>Jumlah User</p>
                    <div class="icon">
                    <i class="fa fa-users"></i>
                    </div>
                    <h3><?= Member::getCount(); ?></h3>
                    <span style="font-size: 30px"></span>
                </div>
                <a class="small-box-footer" href="<?= Url::to(['member/index']); ?>">Klik disini untuk melihat Member</a>
                 </div>
             </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Grafik Peminjaman Buku</h3>
            </div>
            <div class="box-body">
               
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Grafik Penulis</h3>
            </div>
            <div class="box-body">
               
            </div>
        </div>
    </div>
</div>
