<div class="row">
    <h3><?= $from = $_GET['from'];  ?> TO </h3>
    <h3><?= $to = $_GET['to']; ?></h3>
</div>
<div class="table-responsive table--no-card m-b-30">
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                <th>S.NO</th>
                <th>Category</th>
                <th>Item</th>
                <th>Expense Date</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php $sno = 1;
            $total = 0;
            foreach ($data as $key => $v) {
                $total = $total + $v->price ?>

                <tr>
                    <td><?= $sno++ ?></td>
                    <td><?= $v->name ?></td>
                    <td><?= $v->item ?></td>
                    <td><?= $v->expense_date ?></td>
                    <td><?= $v->price ?></td>
                </tr>
            <?php } ?>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th>TOTAL</th>
                <th><?= $total ?></th>
            </tr>
        </tbody>

    </table>
</div>