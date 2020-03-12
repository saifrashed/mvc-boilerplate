<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= ADMIN_HOME ?>" class="brand-link">
        <span class="brand-text font-weight-light">TickIt | Flirtuh</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= ADMIN_HOME ?>" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>Home</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Evenementen
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= EVENT_READS ?>" class="nav-link">
                                <i class="fa fa-eye nav-icon"></i>
                                <p>Alle Evenementen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= EVENT_CREATE ?>" class="nav-link">
                                <i class="fa fa-plus-square nav-icon"></i>
                                <p>Voeg Evenement toe</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
