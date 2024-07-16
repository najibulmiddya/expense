<div class="row">
    <div class="col-lg-12">
        <h2>Update Expense</h2>
        <a href="<?= base_url('expense') ?>">Back</a>
        <div class="card">
            <div class="card-body card-block">
                <form method="post" class="form-horizontal">
                    <div class="form-group"> <label class="control-label mb-1">Category</label>

                        
                        <select name="category_id" id="category_id" class="form-control">';
                            <?php 
                            foreach ($cat as $key => $v) {
                                
                                if($expense->category_id >0 && $expense->category_id == $v->id){
                                    ?>
                                    <option value="<?=$v->id?>" selected ><?=$v->name?></option>
                                    <?php
                                }else{?>
                                    <option value="<?= $v->id ?>"><?= $v->name ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>


                    <div class="form-group"> <label class="control-label mb-1">Item</label>
                        <input type="text" name="item" required value="<?=$expense->item?>" class="form-control" rquired>
                    </div>
                    <div class="form-group"> <label class="control-label mb-1">Price</label>
                        <input type="text" name="price" required value="<?=$expense->price?>" class="form-control" rquired>
                    </div>
                    <div class="form-group"> <label class="control-label mb-1">Details</label>
                        <input type="text" name="details" required value="<?=$expense->details?>" class="form-control" rquired>
                    </div>
                    <div class="form-group"> <label class="control-label mb-1">Expense Date</label>
                        <input type="date" name="expense_date" required value="<?=$expense->expense_date?>" class="form-control" rquired max="<?php echo date('Y-m-d') ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info btn-block">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>