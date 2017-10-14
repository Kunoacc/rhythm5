@extends('shared.main.main')

@section('body-class', 'page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_show sidebar_right')

@section('content')
    <!-- Breadcrumbs -->
    <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg4">
            <div class="content_wrap">
                <h1 class="page_title">Daily Devotional</h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{route('index')}}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">Daily Devotional</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumbs -->
    <!-- Page Content Wrap -->
    <div class="page_content_wrap page_paddings_no">
        <div class="content_wrap">
            <!-- Content -->
            <article class="post_item post_item_sermons odd sermons">
                <div class="post_featured">
                    <div class="post_thumb" data-title="Good Friday &#038; Easter Sunday">
                        <a class="hover_icon hover_icon_link" href="sermons-single.html">
                            <img alt="" src="images/sermons2-370x288.jpg">
                        </a>
                    </div>
                </div>
                <div class="post_content clearfix">
                    <h4 class="post_title">
                        <a href="sermons-single.html">Good Friday &#038; Easter Sunday</a>
                    </h4>
                    <div class="post_descr">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="post_info">
                            <span class="post_info_item post_info_posted_by">by Jane Doe</span>
                            <span class="post_info_item">
                                                <span class="post_info_date">Friday, July 31, 2016</span>
                                            </span>
                        </div>
                        <div class="post_custom_fields">
                                            <span class="post-custom_field-key">
                                                <a href="https://drive.google.com/" download class="custom_field_link">
                                                    <span class="icon-iconmonstr-download-11-icon"></span>
                                                </a>
                                            </span>
                            <span class="post-custom_field-key">
                                                <a href="media/AxiomthemesblankPDF.pdf" download class="custom_field_link">
                                                    <span class="icon-iconmonstr-pdf-file-2-icon"></span>
                                                </a>
                                            </span>
                            <span class="post-custom_field-key">
                                                <a href="#popup-video-1" class="sc_popup_link custom_field_link">
                                                    <span class="icon-iconmonstr-video-camera-icon"></span>
                                                </a>
                                            </span>
                        </div>
                    </div>
                </div>
                <!-- Popup video -->
                <div id="popup-video-1" class="sc_popup mfp-with-anim mfp-hide popup-video ">
                    <div class="sc_video_player">
                        <div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play width_100_per" data-width="100%" data-height="433" data-video="&lt;iframe class=&quot;video_frame&quot; src=_https_/player.vimeo.com/video/347676135782.html?autoplay=1%22 width=&quot;100%&quot; height=&quot;433&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;">
                            <img alt="" src="images/sermons2.jpg">
                        </div>
                    </div>
                </div>
                <!-- /Popup video -->
            </article>

            <div class="content">
                <!-- Sermons item -->

                <!-- /Sermons item -->
                <!-- Sermons item -->
                <article class="post_item post_item_sermons even sermons">
                    <div class="post_featured">
                        <div class="post_thumb" data-title="Persevere: The Book of James">
                            <a class="hover_icon hover_icon_link" href="sermons-single.html">
                                <img alt="" src="images/kamboo-370x288.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="post_content clearfix">
                        <h4 class="post_title">
                            <a href="sermons-single.html">Persevere: The Book of James</a>
                        </h4>
                        <div class="post_descr">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <div class="post_info">
                                <span class="post_info_item post_info_posted_by">by Jane Doe</span>
                                <span class="post_info_item post_info_posted">
                                                <span class="post_info_date">Tuesday, September 1, 2016</span>
                                            </span>
                            </div>
                            <div class="post_custom_fields">
                                            <span class="post-custom_field-key">
                                                <a href="https://drive.google.com/" download class="custom_field_link">
                                                    <span class="icon-iconmonstr-download-11-icon"></span>
                                                </a>
                                            </span>
                                <span class="post-custom_field-key">
                                                <a href="media/AxiomthemesblankPDF.pdf" download class="custom_field_link">
                                                    <span class="icon-iconmonstr-pdf-file-2-icon"></span>
                                                </a>
                                            </span>
                                <span class="post-custom_field-key">
                                                <a href="#popup-video-2" class="sc_popup_link custom_field_link">
                                                    <span class="icon-iconmonstr-video-camera-icon"></span>
                                                </a>
                                            </span>
                                <span class="post-custom_field-key">
                                                <a href="#popup-audio-2" class="sc_popup_link custom_field_link">
                                                    <span class="icon-music"></span>
                                                </a>
                                            </span>
                            </div>
                        </div>
                    </div>
                    <!-- Popup audio -->
                    <div id="popup-audio-2" class="sc_popup mfp-with-anim mfp-hide popup-audio ">
                        <div class="sc_audio_player sc_audio" data-width="" data-height="">
                            <div class="sc_audio_container">
                                <audio class="sc_audio" src="media/Dream-Music-Relax.mp3"></audio>
                            </div>
                        </div>
                    </div>
                    <!-- /Popup audio -->
                    <!-- Popup video -->
                    <div id="popup-video-2" class="sc_popup mfp-with-anim mfp-hide popup-video ">
                        <div class="sc_video_player">
                            <div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play width_100_per" data-width="100%" data-height="433" data-video="&lt;iframe class=&quot;video_frame&quot; src=_https_/player.vimeo.com/video/347676135782.html?autoplay=1%22 width=&quot;100%&quot; height=&quot;433&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;">
                                <img alt="" src="images/kamboo.jpg">
                            </div>
                        </div>
                    </div>
                    <!-- /Popup video -->
                </article>
                <!-- /Sermons item -->

                <nav id="pagination" class="pagination_wrap pagination_pages">
                    <span class="pager_current active ">1</span>
                    <a href="#" class="">2</a>
                    <a href="#" class="">3</a>
                    <a href="#" class="pager_next "></a>
                    <a href="#" class="pager_last "></a>
                </nav>
            </div>
            <!-- /Content -->
            <!-- Sidebar -->
            <div class="sidebar widget_area scheme_original">
                <div class="sidebar_inner widget_area_inner">
                    <!-- Widget: Categories -->
                    <!-- Widget: Search -->
                    <aside class="widget widget_search">
                        <form method="get" class="search_form" action="#">
                            <input type="text" class="search_field" placeholder="Search" value="" name="s" title="Search for:" />
                            <button type="submit" class="search_button icon-search"></button>
                        </form>
                    </aside>
                    <!-- /Widget: Search -->
                    <!-- Widget: Tag Cloud -->
                    <aside class="widget widget_tag_cloud">
                        <h5 class="widget_title">Tags</h5>
                        <div class="tagcloud">
                            <a href="#" title="4 topics">change</a>
                            <a href="#" title="3 topics">christian</a>
                            <a href="#" title="3 topics">church</a>
                            <a href="#" title="7 topics">conferences</a>
                            <a href="#" title="9 topics">events</a>
                            <a href="#" title="4 topics">family</a>
                            <a href="#" title="4 topics">god</a>
                            <a href="#" title="11 topics">post format</a>
                            <a href="#" title="4 topics">religion</a>
                            <a href="#" title="8 topics">sermons</a>
                            <a href="#" title="7 topics">worship</a>
                        </div>
                    </aside>
                    <!-- /Widget: Tag Cloud -->
                    <!-- Widget: Calendar -->
                    <aside class="widget widget_calendar">
                        <table class="tpl-calendar">
                            <thead>
                            <tr>
                                <th class="month_prev">
                                    <a href="#" title="View posts for December 2016"></a>
                                </th>
                                <th class="month_cur" colspan="5">January
                                    <span>2017</span>
                                </th>
                                <th class="month_next">
                                    <a href="#" title="View posts for February 2017"></a>
                                </th>
                            </tr>
                            <tr>
                                <th class="weekday" scope="col" title="Monday">Mon</th>
                                <th class="weekday" scope="col" title="Tuesday">Tue</th>
                                <th class="weekday" scope="col" title="Wednesday">Wed</th>
                                <th class="weekday" scope="col" title="Thursday">Thu</th>
                                <th class="weekday" scope="col" title="Friday">Fri</th>
                                <th class="weekday" scope="col" title="Saturday">Sat</th>
                                <th class="weekday" scope="col" title="Sunday">Sun</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td colspan="6" class="pad">
                                    <span class="day_wrap">&nbsp;</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">1</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">
                                    <span class="day_wrap">2</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">3</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">4</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">5</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">6</span>
                                </td>
                                <td class="today">
                                    <span class="day_wrap">7</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">8</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">
                                    <span class="day_wrap">9</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">10</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">11</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">12</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">13</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">14</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">15</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">
                                    <span class="day_wrap">16</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">17</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">18</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">19</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">20</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">21</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">22</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">
                                    <span class="day_wrap">23</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">24</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">25</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">26</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">27</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">28</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">29</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="day">
                                    <span class="day_wrap">30</span>
                                </td>
                                <td class="day">
                                    <span class="day_wrap">31</span>
                                </td>
                                <td class="pad" colspan="5">
                                    <span class="day_wrap">&nbsp;</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </aside>
                    <!-- /Widget: Calendar -->
                </div>
            </div>
            <!-- /Sidebar -->
        </div>
        <!-- </div> class="content_wrap"> -->
    </div>
    <!-- /Page Content Wrap -->
@endsection