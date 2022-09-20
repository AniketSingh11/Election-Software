<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!--state overview start-->
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <?php if ($this->ion_auth->in_group('admin')) { ?>
                    <a href="voter">
                    <?php } ?>
                    <section class="panel">
                        <div class="dash-heading">
                            <?php echo lang('voter'); ?>
                        </div>
                        <div class="value">
                            <h1 class="">
                                <?php echo $this->db->count_all('voter'); ?>
                            </h1>
                            <p><?php echo lang('voter'); ?></p>
                        </div>
                    </section>
                    <?php if ($this->ion_auth->in_group('admin')) { ?>
                    </a>
                <?php } ?>
            </div>


            <style>

                .panel-body{
                    background: none;
                }


            </style>


            <div class="col-lg-3 col-sm-6">
                <?php if ($this->ion_auth->in_group('admin')) { ?>
                    <a href="volunteer">
                    <?php } ?>
                    <section class="panel">
                        <div class="dash-heading">
                            <?php echo lang('volunteer'); ?>
                        </div>
                        <div class="value"> 
                            <h1 class="">
                                <?php echo $this->db->count_all('volunteer'); ?>
                            </h1>
                            <p><?php echo lang('volunteer'); ?></p>
                        </div>
                    </section>
                    <?php if (!$this->ion_auth->in_group('admin')) { ?>
                    </a>
                <?php } ?>
            </div>
            <div class="col-lg-3 col-sm-6">
                <?php if ($this->ion_auth->in_group('admin')) { ?>
                    <a href="event">
                    <?php } ?>
                    <section class="panel">
                        <div class="dash-heading">
                            Event
                        </div>
                        <div class="value">
                            <h1 class="">
                                <?php
                                $event_dates = $this->db->get('event')->result();
                                $i = 0;
                                foreach ($event_dates as $event_date) {
                                    if (strtotime($event_date->date) > time()) {
                                        $i = $i + 1;
                                    }
                                }
                                echo $i;
                                ?>
                            </h1>
                            <p><?php echo lang('upcoming_events'); ?></p>
                        </div>
                    </section>
                    <?php if ($this->ion_auth->in_group('admin')) { ?>
                    </a>
                <?php } ?>
            </div>

            <div class="col-lg-3 col-sm-6">
                <?php if ($this->ion_auth->in_group('admin')) { ?>
                    <a href="area">
                    <?php } ?>
                    <section class="panel">
                        <div class="dash-heading">
                            Areas
                        </div>
                        <div class="value">
                            <h1 class="">
                                <?php echo $this->db->count_all('area'); ?>
                            </h1>
                            <p><?php echo lang('areas'); ?></p>
                        </div>
                    </section>
                    <?php if ($this->ion_auth->in_group('admin')) { ?>
                    </a>
                <?php } ?>
            </div>

            <div class="col-md-12">
                <section class="panel">
                </section>
            </div>

            <div class="col-lg-3 col-sm-6">
                <?php if ($this->ion_auth->in_group('admin')) { ?>
                    <a href="sms/sendView">
                    <?php } ?>
                    <section class="panel">
                        <div class="dash-heading">
                            <?php echo lang('bulk_sms'); ?>
                        </div>
                        <div class="value">
                            <h1> <i class="fa fa-location-arrow"></i> </h1>
                            <p> <?php echo lang('send_sms_to_voter_volunteer'); ?></p>
                        </div>
                    </section>
                    <?php if ($this->ion_auth->in_group('admin')) { ?>
                    </a>
                <?php } ?>
            </div>
            <div class="col-lg-3 col-sm-6">
                <?php if ($this->ion_auth->in_group('admin')) { ?>
                    <a href="snw">
                    <?php } ?>
                    <section class="panel">
                        <div class="dash-heading">
                            <?php echo lang('analysis'); ?>
                        </div>
                        <div class="value">
                            <h1> <i class="fa fa-archive"></i> </h1>
                            <p><?php echo lang('campaign_analysis'); ?></p>
                        </div>
                    </section>
                    <?php if ($this->ion_auth->in_group('admin')) { ?>
                    </a>
                <?php } ?>
            </div>
            <div class="col-lg-3 col-sm-6">
                <?php if ($this->ion_auth->in_group('admin')) { ?>
                    <a href="finance/expense">
                    <?php } ?>
                    <section class="panel">
                        <div class="dash-heading">
                            <?php echo lang('expense'); ?>
                        </div>
                        <div class="value">
                            <h1> <i class="fa fa-money"></i> </h1>
                            <p><?php echo lang('expense_report'); ?></p>
                        </div>
                    </section>
                    <?php if ($this->ion_auth->in_group('admin')) { ?>
                    </a>
                <?php } ?>
            </div>
            <div class="col-lg-3 col-sm-6">
                <?php if ($this->ion_auth->in_group('admin')) { ?>
                    <a href="settings">
                    <?php } ?>
                    <section class="panel">
                        <div class="dash-heading">
                            <?php echo lang('settings'); ?>
                        </div>
                        <div class="value">
                            <h1> <i class="fa fa-gears"></i> </h1>
                            <p><?php echo lang('settings'); ?></p>
                        </div>
                    </section>
                    <?php if ($this->ion_auth->in_group('admin')) { ?>
                    </a>
                <?php } ?>
            </div>
        </div>

        <aside class="row calendar_ui panel-body">
            <section class="panel">
                <div class="panel-body">
                    <div id="calendar" class="has-toolbar calendar_view"></div>
                </div>
            </section>
        </aside>
        <!--state overview end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->

<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->

<script src="common/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="common/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="common/js/owl.carousel.js" ></script>
<script src="common/js/jquery.customSelect.min.js" ></script>
<script src="common/js/respond.min.js" ></script>

<!--common script for all pages-->
<script src="common/js/common-scripts.js"></script>

<!--script for this page-->
<script src="common/js/sparkline-chart.js"></script>
<script src="common/js/easy-pie-chart.js"></script>
<script src="common/js/count.js"></script>

<script>

    //owl carousel

    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });

</script>
</body>
</html>
