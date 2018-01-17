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