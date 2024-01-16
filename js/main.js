const ctx = document.getElementById('myChart');
  const labels = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
  const data = [12.82, 12.99, 13.26, 13.36, 13.47, 13.52, 13.57, 13.53, 13.42, 13.40, 13.29, 13.12];

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: '# of Votes',
        backgroundColor: 'rgb(255, 99, 132)',
        data: data,
        borderWidth: 2
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });