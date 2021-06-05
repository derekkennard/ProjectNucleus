<div class="az-content az-content-dashboard-eight">
    <?php if (isset($viewmodel)) {
    foreach ($viewmodel

    as $item) : ?>
    <div class="container d-block">
        <h2 class="az-content-title tx-24 mg-b-5">Welcome to My Project Nucleus</h2>
        <p class="mg-b-20 mg-lg-b-25">Specializing in finite details <br/></p>

        <div class="row row-sm mg-b-20">
            <div class="col-lg-8">
                <div class="row row-xs row-sm--sm">
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-dashboard-seventeen">
                            <div class="card-body">
                                <h6 class="card-title">New Referrals (YTD)</h6>
                                <div>
                                    <h4><?php echo number_format($item['newrefs']); ?></h4>
                                    <span>Goal: <?php echo number_format($item['newrefsgoal']) . ' - ' . $item['newrefspercent'] . '%'; ?></span>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="flotChart1" class="flot-chart"></div>
                            </div><!-- chart-wrapper -->
                        </div>
                    </div><!-- col -->
                    <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
                        <div class="card card-dashboard-seventeen bg-primary-dark tx-white">
                            <div class="card-body">
                                <h6 class="card-title">Prescription Refills (YTD)</h6>
                                <div>
                                    <h4 class="text-white"><?php echo number_format($item['prescrefill']); ?></h4>
                                    <span class="op-7">Goal: <?php echo number_format($item['prescrefillgoal']) . ' - ' . $item['prescrefillpercent'] . '%'; ?></span>
                                </div>
                            </div><!-- card-body -->
                            <div class="chart-wrapper">
                                <div id="flotChart2" class="flot-chart"></div>
                            </div><!-- chart-wrapper -->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
                        <div class="card card-dashboard-seventeen">
                            <div class="card-body">
                                <h6 class="card-title">Claim's Collected (YTD)</h6>
                                <div>
                                    <h4><?php echo number_format($item['claimscollected']); ?></h4>
                                    <span>Goal: <?php echo number_format($item['claimscollectedgoal']) . ' - ' . $item['claimscollectedpercent'] . '%'; ?></span>
                                </div>
                            </div><!-- card-body -->
                            <div class="chart-wrapper">
                                <div id="flotChart3" class="flot-chart"></div>
                            </div><!-- chart-wrapper -->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
                        <div class="card card-dashboard-seventeen bg-primary-dark tx-white">
                            <div class="card-body">
                                <h6 class="card-title">DSO (YTD)</h6>
                                <div>
                                    <h4 class="text-white"><?php echo number_format($item['dso']); ?></h4>
                                    <span class="op-7">Goal: <?php echo number_format($item['dsogoal']) . ' - ' . $item['dsoou']; ?></span>
                                </div>
                            </div><!-- card-body -->
                            <div class="chart-wrapper">
                                <div id="flotChart4" class="flot-chart"></div>
                            </div><!-- chart-wrapper -->
                        </div>
                    </div><!-- col -->
                    <div class="col-12 mg-t-20">
                        <div class="card card-dashboard-nineteen">
                            <div class="card-header">
                                <h6 class="card-title">Pharmacy Growth Projections</h6>
                                <div class="row">
                                    <div class="col-6 col-md-5">
                                        <h4><span>~</span>8,830 / 19,995</h4>
                                        <label class="az-content-label">Estimated Scripts/Refills (Year)</label>
                                        <p>Measure projected growth of scripts &amp; refills based past metrics (Year)</a></p>
                                    </div><!-- col -->
                                    <div class="col-6 col-md-5">
                                        <h4><span>~</span>736 / 1,666</h4>
                                        <label class="az-content-label">Estimated Scripts/Refills (Monthly)</label>
                                        <p>Measure projected growth of scripts &amp; refills based past metrics (Month)</p>
                                    </div><!-- col -->
                                </div><!-- row -->
                                <div class="chart-legend">
                                    <div>2019</div>
                                    <div>2020</div>
                                    <div>2021 (YTD)</div>
                                </div>
                            </div><!-- card-header -->
                            <div class="card-body">
                                <div class="flot-chart-wrapper">
                                    <div id="flotChart" class="flot-chart"></div>
                                </div><!-- flot-chart-wrapper -->
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- col -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="row row-sm" style="min-height: 500px;">
                    <div class="col-sm-6">
                        <div class="card card-dashboard-finance">
                            <h6 class="card-title">Accounts Receivable</h6>
                            <span class="peity-bar" data-peity='{ "fill": ["#560bd0"], "height": 27, "width": 70 }'>7,5,9,10,11,4,4,7,5,10,4,4</span>
                            <h2><span>$</span><?php echo number_format($item['ar']); ?></h2>
                            <span class="tx-12"><?php
                                if (number_format($item['arprevmth'], 2) < 0) {
                                    echo "<span class=\"tx-danger tx-bold\">" . number_format($item['arprevmth'], 2) . "%" . " lower than last month" . "</span>";
                                } else {
                                    echo "<span class=\"tx-success tx-bold\">" . number_format($item['arprevmth'], 2) . "%" . " higher than last month" . "</span>";
                                }
                                ?></span>
                        </div>
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                        <div class="card card-dashboard-finance">
                            <h6 class="card-title">Unbilled</h6>
                            <span class="peity-bar" data-peity='{ "fill": ["#007bff"], "height": 27, "width": 70 }'>10,4,4,7,5,9,10,3,4,4,7,5</span>
                            <h2><span>$</span><?php echo number_format($item['unbill']); ?></h2>
                            <span class="tx-12"><?php
                                if (number_format($item['unbillprevmth'], 2) < 0) {
                                    echo "<span class=\"tx-danger tx-bold\">" . number_format($item['unbillprevmth'], 2) . "%" . " lower than last month" . "</span>";
                                } else {
                                    echo "<span class=\"tx-success tx-bold\">" . number_format($item['unbillprevmth'], 2) . "%" . " higher than last month" . "</span>";
                                }
                                ?></span>
                        </div>
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20">
                        <div class="card card-dashboard-finance">
                            <h6 class="card-title">Medicare</h6>
                            <span class="peity-bar" data-peity='{ "fill": ["#00cccc"], "height": 27, "width": 70 }'>7,5,9,10,5,4,4,7,5,10,4,4</span>
                            <h2><span>$</span><?php echo number_format($item['cmsclaim']); ?></h2>
                            <span class="tx-12"><?php
                                if (number_format($item['cmsclaimprevmth'], 2) < 0) {
                                    echo "<span class=\"tx-danger tx-bold\">" . number_format($item['cmsclaimprevmth'], 2) . "%" . " lower than last month" . "</span>";
                                } else {
                                    echo "<span class=\"tx-success tx-bold\">" . number_format($item['cmsclaimprevmth'], 2) . "%" . " higher than last month" . "</span>";
                                }
                                ?></span>
                        </div>
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20">
                        <div class="card card-dashboard-finance">
                            <h6 class="card-title">Medicaid</h6>
                            <span class="peity-bar" data-peity='{ "fill": ["#f10075"], "height": 27, "width": 70 }'>1,4,4,7,5,10,4,7,5,9,10,4</span>
                            <h2><span>$</span><?php echo number_format($item['medicaid']); ?></h2>
                            <span class="tx-12"><?php
                                if (number_format($item['medicaidprevmth'], 2) < 0) {
                                    echo "<span class=\"tx-danger tx-bold\">" . number_format($item['medicaidprevmth'], 2) . "%" . " lower than last month" . "</span>";
                                } else {
                                    echo "<span class=\"tx-success tx-bold\">" . number_format($item['medicaidprevmth'], 2) . "%" . " higher than last month" . "</span>";
                                }
                                ?></span>
                        </div>
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20">
                        <div class="card card-dashboard-finance">
                            <h6 class="card-title">Commercial</h6>
                            <span class="peity-bar" data-peity='{ "fill": ["#FFBF00"], "height": 27, "width": 70 }'>1,4,4,7,5,10,4,7,5,9,10,4</span>
                            <h2><span>$</span><?php echo number_format($item['comclaim']); ?></h2>
                            <span class="tx-12"><?php
                                if (number_format($item['comclaimprevmth'], 2) < 0) {
                                    echo "<span class=\"tx-danger tx-bold\">" . number_format($item['comclaimprevmth'], 2) . "%" . " lower than last month" . "</span>";
                                } else {
                                    echo "<span class=\"tx-success tx-bold\">" . number_format($item['comclaimprevmth'], 2) . "%" . " higher than last month" . "</span>";
                                }
                                ?></span>
                        </div>
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20">
                        <div class="card card-dashboard-finance">
                            <h6 class="card-title">Self/Charity/Indigent</h6>
                            <span class="peity-bar" data-peity='{ "fill": ["#900C3F"], "height": 27, "width": 70 }'>1,4,4,7,5,10,4,7,5,9,10,4</span>
                            <h2><span>$</span><?php echo number_format($item['selfcharindg']); ?></h2>
                            <span class="tx-12"><?php
                                if (number_format($item['selfcharindgprevmth'], 2) < 0) {
                                    echo "<span class=\"tx-danger tx-bold\">" . number_format($item['selfcharindgprevmth'], 2) . "%" . " lower than last month" . "</span>";
                                } else {
                                    echo "<span class=\"tx-success tx-bold\">" . number_format($item['selfcharindgprevmth'], 2) . "%" . " higher than last month" . "</span>";
                                }
                                ?></span>
                        </div>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- col -->
            <div class="col-lg-6 mg-t-20">
                <div class="card card-dashboard-twenty ht-md-100p">
                    <div class="card-body">
                        <h6 class="az-content-label tx-13 mg-b-5">Infusion vs. Specialty Referrals <span>(Last 12 Months)</span>
                        </h6>
                        <p class="mg-b-25">Current monthl's values are to the far right...</p>

                        <div class="chartjs-wrapper">
                            <canvas id="chartBar6"></canvas>
                        </div>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col -->
            <div class="col-lg-6 mg-t-20">
                <div class="row row-sm">
                    <div class="col-sm-6">
                        <div class="card card-dashboard-twenty">
                            <div class="card-body">
                                <label class="az-content-label tx-13 tx-primary">New Admits (YTD)</label>
                                <p>Referrals that convert to admissions (YTD)</p>
                                <div class="expansion-value">
                                    <strong>$1,500</strong>
                                    <strong>$1,120</strong>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wd-70p" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="expansion-label">
                                    <span>Current Value</span>
                                    <span>Target Value</span>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                        <div class="card card-dashboard-twenty ht-md-100p">
                            <div class="card-body">
                                <label class="az-content-label tx-13 tx-danger">No-Go's (YTD)</label>
                                <p>Referrals that did not start (YTD)</p>
                                <div class="expansion-value">
                                    <strong>$1,900</strong>
                                    <strong>$1,680</strong>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wd-50p bg-danger" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="expansion-label">
                                    <span>Current Value</span>
                                    <span>Target Value</span>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                </div><!-- row -->
                <br/>
                <div class="row row-sm">
                    <div class="col-sm-6">
                        <div class="card card-dashboard-twenty">
                            <div class="card-body">
                                <label class="az-content-label tx-13 tx-purple">Total Referrals (YTD)</label>
                                <p>Referrals that convert to admissions (YTD)</p>
                                <div class="expansion-value">
                                    <strong>$1,500</strong>
                                    <strong>$1,120</strong>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wd-70p bg-purple" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="expansion-label">
                                    <span>Current Value</span>
                                    <span>Target Value</span>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                        <div class="card card-dashboard-twenty ht-md-100p">
                            <div class="card-body">
                                <label class="az-content-label tx-13 tx-orange">Average Census Days (YTD)</label>
                                <p>Referrals that did not start (YTD)</p>
                                <div class="expansion-value">
                                    <strong>$1,900</strong>
                                    <strong>$1,680</strong>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wd-50p bg-orange" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="expansion-label">
                                    <span>Current Value</span>
                                    <span>Target Value</span>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- row -->
        </div><!-- col -->
    </div><!-- row -->
</div><!-- container -->
<?php endforeach;
} else {
    echo 'Viewmodel is NOT set!';
} ?>
</div><!-- az-content -->