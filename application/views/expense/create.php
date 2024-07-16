<div class="row">
    <div class="col-lg-12">
        <h2>Add Expense</h2>
        <a href="<?= base_url('expense') ?>">Back</a>
        <div class="card">
            <div class="card-body card-block">
                <form method="post" class="form-horizontal">
                    <div class="form-group"> <label class="control-label mb-1">Category</label>

                        <select name="category_id" id="category_id" class="form-control">';
                            <option value="">Select Category</option>
                            <?php if ($cat > 0) {
                                foreach ($cat as $key => $v) { ?>

                                    <option value="<?= $v->id ?>"><?= $v->name ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="form-group"> <label class="control-label mb-1">Item</label>
                        <input type="text" name="item" required value="" class="form-control" rquired>
                    </div>
                    <div class="form-group"> <label class="control-label mb-1">Price</label>
                        <input type="text" name="price" required value="" class="form-control" rquired>
                    </div>
                    <div class="form-group"> <label class="control-label mb-1">Details</label>
                        <input type="text" name="details" required value="" class="form-control" rquired>
                    </div>
                    <div class="form-group"> <label class="control-label mb-1">Expense Date</label>
                        <input type="date" name="expense_date" required value="" class="form-control" rquired max="<?php echo date('Y-m-d') ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info btn-block">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>