
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                <?php
                if (!empty($voter->id))
                    echo lang('edit_voter');
                else
                    echo lang('add_new_voter');
                ?>
            </header>

            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">

                        <div class="col-lg-12">

                            <section class="panel">

                                <div class="panel-body">
                                    <?php echo $this->session->flashdata('feedback'); ?>
                                    <div class="col-lg-12">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <?php echo validation_errors(); ?>

                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>

                                    <form role="form" action="voter/addNew" method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <div class="col-md-12">     
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-md-3 payment_label"> 
                                                        <label for="exampleInputEmail1"><?php echo lang('area'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <select class="form-control m-bot15" name="area" value=''> 
                                                            <?php foreach ($areas as $area) { ?>
                                                                <option value="<?php echo $area->id; ?>" <?php
                                                                if (!empty($voter->area)) {
                                                                    if ($voter->area == $area->id) {
                                                                        echo 'selected';
                                                                    }
                                                                }
                                                                ?> ><?php echo $area->name; ?> </option>
                                                                    <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('voter_id'); ?></label>
                                            <input type="text" class="form-control" name="voter_id" id="exampleInputEmail1" value='<?php
                                            if (!empty($voter->voter_id)) {
                                                echo $voter->voter_id;
                                            }
                                            ?>' placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('name'); ?></label>
                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" value='<?php
                                            if (!empty($voter->name)) {
                                                echo $voter->name;
                                            }
                                            ?>' placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('email'); ?></label>
                                            <input type="text" class="form-control" name="email" id="exampleInputEmail1" value='<?php
                                            if (!empty($voter->email)) {
                                                echo $voter->email;
                                            }
                                            ?>' placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('address'); ?></label>
                                            <input type="text" class="form-control" name="address" id="exampleInputEmail1" value='<?php
                                            if (!empty($voter->address)) {
                                                echo $voter->address;
                                            }
                                            ?>' placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('phone'); ?></label>
                                            <input type="text" class="form-control" name="phone" id="exampleInputEmail1" value='<?php
                                            if (!empty($voter->phone)) {
                                                echo $voter->phone;
                                            }
                                            ?>' placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('contacted'); ?></label>
                                            <select class="form-control m-bot15" name="contacted" value=''>
                                                <option value="Yes" <?php
                                                if (!empty($voter->contacted)) {
                                                    if ($voter->contacted == 'Yes') {
                                                        echo 'selected';
                                                    }
                                                }
                                                ?> > <?php echo lang('yes');?> </option>
                                                 <option value="No" <?php
                                                if (!empty($voter->contacted)) {
                                                    if ($voter->contacted == 'No') {
                                                        echo 'selected';
                                                    }
                                                }
                                                ?> selected> <?php echo lang('no');?> </option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><?php echo lang('birth_date'); ?></label>
                                            <input class="form-control form-control-inline input-medium default-date-picker" type="text" name="birthdate" value="<?php
                                            if (!empty($voter->birthdate)) {
                                                echo $voter->birthdate;
                                            }
                                            ?>" placeholder="">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('blood_group'); ?></label>
                                            <select class="form-control m-bot15" name="bloodgroup" value=''>
                                                <?php foreach ($groups as $group) { ?>
                                                    <option value="<?php echo $group->gname; ?>" <?php
                                                    if (!empty($voter->bloodgroup)) {
                                                        if ($group->gname == $voter->bloodgroup) {
                                                            echo 'selected';
                                                        }
                                                    }
                                                    ?> > <?php echo $group->gname; ?> </option>
                                                        <?php } ?> 
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('image'); ?></label>
                                            <input type="file" name="img_url">
                                        </div>

                                        <input type="hidden" name="id" value='<?php
                                        if (!empty($voter->id)) {
                                            echo $voter->id;
                                        }
                                        ?>'>
                                        <input type="hidden" name="p_id" value='<?php
                                        if (!empty($voter->voter_id)) {
                                            echo $voter->voter_id;
                                        }
                                        ?>'>

                                        <section class="">
                                            <button type="submit" name="submit" class="btn btn-info"><?php echo lang('submit'); ?></button>
                                        </section>
                                    </form>

                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->
