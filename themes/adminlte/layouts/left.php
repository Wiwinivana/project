<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web').'/images/POLINDRA.png'; ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= ucwords(Yii::$app->user->identity->username) ?></p>                      

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <!-- <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span> -->
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['site/index'],],
                    ['label' => 'Buku', 'icon' => 'book', 'url' => ['buku/index']],
                    ['label' => 'Jenis Buku', 'icon' => 'book', 'url' => ['jenis/index']],
                    ['label' => 'Jenis Kelamin', 'icon' => 'child', 'url' => ['jenis-kelamin/index'],],
                    ['label' => 'Peminjaman', 'icon' => '', 'url' => ['peminjaman/index']],
                    ['label' => 'Penerbit', 'icon' => 'user', 'url' => ['penerbit/index']],
                    ['label' => 'Penulis', 'icon' => 'user', 'url' => ['penulis/index']],
                    ['label' => 'User', 'icon' => 'user', 'url' => ['user/index']],
                   /* ['label' => 'Member', 'icon' => 'users', 'url' => ['member/index']],
*/
                    
                   /* ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],*/
                    /*[
                        'label' => 'Same tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],*/
                    
                ],
            ]
        ) ?>

    </section>

</aside>
