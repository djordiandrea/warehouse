<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Vehicle</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <!-- <th>Picture</th> -->
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Number</th>
                                    <th>KM</th>
                                    <th>Buy Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < sizeof($data_kendaraan); $i++) { ?>
                                    <tr>
                                        <!-- <td><?php echo $data_kendaraan[$i]->mlv_vehiclePicture; ?></td> -->
                                        <td><button type="button" class="btn btn-success btn-sm btn-view-list-vehicle" data-name="<?php echo $data_kendaraan[$i]->mlv_vehicleName; ?>" data-id="<?php echo base_url() . $data_kendaraan[$i]->mlv_vehiclePicture; ?>">
                                                <i class="ion ion-android-image"> </i>
                                            </button> <?php echo $data_kendaraan[$i]->mlv_vehicleName; ?> </td>
                                        <td><?php echo $data_kendaraan[$i]->mlv_vehicleCode; ?></td>
                                        <td><?php echo $data_kendaraan[$i]->mlv_vehicleBrand; ?></td>
                                        <td><?php echo $data_kendaraan[$i]->mlv_vehicleModel; ?></td>
                                        <td><?php echo $data_kendaraan[$i]->mlv_vehicleNumber; ?></td>
                                        <td><?php echo $data_kendaraan[$i]->mlv_vehicleLongRun; ?></td>
                                        <td><?php echo $data_kendaraan[$i]->mlv_BuyingDate; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Picture</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- <div class="modal-body"> -->
                    <img id="img-viewer" src="" alt="" style="width: auto;">
                    <!-- </div> -->
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
</section>