@extends('layouts.master')
@section('title', 'Tin tuc Video trong ngay | Xem video clip tin tuc tai Video - Tin tức Video')
@section('description', 'Tin tuc Video trong ngay | Xem video clip tin tuc tai Video - Tin tức Video')
@section('image', url()->to('/').'/images/new.png')
@section('content')
    <div id="contentRight">
        <?php $rout = route('category-article'); ?>
                <!--videoHot-->
        <div id="videoHot" class="contentRight">
            <div class="col-lg-12 listVideo">
                <div class="lable-big w100pt left">
                    <a href="/chuyen-muc/hot"> <i class="fa fa-star" aria-hidden="true"></i>
                        <h1>HOT</h1></a>
                </div>
                <div class="list-product ">
                    <ul class="listVideoMore col-lg-12">
                        @include('components.article' , ['articles' => $article_clip_hot ,'view_component'=>'normal' ])
                    </ul>
                </div>
            </div>
        </div>
        @if(count($article_hai_viet_nam) >= 1 )
            <div class="contentRight bgf1">
                <div class="col-lg-12 listVideo">
                    <div class="lable-list w100pt left">
                        <a href="{{ genUrlCategory($category_hai_viet_nam)  }}"> <i class="fa fa-star"
                                                                                    aria-hidden="true"></i>
                            <h1>{{$category_hai_viet_nam->title}}</h1></a>
                    </div>
                    <div class="slider1 listVideoMore col-lg-12">
                        @include('components.article' , ['articles' => $article_hai_viet_nam  , 'except' => true ])
                    </div>
                </div>
            </div>
        @endif

        @if(count($article_kham_pha) >= 1 )
            <div class="contentRight bgf1">
                <div class="col-lg-12 listVideo">
                    <div class="lable-list w100pt left">
                        <a href="{{ genUrlCategory($category_kham_pha)  }}"> <i class="fa fa-star"
                                                                                aria-hidden="true"></i>
                            <h1>{{$category_kham_pha->title}}</h1></a>
                    </div>
                    <div class="slider1 listVideoMore col-lg-12">
                        @include('components.article' , ['articles' => $article_kham_pha , 'except' => true ])
                    </div>


                </div>
            </div>
        @endif



        @if(count($article_video) >= 1 )
            <div class="contentRight bgf1">
                <div class="col-lg-12 listVideo">
                    <div class="lable-list w100pt left">
                        <a href="{{ genUrlCategory($category_video)  }}"> <i class="fa fa-star"
                                                                             aria-hidden="true"></i>
                            <h1>{{$category_video->title}}</h1></a>
                    </div>
                    <div class="slider1 listVideoMore col-lg-12">
                        @include('components.article' , ['articles' => $article_video, 'except' => true  ])
                    </div>


                </div>
            </div>
        @endif

        @if(count($article_funny) >= 1 )
            <div class="contentRight bgf1">
                <div class="col-lg-12 listVideo">
                    <div class="lable-list w100pt left">
                        <a href="{{ genUrlCategory($category_funny)  }}"> <i class="fa fa-star"
                                                                             aria-hidden="true"></i>
                            <h1>{{$category_funny->title}}</h1></a>
                    </div>
                    <div class="slider1 listVideoMore col-lg-12">
                        @include('components.article' , ['articles' => $article_funny , 'except' => true  ])
                    </div>


                </div>
            </div>
        @endif

        @include('partials.footer')
    </div>
@stop