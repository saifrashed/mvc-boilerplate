<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Evenement</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= ADMIN_HOME ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= EVENT_READS ?>">Evenementen</a></li>
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

                        <form action="<?= EVENTS_CREATE ?>" method="POST">
                            <div class="card-body">

                                <!-- Evenement naam -->
                                <div class="form-group">
                                    <label>Evenement naam:</label>
                                    <input type="text" name="evenement_naam" class="form-control" required autofocus>
                                </div>

                                <!-- Evenement datum -->
                                <div class="form-group">
                                    <label>Datum & tijd:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-stop-circle"></i></span>
                                        </div>
                                        <input type="text" name="evenement_datum" class="form-control float-right"
                                               id="reservationtime" required>
                                    </div>
                                </div>

                                <!-- Evenement locatie -->
                                <div class="form-group">
                                    <label>Evenement locatie:</label>
                                    <input type="text" name="evenement_locatie" class="form-control" required>
                                </div>

                                <!-- Evenement leeftijd -->
                                <div class="form-group">
                                    <label>Evenement leeftijd:</label>
                                    <input type="text" name="evenement_leeftijd" class="form-control" required>
                                </div>

                                <!-- Evenement afbeelding -->
                                <div class="form-group">
                                    <label>Banner afbeelding:</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="evenement_banner" class="custom-file-input"
                                                   required>
                                            <label class="custom-file-label">Kies bestand</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Inplannen
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
