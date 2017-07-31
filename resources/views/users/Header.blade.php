<!DOCTYPE html>
<html>
    <head>
        <title>{{app('Title')}}</title>
        <link rel="icon" href="{{app('image')}}/books.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="UTF-8"/>
        <meta property="og:image" content="{{app('image')}}/preview.png" />
        <meta property="og:description" content="الدرر العلمية لتعلم العلم الشرعي" />
        {!! Html::style(app('css').'/materialize.min.css') !!}
        {!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
        {!! Html::style(app('css').'/headerStyle.css?version=1.1.0') !!}
        {!! Html::script(app('js').'/jquery.js') !!}
        {!! Html::script(app('js').'/materialize.min.js') !!}
        {!! Html::script(app('js').'/headerJs.min.js?version=1.1.0') !!}
     </head>
     <script type="text/javascript">
         @if(session()->has('hi'))
            alert('hi');
         @endif
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
                <a href="{{url('/')}}" class="brand-logo">{{trans('Titles.nameOfWebSite')}}</a>
                <a href="javascript:;" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    @if(!auth()->check())
                        <li><a href="{{url('facebook')}}">{{trans('Header.Login')}}</a></li>
                    @elseif(auth()->check()&&auth()->user()->admin==0||auth()->user()->admin==2)
                        <li><a href="{{url('profile/myexams')}}">{{trans('myExams.myExams')}}</a></li>
                    @elseif(auth()->check()&&auth()->user()->admin==1)
                        <li><a href="{{url('exams')}}">{{trans('Header.Exam')}}</a></li>
                        <li><a href="{{url('create/exam')}}">{{trans('Header.createExam')}}</a></li>
                    @endif
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    @if(!auth()->check())
                        <li><a href="{{url('facebook')}}">{{trans('Header.Login')}}</a></li>
                    @elseif(auth()->check()&&auth()->user()->admin==0||auth()->user()->admin==2)
                        <li><a href="{{url('profile/myexams')}}">{{trans('myExams.myExams')}}</a></li>
                    @elseif(auth()->check()&&auth()->user()->admin==1)
                        <li><a href="{{url('exams')}}">{{trans('Header.Exam')}}</a></li>
                        <li><a href="{{url('create/exam')}}">{{trans('Header.createExam')}}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->