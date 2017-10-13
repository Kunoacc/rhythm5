@extends('shared.main.main')

@section('body-class', 'page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide')

@section('content')
    <div class="page_content_wrap page_paddings_no">
        <!-- Content -->
        <div class="content">
            <article class="post_item post_item_single page">
                <section class="post_content">
                    <!-- Google Map -->
                    <div id="sc_googlemap_1167161672" class="sc_googlemap" style="width:100%;height:450px;" data-zoom="14" data-style="style2">
                        <div id="sc_googlemap_1167161672_1" class="sc_googlemap_marker" data-title="" data-description="" data-address="Bronx Stadium Avenue" data-latlng="" data-point="images/marker.png"></div>
                    </div>
                    <!-- /Google Map -->
                    <div class="content_wrap padding_top_5_2857em padding_bottom_6_1429em">
                        <div id="sc_form_1_wrap" class="sc_form_wrap ">
                            <div id="sc_form_1" class="sc_form sc_form_style_form_2 aligncenter">
                                <h6 class="sc_form_subtitle sc_item_subtitle">Contact Form</h6>
                                <h2 class="sc_form_title sc_item_title">Get in Touch With Us</h2>
                                <div class="sc_form_descr sc_item_descr">We welcome visitors at NewLife Church and would love to have you join us in church this weekend.</div>
                                <div class="sc_columns columns_wrap">
                                    <div class="sc_form_address column-1_3">
                                        <div class="sc_form_address_field sc_form_address_field_icon_address">
                                            <span class="sc_form_address_label">Address:</span>
                                            <span class="sc_form_address_data">123, New Lenox, Chicago, IL 60606</span>
                                        </div>
                                        <div class="sc_form_address_field sc_form_address_field_icon_phone">
                                            <span class="sc_form_address_label">Phone number:</span>
                                            <span class="sc_form_address_data">123-456-7890</span>
                                        </div>
                                        <div class="sc_form_address_field sc_form_address_field_icon_email">
                                            <span class="sc_form_address_label">Have any questions?</span>
                                            <span class="sc_form_address_data"><a class="__cf_email__" href="cdn-cgi/l/email-protection.html" data-cfemail="a1d2d4d1d1ced3d5e1c0d9c8ceccd5c9c4ccc4d28fc2cecc">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></span>
                                        </div>
                                        <div class="sc_form_address_field sc_form_address_field_hours">
                                            <span class="sc_form_address_label">We are open:</span>
                                            <span class="sc_form_address_data">Monday - Friday 10AM - 8PM</span>
                                        </div>
                                    </div><div class="sc_form_fields column-2_3">
                                        <form id="sc_form_1_form" data-formtype="form_2" method="post" action="http://newlife-church-html.axiomthemes.com/include/sendmail.php">
                                            <div class="sc_form_info">
                                                <div class="sc_form_item sc_form_field label_over">
                                                    <label class="required" for="sc_form_username">Name</label>
                                                    <input id="sc_form_username" type="text" name="username" placeholder="Name">
                                                </div>
                                                <div class="sc_form_item sc_form_field label_over">
                                                    <label class="required" for="sc_form_email">E-mail</label>
                                                    <input id="sc_form_email" type="text" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="sc_form_item sc_form_message label_over">
                                                <label class="required" for="sc_form_message">Message</label>
                                                <textarea id="sc_form_message" name="message" placeholder="Message"></textarea>
                                            </div>
                                            <div class="sc_form_item sc_form_button">
                                                <button class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_2 sc_button_size_large">Send Message</button>
                                            </div>
                                            <div class="result sc_infobox"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
        <!-- /Content -->
    </div>
@endsection

@section('scripts')
@endsection