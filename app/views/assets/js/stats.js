console.log("Stats loaded..");

var ctx1 = document.getElementById("winsChart").getContext('2d');
var ctx2 = document.getElementById("gamesChart").getContext('2d');

var topChart = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: [],
        datasets: [{
            label: 'Top wins',
            data: [],
            backgroundColor: [],
            borderColor: [],
            borderWidth: 1
        }]
    }
});

var gamesChart = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Top Gamers',
            data: [],
            backgroundColor: [],
            borderColor: [],
            borderWidth: 1
        }]
    }
});

$.getJSON("/MVC-Game/dice/topWinners",
    function(data) {
        console.log(data);
        $.each(data, function(i, field){
            topChart.data.datasets[0].data.push(field.result);
            topChart.data.labels.push(field.username);
            topChart.update();
        });
    });

$.getJSON("/MVC-Game/dice/topPlayers",
    function(data) {
        console.log(data);
        $.each(data, function(i, field){
            gamesChart.data.datasets[0].data.push(field.Occurrence);
            gamesChart.data.labels.push(field.username);
            gamesChart.update();
        });
    });