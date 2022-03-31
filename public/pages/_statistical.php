<?php
require_once '../../database/config.php';
require_once '../../database/function.php';
$show_chart = true;
$title = "Thống kê dòng tiền";
?>
<?php include '../layouts/head.php'; ?>

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Thống kê</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thống kê </li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thống kê tháng này</h3>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="chartLine" class="h-275"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSE -->


        </div>
        <!-- container-closed -->
    </div>
</div>
<script>
    (() => {
        function a(a, e, o) {
            return e in a ? Object.defineProperty(a, e, {
                value: o,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : a[e] = o, a
        }
        $((function() {
            var e, o, r, t = document.getElementById("chartLine").getContext("2d"),
                n = (new Chart(t, {
                    type: "line",
                    data: {
                        labels: ["<?=date('Y-m-d', time())?>"],
                        datasets: [(e = {
                            label: "Tổng nạp",
                            data: ["<?=$tongnap?>"],
                            borderWidth: 2,
                            backgroundColor: "transparent",
                            borderColor: "#6c5ffc"
                        }, a(e, "borderWidth", 3), a(e, "pointBackgroundColor", "#ffffff"), a(e, "pointRadius", 2), e), (o = {
                            label: "Đã mua",
                            data: ["<?=$getUser['da_mua']?>"],
                            borderWidth: 2,
                            backgroundColor: "transparent",
                            borderColor: "#05c3fb"
                        }, a(o, "borderWidth", 3), a(o, "pointBackgroundColor", "#ffffff"), a(o, "pointRadius", 2), o)]
                    },
                    options: {
                        responsive: !0,
                        maintainAspectRatio: !1,
                        scales: {
                            xAxes: [{
                                ticks: {
                                    fontColor: "#9ba6b5"
                                },
                                display: !0,
                                gridLines: {
                                    color: "rgba(119, 119, 142, 0.2)"
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    fontColor: "#9ba6b5"
                                },
                                display: !0,
                                gridLines: {
                                    color: "rgba(119, 119, 142, 0.2)"
                                },
                                scaleLabel: {
                                    display: !1,
                                    labelString: "Thousands",
                                    fontColor: "rgba(119, 119, 142, 0.2)"
                                }
                            }]
                        },
                        legend: {
                            labels: {
                                fontColor: "#9ba6b5"
                            }
                        }
                    }
                }), {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May"],
                    datasets: [{
                        data: [20, 20, 30, 5, 25],
                        backgroundColor: ["#6c5ffc", "#05c3fb", "#09ad95", "#1170e4", "#e82646"]
                    }]
                }),
                l = {
                    maintainAspectRatio: !1,
                    responsive: !0,
                    legend: {
                        display: !1
                    },
                    animation: {
                        animateScale: !0,
                        animateRotate: !0
                    }
                },
                i = document.getElementById("chartPie"),
                d = (new Chart(i, {
                    type: "doughnut",
                    data: n,
                    options: l
                }), document.getElementById("chartDonut"));
        }))
    })();
</script>
<?php include '../layouts/foot.php'; ?>