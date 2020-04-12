<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-bars"></i>
                    <p>
                        Меню
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= \yii\helpers\Url::to(['/admin']) ?>" class="nav-link <?php if ($this->context->route == 'admin/main/index') echo 'active'?>">
                            <i class="far fa-chart-bar nav-icon"></i>
                            <p>Статистика</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= \yii\helpers\Url::to(['order/index']) ?>" class="nav-link <?php if ($this->context->route == 'admin/order/index') echo 'active'?>">
                            <i class="fas fa-box nav-icon"></i>
                            <p>Заказы</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= \yii\helpers\Url::to(['product/index']) ?>" class="nav-link <?php if ($this->context->route == 'admin/product/index') echo 'active'?>">
                            <i class="fas fa-pizza-slice nav-icon"></i>
                            <p>Товары</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= \yii\helpers\Url::to(['auth/logout']) ?>" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Выход</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
