@extends("layouts.post")

@section('post')


<!-- Titlebar
================================================== -->
<br>
    
    <!-- Content
    ================================================== -->
    <div class="container">
    
        <!-- Blog Posts -->
        <div class="blog-page">
        <div class="row">
    
    
            <!-- Post Content -->
            <div class="col-lg-9 col-md-8 padding-right-30">
    
    
                <!-- Blog Post -->
                <div class="blog-post single-post">
                    
                    <!-- Img -->
                    @if($post->file)
				        <img src="{{ $post->file }}" width="900" class="img-responsive">
				    @endif
    
                    
                    <!-- Content -->
                    <div class="post-content">
    
                        <h3>{{ $post->name }}</h3>
    
                        <ul class="post-meta">
                            <li>{{ $post->updated_at->toFormattedDateString() }}</li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">5 Comments</a></li>
                        </ul>

                        <ul class="post-meta">
                            @foreach($post->tags as $tag)
                            <li><a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a>
                            </li>
                            @endforeach
                        </ul>
    
                        {!! $post->body !!}
    
                        <!-- Share Buttons -->
                        <ul class="share-buttons margin-top-40 margin-bottom-0">
                            <li><a class="fb-share" href="#"><i class="fa fa-facebook"></i> Share</a></li>
                            <li><a class="twitter-share" href="#"><i class="fa fa-twitter"></i> Tweet</a></li>
                            <li><a class="gplus-share" href="#"><i class="fa fa-google-plus"></i> Share</a></li>
                            <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li>
                        </ul>
                        <div class="clearfix"></div>
    
                    </div>
                </div>
                <!-- Blog Post / End -->
    
    
                <!-- Post Navigation -->
                
               
                
                <ul id="posts-nav" class="margin-top-0 margin-bottom-45">
                    @foreach($posts as $post)
                    @if ($loop->first)
                    <li class="next-post">
                        <a href="{{ route('post', $post->slug) }}"><span>Siguiente Post</span>
                            {{ $post->name }}</a>
                    </li>
                    @endif
                    @endforeach
                    @foreach($posts as $post)
                    @if ($loop->last)
                    <li class="prev-post">
                        <a href="{{ route('post', $post->slug) }}"><span>Anterior Post</span>
                            {{ $post->name }}</a>
                    </li>
                    @endif
                    @endforeach
                </ul>
                
                
                
    
    
                <!-- About Author -->
                <!--<div class="about-author">
                        
                    <img src="{{ asset('images/user-avatar.jpg') }}" alt="" />
                    <div class="about-description">
                        <h4>Tom Perrin</h4>
                        <a href="#"><span class="__cf_email__" data-cfemail="89fde6e4c9ecf1e8e4f9e5eca7eae6e4">[email&#160;protected]</span></a>
                        <p>Nullam ultricies, velit ut varius molestie, ante metus condimentum nisi, dignissim facilisis turpis ex in libero. Sed porta ante tortor, a pulvinar mi facilisis nec. Proin finibus dolor ac convallis congue.</p>
                    </div>
                </div>-->
    
    
                <!-- Related Posts -->
                <div class="clearfix"></div>
                <h4 class="headline margin-top-25">Artículos relacionados</h4>

                
                <div class="row">
    
                    <!-- Blog Post Item -->
                    @foreach($posts as $post)
                    @if ($loop->last)
                    <div class="col-md-6">
                        <a href="#" class="blog-compact-item-container">
                            <div class="blog-compact-item">
                                   
                                <img src="{{ $post->file }}" alt="">
                                <!--<span class="blog-item-tag">Tips</span>-->
                                <div class="blog-compact-item-content">
                                    <ul class="blog-post-tags">
                                        <li>{{ $post->updated_at->toFormattedDateString() }}</li>
                                    </ul>
                                    <h3>{{ $post->name }}</h3>
                                    <p>{{ $post->excerpt }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    <!-- Blog post Item / End -->
    
                    <!-- Blog Post Item -->
                    @foreach($posts as $post)
                    @if ($loop->first)
                    <div class="col-md-6">
                        <a href="#" class="blog-compact-item-container">
                            <div class="blog-compact-item">
                                <img src="{{ $post->file }}" alt="">
                                <!--<span class="blog-item-tag">Tips</span>-->
                                <div class="blog-compact-item-content">
                                    <ul class="blog-post-tags">
                                        <li>{{ $post->updated_at->toFormattedDateString() }}</li>
                                    </ul>
                                    <h3>{{ $post->name }}</h3>
                                    <p>{{ $post->excerpt }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    <!-- Blog post Item / End -->
    
                </div>
                
                <!-- Related Posts / End -->
    
    
                <div class="margin-top-50"></div>
    
                <!-- Reviews -->
                <!--
                <section class="comments">
                <h4 class="headline margin-bottom-35">Comments <span class="comments-amount">(5)</span></h4>
    
                    <ul>
                        <li>
                            <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
                            <div class="comment-content"><div class="arrow-comment"></div>
                                <div class="comment-by">Kathy Brown<span class="date">22 August 2017</span>
                                    <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                </div>
                                <p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
                            </div>
    
                            <ul>
                                <li>
                                    <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
                                    <div class="comment-content"><div class="arrow-comment"></div>
                                        <div class="comment-by">Tom Smith<span class="date">22 August 2017</span>
                                            <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                        </div>
                                        <p>Rrhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
                                    <div class="comment-content"><div class="arrow-comment"></div>
                                        <div class="comment-by">Kathy Brown<span class="date">20 August 2017</span>
                                            <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                        </div>
                                        <p>Nam posuere tristique sem, eu ultricies tortor.</p>
                                    </div>
    
                                    <ul>
                                        <li>
                                            <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
                                            <div class="comment-content"><div class="arrow-comment"></div>
                                                <div class="comment-by">John Doe<span class="date">18 August 2017</span>
                                                    <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                                </div>
                                                <p>Great template!</p>
                                            </div>
                                        </li>
                                    </ul>
    
                                </li>
                            </ul>
    
                        </li>
    
                        <li>
                            <div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
                            <div class="comment-content"><div class="arrow-comment"></div>
                                <div class="comment-by">John Doe<span class="date">18 August 2017</span>
                                    <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                </div>
                                <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
                            </div>
    
                        </li>
                     </ul>
    
                </section>-->

                
                <div class="clearfix"></div>
    
    
                <!-- Add Comment -->
                <!--
                <div id="add-review" class="add-review-box">
    
                    
                    <h3 class="listing-desc-headline margin-bottom-35">Add Review</h3>
        
                    
                    <form id="add-comment" class="add-comment">
                        <fieldset>
    
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name:</label>
                                    <input type="text" value=""/>
                                </div>
                                    
                                <div class="col-md-6">
                                    <label>Email:</label>
                                    <input type="text" value=""/>
                                </div>
                            </div>
    
                            <div>
                                <label>Comment:</label>
                                <textarea cols="40" rows="3"></textarea>
                            </div>
    
                        </fieldset>
    
                        <button class="button">Submit Comment</button>
                        <div class="clearfix"></div>
                    </form>
    
                </div>-->
                
    
        </div>
        <!-- Content / End -->
    
    
    
        <!-- Widgets -->
        <div class="col-lg-3 col-md-4">
            
    
                <!--
                <div class="widget">
                    <h3 class="margin-top-0 margin-bottom-25">Search Blog</h3>
                    <div class="search-blog-input">
                        <div class="input"><input class="search-field" type="text" placeholder="Type and hit enter" value=""/></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                -->
    
    
                <!-- Widget -->
                <div class="widget margin-top-40">
                    <h3>Suscríbete</h3>
                    <div class="info-box margin-bottom-10">
                        <p>Ingresa tu Email!</p>
                        <form action="#dsdsd">
                            <input type="text"></input>
                            <input type="submit" value="Suscribirte"></input>
                            
                        </form>
                        
                    </div>
                </div>
                <!-- Widget / End -->
    
    
                <!-- Widget -->
                <div class="widget margin-top-40">
    
                    <h3>Posts recientes</h3>
                    <ul class="widget-tabs">
    
                        <!-- Post #1 -->
                        @foreach($posts as $post)
                        <li>
                            <div class="widget-content">
                                    <div class="widget-thumb">
                                    <a href="pages-blog-post.html"><img src="{{ $post->file }}" alt=""></a>
                                </div>
                                
                                <div class="widget-text">
                                    <h5><a href="pages-blog-post.html">{{ $post->name }}</a></h5>
                                    <span>{{ $post->updated_at->diffForHumans() }}</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
    
                </div>
                <!-- Widget / End-->
    
    
                <!-- Widget -->
                <div class="widget margin-top-40">
                    <h3 class="margin-bottom-25">Social</h3>
                    <ul class="social-icons rounded">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        
                    </ul>
    
                </div>
                <!-- Widget / End-->
    
                <div class="clearfix"></div>
                <div class="margin-bottom-40"></div>
            </div>
        </div>
        </div>
        <!-- Sidebar / End -->
    
    
    </div>
    </div>

@stop