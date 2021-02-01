<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <article class="hentry post post-standard has-post-thumbnail sticky">

                <div class="post-thumb">
                    <img src="{{$first_post->featured}}" alt="{{$first_post->title}}">
                    <div class="overlay"></div>
                    <a href="{{$first_post->featured}}" class="link-image js-zoom-image">
                        <i class="seoicon-zoom"></i>
                    </a>
                    <a href="#" class="link-post">
                        <i class="seoicon-link-bold"></i>
                    </a>
                </div>

                <div class="post__content">

                    <div class="post__content-info">

                        <h2 class="post__title entry-title ">
                            <a href="15_blog_details.html">{{$first_post->title}}</a>
                        </h2>

                        <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published">
                                                {{$first_post->created_at->diffForHumans()}}
                                            </time>

                                        </span>

                            <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="#">{{$first_post->category->name}}</a>
                                        </span>

                            <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                        </div>
                    </div>
                </div>

            </article>
        </div>
        <div class="col-lg-2"></div>
    </div>

    <div class="row">
        @foreach($posts as $post)
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="{{$post->featured}}" alt="{{$post->title}}" >
                        <div class="overlay"></div>
                        <a href="{{$post->featured}}" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="#" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="15_blog_details.html">{{$post->title}}</a>
                            </h2>

                            <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published">
                                                {{$post->created_at->diffForHumans()}}
                                            </time>

                                        </span>

                                <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="#">{{$post->category->name}}</a>
                                        </span>

                                <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                            </div>
                        </div>
                    </div>

                </article>
            </div>
        @endforeach
    </div>
</div>
