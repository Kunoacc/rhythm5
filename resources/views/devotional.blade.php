@extends('shared.main.main')

@section('body-class', 'page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_show sidebar_right')
@section('content')
    <div class="top_panel_title top_panel_style_3  title_present breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg4">
            <div class="content_wrap">
                <h1 class="page_title">{{$data->title}}</h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{route('index')}}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <a class="breadcrumbs_item all" href="{{route('devotional')}}">Daily Devotional</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">{{$data->title}}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="page_content_wrap page_paddings_no">
        <div class="content_wrap">
            <div class="content">
                <article class="itemscope post_item post_item_single post_featured_default post_format_standard post-1314 sermons type-sermons status-publish has-post-thumbnail hentry sermons_group-missions sermons_group-popular">
                    <section class="post_featured">
                        <div class="post_thumb" data-image="{{asset('images/kamboo.jpg')}}" data-title="{{$data->title}}">
                            <a class="hover_icon hover_icon_view inited" href="{{asset('images/kamboo.jpg')}}" title="Persevere: The Book of James" rel="magnific">
                                <img class="wp-post-image" width="1170" height="659" alt="Persevere: The Book of James" src="{{asset('images/kamboo-1170x659.jpg')}}" itemprop="image">
                            </a>
                        </div>
                    </section>
                    <section class="post_content" itemprop="articleBody"><div class="post_info">
                            <span class="post_info_item post_info_tags">
                                in <a class="sermons_group_link" href="http://newlife-church.axiomthemes.com/sermons_group/missions/">Missions</a>,
                                <a class="sermons_group_link" href="http://newlife-church.axiomthemes.com/sermons_group/popular/">Popular</a>
                            </span>
                            <span class="post_info_item post_info_counters">
                                Views
                                <span class="post_counters_item post_counters_views" title="Views - 302">
                                    <span class="post_counters_number">302</span>
                                </span>
	                        </span>
                        </div>
                        <p>{{$data->content}}</p>
                    </section> <!-- </section> class="post_content" itemprop="articleBody"> -->
                    <section class="related_wrap related_wrap_empty"></section>
                </article>
            </div>
        </div>
    </div>
@endsection