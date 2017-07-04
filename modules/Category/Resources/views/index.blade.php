
 @extends('layouts.master')

@section('title')
    @if($category !='')
        {{ $category->title }}
    @endif
@endsection
@section('description')
    @if($category !='')
        @if($category->desc !='' )
            {{ $category->desc }}
        @else
            {{ $category->title }}
        @endif
    @endif
@endsection
@section('image', url()->to('/').'/images/new.png')
@section('content')
    <div id="contentRight">
        <!--videoHot-->
        <div id="videoHot" class="contentRight">
            <div class="col-lg-12 col-md-12 listVideo">
                <div class="lable-big w100pt left">

                    <a href="{{ $link_category  }}">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <h1>@if($category !=''){{ $category->title }} @endif</h1></a>
                </div>
                <div class="list-product ">
                    <ul class="listVideoMore col-lg-12">
                        @if($category !='')
                            @include('components.article' , ['articles' => $article_category ,'view_component' => 'normal' ])
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div id="videoHot" class="contentRight ">
            {!! GetPaginate(request()->get('page') , $category , PAGINATE_CATEGORY ) !!}
            {{--<div class="col-lg-12 col-md-12 listVideo"><div class="text-center"> @if($category !='') {!! $article_category->render()  !!} @endif</div></div>--}}
        </div>
        @include('partials.footer')
    </div>

@stop