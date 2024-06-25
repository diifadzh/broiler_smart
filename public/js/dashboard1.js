$ (function (){
    var options = {
            series: [44, 55, 41],
            labels: ['Pegawai Tetap', 'Pegawai Kontrak', 'Pegawai Magang'],
            chart: {
                type: 'donut',
            },
            colors: ["var(--bs-danger)", "var(--bs-primary)","var(--bs-warning)"],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }],
            legend: {
                position: 'bottom'
            }
        };

        var chart = new ApexCharts(document.querySelector("#employee"), options);
        chart.render();
})
