<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Evenementen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= ADMIN_HOME ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= EVENT_READS ?>">Evenementen</a></li>
                            <li class="breadcrumb-item active">Alle evenement toe</li>
                        </ol>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-6">
                    <div class="small-box bg-gradient-success">
                        <div class="inner">
                            <h3>Test</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="small-box bg-gradient-danger">
                        <div class="inner">
                            <h3>Test</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="small-box bg-gradient-warning">
                        <div class="inner">
                            <h3>Test</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <section class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Evenementen</h3>
                        </div>
                        <div class="card-body">
                            <?= $table;?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>
