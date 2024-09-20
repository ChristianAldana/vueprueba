import { createApp } from 'vue';
import CuartoComputacion from './components/CuartoComputacion.vue'; // Asegúrate de que la ruta es correcta

const app = createApp({
  // Puedes pasar opciones adicionales si es necesario
});

// Registrar el componente globalmente
app.component('cuarto-computacion', CuartoComputacion);

// Montar la aplicación Vue
app.mount('#app');
