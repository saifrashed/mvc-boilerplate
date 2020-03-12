<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Evenement</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=ADMIN_HOME?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?=EVENT_READS?>">Evenement</a></li>
                        <li class="breadcrumb-item active">Voeg evenement toe</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Voeg evenement toe</h3>
                        </div>

                        <form action="<?= EVENT_CREATE ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Evenement naam:</label>
                                    <input type="text" name="project_title" class="form-control" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label>Banner afbeelding:</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input">
                                            <label class="custom-file-label">Kies bestand</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Date and time range -->
                                <div class="form-group">
                                    <label>Datum & tijd:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="reservationtime">
                                    </div>
                                    <!-- /.input group -->
                                </div>


                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Voeg toe
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
