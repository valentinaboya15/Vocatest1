// setup
const data = {
  labels: [
    "Espacial",
    "Cinético corporal",
    "Musical",
    "Interpersonal",
    "Intrapersonal",
    "Naturalista",
    "Lingüística",
    "Lógica matemática",
  ],
  datasets: [
    {
      label: "Puntaje",
      data: [
        espacial,
        cinetico_corporal,
        musical,
        interpersonal,
        intrapersonal,
        naturalista,
        linguistica,
        logica_matematica,
      ],
      backgroundColor: [
        "rgba(255, 26, 104, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)",
        "rgba(0, 0, 0, 0.2)",
      ],
      borderColor: [
        "rgba(255, 26, 104, 1)",
        "rgba(54, 162, 235, 1)",
        "rgba(255, 206, 86, 1)",
        "rgba(75, 192, 192, 1)",
        "rgba(153, 102, 255, 1)",
        "rgba(255, 159, 64, 1)",
        "rgba(0, 0, 0, 1)",
      ],
      fill: true,
      borderWidth: 1,
    },
  ],
};

// config
const config = {
  type: "bar",
  data,
  options: {
    scales: {
      x: {
        /*grid: {
          color: "rgba(179, 180, 180, 1)",
          borderColor: "grey",
          tickColor: "grey",
          borderDash: [5, 5],
        },*/
        display: true,
        title: {
          display: true,
          text: "Inteligencias",
          color: "#000000",
          font: {
            size: 12,
            family: "'Roboto', sans-serif",
            weight: "bold",
          },
        },
        ticks: {
          font: {
            size: 12,
            family: "'Roboto', sans-serif",
            weight: "bold",
          },
          color: "#000000",
        },
      },
      y: {
        beginAtZero: true,
        /*grid: {
          color: "rgba(179, 180, 180, 1)",
          borderColor: "grey",
          tickColor: "grey",
          borderDash: [5, 5],
        },*/
        display: true,
        title: {
          display: true,
          text: "Puntajes",
          color: "#000000",
          font: {
            size: 12,
            family: "'Roboto', sans-serif",
            weight: "bold",
          },
        },
        ticks: {
          stepSize: 1,
          font: {
            size: 12,
            family: "'Roboto', sans-serif",
            weight: "bold",
          },
          color: "#000000",
        },
      },
    },
    plugins: {
      autocolors: false,
      title: {
        display: true,
        text: "Resultado del test",
        color: "#000000",
        font: {
          size: 16,
          family: "'Roboto', sans-serif",
          lineHeight: 0.5,
          weight: "bold",
        },
        /*padding: {
          bottom: 25,
          top: 10,
        },*/
      },
      subtitle: {
        display: true,
        text: "ELABORADO POR " + userName,
        color: "#000000",
        font: {
          size: 12,
          family: "'Roboto', sans-serif",
        },
        
        padding: {
          bottom: 10,
        },
       
      },
     
      legend: {
        display: false,
      },
    },

    interaction: {
      intersect: true,
    },
  },
  responsive: true,
};

// render init block
const myChart = new Chart(document.getElementById("myChart"), config);
