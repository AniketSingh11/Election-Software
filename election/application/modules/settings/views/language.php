<?php (defined('BASEPATH')) OR exit('No direct script access allowed'); ?>

<section id="main-content">
    <section class="wrapper site-min-height">
        <section class="panel">
            <div class="panel-body">

               
                                <header class="panel-heading">
                                    <i class="livicon" data-name="download" data-loop="true" data-color="#fff" data-hovercolor="#fff" data-size="18"></i>
                                    <?php echo lang('language'); ?>
                                </header>

                                <form role="form" class="clearfix pos form1"  id="editSaleForm" action="settings/changeLanguage" method="post" enctype="multipart/form-data">
                                    <div class='col-md-12 panel-body'>
                                        <div class="col-md-12">  

                                            <div class="form-group col-md-4">
                                                <div class="col-md-3 sale_label"> 
                                                    <label for="exampleInputEmail1"> <?php echo lang('language'); ?></label>
                                                </div>

                                                <div class="col-md-9"> 

                                                    <select class="form-control m-bot15" name="language" value=''>
                                                        <option value="english" <?php
                                                        if (!empty($settings->language)) {
                                                            if ($settings->language == 'english') {
                                                                echo 'selected';
                                                            }
                                                        }
                                                        ?>><?php echo lang('english'); ?> 
                                                        </option>
                                                        <option value="spanish" <?php
                                                        if (!empty($settings->language)) {
                                                            if ($settings->language == 'spanish') {
                                                                echo 'selected';
                                                            }
                                                        }
                                                        ?>><?php echo lang('spanish'); ?>
                                                        </option>
                                                        <option value="french" <?php
                                                        if (!empty($settings->language)) {
                                                            if ($settings->language == 'french') {
                                                                echo 'selected';
                                                            }
                                                        }
                                                        ?>><?php echo lang('french'); ?>
                                                        </option>
                                                        <option value="italian" <?php
                                                        if (!empty($settings->language)) {
                                                            if ($settings->language == 'italian') {
                                                                echo 'selected';
                                                            }
                                                        }
                                                        ?>><?php echo lang('italian'); ?>
                                                        </option>
                                                        <option value="portuguese" <?php
                                                        if (!empty($settings->language)) {
                                                            if ($settings->language == 'portuguese') {
                                                                echo 'selected';
                                                            }
                                                        }
                                                        ?>><?php echo lang('portuguese'); ?>
                                                        </option>
                                                    </select>

                                                </div>

                                            </div>

                                            <input type="hidden" name="language_settings" value='language_settings'>

                                            <input type="hidden" name="id" value='<?php
                                            if (!empty($settings->id)) {
                                                echo $settings->id;
                                            }
                                            ?>'>

                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <div class="col-md-3"> 
                                                    </div>  
                                                    <div class="col-md-6"> 
                                                        <button type="submit" name="submit" class="btn green"> <?php echo lang('submit'); ?></button>
                                                    </div>
                                                    <div class="col-md-3"> 
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                         


            </div>
        </section>
        <!-- page end-->
    </section>
</section>

