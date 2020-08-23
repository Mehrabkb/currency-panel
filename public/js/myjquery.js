$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: propertyurl,
        success: function(response) {
            console.log(response[0].labels);
            renderChart(response)
        }
    });

    function renderChart(response) {
        var ctx = document.getElementById('myChart').getContext('2d');
        ctx.height = 300;
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: response[0].labels,
                datasets: [{
                    label: '# of Votes',
                    data: response[0].amounts,
                    backgroundColor: response[0].colors,
                    borderColor: response[0].colors,
                    borderWidth: 1
                }]
            },
        });
    }
});