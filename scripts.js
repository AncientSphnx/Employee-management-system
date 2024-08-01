// Area Chart
const areaCtx = document.getElementById('areaChart').getContext('2d');
const areaChart = new Chart(areaCtx, {
    type: 'line',
    data: {
        labels: ['Mar 1', 'Mar 3', 'Mar 5', 'Mar 7', 'Mar 9', 'Mar 11', 'Mar 13'],
        datasets: [{
            label: 'Data',
            data: [10000, 20000, 15000, 30000, 25000, 35000, 40000],
            backgroundColor: 'rgba(0, 123, 255, 0.5)',
            borderColor: 'rgba(0, 123, 255, 1)',
            fill: true
        }]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                beginAtZero: true
            },
            y: {
                beginAtZero: true
            }
        }
    }
});

// Bar Chart
const barCtx = document.getElementById('barChart').getContext('2d');
const barChart = new Chart(barCtx, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Data',
            data: [5000, 10000, 7500, 10000, 12500, 15000],
            backgroundColor: 'rgba(0, 123, 255, 0.5)',
            borderColor: 'rgba(0, 123, 255, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                beginAtZero: true
            },
            y: {
                beginAtZero: true
            }
        }
    }
});
document.addEventListener("DOMContentLoaded", () => {
    const departmentToggle = document.querySelector(".toggle-departments");
    const subsections = document.querySelector(".subsection");

    departmentToggle.addEventListener("click", () => {
        if (subsections.style.display === "block") {
            subsections.style.display = "none";
        } else {
            subsections.style.display = "block";
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const departmentToggleo = document.querySelector(".toggle-departmentso");
    const subsectionso = document.querySelector(".subsectiono");

    departmentToggleo.addEventListener("click", () => {
        if (subsectionso.style.display === "block") {
            subsectionso.style.display = "none";
        } else {
            subsectionso.style.display = "block";
        }
    });
});
document.addEventListener("DOMContentLoaded", () => {
    const departmentTogglea = document.querySelector(".toggle-departmentsa");
    const subsectionsa = document.querySelector(".subsectiona");

    departmentTogglea.addEventListener("click", () => {
        if (subsectionsa.style.display === "block") {
            subsectionsa.style.display = "none";
        } else {
            subsectionsa.style.display = "block";
        }
    });
});