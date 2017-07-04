<div class="col-md-3 detail-right">
    @include('components.ads.300x300')
            <!--videoHot-->
    @if($articles != null )
        <div id="videoHot">
            <div class="col-lg-12 listVideo">
                <div class="lable-big w100pt left">
                    <a href="#"> <i class="fa fa-video-camera" aria-hidden="true"></i>
                        <h1>Video tiếp theo</h1></a>
                </div>
                <div class="list-product ">
                    <ul class="listVideoMore col-lg-12">
                        @include('components.article_sidebar' , ['articles' => $articles ])
                    </ul>
                </div>

            </div>
        </div>
    @endif
</div>