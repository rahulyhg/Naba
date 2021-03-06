<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header"></li>
            <li id="sidebar-admin" class="sidebar-link">
                <a href="<?php echo url('/admin'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li id="sidebar-categories" class="sidebar-link">
                <a href="<?php echo url('/admin/categories'); ?>">
                    <i class="fa fa-list"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li id="sidebar-users-groups" class="sidebar-link">
                <a href="<?php echo url('/admin/users-groups'); ?>">
                    <i class="fa fa-users"></i>
                    <span>Users-Groups</span>
                </a>
            </li>
            <li id="sidebar-users" class="sidebar-link">
                <a href="<?php echo url('/admin/users'); ?>">
                    <i class="fa fa-user"></i>
                    <span>Users</span>
                </a>
            </li>
            <li id="sidebar-posts" class="sidebar-link">
                <a href="<?php echo url('/admin/posts'); ?>">
                    <i class="fa fa-paper-plane-o"></i>
                    <span>Posts</span>
                </a>
            </li>
            <li id="sidebar-comments" class="sidebar-link">
                <a href="<?php echo url('/admin/comments'); ?>">
                    <i class="fa fa-comment" aria-hidden="true"></i>
                    <span>Comments</span>
                </a>
            </li>
            <li id="sidebar-ads" class="sidebar-link">
                <a href="<?php echo url('/admin/ads'); ?>">
                    <i class="fa fa-flag" aria-hidden="true"></i>
                    <span>Ads</span>
                </a>
            </li>
            <?php
            if ($admin == 1) {
                ?>
                <li id="sidebar-settings" class="sidebar-link">
                    <a href="<?php echo url('/admin/settings') ?>">
                        <i class="fa fa-cogs"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>