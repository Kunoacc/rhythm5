<?php $__env->startSection("head"); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.3.5/sweetalert2.min.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection("body-class", ""); ?>

<?php $__env->startSection("content"); ?>
    <!-- Breadcrumbs -->
    <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
            <div class="content_wrap">
                <h1 class="page_title">Donate to our Church</h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="<?php echo e(route("index")); ?>">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">Donate to Our Church</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumbs -->
    <!-- Page Content Wrap -->
    <div class="page_content_wrap page_paddings_no">
        <div class="content">
            <div class="container">
                <script src="https://js.paystack.co/v1/inline.js"></script>
                <div class="col-12 card card-body">
                    <h3 class="text-center">Please fill in the information</h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="first_name"></label>
                                <input type="text"
                                       class="form-control" name="first_name" id="first_name" placeholder="Name">
                                <small id="Name" class="form-text text-muted">Enter First Name Here</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="last_name"></label>
                                <input type="text"
                                       class="form-control" name="last_name" id="last_name" aria-describedby="helpId"
                                       placeholder="Last Name">
                                <small id="helpId" class="form-text text-muted">Enter Last Name Here</small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email"></label>
                                        <input type="email"
                                               class="form-control" name="email" id="email" aria-describedby="helpId"
                                               placeholder="Email">
                                        <small id="helpId" class="form-text text-muted">Enter email here</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="number"></label>
                                        <input type="tel"
                                               class="form-control" name="number" id="number" aria-describedby="helpId"
                                               placeholder="Phone Number">
                                        <small id="helpId" class="form-text text-muted">Enter Number Here</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="amount"></label>
                                        <input type="number"
                                               class="form-control" name="amount" id="amount" aria-describedby="helpId"
                                               placeholder="Amount">
                                        <small id="helpId" class="form-text text-muted">Enter donation amount</small>
                                    </div>
                                </div>
                                <div class="col-6 mx-auto text-center">
                                    <a href="javascript:" id="give"
                                       class="sc_button sc_button_square sc_button_style_filled sc_button_color_style_4 sc_button_size_large give_now_btn"
                                       onclick="payWithPaystack()">GIVE NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer class="footer_wrap widget_area scheme_original">
            <div class="footer_wrap_inner widget_area_inner">
                <div class="content_wrap">
                    <div class="columns_wrap">
                        <!-- Widget: Text -->
                        <aside class="column-1_4 widget widget_text">
                            <h5 class="widget_title">About Our Church</h5>
                            <div class="textwidget">
                                <p>We welcome visitors at NewLife Church and would love to have you join us in church
                                    this weekend.</p>
                                <p class="textwidget_info">
                                    <strong>E: <a class="__cf_email__" href="cdn-cgi/l/email-protection.html"
                                                  data-cfemail="4821262e270831273d3a3b213c2d662b2725">[email&#160;protected]</a>
                                        <script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */
                                            !function (t, e, r, n, c, a, p) {
                                                try {
                                                    t = document.currentScript || function () {
                                                        for (t = document.getElementsByTagName('script'), e = t.length; e--;) if (t[e].getAttribute('data-cfhash')) return t[e]
                                                    }();
                                                    if (t && (c = t.previousSibling)) {
                                                        p = t.parentNode;
                                                        if (a = c.getAttribute('data-cfemail')) {
                                                            for (e = '', r = '0x' + a.substr(0, 2) | 0, n = 2; a.length - n; n += 2) e += '%' + ('0' + ('0x' + a.substr(n, 2) ^ r).toString(16)).slice(-2);
                                                            p.replaceChild(document.createTextNode(decodeURIComponent(e)), c)
                                                        }
                                                        p.removeChild(t)
                                                    }
                                                } catch (u) {
                                                }
                                            }()
                                            /* ]]> */</script>
                                    </strong>
                                </p>
                                <p class="textwidget_info">
                                    <strong>L: <a href="#">Google Map</a></strong>
                                </p>
                            </div>
                        </aside><!-- /Widget: Text --><!-- Widget: Recent Posts -->
                        <aside class="column-1_4 widget widget_recent_posts">
                            <h5 class="widget_title">Latest Sermons</h5>
                            <article class="post_item with_thumb first">
                                <div class="post_thumb">
                                    <img alt="" src="images/what-we-believe-75x75.jpg">
                                </div>
                                <div class="post_content">
                                    <h6 class="post_title">
                                        <a href="post-single.html">5 Reasons to Love Churches in 2016</a>
                                    </h6>
                                    <div class="post_info">
                                                <span class="post_info_item">
                                                    <a href="#" class="post_info_date">Tuesday, April 26, 2016</a>
                                                </span>
                                    </div>
                                </div>
                            </article>
                            <article class="post_item with_thumb">
                                <div class="post_thumb">
                                    <img alt="" src="images/5-questions-for-decision-makers-75x75.jpg">
                                </div>
                                <div class="post_content">
                                    <h6 class="post_title">
                                        <a href="post-single.html">5 Questions for Decision Makers</a>
                                    </h6>
                                    <div class="post_info">
                                                <span class="post_info_item">
                                                    <a href="#" class="post_info_date">Monday, April 25, 2016</a>
                                                </span>
                                    </div>
                                </div>
                            </article>
                        </aside><!-- /Widget: Recent Posts --><!-- Widget: Instagram -->
                        <aside class="column-1_4 widget null-instagram-feed">
                            <h5 class="widget_title">Instagram</h5>
                            <ul class="instagram-pics instagram-size-large">
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="images/15803058_1616433135330810_924076739313795072_n.jpg" alt=""
                                             title=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="images/15802664_228138910964897_2869790108012249088_n.jpg" alt=""
                                             title=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="images/14607016_102393206925393_8249567135395741696_n.jpg" alt=""
                                             title=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="images/14591088_1715438782101065_1954863981206175744_n.jpg" alt=""
                                             title=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="images/15802645_1221431071278615_2585263960764710912_n.jpg" alt=""
                                             title=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="images/15802113_550996655105389_4361253016632819712_n.jpg" alt=""
                                             title=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="images/15802809_1650561958576474_2907896148784054272_n.jpg" alt=""
                                             title=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="images/15802990_1389763861076605_5760227133133684736_n.jpg" alt=""
                                             title=""/>
                                    </a>
                                </li>
                            </ul>
                        </aside><!-- /Widget: Instagram --><!-- Widget: Recent Comments -->
                        <aside class="column-1_4 widget widget_recent_comments">
                            <h5 class="widget_title">Recent Comments</h5>
                            <ul id="recentcomments">
                                <li class="recentcomments">
                                    <span class="comment-author-link">John Dilan</span> on
                                    <a href="post-single.html">Persevere: The Book of James</a>
                                </li>
                                <li class="recentcomments">
                                    <span class="comment-author-link">John Doe</span> on
                                    <a href="post-single.html">The Meanings of Love in the Bible</a>
                                </li>
                                <li class="recentcomments">
                                    <span class="comment-author-link">John Doe</span> on
                                    <a href="#">The Meanings of Love in the Bible</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
        <!-- Copyright -->
        <div class="copyright_wrap copyright_style_text scheme_original">
            <div class="copyright_wrap_inner">
                <div class="content_wrap">
                    <div class="copyright_text">ThemeREX © 2017 All Rights Reserved <a href="#">Terms of Use</a> and <a
                                href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection("scripts"); ?>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.3.5/sweetalert2.min.js"></script>
            <script>
                function payWithPaystack() {
                    swal({
                        title: "Working...",
                        type: "info",
                        text: "your donation is processing",
                        showConfirmButton: true
                    });
                    swal.showLoading();
                    let handler = PaystackPop.setup({
                        key: 'pk_test_40c23cf57b58c8764dfc181b6fb5690616076967',
                        email: $('#email').val(),
                        amount: $('#amount').val() * 100,
                        ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                        metadata: {
                            custom_fields: [
                                {
                                    display_name: "Mobile Number",
                                    variable_name: "mobile_number",
                                    value: $('#number').val()
                                }, {
                                    display_name: "First Name",
                                    variable_name: "first_name",
                                    value: $('#first_name').val()
                                }, {
                                    display_name: "Last Name",
                                    variable_name: "last_name",
                                    value: $('#last_name').val()
                                },

                            ]
                        },
                        callback: function (response) {
                            $.ajax({
                                type: 'POST',
                                url: '<?php echo e(url('donate/success')); ?>',
                                data: {
                                    '_token': '<?php echo e(csrf_token()); ?>',
                                    'reference': response.reference
                                },
                                success: (data) => {
                                    console.log(data);
                                    swal.close();
                                    swal('You\'ve got mail!', 'Thanks for donating!', 'success');
                                },
                                error: (error) => {
                                    console.log(error)
                                }
                            })
                        },
                        onClose: function () {
                            alert('window closed');
                        }
                    });
                    handler.openIframe();
                }
            </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("shared.main.main", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>