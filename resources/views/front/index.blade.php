@extends('front.layout')

    @section('content')

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>{{json_decode($banner->content)->title}}</h5>
                            <h1>{{json_decode($banner->content)->sub_title}}r</h1>
                            <p>{{json_decode($banner->content)->desc}}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->


    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$courses_count}}</span>
                        <h4>All Courses</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$Trainers_count}}</span>
                        <h4> All trainers</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$Students_count}}</span>
                        <h4>All Students</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>{{json_decode($course_title->content)->title}}</p>
                        <h2>{{json_decode($course_title->content)->sub_title}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $course)

                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset("storage/courses/$course->image")}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="{{route('front.cat',$course->category->id)}}" class="btn_4">{{$course->category->name}}</a>
                            <h4>{{$course->price }}$</h4>
                            <a href="{{route('front.show',[$course->category->id,$course->id] )}}l"><h3>{{$course->name}}</h3></a>
                            <p>{{$course->small_desc}}</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{asset("storage/trainers")."/".$course->trainer->image}}" alt="" width=50>
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a>{{$course->trainer->name}}</a></h5>
                                    </div>
                                </div>
                                {{-- <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{asset('front/img')}}/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="{{asset('front/img')}}/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="{{asset('front/img')}}/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="{{asset('front/img')}}/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="{{asset('front/img')}}/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div> --}}
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--::blog_part end::-->


    <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>{{json_decode($test_title->content)->title}}</p>
                        <h2>{{json_decode($test_title->content)->sub_title}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        @foreach($tests  as $test)
                        <div class="testimonial_slider">
                            <div class="row">

                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>{{$test->desc}}</p>
                                        <h4>{{$test->name}}</h4>
                                        <h5>{{$test->spec}}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{asset('storage/test/'.$test->image)}}" alt="#">
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->


@endsection
