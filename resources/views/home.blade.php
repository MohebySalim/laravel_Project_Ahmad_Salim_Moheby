{{--@extends('layouts.app')--}}
@extends('layouts.master')

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
					<div class="col">
						<div class="card radius-10 bg-primary bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Total Orders</p>
										<h4 class="my-1 text-white">845</h4>
									</div>
									<div class="text-white ms-auto font-35"><i class="bx bx-cart-alt"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-danger bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Total Income</p>
										<h4 class="my-1 text-white">$89,245</h4>
									</div>
									<div class="text-white ms-auto font-35"><i class="bx bx-dollar"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-warning bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-dark">Total Users</p>
										<h4 class="text-dark my-1">24.5K</h4>
									</div>
									<div class="text-dark ms-auto font-35"><i class="bx bx-user-pin"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 bg-success bg-gradient">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Comments</p>
										<h4 class="my-1 text-white">8569</h4>
									</div>
									<div class="text-white ms-auto font-35"><i class="bx bx-comment-detail"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
{{--            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5">--}}
{{--                <div class="col">--}}
{{--                    <div class="card radius-10 overflow-hidden">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <div>--}}
{{--                                    <p class="mb-0 text-secondary font-14">{{__('Total-Cases')}}</p>--}}
{{--                                    <h5 class="my-0">{{ $data }}</h5>--}}
{{--                                    <p class="mb-0 text-secondary font-14">{{__('New-Cases')}}: {{ $data }}</p>--}}
{{--                                    <p class="mb-0 text-secondary font-14">{{__('Old-Cases')}}: {{ $data }}</p>--}}
{{--                                </div>--}}
{{--                                <div class="text-primary ms-auto font-30"><i class='fadeIn animated bx bx-fingerprint'></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mt-1" id="chart1"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end row-->--}}
            <div class="col-12 col-lg-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div>
                            <h6 class="mb-0">{{__('complaintGraph')}}</h6>
                        </div>
                        <hr>
                        <div class="chart-container-0">
                            <div id="complaintGraph" style="width: auto!important; height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div>
                            <h6 class="mb-0">{{__('violenceGraph')}}</h6>
                        </div>
                        <hr>
                        <div class="chart-container-0">
                            <div id="violenceGraph" style="width: auto!important; height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="card radius-10">
                    <div class="card-body">
                        <div>
                            <h6 class="mb-0">{{__('provinceGraph')}}</h6>
                        </div>
                        <hr>
                        <div class="chart-container-0">
                            <div id="provinceGraph" style="width: auto!important; height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div>
@endsection
@section('footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.1/echarts.min.js"></script>
    <script type="text/javascript">


    // complaintGraph
    var chartPie = document.getElementById('complaintGraph');
        var myPieChart = echarts.init(chartPie);
        var exData = {{ Js::from($complaintCount) }};
        var exLabel = {{ Js::from($complaintName) }};
        var colors = ['#d0a255', '#4990fc', '#32CD32'];
        var optionPie = {
            title: {
                text: '{{__('complaints')}}',
                left: 'center'
            },
            tooltip: {
                trigger: 'item'
            },
            legend: {
                orient: 'vertical',
                left: 'left',
            },
            series: [
                {
                    name: '{{__('complaints')}}',
                    type: 'pie',
                    // radius: ['40%', '70%'],
                    radius: '50%',
                    data: exData.map((value, index) => {
                        return {
                            value: value,
                            name: exLabel[index],
                            itemStyle: {
                                color: colors[index % colors.length]
                            },
                            label: {
                                formatter: '{b|{b}}\n{per|{d}%}',
                                rich: {
                                    b: {
                                        fontSize: 14,
                                        lineHeight: 24
                                    },
                                    per: {
                                        fontSize: 10,
                                        lineHeight: 16
                                    }
                                }
                            }
                        };
                    }),
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };
        if (optionPie) {
            myPieChart.setOption(optionPie);
        }

    // violences
    var chartViolence = document.getElementById('violenceGraph');
        var violenceChart = echarts.init(chartViolence);
        var exVData = {{ Js::from($violenceCount) }};
        var exVLabel = {{ Js::from($violenceName) }};
        var colors = ['#d0a255', '#4990fc', '#32CD32'];
        var optionViolence = {
            title: {
                text: '{{__('violences')}}',
                left: 'center'
            },
            tooltip: {
                trigger: 'item'
            },
            legend: {
                orient: 'vertical',
                left: 'left',
            },
            series: [
                {
                    name: '{{__('violences')}}',
                    type: 'pie',
                    // radius: ['40%', '70%'],
                    radius: '50%',
                    data: exVData.map((value, index) => {
                        return {
                            value: value,
                            name: exVLabel[index],
                            itemStyle: {
                                color: colors[index % colors.length]
                            },
                            label: {
                                formatter: '{b|{b}}\n{per|{d}%}',
                                rich: {
                                    b: {
                                        fontSize: 14,
                                        lineHeight: 24
                                    },
                                    per: {
                                        fontSize: 10,
                                        lineHeight: 16
                                    }
                                }
                            }
                        };
                    }),
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };
        if (optionViolence) {
            violenceChart.setOption(optionViolence);
        }
    // violences
    var chartProvince = document.getElementById('provinceGraph');
    var provinceChart = echarts.init(chartProvince);
    var exPData = {{ Js::from($provinceCount) }};
    var exPLabel = {{ Js::from($provinceName) }};
    var colors = ['#d0a255', '#4990fc', '#32CD32'];
    var optionProvince = {
        title: {
            text: '{{__('provinces')}}',
            left: 'center'
        },
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            }
        },
        legend: {
            orient: 'vertical',
            left: 'left',
        },
        xAxis: {
            type: 'category',
            data: exPLabel,
            axisLabel: {
                interval: 0,
                rotate: 30
            }
        },
        yAxis: {
            type: 'value',
            name: '{{__('Count')}}'
        },
        series: [
            {
                name: '{{__('provinces')}}',
                type: 'bar',
                data: exPData,
                itemStyle: {
                    color: function (params) {
                        return colors[params.dataIndex % colors.length];
                    }
                }
            }
        ]
    };
    if (optionProvince) {
        provinceChart.setOption(optionProvince);
    }

    </script>
@show
