

    <script src="<?php echo base_url(); ?>assets/js/vendor-all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ripple.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pcoded.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/menu-setting.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/plugins/apexcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/data-basic-custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/dropzone-amd-module.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/form-select-custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery.mask.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/sweetalert.min.js"></script>
    
    <script type="text/javascript">
        $(window).on('load', function() {
            $('.date2').mask('00-00-0000');
        });
    </script>

    <!-- Required Js -->

<script>
        $(document).ready(function() {
            
            setTimeout(function() {
                $(function() {
                    var options = {
                        chart: {
                            height: 300,
                            type: 'line',
                            zoom: {
                                enabled: false
                            }
                        },
                        dataLabels: {
                            enabled: false,
                            width: 2,
                        },
                        stroke: {
                            curve: 'straight',
                        },
                        colors: ["#4680ff"],
                        series: [{
                            name: "Arsip",
                            data: [148, 4]
                        }],
                        title: {
                            text: 'Statistik Pengajuan Arsip Tahun <?php echo date('Y'); ?>',
                            align: 'left'
                        },
                        grid: {
                            row: {
                                colors: ['#f3f6ff', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                        },
                        xaxis: {
                            categories: ['Jan', 'Feb'],
                        }
                    }

                    var chart = new ApexCharts(
                        document.querySelector("#line-chart-1"),
                        options
                    );
                    chart.render();
                });
                
            }, 700);
        });
</script>
<script>
        $(function() {
            var options = {
                chart: {
                    height: 320,
                    type: 'donut',
                },
                series: [44, 55, 41, 17],
                colors: ["#4680ff", "#0e9e4a", "#ff5252", "#ffba57"],
                legend: {
                    show: true,
                    position: 'bottom',
                },
                plotOptions: {
                    pie: {
                        donut: {
                            labels: {
                                show: true,
                                name: {
                                    show: true
                                },
                                value: {
                                    show: true
                                }
                            }
                        }
                    }
                },
                dataLabels: {
                    enabled: true,
                    dropShadow: {
                        enabled: false,
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {          
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            }
            var chart = new ApexCharts(
                document.querySelector("#pie-chart-2"),
                options
            );
            chart.render();
        });
</script>

<script>

    $(document).ready(function() {
        checkCookie();
    });

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        var ticks = getCookie("modelopen");
        if (ticks != "") {
            ticks++ ;
            setCookie("modelopen", ticks, 1);
            if (ticks == "2" || ticks == "1" || ticks == "0") {
                $('#exampleModalCenter').modal();
            }
        } else {
            // user = prompt("Please enter your name:", "");
            $('#exampleModalCenter').modal();
            ticks = 1;
            setCookie("modelopen", ticks, 1);
        }
    }
</script>


</body>

</html>
