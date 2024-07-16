<div class="row">
    <div class="col-lg-12">
        <h2>All Expense</h2>

        <div class="row">

            <!-- button  -->
            <div class="float-left col-md-6 my-2"><a href="<?= base_url('expense/save') ?>" class="btn btn-primary">Add Expense</a>
            </div>

            <!-- search -->
            <div class="col-md-6 float-end">
                <form method="get">
                <select onchange=change_cat() name="category_id" id="category_id" class="form-control col-md-6 my-2 float-right">';
                        <option value="">Select Category</option>
                        <
                        <?php if ($cat > 0) {
                            foreach ($cat as $key => $v) { ?>

                                <option value="<?= $v->id ?>"><?= $v->name ?></option>
                        <?php }
                        } ?>
                        <option value="">All Record</option>
                    </select>
                   
                </form>
            </div>

        </div>

        <!-- <a href="<?= base_url('expense/save') ?>">Add Expense</a>
        <br /><br /> -->


        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>S.NO</th>

                        <th>Category</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Expense Date</th>
                        <th>Action</th>
                    </tr>
                <tbody>

                    <?php if ($expense) {
                        $sno = 1;
                        $total = 0;
                        foreach ($expense as $key => $v) {$total=$total+$v->price; ?>
                            <tr>
                                <td><?= $sno++ ?></td>

                                <td><?= $v->name ?></td>
                                <td><?= $v->item ?></td>
                                <td><?= $v->price ?></td>
                                <td><?= $v->expense_date ?></td>

                                <td>
                                    <a href="<?= base_url("expense/save/{$v->id}") ?>" class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i></a>

                                    <a href="<?= base_url("expense/delete/{$v->id}") ?>" class="btn  btn-danger del-record"><i class="bi bi-trash"></i></a>
                                </td>

                            </tr>
                    <?php }
                    } else {
                        echo '<td class="text-danger text-center" colspan="6">No data found</td>';
                    } ?>
                    <tr>
                        <th>Total Price</th>
                        <th></th>
                        <th></th>
                        <th><?=$total?></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function change_cat() {
        var category_id = document.getElementById('category_id').value;
        window.location.href = '?category_id=' + category_id;
    }
</script>