<?php
$this->layout = 'landing';

?>

<!-- HOME -->
<section class="bg-custom home" id="home">
    <div class="home-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="home-wrapper home-wrapper-alt p-0">
                        <h1 class="h1 font-light text-white w-full">Register your marks, calculates your averages and much more.</h1>
                        <h4 class="text-light w-full">
                            With Nessi you calculate your grades and track your average progress in a fully responsive web app.<br>
                            Our app works regardless of your school or grading scales.
                        </h4>
                        <?php if ($this->request->session()->read('Auth.User')) { ?>
                            <a href="<?= $this->Url->build(['controller' => 'Dashboard', 'action' => 'index', 'prefix' => false, 'plugin' => false]) ?>" class="btn btn-white-bordered">Go to app</a>
                        <?php }else{ ?>
                            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login', 'prefix' => false, 'plugin' => false]) ?>" class="btn btn-white-bordered">Sign Up</a>
                        <?php } ?>
                    </div>
                </div> <!-- end col -->

                <div class="col-md-6 col-sm-5">
                    <?= $this->Html->image('mockup_nessi_2.png', ['width' => '100%']) ?>

                </div><!-- end col -->
            </div>
        </div>
    </div>

</section>
<!-- END HOME -->


<!-- Features -->
<section class="section" id="features">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="title text-white">Powerful Yet Simple Features</h3>
                <p>Your marks, anytime, anywhere</p>
            </div>
        </div> <!-- end row -->

        <div class="row">
            <div class="col-sm-4">
                <div class="features-box">
                    <i class="pe-7s-rocket"></i>
                    <h4 class="text-white">Unlimited Classes</h4>
                    <p class="text-muted">Nessi adapts to your student life. You can have multiple courses with different grading scales, terms, classes and even schools!</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="features-box">
                    <i class="pe-7s-display1"></i>
                    <h4 class="text-white">Beautiful Interface</h4>
                    <p class="text-muted"><?=__('A friendly interface that suits each of your device. Whether  you\'re on your computer, your phone, or your tablet, Nessi is always there for you.')?></p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="features-box">
                    <i class="pe-7s-piggy"></i>
                    <h4 class="text-white">Free</h4>
                    <p class="text-muted"><?=__('Nessi will always be free and without adds. Because we know students do not have a lot of money, we are here to help')?></p>
                </div>
            </div>

        </div> <!-- end row -->


    </div> <!-- end row -->

    </div> <!-- end container -->
</section>
<!-- end Features -->

<!-- Features Alt -->
<section class="section bg-light">
    <div class="container">

        <div class="row">
            <div class="col-sm-7">
                <?= $this->Html->image('mockup_nessi_1.png', ['width' => '80%']) ?>
            </div>
            <div class="col-sm-5">
                <h3 class="title">Available on all platforms</h3>
                <p class="text-muted sub-title">
                    With our beautifully designed webapp available on iPhone, Android, Windows Phone and the web, Nessi works on all of your devices.
                </p>
            </div>

        </div><!-- end row -->

    </div> <!-- end container -->
</section>
<!-- end features alt -->




<!-- PRICING -->
<section class="section" id="pricing">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="title text-white">Free for students, forever. And no ads.</h3>
            </div>
        </div> <!-- end row -->

    </div> <!-- end container -->
</section>
<!-- End Pricing -->


<!--<section class="section bg-light" id="morefeature">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-left">
                <h3 class="title">Let your leader see</h3>
                <p class="text-muted sub-title">If your are in an apprenticeship, you can let your manager see your grades, so that you do not have to e-mail him every time you get a new mark. </p>
            </div>
            <div class="col-sm-6 text-center">
                <?= $this->Html->image('boss.svg',['width' => '30%']);?>
            </div>
        </div>
        <!-- end row
    </div>
</section>-->


