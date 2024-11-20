<!--   Core JS Files   -->
<script src="<?php echo $pre; ?>assets/js/core/jquery-3.7.1.min.js"></script>
<script src="<?php echo $pre; ?>assets/js/core/popper.min.js"></script>
<script src="<?php echo $pre; ?>assets/js/core/bootstrap.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?php echo $pre; ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Chart JS -->
<script src="<?php echo $pre; ?>assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?php echo $pre; ?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?php echo $pre; ?>assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?php echo $pre; ?>assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?php echo $pre; ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?php echo $pre; ?>assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
<script src="<?php echo $pre; ?>assets/js/plugin/jsvectormap/world.js"></script>

<!-- Sweet Alert -->
<script src="<?php echo $pre; ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Kaiadmin JS -->
<script src="<?php echo $pre; ?>assets/js/kaiadmin.min.js"></script>

<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<!-- <script src="assets/js/setting-demo.js"></script> -->
<!-- <script src="assets/js/demo.js"></script> -->
<script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
    });
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<!-- Fonts and icons -->
<script src="<?php echo $pre; ?>assets/js/plugin/webfont/webfont.min.js"></script>
<style>
    .carousel-item img {
        width: 100%;
        height: auto;
    }

    .carousel-caption {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
    }

    .carousel-caption h5,
    .carousel-caption p {
        text-align: center;
        margin: 0 auto;
    }
</style>

</head>
<style>
    #seccion-con-fondo {
        background-image: url('../assets/img/fondo3.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 20px;
        color: white;
    }
</style>
<script>
    WebFont.load({
        google: {
            families: ["Public Sans:300,400,500,600,700"]
        },
        custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
            ],
            urls: ["assets/css/fonts.min.css"],
        },
        active: function() {
            sessionStorage.fonts = true;
        },
    });
</script>
<style>
    .custom-table-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .custom-table {
        width: 300px;
        /* Ajusta el ancho de la tabla */
        height: auto;
        /* Ajusta la altura según sea necesario */
    }

    .custom-table select {
        width: 100%;
        /* Hace que el select ocupe todo el ancho de la celda */
    }
</style>
<style>
    .text-black {
        color: #000000;
        /* Negro puro */
    }
</style>
<style>
    .footer {
        /* background-color: #1a2035; */
        color: white;
        background-image: url('../assets/img/fondo3.jpg');
        /* background-image: url('assets/img/fondo3.jpg');
        */
    }
</style>
<style>
    table.dataTable thead {
        background: #007bff;
        color: white;
    }
</style>