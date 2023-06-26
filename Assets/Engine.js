fetch("http://api.weatherapi.com/v1/current.json?key=df17d621fc664db1876181929230806&q=Hilversum&aqi=no")
    .then(response => {
        if (!response.ok) {
            throw new Error("Fout bij het laden van weergegevens");
        }
        return response.json();
    })
    .then(data => {
        console.log(data);
        updateWeatherData(data);
    })
    .catch(error => {
        console.error("Fout:", error);
        timeElement.textContent = "";
    });

function updateWeatherData(data) {
    const locationElement = document.querySelector('.location');
    const tempElement = document.querySelector('.temp');
    const timeElement = document.querySelector('.time');
    const humidityElement = document.querySelector('.humidity');
    const windElement = document.querySelector('.wind');
    const conditionElement = document.querySelector('.condition');

    locationElement.textContent = `Locatie: ${data.location.name}, ${data.location.region}, ${data.location.country}`;
    tempElement.textContent = `Temperatuur: ${data.current.temp_c}°C / ${data.current.temp_f}°F`;
    timeElement.textContent = `Lokale tijd: ${data.location.localtime}`;
    humidityElement.textContent = `Vochtigheid: ${data.current.humidity}%`;
    windElement.textContent = `Wind: ${data.current.wind_kph} km/u`;
    conditionElement.textContent = `Condities: ${data.current.condition.text}`;
}

