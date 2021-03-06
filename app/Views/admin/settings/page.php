<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Settings
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Settings</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="box" id="settings">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <h3>Manage settings (<span style="color: red">Use with caution</span>)</h3>
                        <form action="<?php echo $action; ?>" class="form" method="POST">
                            <div class="form-group col-sm-4">
                                <label for="icon">Fav Icon</label>
                                <input type="file" id="icon" name="icon" class="form-control">
                            </div>
                            <img src="<?php echo $img . $info[7]->v; ?>" width="50" height="50" style="margin-top: 15px" alt="">
                            <div class="clearfix"></div>
                            <div class="form-group col-sm-4">
                                <label for="name">Site name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Site name"
                                       value="<?php echo $info[0]->v; ?>">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="email">Site email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Site email"
                                       value="<?php echo $info[1]->v; ?>">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="status">Site status</label>
                                <select id="status" class="form-control" name="status">
                                    <option value="on"
                                    <?php
                                    if ($info[2]->v == 'on') {
                                        echo 'selected =""';
                                    }
                                    ?>
                                            >
                                        On</option>
                                    <option value="off"
                                    <?php
                                    if ($info[2]->v == 'off') {
                                        echo 'selected =""';
                                    }
                                    ?>
                                            >Off</option>
                                </select>
                            </div>
                            <div id="status_msg" class="form-group col-sm-12" <?php
                            if ($info[2]->v == 'on') {
                                echo 'style="display:none"';
                            }
                            ?> >
                                <label for="msg">Choose an appropriate message that will be visible to visitors</label>
                                <textarea id="msg" name="msg" class="form-control textarea"><?php echo $info[3]->v; ?></textarea>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="contact">Contact us page</label>
                                <textarea id="contact" name="contact" class="form-control textarea"><?php echo $info[4]->v; ?></textarea>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="about">About us page</label>
                                <textarea id="about" name="about" class="form-control textarea"><?php echo $info[5]->v; ?></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <h2 style="text-align: center">Social Links</h2>
                            <div class="form-group col-sm-8">
                                <label for="facebook">Facebook Link</label>
                                <input type="text" id="facebook" name="facebook" class="form-control" placeholder="facebook"
                                       value="<?php echo $info[6]->v; ?>">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="twitter">Twitter Link</label>
                                <input type="text" id="twitter" name="twitter" class="form-control" placeholder="twitter"
                                       value="<?php echo $info[8]->v; ?>">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="instagram">Instagram Link</label>
                                <input type="text" id="instagram" name="instagram" class="form-control" placeholder="instagram"
                                       value="<?php echo $info[9]->v; ?>">
                            </div>
                            <div class="clearfix"></div>
                            <!--Apps info-->
                            <h2 style="text-align: center">Apps settings</h2>
                            <div class="form-group col-sm-8">
                                <label for="FBappID">Facebook App ID</label>
                                <input type="text" id="FBappID"  name="FBappID" class="form-control" placeholder="Facebook App ID"
                                       value="<?php echo $info[10]->v; ?>">
                            </div>
                            <div class="clearfix"></div>
                            <div id="form-results"></div>
                            <div class="clearfix"></div>
                            <button id="submit-btn" class="btn btn-info submit-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->