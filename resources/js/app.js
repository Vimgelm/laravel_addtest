require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';
// inertia component init
createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });

//vue component
import HelloWorld from './Components/HelloWorld.vue';
import Addtest from './Pages/Addtest';
import Passtest from './Pages/Passtest';
//prime vue component
import App from './App.vue';
import PrimeVue from 'primevue/config';
import Chips from 'primevue/chips';
const app = createApp({App});

// registers our HelloWorld component globally
app.component('addtest', Addtest);
app.component('hello-world', HelloWorld);
app.component('Chips',Chips);
app.component('passtest', Passtest);

// mount the app to the DOM
app.mount('#app');

//Primevue
app.use(PrimeVue);

//add prime vue theme
import 'primevue/resources/themes/lara-dark-teal/theme.css' //theme
import 'primevue/resources/primevue.min.css' //core css
import 'primeicons/primeicons.css' //icons
