<!DOCTYPE html>
<html>
    <head>
        <title><?php echo e(app('Title')); ?></title>
        <link rel="icon" href="<?php echo e(app('image')); ?>/books.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="UTF-8"/>
        <meta property="og:image" content="<?php echo e(app('image')); ?>/preview.png" />
        <meta property="og:description" content="الدرر العلمية لتعلم العلم الشرعي" />
        <?php echo Html::style(app('css').'/materialize.min.css'); ?>

        <?php echo Html::style('https://fonts.googleapis.com/icon?family=Material+Icons'); ?>

        <?php echo Html::style(app('css').'/headerStyle.css?version=1.1.0'); ?>

        <?php echo Html::script(app('js').'/jquery.js'); ?>

        <?php echo Html::script(app('js').'/materialize.min.js'); ?>

        <?php echo Html::script(app('js').'/headerJs.min.js?version=1.1.0'); ?>

     </head>
     <script type="text/javascript">
         <?php if(session()->has('hi')): ?>
            alert('hi');
         <?php endif; ?>
     </script>
<body style="overflow: hidden;">
    <!-- Start Section Loader -->
    <section class='loaderSection' id='loaderSection'>
        <div class="shape"></div>
    </section>
    
    <!-- End Section Loader -->

    <!-- Start Section Image -->
    <section class="imageSection"></section>
    <!-- End Section Image -->

    <!-- Start Section Black -->
    <section class="blackSection"></section>
    <!-- End Section Black -->

    <!-- Start Navbar -->
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="<?php echo e(url('/')); ?>" class="brand-logo"><?php echo e(trans('Titles.nameOfWebSite')); ?></a>
                <a href="javascript:;" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <?php if(!auth()->check()): ?>
                        <li><a href="<?php echo e(url('facebook')); ?>"><?php echo e(trans('Header.Login')); ?></a></li>
                    <?php elseif(auth()->check()&&auth()->user()->admin==0||auth()->user()->admin==2): ?>
                        <li><a href="<?php echo e(url('profile/myexams')); ?>"><?php echo e(trans('myExams.myExams')); ?></a></li>
                    <?php elseif(auth()->check()&&auth()->user()->admin==1): ?>
                        <li><a href="<?php echo e(url('exams')); ?>"><?php echo e(trans('Header.Exam')); ?></a></li>
                        <li><a href="<?php echo e(url('create/exam')); ?>"><?php echo e(trans('Header.createExam')); ?></a></li>
                    <?php endif; ?>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <?php if(!auth()->check()): ?>
                        <li><a href="<?php echo e(url('facebook')); ?>"><?php echo e(trans('Header.Login')); ?></a></li>
                    <?php elseif(auth()->check()&&auth()->user()->admin==0||auth()->user()->admin==2): ?>
                        <li><a href="<?php echo e(url('profile/myexams')); ?>"><?php echo e(trans('myExams.myExams')); ?></a></li>
                    <?php elseif(auth()->check()&&auth()->user()->admin==1): ?>
                        <li><a href="<?php echo e(url('exams')); ?>"><?php echo e(trans('Header.Exam')); ?></a></li>
                        <li><a href="<?php echo e(url('create/exam')); ?>"><?php echo e(trans('Header.createExam')); ?></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->