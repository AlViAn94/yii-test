<?php
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Nav;

?>

<?php $this->beginPage(); ?>

<html>

    <head>
        <title>Main</title>
        <?php $this->head(); ?>

    </head>

    <body>
    <?php $this->beginBody(); ?>

    <?php
    NavBar::begin([
            'brandLabel' => 'ITVDN',
            'brandUrl' => Yii::$app->homeUrl,
            'options' =>[
                    'class' => 'navbar-default navbar-fixed-top'
            ]
    ]);
    $items = [
            ['label' => 'join', 'url' => ['/user/join']],
            ['label' => 'login', 'url' => ['/user/login']]
    ];
    echo Nav::Widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $items
        ]);
    NavBar::end();
    ?>
    <div class="container mt-4">
        <?= $content ?>
    </div>
    <?php $this->endBody(); ?>
    </body>

</html>
<?php $this->endPage(); ?>

