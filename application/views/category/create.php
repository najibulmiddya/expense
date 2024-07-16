<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body card-block">

                <form action="<?= base_url('category/save') ?>" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label mb-1">Category Name</label>
                        <input type="text" name="name" value="<?= set_value('name') ?>" class="form-control" >
                        <?= form_error('name', '<div class="error text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info btn-block">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>