<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-user"></i>  <?php echo lang('voter_database'); ?>
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <a data-toggle="modal" href="#myModal">
                            <div class="btn-group">
                                <button id="" class="btn green">
                                    <i class="fa fa-plus-circle"></i> <?php echo lang('add_voter'); ?>
                                </button>
                            </div>
                        </a>
                        <button class="export" onclick="javascript:window.print();"><?php echo lang('print'); ?></button>  
                    </div>
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th><?php echo lang('voter_id'); ?></th>                        
                                <th><?php echo lang('image'); ?></th>
                                <th><?php echo lang('name'); ?></th>
                                <th><?php echo lang('area'); ?></th>
                                <th><?php echo lang('phone'); ?></th>
                                <th><?php echo lang('contacted'); ?> </th>
                                <th class="center"><?php echo lang('email'); ?></th>
                                <th><?php echo lang('category'); ?></th>
                                <th><?php echo lang('birth_date'); ?></th>
                                <th><?php echo lang('blood_group'); ?></th>
                                <th><?php echo lang('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>

                        <style>

                            .img_url{
                                height:20px;
                                width:20px;
                                background-size: contain; 
                                max-height:20px;
                                border-radius: 100px;
                            }

                        </style>

                        <?php foreach ($voters as $voter) { ?>
                            <tr class="">
                                <td> <?php echo $voter->voter_id; ?></td>
                                <td style="width:8%;"><img style="width:95%;" src="<?php echo $voter->img_url; ?>"></td>
                                <td> <?php echo $voter->name; ?></td>
                                <td> <?php
                                    if (!empty($voter->name)) {
                                        echo $this->area_model->getAreaById($voter->area)->name;
                                    }
                                    ?></td>
                                <td><?php echo $voter->phone; ?></td>
                                <td><?php
                                    if (empty($voter->contacted)) {
                                        echo lang('no');
                                    } else {
                                        echo $voter->contacted;
                                    }
                                    ?></td>
                                <td><?php echo $voter->email; ?></td>
                                <td><?php echo $voter->category; ?></td>
                                <td class="center"><?php echo $voter->birthdate; ?></td>
                                <td style="width:6%;"><?php echo $voter->bloodgroup; ?></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs btn_width editbutton" data-toggle="modal" data-id="<?php echo $voter->id; ?>"><i class="fa fa-edit"></i></button> 
                                    <a class="btn btn-info btn-xs btn_width delete_button" href="voter/delete?id=<?php echo $voter->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->





<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> <?php echo lang('add_new_voter'); ?></h4>
            </div>
            <div class="modal-body">
                <form role="form" action="voter/addNew" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('area'); ?></label>
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
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('voter_id'); ?></label>
                        <input type="text" class="form-control" name="voter_id" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('name'); ?></label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('email'); ?></label>
                        <input type="text" class="form-control" name="email" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('address'); ?></label>
                        <input type="text" class="form-control" name="address" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('phone'); ?></label>
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1" value='' placeholder="">
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
                            ?> > <?php echo lang('yes'); ?> </option>
                            <option value="No" <?php
                            if (!empty($voter->contacted)) {
                                if ($voter->contacted == 'No') {
                                    echo 'selected';
                                }
                            }
                            ?> selected> <?php echo lang('no'); ?> </option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('voter_category'); ?></label>
                        <select class="form-control m-bot15" name="category" value=''> 
                            <?php foreach ($categorys as $category) { ?>
                                <option value="<?php echo $category->category; ?>" <?php
                                if (!empty($category->category)) {
                                    if ($category->category == $voter->category) {
                                        echo 'selected';
                                    }
                                }
                                ?> ><?php echo $category->category; ?> </option>
                                    <?php } ?>
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
                    <input type="hidden" name="id" value=''>
                    <input type="hidden" name="p_id" value=''>

                    <section class="">
                        <button type="submit" name="submit" class="btn btn-info submit_button"><?php echo lang('submit'); ?></button>
                    </section>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Edit Client -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> <?php echo lang('edit_voter'); ?></h4>
            </div>
            <div class="modal-body">
                <form role="form" id="voterEditForm"  action="voter/addNew" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('area'); ?></label>
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
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('voter_id'); ?></label>
                        <input type="text" class="form-control" name="voter_id" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('name'); ?></label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('email'); ?></label>
                        <input type="text" class="form-control" name="email" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('address'); ?></label>
                        <input type="text" class="form-control" name="address" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('phone'); ?></label>
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1" value='' placeholder="">
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
                            ?> > <?php echo lang('yes'); ?> </option>
                            <option value="No" <?php
                           
                            if (!empty($voter->contacted)) {
                                if ($voter->contacted == 'No') {
                                    echo 'selected';
                                }
                            }
                             if (empty($voter->contacted)) {
                                echo 'selected';
                            }
                            ?>  > <?php echo lang('no'); ?> </option>

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
                        <label for="exampleInputEmail1"><?php echo lang('voter_category'); ?></label>
                        <select class="form-control m-bot15" name="category" value=''> 
                            <?php foreach ($categorys as $category) { ?>
                                <option value="<?php echo $category->category; ?>" <?php
                                if (!empty($category->category)) {
                                    if ($category->category == $voter->category) {
                                        echo 'selected';
                                    }
                                }
                                ?> ><?php echo $category->category; ?> </option>
                                    <?php } ?>
                        </select>
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

                    <input type="hidden" name="id" value=''>
                    <input type="hidden" name="p_id" value=''>

                    <section class="">
                        <button type="submit" name="submit" class="btn btn-info submit_button"><?php echo lang('submit'); ?></button>
                    </section>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">


                                        $(document).ready(function () {
                                            $(".editbutton").click(function (e) {
                                                e.preventDefault(e);
                                                // Get the record's ID via attribute  
                                                var iid = $(this).attr('data-id');
                                                $('#voterEditForm').trigger("reset");
                                                $('#myModal2').modal('show');
                                                $.ajax({
                                                    url: 'voter/editVoterByJason?id=' + iid,
                                                    method: 'GET',
                                                    data: '',
                                                    dataType: 'json',
                                                }).success(function (response) {
                                                    // Populate the form fields with the data returned from server
                                                    $('#voterEditForm').find('[name="area"]').val(response.voter.area).end()
                                                    $('#voterEditForm').find('[name="id"]').val(response.voter.id).end()
                                                    $('#voterEditForm').find('[name="voter_id"]').val(response.voter.voter_id).end()
                                                    $('#voterEditForm').find('[name="name"]').val(response.voter.name).end()
                                                    $('#voterEditForm').find('[name="password"]').val(response.voter.password).end()
                                                    $('#voterEditForm').find('[name="category"]').val(response.voter.category).end()
                                                    $('#voterEditForm').find('[name="email"]').val(response.voter.email).end()
                                                    $('#voterEditForm').find('[name="address"]').val(response.voter.address).end()
                                                    $('#voterEditForm').find('[name="phone"]').val(response.voter.phone).end()
                                                    $('#voterEditForm').find('[name="contacted"]').val(response.voter.contacted).end()
                                                    $('#voterEditForm').find('[name="sex"]').val(response.voter.sex).end()
                                                    $('#voterEditForm').find('[name="birthdate"]').val(response.voter.birthdate).end()
                                                    $('#voterEditForm').find('[name="bloodgroup"]').val(response.voter.bloodgroup).end()
                                                });

                                            });
                                        });

</script>

<script>
    $(document).ready(function () {
        $(".flashmessage").delay(3000).fadeOut(100);
    });
</script>