@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-8 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                        <p class="mb-4">You have done <span class="fw-medium">72%</span> more sales today. Check your new badge in your profile.</p>

                        <a href="javascript:;" class="btn btn-sm btn-label-primary">View Badges</a>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png')}}" data-app-light-img="illustrations/man-with-laptop-light.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body pb-0">
                        <span class="d-block fw-medium mb-1">Order</span>
                        <h3 class="card-title mb-1">276k</h3>
                    </div>
                    <div id="orderChart" class="mb-3" style="min-height: 80px;">
                        <div id="apexchartsod1qkrsy" class="apexcharts-canvas apexchartsod1qkrsy apexcharts-theme-light" style="width: 180px; height: 80px;"><svg id="SvgjsSvg2653" width="180" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG2655" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                    <defs id="SvgjsDefs2654">
                                        <clipPath id="gridRectMaskod1qkrsy">
                                            <rect id="SvgjsRect2660" width="178" height="82" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskod1qkrsy"></clipPath>
                                        <clipPath id="nonForecastMaskod1qkrsy"></clipPath>
                                        <clipPath id="gridRectMarkerMaskod1qkrsy">
                                            <rect id="SvgjsRect2661" width="200" height="108" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient2679" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2680" stop-opacity="0.8" stop-color="rgba(113,221,55,0.8)" offset="0"></stop>
                                            <stop id="SvgjsStop2681" stop-opacity="0.25" stop-color="rgba(227,248,215,0.25)" offset="0.85"></stop>
                                            <stop id="SvgjsStop2682" stop-opacity="0.25" stop-color="rgba(227,248,215,0.25)" offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <line id="SvgjsLine2659" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                    <g id="SvgjsG2685" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2686" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                    </g>
                                    <g id="SvgjsG2695" class="apexcharts-grid">
                                        <g id="SvgjsG2696" class="apexcharts-gridlines-horizontal" style="display: none;">
                                            <line id="SvgjsLine2698" x1="0" y1="0" x2="172" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2699" x1="0" y1="16" x2="172" y2="16" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2700" x1="0" y1="32" x2="172" y2="32" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2701" x1="0" y1="48" x2="172" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2702" x1="0" y1="64" x2="172" y2="64" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2703" x1="0" y1="80" x2="172" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2697" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                        <line id="SvgjsLine2705" x1="0" y1="80" x2="172" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2704" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG2662" class="apexcharts-area-series apexcharts-plot-series">
                                        <g id="SvgjsG2663" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath2683" d="M 0 80L 0 56C 10.033333333333333 56 18.633333333333333 58 28.666666666666668 58C 38.7 58 47.300000000000004 18 57.333333333333336 18C 67.36666666666667 18 75.96666666666667 72 86 72C 96.03333333333333 72 104.63333333333334 46 114.66666666666667 46C 124.7 46 133.3 52 143.33333333333334 52C 153.36666666666667 52 161.96666666666667 10 172 10C 172 10 172 10 172 80M 172 10z" fill="url(#SvgjsLinearGradient2679)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskod1qkrsy)" pathTo="M 0 80L 0 56C 10.033333333333333 56 18.633333333333333 58 28.666666666666668 58C 38.7 58 47.300000000000004 18 57.333333333333336 18C 67.36666666666667 18 75.96666666666667 72 86 72C 96.03333333333333 72 104.63333333333334 46 114.66666666666667 46C 124.7 46 133.3 52 143.33333333333334 52C 153.36666666666667 52 161.96666666666667 10 172 10C 172 10 172 10 172 80M 172 10z" pathFrom="M -1 128L -1 128L 28.666666666666668 128L 57.333333333333336 128L 86 128L 114.66666666666667 128L 143.33333333333334 128L 172 128"></path>
                                            <path id="SvgjsPath2684" d="M 0 56C 10.033333333333333 56 18.633333333333333 58 28.666666666666668 58C 38.7 58 47.300000000000004 18 57.333333333333336 18C 67.36666666666667 18 75.96666666666667 72 86 72C 96.03333333333333 72 104.63333333333334 46 114.66666666666667 46C 124.7 46 133.3 52 143.33333333333334 52C 153.36666666666667 52 161.96666666666667 10 172 10" fill="none" fill-opacity="1" stroke="#71dd37" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskod1qkrsy)" pathTo="M 0 56C 10.033333333333333 56 18.633333333333333 58 28.666666666666668 58C 38.7 58 47.300000000000004 18 57.333333333333336 18C 67.36666666666667 18 75.96666666666667 72 86 72C 96.03333333333333 72 104.63333333333334 46 114.66666666666667 46C 124.7 46 133.3 52 143.33333333333334 52C 153.36666666666667 52 161.96666666666667 10 172 10" pathFrom="M -1 128L -1 128L 28.666666666666668 128L 57.333333333333336 128L 86 128L 114.66666666666667 128L 143.33333333333334 128L 172 128"></path>
                                            <g id="SvgjsG2664" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                <g id="SvgjsG2666" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskod1qkrsy)">
                                                    <circle id="SvgjsCircle2667" r="6" cx="0" cy="56" class="apexcharts-marker no-pointer-events w8f1sffv4" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle>
                                                    <circle id="SvgjsCircle2668" r="6" cx="28.666666666666668" cy="58" class="apexcharts-marker no-pointer-events wft6cgge9" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle>
                                                </g>
                                                <g id="SvgjsG2669" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskod1qkrsy)">
                                                    <circle id="SvgjsCircle2670" r="6" cx="57.333333333333336" cy="18" class="apexcharts-marker no-pointer-events why17ti5s" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle>
                                                </g>
                                                <g id="SvgjsG2671" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskod1qkrsy)">
                                                    <circle id="SvgjsCircle2672" r="6" cx="86" cy="72" class="apexcharts-marker no-pointer-events wvs9fmmovh" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle>
                                                </g>
                                                <g id="SvgjsG2673" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskod1qkrsy)">
                                                    <circle id="SvgjsCircle2674" r="6" cx="114.66666666666667" cy="46" class="apexcharts-marker no-pointer-events wb2n9iwv5" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle>
                                                </g>
                                                <g id="SvgjsG2675" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskod1qkrsy)">
                                                    <circle id="SvgjsCircle2676" r="6" cx="143.33333333333334" cy="52" class="apexcharts-marker no-pointer-events wf2ocarc8l" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle>
                                                </g>
                                                <g id="SvgjsG2677" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskod1qkrsy)">
                                                    <circle id="SvgjsCircle2678" r="6" cx="172" cy="10" class="apexcharts-marker no-pointer-events wgsv2ox4e" stroke="#71dd37" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="6"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2665" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine2706" x1="0" y1="0" x2="172" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2707" x1="0" y1="0" x2="172" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2708" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2709" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2710" class="apexcharts-point-annotations"></g>
                                </g>
                                <rect id="SvgjsRect2658" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2694" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2656" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 181px; height: 181px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span>Sales</span>
                        <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                        <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Revenue -->
    <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-8">
                    <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                    <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                        <div id="apexchartslkwqbhk9" class="apexcharts-canvas apexchartslkwqbhk9 apexcharts-theme-light" style="width: 515px; height: 300px;"><svg id="SvgjsSvg2711" width="515" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <foreignObject x="0" y="0" width="515" height="300">
                                    <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                        <div class="apexcharts-legend-series" rel="1" seriesname="2021" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="2021" data:collapsed="false" style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span></div>
                                        <div class="apexcharts-legend-series" rel="2" seriesname="2020" data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="2020" data:collapsed="false" style="color: rgb(105, 122, 141); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span></div>
                                    </div>
                                    <style type="text/css">
                                        .apexcharts-legend {
                                            display: flex;
                                            overflow: auto;
                                            padding: 0 10px;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom,
                                        .apexcharts-legend.apx-legend-position-top {
                                            flex-wrap: wrap
                                        }

                                        .apexcharts-legend.apx-legend-position-right,
                                        .apexcharts-legend.apx-legend-position-left {
                                            flex-direction: column;
                                            bottom: 0;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                        .apexcharts-legend.apx-legend-position-right,
                                        .apexcharts-legend.apx-legend-position-left {
                                            justify-content: flex-start;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                            justify-content: center;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                            justify-content: flex-end;
                                        }

                                        .apexcharts-legend-series {
                                            cursor: pointer;
                                            line-height: normal;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                        .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                            display: flex;
                                            align-items: center;
                                        }

                                        .apexcharts-legend-text {
                                            position: relative;
                                            font-size: 14px;
                                        }

                                        .apexcharts-legend-text *,
                                        .apexcharts-legend-marker * {
                                            pointer-events: none;
                                        }

                                        .apexcharts-legend-marker {
                                            position: relative;
                                            display: inline-block;
                                            cursor: pointer;
                                            margin-right: 3px;
                                            border-style: solid;
                                        }

                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                            display: inline-block;
                                        }

                                        .apexcharts-legend-series.apexcharts-no-click {
                                            cursor: auto;
                                        }

                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                            display: none !important;
                                        }

                                        .apexcharts-inactive-legend {
                                            opacity: 0.45;
                                        }
                                    </style>
                                </foreignObject>
                                <g id="SvgjsG2713" class="apexcharts-inner apexcharts-graphical" transform="translate(53.80000114440918, 52)">
                                    <defs id="SvgjsDefs2712">
                                        <linearGradient id="SvgjsLinearGradient2717" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2718" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop2719" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop2720" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMasklkwqbhk9">
                                            <rect id="SvgjsRect2722" width="451.1999988555908" height="223.70079907417298" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMasklkwqbhk9"></clipPath>
                                        <clipPath id="nonForecastMasklkwqbhk9"></clipPath>
                                        <clipPath id="gridRectMarkerMasklkwqbhk9">
                                            <rect id="SvgjsRect2723" width="445.1999988555908" height="221.70079907417298" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect2721" width="22.05999994277954" height="217.70079907417298" x="202.9714094230107" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2717)" class="apexcharts-xcrosshairs" y2="217.70079907417298" filter="none" fill-opacity="0.9" x1="202.9714094230107" x2="202.9714094230107"></rect>
                                    <g id="SvgjsG2743" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2744" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2746" font-family="Helvetica, Arial, sans-serif" x="31.5142856325422" y="246.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2747">Jan</tspan>
                                                <title>Jan</title>
                                            </text><text id="SvgjsText2749" font-family="Helvetica, Arial, sans-serif" x="94.5428568976266" y="246.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2750">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText2752" font-family="Helvetica, Arial, sans-serif" x="157.57142816271102" y="246.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2753">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText2755" font-family="Helvetica, Arial, sans-serif" x="220.5999994277954" y="246.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2756">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText2758" font-family="Helvetica, Arial, sans-serif" x="283.6285706928798" y="246.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2759">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText2761" font-family="Helvetica, Arial, sans-serif" x="346.6571419579642" y="246.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2762">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText2764" font-family="Helvetica, Arial, sans-serif" x="409.6857132230486" y="246.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2765">Jul</tspan>
                                                <title>Jul</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG2780" class="apexcharts-grid">
                                        <g id="SvgjsG2781" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine2783" x1="0" y1="0" x2="441.1999988555908" y2="0" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2784" x1="0" y1="43.540159814834595" x2="441.1999988555908" y2="43.540159814834595" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2785" x1="0" y1="87.08031962966919" x2="441.1999988555908" y2="87.08031962966919" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2786" x1="0" y1="130.6204794445038" x2="441.1999988555908" y2="130.6204794445038" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2787" x1="0" y1="174.16063925933838" x2="441.1999988555908" y2="174.16063925933838" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2788" x1="0" y1="217.70079907417298" x2="441.1999988555908" y2="217.70079907417298" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2782" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine2790" x1="0" y1="217.70079907417298" x2="441.1999988555908" y2="217.70079907417298" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2789" x1="0" y1="1" x2="0" y2="217.70079907417298" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG2724" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG2725" class="apexcharts-series" seriesName="2021" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath2727" d="M 20.48428566115243 120.62047944450379L 20.48428566115243 62.24819177780151Q 20.48428566115243 52.24819177780151 30.48428566115243 52.24819177780151L 26.544285603931968 52.24819177780151Q 36.54428560393197 52.24819177780151 36.54428560393197 62.24819177780151L 36.54428560393197 62.24819177780151L 36.54428560393197 120.62047944450379Q 36.54428560393197 130.6204794445038 26.544285603931968 130.6204794445038L 30.48428566115243 130.6204794445038Q 20.48428566115243 130.6204794445038 20.48428566115243 120.62047944450379z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 20.48428566115243 120.62047944450379L 20.48428566115243 62.24819177780151Q 20.48428566115243 52.24819177780151 30.48428566115243 52.24819177780151L 26.544285603931968 52.24819177780151Q 36.54428560393197 52.24819177780151 36.54428560393197 62.24819177780151L 36.54428560393197 62.24819177780151L 36.54428560393197 120.62047944450379Q 36.54428560393197 130.6204794445038 26.544285603931968 130.6204794445038L 30.48428566115243 130.6204794445038Q 20.48428566115243 130.6204794445038 20.48428566115243 120.62047944450379z" pathFrom="M 20.48428566115243 120.62047944450379L 20.48428566115243 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 20.48428566115243 120.62047944450379" cy="52.24819177780151" cx="80.51285692623684" j="0" val="18" barHeight="78.37228766670228" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2728" d="M 83.51285692623684 120.62047944450379L 83.51285692623684 110.14236757411956Q 83.51285692623684 100.14236757411956 93.51285692623684 100.14236757411956L 89.57285686901638 100.14236757411956Q 99.57285686901638 100.14236757411956 99.57285686901638 110.14236757411956L 99.57285686901638 110.14236757411956L 99.57285686901638 120.62047944450379Q 99.57285686901638 130.6204794445038 89.57285686901638 130.6204794445038L 93.51285692623684 130.6204794445038Q 83.51285692623684 130.6204794445038 83.51285692623684 120.62047944450379z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 83.51285692623684 120.62047944450379L 83.51285692623684 110.14236757411956Q 83.51285692623684 100.14236757411956 93.51285692623684 100.14236757411956L 89.57285686901638 100.14236757411956Q 99.57285686901638 100.14236757411956 99.57285686901638 110.14236757411956L 99.57285686901638 110.14236757411956L 99.57285686901638 120.62047944450379Q 99.57285686901638 130.6204794445038 89.57285686901638 130.6204794445038L 93.51285692623684 130.6204794445038Q 83.51285692623684 130.6204794445038 83.51285692623684 120.62047944450379z" pathFrom="M 83.51285692623684 120.62047944450379L 83.51285692623684 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 83.51285692623684 120.62047944450379" cy="100.14236757411956" cx="143.54142819132124" j="1" val="7" barHeight="30.478111870384218" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2729" d="M 146.54142819132124 120.62047944450379L 146.54142819132124 75.3102397222519Q 146.54142819132124 65.3102397222519 156.54142819132124 65.3102397222519L 152.6014281341008 65.3102397222519Q 162.6014281341008 65.3102397222519 162.6014281341008 75.3102397222519L 162.6014281341008 75.3102397222519L 162.6014281341008 120.62047944450379Q 162.6014281341008 130.6204794445038 152.6014281341008 130.6204794445038L 156.54142819132124 130.6204794445038Q 146.54142819132124 130.6204794445038 146.54142819132124 120.62047944450379z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 146.54142819132124 120.62047944450379L 146.54142819132124 75.3102397222519Q 146.54142819132124 65.3102397222519 156.54142819132124 65.3102397222519L 152.6014281341008 65.3102397222519Q 162.6014281341008 65.3102397222519 162.6014281341008 75.3102397222519L 162.6014281341008 75.3102397222519L 162.6014281341008 120.62047944450379Q 162.6014281341008 130.6204794445038 152.6014281341008 130.6204794445038L 156.54142819132124 130.6204794445038Q 146.54142819132124 130.6204794445038 146.54142819132124 120.62047944450379z" pathFrom="M 146.54142819132124 120.62047944450379L 146.54142819132124 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 146.54142819132124 120.62047944450379" cy="65.3102397222519" cx="206.56999945640564" j="2" val="15" barHeight="65.3102397222519" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2730" d="M 209.56999945640564 120.62047944450379L 209.56999945640564 14.354015981483457Q 209.56999945640564 4.354015981483457 219.56999945640564 4.354015981483457L 215.62999939918518 4.354015981483457Q 225.62999939918518 4.354015981483457 225.62999939918518 14.354015981483457L 225.62999939918518 14.354015981483457L 225.62999939918518 120.62047944450379Q 225.62999939918518 130.6204794445038 215.62999939918518 130.6204794445038L 219.56999945640564 130.6204794445038Q 209.56999945640564 130.6204794445038 209.56999945640564 120.62047944450379z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 209.56999945640564 120.62047944450379L 209.56999945640564 14.354015981483457Q 209.56999945640564 4.354015981483457 219.56999945640564 4.354015981483457L 215.62999939918518 4.354015981483457Q 225.62999939918518 4.354015981483457 225.62999939918518 14.354015981483457L 225.62999939918518 14.354015981483457L 225.62999939918518 120.62047944450379Q 225.62999939918518 130.6204794445038 215.62999939918518 130.6204794445038L 219.56999945640564 130.6204794445038Q 209.56999945640564 130.6204794445038 209.56999945640564 120.62047944450379z" pathFrom="M 209.56999945640564 120.62047944450379L 209.56999945640564 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 209.56999945640564 120.62047944450379" cy="4.354015981483457" cx="269.59857072149003" j="3" val="29" barHeight="126.26646346302033" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2731" d="M 272.59857072149003 120.62047944450379L 272.59857072149003 62.24819177780151Q 272.59857072149003 52.24819177780151 282.59857072149003 52.24819177780151L 278.6585706642696 52.24819177780151Q 288.6585706642696 52.24819177780151 288.6585706642696 62.24819177780151L 288.6585706642696 62.24819177780151L 288.6585706642696 120.62047944450379Q 288.6585706642696 130.6204794445038 278.6585706642696 130.6204794445038L 282.59857072149003 130.6204794445038Q 272.59857072149003 130.6204794445038 272.59857072149003 120.62047944450379z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 272.59857072149003 120.62047944450379L 272.59857072149003 62.24819177780151Q 272.59857072149003 52.24819177780151 282.59857072149003 52.24819177780151L 278.6585706642696 52.24819177780151Q 288.6585706642696 52.24819177780151 288.6585706642696 62.24819177780151L 288.6585706642696 62.24819177780151L 288.6585706642696 120.62047944450379Q 288.6585706642696 130.6204794445038 278.6585706642696 130.6204794445038L 282.59857072149003 130.6204794445038Q 272.59857072149003 130.6204794445038 272.59857072149003 120.62047944450379z" pathFrom="M 272.59857072149003 120.62047944450379L 272.59857072149003 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 272.59857072149003 120.62047944450379" cy="52.24819177780151" cx="332.62714198657443" j="4" val="18" barHeight="78.37228766670228" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2732" d="M 335.62714198657443 120.62047944450379L 335.62714198657443 88.37228766670228Q 335.62714198657443 78.37228766670228 345.62714198657443 78.37228766670228L 341.68714192935397 78.37228766670228Q 351.68714192935397 78.37228766670228 351.68714192935397 88.37228766670228L 351.68714192935397 88.37228766670228L 351.68714192935397 120.62047944450379Q 351.68714192935397 130.6204794445038 341.68714192935397 130.6204794445038L 345.62714198657443 130.6204794445038Q 335.62714198657443 130.6204794445038 335.62714198657443 120.62047944450379z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 335.62714198657443 120.62047944450379L 335.62714198657443 88.37228766670228Q 335.62714198657443 78.37228766670228 345.62714198657443 78.37228766670228L 341.68714192935397 78.37228766670228Q 351.68714192935397 78.37228766670228 351.68714192935397 88.37228766670228L 351.68714192935397 88.37228766670228L 351.68714192935397 120.62047944450379Q 351.68714192935397 130.6204794445038 341.68714192935397 130.6204794445038L 345.62714198657443 130.6204794445038Q 335.62714198657443 130.6204794445038 335.62714198657443 120.62047944450379z" pathFrom="M 335.62714198657443 120.62047944450379L 335.62714198657443 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 335.62714198657443 120.62047944450379" cy="78.37228766670228" cx="395.6557132516588" j="5" val="12" barHeight="52.248191777801516" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2733" d="M 398.6557132516588 120.62047944450379L 398.6557132516588 101.43433561115265Q 398.6557132516588 91.43433561115265 408.6557132516588 91.43433561115265L 404.71571319443837 91.43433561115265Q 414.71571319443837 91.43433561115265 414.71571319443837 101.43433561115265L 414.71571319443837 101.43433561115265L 414.71571319443837 120.62047944450379Q 414.71571319443837 130.6204794445038 404.71571319443837 130.6204794445038L 408.6557132516588 130.6204794445038Q 398.6557132516588 130.6204794445038 398.6557132516588 120.62047944450379z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 398.6557132516588 120.62047944450379L 398.6557132516588 101.43433561115265Q 398.6557132516588 91.43433561115265 408.6557132516588 91.43433561115265L 404.71571319443837 91.43433561115265Q 414.71571319443837 91.43433561115265 414.71571319443837 101.43433561115265L 414.71571319443837 101.43433561115265L 414.71571319443837 120.62047944450379Q 414.71571319443837 130.6204794445038 404.71571319443837 130.6204794445038L 408.6557132516588 130.6204794445038Q 398.6557132516588 130.6204794445038 398.6557132516588 120.62047944450379z" pathFrom="M 398.6557132516588 120.62047944450379L 398.6557132516588 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 398.6557132516588 120.62047944450379" cy="91.43433561115265" cx="458.6842845167432" j="6" val="9" barHeight="39.18614383335114" barWidth="22.05999994277954"></path>
                                        </g>
                                        <g id="SvgjsG2734" class="apexcharts-series" seriesName="2020" rel="2" data:realIndex="1">
                                            <path id="SvgjsPath2736" d="M 20.48428566115243 150.6204794445038L 20.48428566115243 187.22268720378878Q 20.48428566115243 197.22268720378878 30.48428566115243 197.22268720378878L 26.544285603931968 197.22268720378878Q 36.54428560393197 197.22268720378878 36.54428560393197 187.22268720378878L 36.54428560393197 187.22268720378878L 36.54428560393197 150.6204794445038Q 36.54428560393197 140.6204794445038 26.544285603931968 140.6204794445038L 30.48428566115243 140.6204794445038Q 20.48428566115243 140.6204794445038 20.48428566115243 150.6204794445038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 20.48428566115243 150.6204794445038L 20.48428566115243 187.22268720378878Q 20.48428566115243 197.22268720378878 30.48428566115243 197.22268720378878L 26.544285603931968 197.22268720378878Q 36.54428560393197 197.22268720378878 36.54428560393197 187.22268720378878L 36.54428560393197 187.22268720378878L 36.54428560393197 150.6204794445038Q 36.54428560393197 140.6204794445038 26.544285603931968 140.6204794445038L 30.48428566115243 140.6204794445038Q 20.48428566115243 140.6204794445038 20.48428566115243 150.6204794445038z" pathFrom="M 20.48428566115243 150.6204794445038L 20.48428566115243 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 20.48428566115243 150.6204794445038" cy="177.22268720378878" cx="80.51285692623684" j="0" val="-13" barHeight="-56.60220775928498" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2737" d="M 83.51285692623684 150.6204794445038L 83.51285692623684 208.99276711120606Q 83.51285692623684 218.99276711120606 93.51285692623684 218.99276711120606L 89.57285686901638 218.99276711120606Q 99.57285686901638 218.99276711120606 99.57285686901638 208.99276711120606L 99.57285686901638 208.99276711120606L 99.57285686901638 150.6204794445038Q 99.57285686901638 140.6204794445038 89.57285686901638 140.6204794445038L 93.51285692623684 140.6204794445038Q 83.51285692623684 140.6204794445038 83.51285692623684 150.6204794445038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 83.51285692623684 150.6204794445038L 83.51285692623684 208.99276711120606Q 83.51285692623684 218.99276711120606 93.51285692623684 218.99276711120606L 89.57285686901638 218.99276711120606Q 99.57285686901638 218.99276711120606 99.57285686901638 208.99276711120606L 99.57285686901638 208.99276711120606L 99.57285686901638 150.6204794445038Q 99.57285686901638 140.6204794445038 89.57285686901638 140.6204794445038L 93.51285692623684 140.6204794445038Q 83.51285692623684 140.6204794445038 83.51285692623684 150.6204794445038z" pathFrom="M 83.51285692623684 150.6204794445038L 83.51285692623684 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 83.51285692623684 150.6204794445038" cy="198.99276711120606" cx="143.54142819132124" j="1" val="-18" barHeight="-78.37228766670228" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2738" d="M 146.54142819132124 150.6204794445038L 146.54142819132124 169.80662327785492Q 146.54142819132124 179.80662327785492 156.54142819132124 179.80662327785492L 152.6014281341008 179.80662327785492Q 162.6014281341008 179.80662327785492 162.6014281341008 169.80662327785492L 162.6014281341008 169.80662327785492L 162.6014281341008 150.6204794445038Q 162.6014281341008 140.6204794445038 152.6014281341008 140.6204794445038L 156.54142819132124 140.6204794445038Q 146.54142819132124 140.6204794445038 146.54142819132124 150.6204794445038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 146.54142819132124 150.6204794445038L 146.54142819132124 169.80662327785492Q 146.54142819132124 179.80662327785492 156.54142819132124 179.80662327785492L 152.6014281341008 179.80662327785492Q 162.6014281341008 179.80662327785492 162.6014281341008 169.80662327785492L 162.6014281341008 169.80662327785492L 162.6014281341008 150.6204794445038Q 162.6014281341008 140.6204794445038 152.6014281341008 140.6204794445038L 156.54142819132124 140.6204794445038Q 146.54142819132124 140.6204794445038 146.54142819132124 150.6204794445038z" pathFrom="M 146.54142819132124 150.6204794445038L 146.54142819132124 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 146.54142819132124 150.6204794445038" cy="159.80662327785492" cx="206.56999945640564" j="2" val="-9" barHeight="-39.18614383335114" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2739" d="M 209.56999945640564 150.6204794445038L 209.56999945640564 191.5767031852722Q 209.56999945640564 201.5767031852722 219.56999945640564 201.5767031852722L 215.62999939918518 201.5767031852722Q 225.62999939918518 201.5767031852722 225.62999939918518 191.5767031852722L 225.62999939918518 191.5767031852722L 225.62999939918518 150.6204794445038Q 225.62999939918518 140.6204794445038 215.62999939918518 140.6204794445038L 219.56999945640564 140.6204794445038Q 209.56999945640564 140.6204794445038 209.56999945640564 150.6204794445038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 209.56999945640564 150.6204794445038L 209.56999945640564 191.5767031852722Q 209.56999945640564 201.5767031852722 219.56999945640564 201.5767031852722L 215.62999939918518 201.5767031852722Q 225.62999939918518 201.5767031852722 225.62999939918518 191.5767031852722L 225.62999939918518 191.5767031852722L 225.62999939918518 150.6204794445038Q 225.62999939918518 140.6204794445038 215.62999939918518 140.6204794445038L 219.56999945640564 140.6204794445038Q 209.56999945640564 140.6204794445038 209.56999945640564 150.6204794445038z" pathFrom="M 209.56999945640564 150.6204794445038L 209.56999945640564 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 209.56999945640564 150.6204794445038" cy="181.5767031852722" cx="269.59857072149003" j="3" val="-14" barHeight="-60.956223740768436" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2740" d="M 272.59857072149003 150.6204794445038L 272.59857072149003 152.39055935192107Q 272.59857072149003 162.39055935192107 282.59857072149003 162.39055935192107L 278.6585706642696 162.39055935192107Q 288.6585706642696 162.39055935192107 288.6585706642696 152.39055935192107L 288.6585706642696 152.39055935192107L 288.6585706642696 150.6204794445038Q 288.6585706642696 140.6204794445038 278.6585706642696 140.6204794445038L 282.59857072149003 140.6204794445038Q 272.59857072149003 140.6204794445038 272.59857072149003 150.6204794445038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 272.59857072149003 150.6204794445038L 272.59857072149003 152.39055935192107Q 272.59857072149003 162.39055935192107 282.59857072149003 162.39055935192107L 278.6585706642696 162.39055935192107Q 288.6585706642696 162.39055935192107 288.6585706642696 152.39055935192107L 288.6585706642696 152.39055935192107L 288.6585706642696 150.6204794445038Q 288.6585706642696 140.6204794445038 278.6585706642696 140.6204794445038L 282.59857072149003 140.6204794445038Q 272.59857072149003 140.6204794445038 272.59857072149003 150.6204794445038z" pathFrom="M 272.59857072149003 150.6204794445038L 272.59857072149003 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 272.59857072149003 150.6204794445038" cy="142.39055935192107" cx="332.62714198657443" j="4" val="-5" barHeight="-21.770079907417298" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2741" d="M 335.62714198657443 150.6204794445038L 335.62714198657443 204.6387511297226Q 335.62714198657443 214.6387511297226 345.62714198657443 214.6387511297226L 341.68714192935397 214.6387511297226Q 351.68714192935397 214.6387511297226 351.68714192935397 204.6387511297226L 351.68714192935397 204.6387511297226L 351.68714192935397 150.6204794445038Q 351.68714192935397 140.6204794445038 341.68714192935397 140.6204794445038L 345.62714198657443 140.6204794445038Q 335.62714198657443 140.6204794445038 335.62714198657443 150.6204794445038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 335.62714198657443 150.6204794445038L 335.62714198657443 204.6387511297226Q 335.62714198657443 214.6387511297226 345.62714198657443 214.6387511297226L 341.68714192935397 214.6387511297226Q 351.68714192935397 214.6387511297226 351.68714192935397 204.6387511297226L 351.68714192935397 204.6387511297226L 351.68714192935397 150.6204794445038Q 351.68714192935397 140.6204794445038 341.68714192935397 140.6204794445038L 345.62714198657443 140.6204794445038Q 335.62714198657443 140.6204794445038 335.62714198657443 150.6204794445038z" pathFrom="M 335.62714198657443 150.6204794445038L 335.62714198657443 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 335.62714198657443 150.6204794445038" cy="194.6387511297226" cx="395.6557132516588" j="5" val="-17" barHeight="-74.01827168521882" barWidth="22.05999994277954"></path>
                                            <path id="SvgjsPath2742" d="M 398.6557132516588 150.6204794445038L 398.6557132516588 195.9307191667557Q 398.6557132516588 205.9307191667557 408.6557132516588 205.9307191667557L 404.71571319443837 205.9307191667557Q 414.71571319443837 205.9307191667557 414.71571319443837 195.9307191667557L 414.71571319443837 195.9307191667557L 414.71571319443837 150.6204794445038Q 414.71571319443837 140.6204794445038 404.71571319443837 140.6204794445038L 408.6557132516588 140.6204794445038Q 398.6557132516588 140.6204794445038 398.6557132516588 150.6204794445038z" fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="round" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklkwqbhk9)" pathTo="M 398.6557132516588 150.6204794445038L 398.6557132516588 195.9307191667557Q 398.6557132516588 205.9307191667557 408.6557132516588 205.9307191667557L 404.71571319443837 205.9307191667557Q 414.71571319443837 205.9307191667557 414.71571319443837 195.9307191667557L 414.71571319443837 195.9307191667557L 414.71571319443837 150.6204794445038Q 414.71571319443837 140.6204794445038 404.71571319443837 140.6204794445038L 408.6557132516588 140.6204794445038Q 398.6557132516588 140.6204794445038 398.6557132516588 150.6204794445038z" pathFrom="M 398.6557132516588 150.6204794445038L 398.6557132516588 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 398.6557132516588 150.6204794445038" cy="185.9307191667557" cx="458.6842845167432" j="6" val="-15" barHeight="-65.3102397222519" barWidth="22.05999994277954"></path>
                                        </g>
                                        <g id="SvgjsG2726" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG2735" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <line id="SvgjsLine2791" x1="0" y1="0" x2="441.1999988555908" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2792" x1="0" y1="0" x2="441.1999988555908" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2793" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2794" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2795" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG2766" class="apexcharts-yaxis" rel="0" transform="translate(15.80000114440918, 0)">
                                    <g id="SvgjsG2767" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2768" font-family="Helvetica, Arial, sans-serif" x="20" y="53.5" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2769">30</tspan>
                                            <title>30</title>
                                        </text><text id="SvgjsText2770" font-family="Helvetica, Arial, sans-serif" x="20" y="97.0401598148346" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2771">20</tspan>
                                            <title>20</title>
                                        </text><text id="SvgjsText2772" font-family="Helvetica, Arial, sans-serif" x="20" y="140.5803196296692" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2773">10</tspan>
                                            <title>10</title>
                                        </text><text id="SvgjsText2774" font-family="Helvetica, Arial, sans-serif" x="20" y="184.1204794445038" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2775">0</tspan>
                                            <title>0</title>
                                        </text><text id="SvgjsText2776" font-family="Helvetica, Arial, sans-serif" x="20" y="227.66063925933838" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2777">-10</tspan>
                                            <title>-10</title>
                                        </text><text id="SvgjsText2778" font-family="Helvetica, Arial, sans-serif" x="20" y="271.200799074173" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2779">-20</tspan>
                                            <title>-20</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG2714" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light" style="left: 267.801px; top: 20.95px;">
                                <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Apr</div>
                                <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(105, 108, 255, 0.85);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">2021: </span><span class="apexcharts-tooltip-text-y-value">29</span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(105, 108, 255, 0.85);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">2021: </span><span class="apexcharts-tooltip-text-y-value">29</span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 532px; height: 377px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-label-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    2022
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                    <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                    <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                    <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="growthChart" style="min-height: 154.875px;">
                        <div id="apexchartsc1t3m87j" class="apexcharts-canvas apexchartsc1t3m87j apexcharts-theme-light" style="width: 266px; height: 154.875px;"><svg id="SvgjsSvg2796" width="266" height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG2798" class="apexcharts-inner apexcharts-graphical" transform="translate(26, -25)">
                                    <defs id="SvgjsDefs2797">
                                        <clipPath id="gridRectMaskc1t3m87j">
                                            <rect id="SvgjsRect2800" width="222" height="285" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskc1t3m87j"></clipPath>
                                        <clipPath id="nonForecastMaskc1t3m87j"></clipPath>
                                        <clipPath id="gridRectMarkerMaskc1t3m87j">
                                            <rect id="SvgjsRect2801" width="220" height="287" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient2806" x1="1" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2807" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                            <stop id="SvgjsStop2808" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                            <stop id="SvgjsStop2809" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2817" x1="1" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2818" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                            <stop id="SvgjsStop2819" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                            <stop id="SvgjsStop2820" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g id="SvgjsG2802" class="apexcharts-radialbar">
                                        <g id="SvgjsG2803">
                                            <g id="SvgjsG2804" class="apexcharts-tracks">
                                                <g id="SvgjsG2805" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                    <path id="apexcharts-radialbarTrack-0" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"></path>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2811">
                                                <g id="SvgjsG2816" class="apexcharts-series apexcharts-radial-series" seriesName="Growth" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2821" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient2817)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="5" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="78" index="0" j="0" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"></path>
                                                </g>
                                                <circle id="SvgjsCircle2812" r="54.65121951219512" cx="108" cy="108" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                <g id="SvgjsG2813" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2814" font-family="Public Sans" x="108" y="123" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="500" fill="#697a8d" class="apexcharts-text apexcharts-datalabel-label" style="font-family: &quot;Public Sans&quot;;">Growth</text><text id="SvgjsText2815" font-family="Public Sans" x="108" y="99" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">78%</text></g>
                                            </g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine2822" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2823" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG2799" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                        </div>
                    </div>
                    <div class="text-center fw-medium pt-3 mb-2">62% Company Growth</div>

                    <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                        <div class="d-flex">
                            <div class="me-2">
                                <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                                <small>2022</small>
                                <h6 class="mb-0">$32.5k</h6>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-2">
                                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                                <small>2021</small>
                                <h6 class="mb-0">$41.2k</h6>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 267px; height: 377px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Total Revenue -->
    <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
        <div class="row">
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class="d-block mb-1">Payments</span>
                        <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                        <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body pb-2" style="position: relative;">
                        <span class="d-block fw-medium mb-1">Revenue</span>
                        <h3 class="card-title mb-1">425k</h3>
                        <div id="revenueChart" style="min-height: 95px;">
                            <div id="apexcharts6cddixdb" class="apexcharts-canvas apexcharts6cddixdb apexcharts-theme-light" style="width: 132px; height: 80px;"><svg id="SvgjsSvg2824" width="132" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                    <g id="SvgjsG2826" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)">
                                        <defs id="SvgjsDefs2825">
                                            <linearGradient id="SvgjsLinearGradient2829" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop2830" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop2831" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop2832" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMask6cddixdb">
                                                <rect id="SvgjsRect2834" width="136" height="43.70079907417298" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask6cddixdb"></clipPath>
                                            <clipPath id="nonForecastMask6cddixdb"></clipPath>
                                            <clipPath id="gridRectMarkerMask6cddixdb">
                                                <rect id="SvgjsRect2835" width="136" height="47.70079907417298" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect2833" width="14.142857142857142" height="43.70079907417298" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2829)" class="apexcharts-xcrosshairs" y2="43.70079907417298" filter="none" fill-opacity="0.9"></rect>
                                        <g id="SvgjsG2854" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2855" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2857" font-family="Helvetica, Arial, sans-serif" x="9.428571428571429" y="72.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2858">M</tspan>
                                                    <title>M</title>
                                                </text><text id="SvgjsText2860" font-family="Helvetica, Arial, sans-serif" x="28.285714285714285" y="72.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2861">T</tspan>
                                                    <title>T</title>
                                                </text><text id="SvgjsText2863" font-family="Helvetica, Arial, sans-serif" x="47.14285714285714" y="72.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2864">W</tspan>
                                                    <title>W</title>
                                                </text><text id="SvgjsText2866" font-family="Helvetica, Arial, sans-serif" x="66" y="72.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2867">T</tspan>
                                                    <title>T</title>
                                                </text><text id="SvgjsText2869" font-family="Helvetica, Arial, sans-serif" x="84.85714285714286" y="72.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2870">F</tspan>
                                                    <title>F</title>
                                                </text><text id="SvgjsText2872" font-family="Helvetica, Arial, sans-serif" x="103.71428571428572" y="72.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2873">S</tspan>
                                                    <title>S</title>
                                                </text><text id="SvgjsText2875" font-family="Helvetica, Arial, sans-serif" x="122.57142857142857" y="72.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2876">S</tspan>
                                                    <title>S</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG2879" class="apexcharts-grid">
                                            <g id="SvgjsG2880" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                <line id="SvgjsLine2882" x1="0" y1="0" x2="132" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2883" x1="0" y1="8.740159814834595" x2="132" y2="8.740159814834595" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2884" x1="0" y1="17.48031962966919" x2="132" y2="17.48031962966919" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2885" x1="0" y1="26.220479444503784" x2="132" y2="26.220479444503784" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2886" x1="0" y1="34.96063925933838" x2="132" y2="34.96063925933838" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2887" x1="0" y1="43.70079907417298" x2="132" y2="43.70079907417298" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2881" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                            <line id="SvgjsLine2889" x1="0" y1="43.70079907417298" x2="132" y2="43.70079907417298" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2888" x1="0" y1="1" x2="0" y2="43.70079907417298" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2836" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG2837" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0">
                                                <path id="SvgjsPath2841" d="M 2.3571428571428577 41.70079907417298L 2.3571428571428577 28.220479444503788Q 2.3571428571428577 26.220479444503788 4.357142857142858 26.220479444503788L 14.5 26.220479444503788Q 16.5 26.220479444503788 16.5 28.220479444503788L 16.5 28.220479444503788L 16.5 41.70079907417298Q 16.5 43.70079907417298 14.5 43.70079907417298L 4.357142857142858 43.70079907417298Q 2.3571428571428577 43.70079907417298 2.3571428571428577 41.70079907417298z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6cddixdb)" pathTo="M 2.3571428571428577 41.70079907417298L 2.3571428571428577 28.220479444503788Q 2.3571428571428577 26.220479444503788 4.357142857142858 26.220479444503788L 14.5 26.220479444503788Q 16.5 26.220479444503788 16.5 28.220479444503788L 16.5 28.220479444503788L 16.5 41.70079907417298Q 16.5 43.70079907417298 14.5 43.70079907417298L 4.357142857142858 43.70079907417298Q 2.3571428571428577 43.70079907417298 2.3571428571428577 41.70079907417298z" pathFrom="M 2.3571428571428577 41.70079907417298L 2.3571428571428577 41.70079907417298L 16.5 41.70079907417298L 16.5 41.70079907417298L 16.5 41.70079907417298L 16.5 41.70079907417298L 16.5 41.70079907417298L 2.3571428571428577 41.70079907417298" cy="26.220479444503788" cx="21.214285714285715" j="0" val="40" barHeight="17.48031962966919" barWidth="14.142857142857142"></path>
                                                <path id="SvgjsPath2843" d="M 21.214285714285715 41.70079907417298L 21.214285714285715 4.185039953708646Q 21.214285714285715 2.185039953708646 23.214285714285715 2.185039953708646L 33.35714285714286 2.185039953708646Q 35.35714285714286 2.185039953708646 35.35714285714286 4.185039953708646L 35.35714285714286 4.185039953708646L 35.35714285714286 41.70079907417298Q 35.35714285714286 43.70079907417298 33.35714285714286 43.70079907417298L 23.214285714285715 43.70079907417298Q 21.214285714285715 43.70079907417298 21.214285714285715 41.70079907417298z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6cddixdb)" pathTo="M 21.214285714285715 41.70079907417298L 21.214285714285715 4.185039953708646Q 21.214285714285715 2.185039953708646 23.214285714285715 2.185039953708646L 33.35714285714286 2.185039953708646Q 35.35714285714286 2.185039953708646 35.35714285714286 4.185039953708646L 35.35714285714286 4.185039953708646L 35.35714285714286 41.70079907417298Q 35.35714285714286 43.70079907417298 33.35714285714286 43.70079907417298L 23.214285714285715 43.70079907417298Q 21.214285714285715 43.70079907417298 21.214285714285715 41.70079907417298z" pathFrom="M 21.214285714285715 41.70079907417298L 21.214285714285715 41.70079907417298L 35.35714285714286 41.70079907417298L 35.35714285714286 41.70079907417298L 35.35714285714286 41.70079907417298L 35.35714285714286 41.70079907417298L 35.35714285714286 41.70079907417298L 21.214285714285715 41.70079907417298" cy="2.185039953708646" cx="40.07142857142857" j="1" val="95" barHeight="41.51575912046433" barWidth="14.142857142857142"></path>
                                                <path id="SvgjsPath2845" d="M 40.07142857142857 41.70079907417298L 40.07142857142857 19.48031962966919Q 40.07142857142857 17.48031962966919 42.07142857142857 17.48031962966919L 52.21428571428571 17.48031962966919Q 54.21428571428571 17.48031962966919 54.21428571428571 19.48031962966919L 54.21428571428571 19.48031962966919L 54.21428571428571 41.70079907417298Q 54.21428571428571 43.70079907417298 52.21428571428571 43.70079907417298L 42.07142857142857 43.70079907417298Q 40.07142857142857 43.70079907417298 40.07142857142857 41.70079907417298z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6cddixdb)" pathTo="M 40.07142857142857 41.70079907417298L 40.07142857142857 19.48031962966919Q 40.07142857142857 17.48031962966919 42.07142857142857 17.48031962966919L 52.21428571428571 17.48031962966919Q 54.21428571428571 17.48031962966919 54.21428571428571 19.48031962966919L 54.21428571428571 19.48031962966919L 54.21428571428571 41.70079907417298Q 54.21428571428571 43.70079907417298 52.21428571428571 43.70079907417298L 42.07142857142857 43.70079907417298Q 40.07142857142857 43.70079907417298 40.07142857142857 41.70079907417298z" pathFrom="M 40.07142857142857 41.70079907417298L 40.07142857142857 41.70079907417298L 54.21428571428571 41.70079907417298L 54.21428571428571 41.70079907417298L 54.21428571428571 41.70079907417298L 54.21428571428571 41.70079907417298L 54.21428571428571 41.70079907417298L 40.07142857142857 41.70079907417298" cy="17.48031962966919" cx="58.92857142857143" j="2" val="60" barHeight="26.220479444503788" barWidth="14.142857142857142"></path>
                                                <path id="SvgjsPath2847" d="M 58.92857142857143 41.70079907417298L 58.92857142857143 26.035439490795138Q 58.92857142857143 24.035439490795138 60.92857142857143 24.035439490795138L 71.07142857142857 24.035439490795138Q 73.07142857142857 24.035439490795138 73.07142857142857 26.035439490795138L 73.07142857142857 26.035439490795138L 73.07142857142857 41.70079907417298Q 73.07142857142857 43.70079907417298 71.07142857142857 43.70079907417298L 60.92857142857143 43.70079907417298Q 58.92857142857143 43.70079907417298 58.92857142857143 41.70079907417298z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6cddixdb)" pathTo="M 58.92857142857143 41.70079907417298L 58.92857142857143 26.035439490795138Q 58.92857142857143 24.035439490795138 60.92857142857143 24.035439490795138L 71.07142857142857 24.035439490795138Q 73.07142857142857 24.035439490795138 73.07142857142857 26.035439490795138L 73.07142857142857 26.035439490795138L 73.07142857142857 41.70079907417298Q 73.07142857142857 43.70079907417298 71.07142857142857 43.70079907417298L 60.92857142857143 43.70079907417298Q 58.92857142857143 43.70079907417298 58.92857142857143 41.70079907417298z" pathFrom="M 58.92857142857143 41.70079907417298L 58.92857142857143 41.70079907417298L 73.07142857142857 41.70079907417298L 73.07142857142857 41.70079907417298L 73.07142857142857 41.70079907417298L 73.07142857142857 41.70079907417298L 73.07142857142857 41.70079907417298L 58.92857142857143 41.70079907417298" cy="24.035439490795138" cx="77.78571428571429" j="3" val="45" barHeight="19.66535958337784" barWidth="14.142857142857142"></path>
                                                <path id="SvgjsPath2849" d="M 77.78571428571429 41.70079907417298L 77.78571428571429 6.370079907417299Q 77.78571428571429 4.370079907417299 79.78571428571429 4.370079907417299L 89.92857142857143 4.370079907417299Q 91.92857142857143 4.370079907417299 91.92857142857143 6.370079907417299L 91.92857142857143 6.370079907417299L 91.92857142857143 41.70079907417298Q 91.92857142857143 43.70079907417298 89.92857142857143 43.70079907417298L 79.78571428571429 43.70079907417298Q 77.78571428571429 43.70079907417298 77.78571428571429 41.70079907417298z" fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6cddixdb)" pathTo="M 77.78571428571429 41.70079907417298L 77.78571428571429 6.370079907417299Q 77.78571428571429 4.370079907417299 79.78571428571429 4.370079907417299L 89.92857142857143 4.370079907417299Q 91.92857142857143 4.370079907417299 91.92857142857143 6.370079907417299L 91.92857142857143 6.370079907417299L 91.92857142857143 41.70079907417298Q 91.92857142857143 43.70079907417298 89.92857142857143 43.70079907417298L 79.78571428571429 43.70079907417298Q 77.78571428571429 43.70079907417298 77.78571428571429 41.70079907417298z" pathFrom="M 77.78571428571429 41.70079907417298L 77.78571428571429 41.70079907417298L 91.92857142857143 41.70079907417298L 91.92857142857143 41.70079907417298L 91.92857142857143 41.70079907417298L 91.92857142857143 41.70079907417298L 91.92857142857143 41.70079907417298L 77.78571428571429 41.70079907417298" cy="4.370079907417299" cx="96.64285714285715" j="4" val="90" barHeight="39.33071916675568" barWidth="14.142857142857142"></path>
                                                <path id="SvgjsPath2851" d="M 96.64285714285715 41.70079907417298L 96.64285714285715 23.85039953708649Q 96.64285714285715 21.85039953708649 98.64285714285715 21.85039953708649L 108.78571428571429 21.85039953708649Q 110.78571428571429 21.85039953708649 110.78571428571429 23.85039953708649L 110.78571428571429 23.85039953708649L 110.78571428571429 41.70079907417298Q 110.78571428571429 43.70079907417298 108.78571428571429 43.70079907417298L 98.64285714285715 43.70079907417298Q 96.64285714285715 43.70079907417298 96.64285714285715 41.70079907417298z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6cddixdb)" pathTo="M 96.64285714285715 41.70079907417298L 96.64285714285715 23.85039953708649Q 96.64285714285715 21.85039953708649 98.64285714285715 21.85039953708649L 108.78571428571429 21.85039953708649Q 110.78571428571429 21.85039953708649 110.78571428571429 23.85039953708649L 110.78571428571429 23.85039953708649L 110.78571428571429 41.70079907417298Q 110.78571428571429 43.70079907417298 108.78571428571429 43.70079907417298L 98.64285714285715 43.70079907417298Q 96.64285714285715 43.70079907417298 96.64285714285715 41.70079907417298z" pathFrom="M 96.64285714285715 41.70079907417298L 96.64285714285715 41.70079907417298L 110.78571428571429 41.70079907417298L 110.78571428571429 41.70079907417298L 110.78571428571429 41.70079907417298L 110.78571428571429 41.70079907417298L 110.78571428571429 41.70079907417298L 96.64285714285715 41.70079907417298" cy="21.85039953708649" cx="115.50000000000001" j="5" val="50" barHeight="21.85039953708649" barWidth="14.142857142857142"></path>
                                                <path id="SvgjsPath2853" d="M 115.50000000000001 41.70079907417298L 115.50000000000001 12.925199768543244Q 115.50000000000001 10.925199768543244 117.50000000000001 10.925199768543244L 127.64285714285717 10.925199768543244Q 129.64285714285717 10.925199768543244 129.64285714285717 12.925199768543244L 129.64285714285717 12.925199768543244L 129.64285714285717 41.70079907417298Q 129.64285714285717 43.70079907417298 127.64285714285717 43.70079907417298L 117.50000000000001 43.70079907417298Q 115.50000000000001 43.70079907417298 115.50000000000001 41.70079907417298z" fill="#666ee81a" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask6cddixdb)" pathTo="M 115.50000000000001 41.70079907417298L 115.50000000000001 12.925199768543244Q 115.50000000000001 10.925199768543244 117.50000000000001 10.925199768543244L 127.64285714285717 10.925199768543244Q 129.64285714285717 10.925199768543244 129.64285714285717 12.925199768543244L 129.64285714285717 12.925199768543244L 129.64285714285717 41.70079907417298Q 129.64285714285717 43.70079907417298 127.64285714285717 43.70079907417298L 117.50000000000001 43.70079907417298Q 115.50000000000001 43.70079907417298 115.50000000000001 41.70079907417298z" pathFrom="M 115.50000000000001 41.70079907417298L 115.50000000000001 41.70079907417298L 129.64285714285717 41.70079907417298L 129.64285714285717 41.70079907417298L 129.64285714285717 41.70079907417298L 129.64285714285717 41.70079907417298L 129.64285714285717 41.70079907417298L 115.50000000000001 41.70079907417298" cy="10.925199768543244" cx="134.35714285714286" j="6" val="75" barHeight="32.77559930562973" barWidth="14.142857142857142"></path>
                                                <g id="SvgjsG2839" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                                    <g id="SvgjsG2840" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG2842" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG2844" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG2846" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG2848" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG2850" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG2852" className="apexcharts-bar-goals-groups"></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2838" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine2890" x1="0" y1="0" x2="132" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2891" x1="0" y1="0" x2="132" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2892" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2893" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2894" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG2877" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                        <g id="SvgjsG2878" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG2827" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(102, 110, 232, 0.1);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 181px; height: 188px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div>
    <div class="row"> -->
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3" style="position: relative;">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                <div class="card-title">
                                    <h5 class="text-nowrap mb-2">Profile Report</h5>
                                    <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                </div>
                                <div class="mt-sm-auto">
                                    <small class="text-success text-nowrap fw-medium"><i class="bx bx-chevron-up"></i> 68.2%</small>
                                    <h3 class="mb-0">$84,686k</h3>
                                </div>
                            </div>
                            <div id="profileReportChart" style="min-height: 80px;">
                                <div id="apexchartsup91kzer" class="apexcharts-canvas apexchartsup91kzer apexcharts-theme-light" style="width: 200px; height: 80px;"><svg id="SvgjsSvg2896" width="200" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG2898" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2897">
                                                <clipPath id="gridRectMaskup91kzer">
                                                    <rect id="SvgjsRect2903" width="201" height="85" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskup91kzer"></clipPath>
                                                <clipPath id="nonForecastMaskup91kzer"></clipPath>
                                                <clipPath id="gridRectMarkerMaskup91kzer">
                                                    <rect id="SvgjsRect2904" width="196" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <filter id="SvgjsFilter2910" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood2911" flood-color="#ffab00" flood-opacity="0.15" result="SvgjsFeFlood2911Out" in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite2912" in="SvgjsFeFlood2911Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2912Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset2913" dx="5" dy="10" result="SvgjsFeOffset2913Out" in="SvgjsFeComposite2912Out"></feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur2914" stdDeviation="3 " result="SvgjsFeGaussianBlur2914Out" in="SvgjsFeOffset2913Out"></feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge2915" result="SvgjsFeMerge2915Out" in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode2916" in="SvgjsFeGaussianBlur2914Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode2917" in="[object Arguments]"></feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend2918" in="SourceGraphic" in2="SvgjsFeMerge2915Out" mode="normal" result="SvgjsFeBlend2918Out"></feBlend>
                                                </filter>
                                            </defs>
                                            <line id="SvgjsLine2902" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG2919" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2920" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG2928" class="apexcharts-grid">
                                                <g id="SvgjsG2929" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                    <line id="SvgjsLine2931" x1="0" y1="0" x2="192" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2932" x1="0" y1="20" x2="192" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2933" x1="0" y1="40" x2="192" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2934" x1="0" y1="60" x2="192" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2935" x1="0" y1="80" x2="192" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2930" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                <line id="SvgjsLine2937" x1="0" y1="80" x2="192" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2936" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2905" class="apexcharts-line-series apexcharts-plot-series">
                                                <g id="SvgjsG2906" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2909" d="M 0 76C 13.44 76 24.96 12 38.4 12C 51.839999999999996 12 63.36 62 76.8 62C 90.24 62 101.75999999999999 22 115.19999999999999 22C 128.64 22 140.16 38 153.6 38C 167.04 38 178.56 6 192 6" fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskup91kzer)" filter="url(#SvgjsFilter2910)" pathTo="M 0 76C 13.44 76 24.96 12 38.4 12C 51.839999999999996 12 63.36 62 76.8 62C 90.24 62 101.75999999999999 22 115.19999999999999 22C 128.64 22 140.16 38 153.6 38C 167.04 38 178.56 6 192 6" pathFrom="M -1 120L -1 120L 38.4 120L 76.8 120L 115.19999999999999 120L 153.6 120L 192 120"></path>
                                                    <g id="SvgjsG2907" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2943" r="0" cx="0" cy="0" class="apexcharts-marker w4cdh1u0m no-pointer-events" stroke="#ffffff" fill="#ffab00" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2908" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2938" x1="0" y1="0" x2="192" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2939" x1="0" y1="0" x2="192" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2940" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2941" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2942" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <rect id="SvgjsRect2901" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG2927" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2899" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 171, 0);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 339px; height: 118px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Order Statistics -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                <div class="card-title mb-0">
                    <h5 class="m-0 me-2">Order Statistics</h5>
                    <small class="text-muted">42.82k Total Sales</small>
                </div>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                    <div class="d-flex flex-column align-items-center gap-1">
                        <h2 class="mb-2">8,258</h2>
                        <span>Total Orders</span>
                    </div>
                    <div id="orderStatisticsChart" style="min-height: 137.55px;">
                        <div id="apexcharts028uxtk9h" class="apexcharts-canvas apexcharts028uxtk9h apexcharts-theme-light" style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg2944" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG2946" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)">
                                    <defs id="SvgjsDefs2945">
                                        <clipPath id="gridRectMask028uxtk9h">
                                            <rect id="SvgjsRect2948" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask028uxtk9h"></clipPath>
                                        <clipPath id="nonForecastMask028uxtk9h"></clipPath>
                                        <clipPath id="gridRectMarkerMask028uxtk9h">
                                            <rect id="SvgjsRect2949" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG2950" class="apexcharts-pie">
                                        <g id="SvgjsG2951" transform="translate(0, 0) scale(1)">
                                            <circle id="SvgjsCircle2952" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle>
                                            <g id="SvgjsG2953" class="apexcharts-slices">
                                                <g id="SvgjsG2954" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2955" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2956" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath2957" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2958" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath2959" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2960" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3">
                                                    <path id="SvgjsPath2961" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2962" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText2963" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#697a8d" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text id="SvgjsText2964" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g>
                                    </g>
                                    <line id="SvgjsLine2965" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2966" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG2947" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(133, 146, 163);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 339px; height: 139px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Electronic</h6>
                                <small class="text-muted">Mobile, Earbuds, TV</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">82.5k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Fashion</h6>
                                <small class="text-muted">T-shirt, Jeans, Shoes</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">23.8k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Decor</h6>
                                <small class="text-muted">Fine Art, Dining</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">849k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Sports</h6>
                                <small class="text-muted">Football, Cricket Kit</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">99</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/ Order Statistics -->

    <!-- Expense Overview -->
    <div class="col-md-6 col-lg-4 order-1 mb-4">
        <div class="card h-100">
            <div class="card-header">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" aria-selected="false" tabindex="-1">Expenses</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" aria-selected="false" tabindex="-1">Profit</button>
                    </li>
                </ul>
            </div>
            <div class="card-body px-0">
                <div class="tab-content p-0">
                    <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel" style="position: relative;">
                        <div class="d-flex p-4 pt-3">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User">
                            </div>
                            <div>
                                <small class="text-muted d-block">Total Balance</small>
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 me-1">$459.10</h6>
                                    <small class="text-success fw-medium">
                                        <i class="bx bx-chevron-up"></i>
                                        42.9%
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="incomeChart" style="min-height: 215px;">
                            <div id="apexchartsjsvs3fyp" class="apexcharts-canvas apexchartsjsvs3fyp apexcharts-theme-light" style="width: 386px; height: 215px;"><svg id="SvgjsSvg2967" width="386" height="215" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                    <g id="SvgjsG2969" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)">
                                        <defs id="SvgjsDefs2968">
                                            <clipPath id="gridRectMaskjsvs3fyp">
                                                <rect id="SvgjsRect2974" width="374.6875" height="176.70079907417298" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskjsvs3fyp"></clipPath>
                                            <clipPath id="nonForecastMaskjsvs3fyp"></clipPath>
                                            <clipPath id="gridRectMarkerMaskjsvs3fyp">
                                                <rect id="SvgjsRect2975" width="396.6875" height="202.70079907417298" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2995" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop2996" stop-opacity="0.5" stop-color="rgba(105,108,255,0.5)" offset="0"></stop>
                                                <stop id="SvgjsStop2997" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop>
                                                <stop id="SvgjsStop2998" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine2973" x1="0" y1="0" x2="0" y2="174.70079907417298" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="174.70079907417298" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG3001" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG3002" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText3004" font-family="Helvetica, Arial, sans-serif" x="0" y="203.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3005"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText3007" font-family="Helvetica, Arial, sans-serif" x="52.66964285714285" y="203.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3008">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText3010" font-family="Helvetica, Arial, sans-serif" x="105.33928571428571" y="203.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3011">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText3013" font-family="Helvetica, Arial, sans-serif" x="158.00892857142858" y="203.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3014">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText3016" font-family="Helvetica, Arial, sans-serif" x="210.67857142857144" y="203.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3017">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText3019" font-family="Helvetica, Arial, sans-serif" x="263.3482142857143" y="203.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3020">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText3022" font-family="Helvetica, Arial, sans-serif" x="316.0178571428571" y="203.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3023">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText3025" font-family="Helvetica, Arial, sans-serif" x="368.68749999999994" y="203.70079907417298" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3026">Jul</tspan>
                                                    <title>Jul</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG3029" class="apexcharts-grid">
                                            <g id="SvgjsG3030" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine3032" x1="0" y1="0" x2="368.6875" y2="0" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine3033" x1="0" y1="43.675199768543244" x2="368.6875" y2="43.675199768543244" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine3034" x1="0" y1="87.35039953708649" x2="368.6875" y2="87.35039953708649" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine3035" x1="0" y1="131.02559930562973" x2="368.6875" y2="131.02559930562973" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine3036" x1="0" y1="174.70079907417298" x2="368.6875" y2="174.70079907417298" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG3031" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine3038" x1="0" y1="174.70079907417298" x2="368.6875" y2="174.70079907417298" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine3037" x1="0" y1="1" x2="0" y2="174.70079907417298" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2976" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG2977" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath2999" d="M 0 174.70079907417298L 0 113.55551939821244C 18.434375 113.55551939821244 34.23526785714286 126.65807932877541 52.66964285714286 126.65807932877541C 71.10401785714286 126.65807932877541 86.90491071428572 87.3503995370865 105.33928571428572 87.3503995370865C 123.77366071428573 87.3503995370865 139.5745535714286 122.29055935192109 158.00892857142858 122.29055935192109C 176.44330357142857 122.29055935192109 192.24419642857146 34.9401598148346 210.67857142857144 34.9401598148346C 229.11294642857143 34.9401598148346 244.9138392857143 104.82047944450379 263.3482142857143 104.82047944450379C 281.78258928571427 104.82047944450379 297.5834821428572 65.51279965281486 316.01785714285717 65.51279965281486C 334.45223214285716 65.51279965281486 350.253125 91.71791951394081 368.6875 91.71791951394081C 368.6875 91.71791951394081 368.6875 91.71791951394081 368.6875 174.70079907417298M 368.6875 91.71791951394081z" fill="url(#SvgjsLinearGradient2995)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjsvs3fyp)" pathTo="M 0 174.70079907417298L 0 113.55551939821244C 18.434375 113.55551939821244 34.23526785714286 126.65807932877541 52.66964285714286 126.65807932877541C 71.10401785714286 126.65807932877541 86.90491071428572 87.3503995370865 105.33928571428572 87.3503995370865C 123.77366071428573 87.3503995370865 139.5745535714286 122.29055935192109 158.00892857142858 122.29055935192109C 176.44330357142857 122.29055935192109 192.24419642857146 34.9401598148346 210.67857142857144 34.9401598148346C 229.11294642857143 34.9401598148346 244.9138392857143 104.82047944450379 263.3482142857143 104.82047944450379C 281.78258928571427 104.82047944450379 297.5834821428572 65.51279965281486 316.01785714285717 65.51279965281486C 334.45223214285716 65.51279965281486 350.253125 91.71791951394081 368.6875 91.71791951394081C 368.6875 91.71791951394081 368.6875 91.71791951394081 368.6875 174.70079907417298M 368.6875 91.71791951394081z" pathFrom="M -1 218.37599884271623L -1 218.37599884271623L 52.66964285714286 218.37599884271623L 105.33928571428572 218.37599884271623L 158.00892857142858 218.37599884271623L 210.67857142857144 218.37599884271623L 263.3482142857143 218.37599884271623L 316.01785714285717 218.37599884271623L 368.6875 218.37599884271623"></path>
                                                <path id="SvgjsPath3000" d="M 0 113.55551939821244C 18.434375 113.55551939821244 34.23526785714286 126.65807932877541 52.66964285714286 126.65807932877541C 71.10401785714286 126.65807932877541 86.90491071428572 87.3503995370865 105.33928571428572 87.3503995370865C 123.77366071428573 87.3503995370865 139.5745535714286 122.29055935192109 158.00892857142858 122.29055935192109C 176.44330357142857 122.29055935192109 192.24419642857146 34.9401598148346 210.67857142857144 34.9401598148346C 229.11294642857143 34.9401598148346 244.9138392857143 104.82047944450379 263.3482142857143 104.82047944450379C 281.78258928571427 104.82047944450379 297.5834821428572 65.51279965281486 316.01785714285717 65.51279965281486C 334.45223214285716 65.51279965281486 350.253125 91.71791951394081 368.6875 91.71791951394081" fill="none" fill-opacity="1" stroke="#696cff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjsvs3fyp)" pathTo="M 0 113.55551939821244C 18.434375 113.55551939821244 34.23526785714286 126.65807932877541 52.66964285714286 126.65807932877541C 71.10401785714286 126.65807932877541 86.90491071428572 87.3503995370865 105.33928571428572 87.3503995370865C 123.77366071428573 87.3503995370865 139.5745535714286 122.29055935192109 158.00892857142858 122.29055935192109C 176.44330357142857 122.29055935192109 192.24419642857146 34.9401598148346 210.67857142857144 34.9401598148346C 229.11294642857143 34.9401598148346 244.9138392857143 104.82047944450379 263.3482142857143 104.82047944450379C 281.78258928571427 104.82047944450379 297.5834821428572 65.51279965281486 316.01785714285717 65.51279965281486C 334.45223214285716 65.51279965281486 350.253125 91.71791951394081 368.6875 91.71791951394081" pathFrom="M -1 218.37599884271623L -1 218.37599884271623L 52.66964285714286 218.37599884271623L 105.33928571428572 218.37599884271623L 158.00892857142858 218.37599884271623L 210.67857142857144 218.37599884271623L 263.3482142857143 218.37599884271623L 316.01785714285717 218.37599884271623L 368.6875 218.37599884271623"></path>
                                                <g id="SvgjsG2978" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                    <g id="SvgjsG2980" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjsvs3fyp)">
                                                        <circle id="SvgjsCircle2981" r="6" cx="0" cy="113.55551939821244" class="apexcharts-marker no-pointer-events woruyxe6q" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle>
                                                        <circle id="SvgjsCircle2982" r="6" cx="52.66964285714286" cy="126.65807932877541" class="apexcharts-marker no-pointer-events wkogvux4fg" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG2983" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjsvs3fyp)">
                                                        <circle id="SvgjsCircle2984" r="6" cx="105.33928571428572" cy="87.3503995370865" class="apexcharts-marker no-pointer-events w1rth7vaf" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG2985" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjsvs3fyp)">
                                                        <circle id="SvgjsCircle2986" r="6" cx="158.00892857142858" cy="122.29055935192109" class="apexcharts-marker no-pointer-events w8iqqny0w" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG2987" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjsvs3fyp)">
                                                        <circle id="SvgjsCircle2988" r="6" cx="210.67857142857144" cy="34.9401598148346" class="apexcharts-marker no-pointer-events wmbh8jn2kj" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG2989" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjsvs3fyp)">
                                                        <circle id="SvgjsCircle2990" r="6" cx="263.3482142857143" cy="104.82047944450379" class="apexcharts-marker no-pointer-events wj80oebo3" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG2991" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjsvs3fyp)">
                                                        <circle id="SvgjsCircle2992" r="6" cx="316.01785714285717" cy="65.51279965281486" class="apexcharts-marker no-pointer-events wkt5j4wj2" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG2993" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjsvs3fyp)">
                                                        <circle id="SvgjsCircle2994" r="6" cx="368.6875" cy="91.71791951394081" class="apexcharts-marker no-pointer-events w5gkkxx8z" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="6"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2979" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine3039" x1="0" y1="0" x2="368.6875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine3040" x1="0" y1="0" x2="368.6875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG3041" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG3042" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG3043" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect3044" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect3045" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect2972" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG3027" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                        <g id="SvgjsG3028" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG2970" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 107.5px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-4 gap-2">
                            <div class="flex-shrink-0" style="position: relative;">
                                <div id="expensesOfWeek" style="min-height: 57.7px;">
                                    <div id="apexchartsncgg6e1fk" class="apexcharts-canvas apexchartsncgg6e1fk apexcharts-theme-light" style="width: 60px; height: 57.7px;"><svg id="SvgjsSvg3046" width="60" height="57.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG3048" class="apexcharts-inner apexcharts-graphical" transform="translate(-10, -10)">
                                                <defs id="SvgjsDefs3047">
                                                    <clipPath id="gridRectMaskncgg6e1fk">
                                                        <rect id="SvgjsRect3050" width="86" height="87" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskncgg6e1fk"></clipPath>
                                                    <clipPath id="nonForecastMaskncgg6e1fk"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskncgg6e1fk">
                                                        <rect id="SvgjsRect3051" width="84" height="89" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG3052" class="apexcharts-radialbar">
                                                    <g id="SvgjsG3053">
                                                        <g id="SvgjsG3054" class="apexcharts-tracks">
                                                            <g id="SvgjsG3055" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                <path id="apexcharts-radialbarTrack-0" d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247" fill="none" fill-opacity="1" stroke="rgba(236,238,241,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.0408536585365864" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"></path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG3057">
                                                            <g id="SvgjsG3061" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath3062" d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095" fill="none" fill-opacity="0.85" stroke="rgba(105,108,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.081707317073173" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="65" index="0" j="0" data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"></path>
                                                            </g>
                                                            <circle id="SvgjsCircle3058" r="18.881402439024395" cx="40" cy="40" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                            <g id="SvgjsG3059" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText3060" font-family="Helvetica, Arial, sans-serif" x="40" y="45" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#697a8d" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">$65</text></g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine3063" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3064" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG3049" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 61px; height: 59px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div>
                                <p class="mb-n1 mt-1">Expenses This Week</p>
                                <small class="text-muted">$39 less than last week</small>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 387px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Expense Overview -->

    <!-- Transactions -->
    <div class="col-md-6 col-lg-4 order-2 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Transactions</h5>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="User" class="rounded">
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Paypal</small>
                                <h6 class="mb-0">Send money</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User" class="rounded">
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Wallet</small>
                                <h6 class="mb-0">Mac'D</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+270.69</h6> <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="{{asset('assets/img/icons/unicons/chart.png')}}" alt="User" class="rounded">
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Transfer</small>
                                <h6 class="mb-0">Refund</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+637.91</h6> <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="{{asset('assets/img/icons/unicons/cc-success.png')}}" alt="User" class="rounded">
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Credit Card</small>
                                <h6 class="mb-0">Ordered Food</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">-838.71</h6> <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User" class="rounded">
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Wallet</small>
                                <h6 class="mb-0">Starbucks</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+203.33</h6> <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="{{asset('assets/img/icons/unicons/cc-warning.png')}}" alt="User" class="rounded">
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">Mastercard</small>
                                <h6 class="mb-0">Ordered Food</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">-92.45</h6> <span class="text-muted">USD</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/ Transactions -->
    <!-- Activity Timeline -->
    <div class="col-md-12 col-lg-6 order-4 order-lg-3 ">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Activity Timeline</h5>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="timelineWapper" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper">
                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- Activity Timeline -->
                <ul class="timeline">
                    <li class="timeline-item timeline-item-transparent">
                        <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
                        <div class="timeline-event">
                            <div class="timeline-header mb-1">
                                <h6 class="mb-0">12 Invoices have been paid</h6>
                                <small class="text-muted">12 min ago</small>
                            </div>
                            <p class="mb-2">Invoices have been paid to the company</p>
                            <div class="d-flex">
                                <a href="javascript:void(0)" class="d-flex align-items-center me-3">
                                    <img src="{{asset('assets/img/icons/misc/pdf.png')}}" alt="PDF image" width="23" class="me-2">
                                    <h6 class="mb-0">invoices.pdf</h6>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item timeline-item-transparent">
                        <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-warning"></span></span>
                        <div class="timeline-event">
                            <div class="timeline-header mb-1">
                                <h6 class="mb-0">Client Meeting</h6>
                                <small class="text-muted">45 min ago</small>
                            </div>
                            <p class="mb-2">Project meeting with john @10:15am</p>
                            <div class="d-flex flex-wrap">
                                <div class="avatar me-3">
                                    <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle">
                                </div>
                                <div>
                                    <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                    <span>CEO of ThemeSelection</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item timeline-item-transparent">
                        <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-info"></span></span>
                        <div class="timeline-event pb-0">
                            <div class="timeline-header mb-1">
                                <h6 class="mb-0">Create a new project for client</h6>
                                <small class="text-muted">2 Day Ago</small>
                            </div>
                            <p class="mb-2">5 team members in a project</p>
                            <div class="d-flex align-items-center avatar-group">
                                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Vinnie Mostowy" data-bs-original-title="Vinnie Mostowy">
                                    <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Marrie Patty" data-bs-original-title="Marrie Patty">
                                    <img src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Jimmy Jackson" data-bs-original-title="Jimmy Jackson">
                                    <img src="{{asset('assets/img/avatars/9.png')}}" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Kristine Gill" data-bs-original-title="Kristine Gill">
                                    <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
                                </div>
                                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" aria-label="Nelson Wilson" data-bs-original-title="Nelson Wilson">
                                    <img src="{{asset('assets/img/avatars/14.png')}}" alt="Avatar" class="rounded-circle">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-end-indicator">
                        <i class="bx bx-check-circle"></i>
                    </li>
                </ul>
                <!-- /Activity Timeline -->
            </div>
        </div>
    </div>
    <!--/ Activity Timeline -->
    <!-- pill table -->
    <div class="col-md-6 order-3 order-lg-4 mb-4 mb-lg-0">
        <div class="card text-center">
            <div class="card-header py-3">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-browser" aria-controls="navs-pills-browser" aria-selected="true">Browser</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-os" aria-controls="navs-pills-os" aria-selected="false" tabindex="-1">Operating System</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-country" aria-controls="navs-pills-country" aria-selected="false" tabindex="-1">Country</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content pt-0">
                <div class="tab-pane fade show active" id="navs-pills-browser" role="tabpanel">
                    <div class="table-responsive text-start">
                        <table class="table table-borderless text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Browser</th>
                                    <th>Visits</th>
                                    <th class="w-50">Data In Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/chrome.png')}}" alt="Chrome" height="24" class="me-2">
                                            <span>Chrome</span>
                                        </div>
                                    </td>
                                    <td>8.92k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 84.75%" aria-valuenow="84.75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">84.75%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/safari.png')}}" alt="Safari" height="24" class="me-2">
                                            <span>Safari</span>
                                        </div>
                                    </td>
                                    <td>7.29k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 72.43%" aria-valuenow="72.43" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">72.43%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/firefox.png')}}" alt="Firefox" height="24" class="me-2">
                                            <span>Firefox</span>
                                        </div>
                                    </td>
                                    <td>6.11k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 67.37%" aria-valuenow="67.37" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">67.37%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/edge.png')}}" alt="Edge" height="24" class="me-2">
                                            <span>Edge</span>
                                        </div>
                                    </td>
                                    <td>5.08k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 60.12%" aria-valuenow="60.12" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">60.12%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/opera.png')}}" alt="Opera" height="24" class="me-2">
                                            <span>Opera</span>
                                        </div>
                                    </td>
                                    <td>3.93k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 51.94%" aria-valuenow="51.94" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">51.94%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/brave.png')}}" alt="Brave" height="24" class="me-2">
                                            <span>Brave</span>
                                        </div>
                                    </td>
                                    <td>3.19k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">39.94%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/vivaldi.png')}}" alt="Vivaldi" height="24" class="me-2">
                                            <span>Vivaldi</span>
                                        </div>
                                    </td>
                                    <td>1.29k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 28.43%" aria-valuenow="28.43" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">18.43%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/uc.png')}}" alt="UC Browser" height="24" class="me-2">
                                            <span>UC Browser</span>
                                        </div>
                                    </td>
                                    <td>328</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20.14%" aria-valuenow="20.14" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">20.14%</small>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-pills-os" role="tabpanel">
                    <div class="table-responsive text-start">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>System</th>
                                    <th>Visits</th>
                                    <th class="w-50">Data In Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/windows.png')}}" alt="Windows" height="24" class="me-2">
                                            <span>Windows</span>
                                        </div>
                                    </td>
                                    <td>875.24k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 71.50%" aria-valuenow="71.50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">71.50%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/mac.png')}}" alt="Mac" height="24" class="me-2">
                                            <span>Mac</span>
                                        </div>
                                    </td>
                                    <td>89.68k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 66.67%" aria-valuenow="66.67" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">66.67%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/ubuntu.png')}}" alt="Ubuntu" height="24" class="me-2">
                                            <span>Ubuntu</span>
                                        </div>
                                    </td>
                                    <td>37.68k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 62.82%" aria-valuenow="62.82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">62.82%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/chrome.png')}}" alt="Chrome" height="24" class="me-2">
                                            <span>Chrome</span>
                                        </div>
                                    </td>
                                    <td>35.34k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 56.25%" aria-valuenow="56.25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">56.25%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/cent.png')}}" alt="Cent" height="24" class="me-2">
                                            <span>Cent</span>
                                        </div>
                                    </td>
                                    <td>32.25k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 42.76%" aria-valuenow="42.76" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">42.76%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/linux.png')}}" alt="Linux" height="24" class="me-2">
                                            <span>Linux</span>
                                        </div>
                                    </td>
                                    <td>22.15k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 37.77%" aria-valuenow="37.77" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">37.77%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/fedora.png')}}" alt="Fedora" height="24" class="me-2">
                                            <span>Fedora</span>
                                        </div>
                                    </td>
                                    <td>1.13k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 29.16%" aria-valuenow="29.16" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">29.16%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/icons/brands/vivaldi-os.png')}}" alt="Vivaldi" height="24" class="me-2">
                                            <span>Vivaldi</span>
                                        </div>
                                    </td>
                                    <td>1.09k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 26.26%" aria-valuenow="26.26" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">26.26%</small>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-pills-country" role="tabpanel">
                    <div class="table-responsive text-start">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Country</th>
                                    <th>Visits</th>
                                    <th class="w-50">Data In Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/svg/flags/us.svg')}}" alt="USA" height="24" class="me-2">
                                            <span>USA</span>
                                        </div>
                                    </td>
                                    <td>87.24k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 89.12%" aria-valuenow="89.12" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">89.12%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/svg/flags/br.svg')}}" alt="Brazil" height="24" class="me-2">
                                            <span>Brazil</span>
                                        </div>
                                    </td>
                                    <td>62.68k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 78.23%" aria-valuenow="78.23" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">78.23%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/svg/flags/in.svg')}}" alt="India" height="24" class="me-2">
                                            <span>India</span>
                                        </div>
                                    </td>
                                    <td>52.58k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 69.82%" aria-valuenow="69.82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">69.82%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/svg/flags/au.svg')}}" alt="Australia" height="24" class="me-2">
                                            <span>Australia</span>
                                        </div>
                                    </td>
                                    <td>44.13k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 59.90%" aria-valuenow="59.90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">59.90%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/svg/flags/de.svg')}}" alt="Germany" height="24" class="me-2">
                                            <span>Germany</span>
                                        </div>
                                    </td>
                                    <td>32.21k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 57.11%" aria-valuenow="57.11" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">57.11%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/svg/flags/fr.svg')}}" alt="France" height="24" class="me-2">
                                            <span>France</span>
                                        </div>
                                    </td>
                                    <td>37.87k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 41.23%" aria-valuenow="41.23" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">41.23%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/svg/flags/pt.svg')}}" alt="Portugal" height="24" class="me-2">
                                            <span>Portugal</span>
                                        </div>
                                    </td>
                                    <td>20.29k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 37.11%" aria-valuenow="37.11" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">37.11%</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/svg/flags/cn.svg')}}" alt="China" height="24" class="me-2">
                                            <span>China</span>
                                        </div>
                                    </td>
                                    <td>12.21k</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                            <div class="progress w-100" style="height:10px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 17.61%" aria-valuenow="17.61" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <small class="fw-medium">17.61%</small>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ pill table -->
</div>
@endsection