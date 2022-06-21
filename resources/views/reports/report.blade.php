@include('layouts.layout')

<div class="container">
<div class="col-lg-12 ">
    <div class="row ">
        <div class="col-xl-3 col-lg-8">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Returning Sbscribers</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{$reports['returning_subscribers']}}
                            </h2>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">First Time User Profit </h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                &#8358;{{ number_format($reports['first_time_naira_profits'])}}
                            </h2>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">First Time User Profit</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                ${{ number_format($reports['first_time_dollar_profits'])}}
                            </h2>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Frist time subscribers</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{ $reports['first_time_subscribers']}}
                            </h2>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
<div class="col-md-12 ">
  <div class="row ">
      <div class="col-xl-3 col-lg-8">
          <div class="card l-bg-cherry">
              <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                  <div class="mb-4">
                      <h5 class="card-title mb-0">Total Subscriptions</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                      <div class="col-8">
                          <h2 class="d-flex align-items-center mb-0">
                              {{ $reports['returning_subscribers'] + $reports['first_time_subscribers']}}
                          </h2>
                      </div>
                  </div>
                  <div class="progress mt-1 " data-height="8" style="height: 8px;">
                      <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-lg-8">
          <div class="card l-bg-blue-dark">
              <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                  <div class="mb-4">
                      <h5 class="card-title mb-0">Returning subscribers</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                      <div class="col-8">
                          <h2 class="d-flex align-items-center mb-0">
                            &#8358;{{number_format($reports['returning_naira_profits'])}}
                        </h2>
                      </div>
                  </div>
                  <div class="progress mt-1 " data-height="8" style="height: 8px;">
                      <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-lg-8">
          <div class="card l-bg-green-dark">
              <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                  <div class="mb-4">
                      <h5 class="card-title mb-0">Returning subscribers</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                      <div class="col-8">
                          <h2 class="d-flex align-items-center mb-0">
                            ${{number_format($reports['returning_dollar_profits'])}}
                        </h2>
                      </div>
                  </div>
                  <div class="progress mt-1 " data-height="8" style="height: 8px;">
                      <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-lg-8">
          <div class="card l-bg-orange-dark">
              <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                  <div class="mb-4">
                      <h5 class="card-title mb-0">Total Users</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                      <div class="col-8">
                          <h2 class="d-flex align-items-center mb-0">
                              {{ $reports['total_users']}}
                          </h2>
                      </div>
                  </div>
                  <div class="progress mt-1 " data-height="8" style="height: 8px;">
                      <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
