<div class="row">
    <div class="col-lg-12">
        <h2>Category</h2>

        <div class="row">
            <!-- button  -->
            <div class="float-left col-md-6 my-2"><a href="<?= base_url("category/save") ?>" class="btn btn-primary">Add New</a>
            </div>

            <!-- search -->
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group col-md-6 my-2 float-right">
                        <input class="form-control" type="search" id="search" name="search" placeholder="search">
                    </div>
                </form>
            </div>
        </div>
        <!-- table data -->
        <div class="table-responsive table--no-card m-b-30">
            <table class="table  table-borderless table-striped table-earning " style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if ($category > 0) {
                        foreach ($category as $key => $val) { ?>
                            <tr class="text-center">
                                <td><?= $val->id ?></td>
                                <td><?= $val->name ?></td>
                                <td>
                                    <a href="<?= base_url("category/save/{$val->id}") ?>" class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i></a>

                                    <a href="<?= base_url("category/delete/{$val->id}") ?>" class="btn  btn-danger del-record"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>