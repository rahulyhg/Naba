<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ads
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Ads</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="box" id="posts">
                    <div class="box-header with-border">
                        <h3 class="box-title">Manage your Ads</h3>
                        <a href="<?php echo url('/admin/ads/add'); ?>" class="btn btn-success pull-right popup">
                            Add A New Advertisement</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>#</th>
                                    <th>Link</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Page</th>
                                    <th>Status</th>
                                </tr>
                                <?php
                                $i = 1;
                                foreach ($ads as $ad) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $ad->link; ?></td>
                                        <td <?php
                                        if (time() < $ad->start) {
                                            echo 'style="color: Blue"';
                                        }
                                        ?>>
                                            <?php echo date('Y-m-d', $ad->start); ?></td>
                                        <td <?php
                                        if (time() > $ad->end) {
                                            echo 'style="color:Red"';
                                        }
                                        ?>>
                                            <?php echo date('Y-m-d', $ad->end); ?></td>
                                        <td><?php echo $ad->page; ?></td>
                                        <td style="<?php echo $ad->status === 'disabled' ? 'color:red' : NULL; ?>"><?php echo ucfirst($ad->status); ?></td>
                                        <td>
                                            <a href="<?php echo url('/admin/ads/edit') . '/' . $ad->id; ?>" class="btn btn-success">
                                                Edit
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger delete"
                                                    data-target="<?php echo url('/admin/ads/delete/') . '/' . $ad->id; ?>"
                                                    >
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                Delete</button>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <!-- <ul class="pagination pagination-sm no-margin pull-right">
                          <li><a href="#">&laquo;</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">&raquo;</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->