<div class="row">
    <div class="col-lg-12">
        <form type="get">
            <div class="row ">
                <div class="form-group col-md-4">
                    <label>From</label>
                    <div class="form-group">
                        <input type="date" id="from_date" name="from" class="form-control" value="" max="<?php echo date('Y-m-d') ?>">
                    </div>
                </div>


                <div class="form-group col-md-4">
                    <label> To</label>
                    <div class="form-group">
                        <input type="date" id="to_date" name="to" class="form-control" value="" max="<?php echo date('Y-m-d') ?>">
                    </div>
                </div>


                <div class="form-group col-md-4">
                    <label> Category</label>
                    <select onchange=change_cat() name="category_id" id="category_id" class="form-control">';
                        <option value="">Select Category</option>
                        <?php if ($cat > 0) {
                            foreach ($cat as $key => $v) { ?>

                                <option value="<?= $v->id ?>"><?= $v->name ?></option>
                        <?php }
                        } ?>
                    </select>
                </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info  btn-block">
                
                <a class="btn btn-warning my-1" href="<?= base_url('reports') ?>" role="button">Reset</a>
            </div>
        </form>
    </div>

    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Price</th>
                </tr>
            <tbody>

                <?php $total = 0;
                if ($expense) {

                    foreach ($expense as $key => $v) {
                        $total = $total + $v->price ?>
                        <tr>


                            <td><?= $v->name ?></td>

                            <td><?= $v->price ?></td>



                        </tr>
                <?php }
                } else {
                    echo '<td class="text-danger text-center" colspan="6">No data found</td>';
                } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Total</th>
                    <th><?= $total ?></th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>


<script>
    function change_cat() {
        var category_id = document.getElementById('category_id').value;
        window.location.href = '?category_id=' + category_id;
    }


    function set_to_date() {
        var from_date = document.getElementById('from_date').value;
        document.getElementById('to_date').setAttribute("min", from_date);
    }
</script>