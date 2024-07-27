const searchBtn = document.getElementById('search-btn');
const destinationInput = document.getElementById('destination');
const travelDateInput = document.getElementById('travel-date');
const resultsContainer = document.getElementById('results-container');

searchBtn.addEventListener('click', search);

function search() {
    const destination = destinationInput.value.trim();
    const travelDate = travelDateInput.value;

    if (destination && travelDate) {
        // Llamada a la función que devuelve los resultados de la busqueda
        getResults(destination, travelDate).then((results) => {
            displayResults(results);
        });
    } else {
        alert('Por favor, ingrese un destino y una fecha de viaje validos');
    }
}

function getResults(destination, travelDate) {
    // Simulación de una llamada a una API o una base de datos que devuelve los resultados de la busqueda
    return new Promise((resolve) => {
        setTimeout(() => {
            const results = [
                { name: `Vuelo y Hotel, Destino: ${destination}`, description: 'Precio: 1100$' },
                { name: `Vuelo a ${destination}`, description: 'Precio: 800$' },
                { name: `Hotel en ${destination}`, description: 'Precio: 400$' },
            ];
            resolve(results);
        }, 2000);
    });
}

function displayResults(results) {
    resultsContainer.innerHTML = '';
    results.forEach((result) => {
        const resultHTML = `
            <div>
                <h2>${result.name}</h2>
                <p>${result.description}</p>
            </div>
        `;
        resultsContainer.innerHTML += resultHTML;
    });
}

class TourPackage {
    constructor(name, description, price, availability) {
        this.name = name;
        this.description = description;
        this.price = price;
        this.availability = availability;
    }

    getPrice() {
        return this.price;
    }

    getAvailability() {
        return this.availability;
    }

    setAvailability(availability) {
        this.availability = availability;
    }

    toString() {
        return `${this.name} - ${this.description} - Precio: ${this.price} - Disponibilidad: ${this.availability}`;
    }
}

const packages = [
    new TourPackage('Paquete 1', 'Descripción del paquete 1', 1000, true),
    new TourPackage('Paquete 2', 'Descripción del paquete 2', 2000, false),
    new TourPackage('Paquete 3', 'Descripción del paquete 3', 3000, true),
];

// Solicitar permiso para mostrar notificaciones
Notification.requestPermission().then((permission) => {
    if (permission === 'granted') {

      const offerNotification = new Notification('Oferta especial!', {
        body: 'Obtenga un 20% de descuento en todos los paquetes turísticos esta semana.',
      });
  

      const updateNotification = new Notification('Solo por hoy!', {
        body: '¡Paquetes turisticos con un 30% de descuento disponibles ahora!',
      });
  
      // Agregar eventos para mostrar notificaciones
      document.addEventListener('DOMContentLoaded', () => {
        // Mostrar notificación de "Oferta especial" después de 5 segundos
        setTimeout(() => {
          offerNotification.show();
        }, 5000);
  
        // Mostrar notificación de "Solo por hoy" después de 10 segundos
        setTimeout(() => {
          updateNotification.show();
        }, 10000);
      });
    }
  });


