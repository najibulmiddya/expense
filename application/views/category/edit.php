<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body card-block">
                <form action="<?= base_url("category/save/{$cat->id}") ?>" method="post" class="form-horizontal">

                    <input type="hidden" name="id" required value="<?= $cat->id ?>" class="form-control" rquired>

                    <div class="form-group">
                        <label class="control-label mb-1">Category</label>
                        <input type="text" name="name" required value="<?= $cat->name ?>" class="form-control" rquired>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Update" class="btn btn-lg btn-info btn-block">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>