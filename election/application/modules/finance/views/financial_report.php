<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        
        
        <style>
            
            
            form{
                background: transparent !important;
            }
            
            
            
        </style>
        
        
        <!-- page start-->
        <div class="col-md-12">
            <div class="col-md-7">
                <section>
                    <form role="form" action="finance/financialReport" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <!--     <label class="control-label col-md-3">Date Range</label> -->
                            <div class="col-md-6">
                                <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                    <input type="text" class="form-control dpd1" name="date_from" value="<?php
                                    if (!empty($from)) {
                                        echo $from;
                                    }
                                    ?>" placeholder="<?php echo lang('date_from');?>">
                                    <span class="input-group-addon">To</span>
                                    <input type="text" class="form-control dpd2" name="date_to" value="<?php
                                    if (!empty($to)) {
                                        echo $to;
                                    }
                                    ?>" placeholder="<?php echo lang('date_to');?>">
                                </div>
                                <div class="row"></div>
                                <span class="help-block"></span> 
                            </div>
                            <div class="col-md-6">
                                <button type="submit" name="submit" class="btn btn-info range_submit"><?php echo lang('submit');?></button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <div class="col-md-5">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <section></section>
                <section class="panel">
                    <header class="panel-heading">
                        <?php echo lang('expense_report');?>
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> <?php echo lang('category');?></th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> <?php echo lang('amount');?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($expense_categories as $category) { ?>
                                <tr class="">
                                    <td><?php echo $category->category ?></td>
                                    <td>
                                        <?php echo $settings->currency; ?>
                                        <?php
                                        foreach ($expenses as $expense) {
                                            $category_name = $expense->category;
                                            if (($category->category == $category_name)) {
                                                $amount_per_category[] = $expense->amount;
                                            }
                                        }
                                        if (!empty($amount_per_category)) {
                                            $total_expense_by_category[] = array_sum($amount_per_category);
                                            echo array_sum($amount_per_category);
                                        } else {
                                            echo '0';
                                        }
                                        $amount_per_category = NULL;
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </section>
            </div>
            <div class="col-lg-5">               
                <section class="panel">
                    <div class="weather-bg">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-money"></i>
                                    <?php echo lang('gross_expense');?>
                                </div>
                                <div class="col-xs-8">
                                    <div class="degree">
                                        <?php echo $settings->currency; ?>
                                        <?php
                                        if (!empty($total_expense_by_category)) {
                                            echo array_sum($total_expense_by_category);
                                        } else {
                                            echo '0';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->
