require('./bootstrap');
import {createApp} from 'vue'
//vue component
import HelloWorld from './components/HelloWorld.vue';
//prime vue component
import App from './App.vue';
import PrimeVue from 'primevue/config';
import Dialog from 'primevue/dialog';
import Chips from 'primevue/chips';
const app = createApp({App});
// registers our HelloWorld component globally
app.component('hello-world', HelloWorld);
app.component('Dialog', Dialog);
app.component('Chips',Chips);
// mount the app to the DOM
app.mount('#app');
//Primevue
app.use(PrimeVue);
//add prime vue theme
import 'primevue/resources/themes/lara-dark-teal/theme.css' //theme
import 'primevue/resources/primevue.min.css' //core css
import 'primeicons/primeicons.css' //icons