<div class="row">
    <div class="col-lg-12">
        <h2>All Users</h2>

        
        <!-- table data -->
        <div class="table-responsive table--no-card m-b-30">
            <table class="table  table-borderless table-striped table-earning " style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php if ($users > 0) {
                    $sno=1;
                        foreach ($users as $key => $val) { ?>
                            <tr class="text-center">
                                <td><?= $sno++ ?></td>
                                <td><?= $val->name ?></td>
                                <td><?= $val->email ?></td>
                                <td>
                                    <a href="<?= base_url("users/delete/{$val->id}") ?>" class="btn  btn-danger del-record"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                    <?php }
                    } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

