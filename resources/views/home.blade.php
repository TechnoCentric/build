@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                        <!-- Start info box -->
                <div class="row top-summary">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget green-1 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="icon-globe-inv"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata">TOTAL <b>PROCUREMENTS</b></p>
                                    <h2><span class="animate-number" data-value="25153" data-duration="3000">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-up rel-change"></i> <b>39%</b> increase in traffic
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget darkblue-2 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="icon-bag"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata">TOTAL <b>SULLPIES PENDING</b></p>
                                    <h2><span class="animate-number" data-value="6399" data-duration="3000">0</span></h2>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-down rel-change"></i> <b>11%</b> decrease in sales
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget orange-4 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-dollar"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata">OVERALL <b>INCOME</b></p>
                                    <h2>$<span class="animate-number" data-value="70389" data-duration="3000">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-down rel-change"></i> <b>7%</b> decrease in income
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget lightblue-1 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata">TOTAL <b>SUPPLIES PAID</b></p>
                                    <h2><span class="animate-number" data-value="18648" data-duration="3000">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-up rel-change"></i> <b>6%</b> increase in users
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of info box --> 
    </div>
</div>
@endsection
