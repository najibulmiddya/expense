<div class="row">
  <div class="col-md-12">
    <div class="overview-wrap">
      <h2 class="title-1">EXPENSE</h2>
      <a class="au-btn au-btn-icon au-btn--blue" href="<?= base_url('expense/save') ?>">
        <i class="zmdi zmdi-plus"></i>add Expense</a>
    </div>
  </div>
</div>

<section class="statistic statistic2">
  <div class="row">

    <div class="col-md-8 col-lg-4">
      <div class="statistic__item statistic__item--green">
        <h2 class="number"><?php echo getDashboardExpense('today') ?></h2>
        <span class="desc">Today's Expense</span>
        <div class="icon">
          <i class="zmdi zmdi-account-o"></i>
        </div>
      </div>
    </div>

    <div class="col-md-8 col-lg-4">
      <div class="statistic__item statistic__item--orange">
        <h2 class="number"><?php echo getDashboardExpense('yesterday') ?></h2>
        <span class="desc">Yesterday's Expense</span>
        <div class="icon">
          <i class="zmdi zmdi-shopping-cart"></i>
        </div>
      </div>
    </div>

    <div class="col-md-8 col-lg-4">
      <div class="statistic__item statistic__item--blue">
        <h2 class="number"><?php echo getDashboardExpense('week') ?></h2>
        <span class="desc">This Week Expense</span>
        <div class="icon">
          <i class="zmdi zmdi-calendar-note"></i>
        </div>
      </div>
    </div>

    <div class="col-md-8 col-lg-4">
      <div class="statistic__item statistic__item--blue">
        <h2 class="number"><?php echo getDashboardExpense('month') ?></h2>
        <span class="desc">
          This Month Expense</span>
        <div class="icon">
          <i class="zmdi zmdi-money"></i>
        </div>
      </div>
    </div>

    <div class="col-md-8 col-lg-4">
      <div class="statistic__item statistic__item--orange">
        <h2 class="number"><?php echo getDashboardExpense('year') ?></h2>
        <span class="desc">This Year Expense</span>
        <div class="icon">
          <i class="zmdi zmdi-money"></i>
        </div>
      </div>
    </div>

    <div class="col-md-8 col-lg-4">
      <div class="statistic__item statistic__item--green">
        <h2 class="number text-center"><?php echo getDashboardExpense('total') ?></h2>
        <span class="desc">Total Expense</span>
        <div class="icon">
          <i class="zmdi zmdi-money"></i>
        </div>
      </div>
    </div>

  </div>
</section>