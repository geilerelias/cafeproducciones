require('./bootstrap');

require('moment');

import Vue from 'vue';

import {InertiaApp} from '@inertiajs/inertia-vue';
import {InertiaForm} from 'laravel-jetstream';
import PortalVue from 'portal-vue';

//mis importaciones
import vuetify from '../plugins/vuetify'
import {InertiaProgress} from '@inertiajs/progress'
import VueSweetalert2 from 'vue-sweetalert2';
// If you don't need the styles, do not connect
import 'sweetalert2/dist/sweetalert2.min.css';
import store from "./store";


//material design icons
import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader

//Perfect Scrollbar
import PerfectScrollbar from 'vue2-perfect-scrollbar'
import 'vue2-perfect-scrollbar/dist/vue2-perfect-scrollbar.css'

//v-video-embed
import Embed from 'v-video-embed'

// animate.css
import 'animate.css';

// global register
Vue.use(Embed);

// global register
Vue.mixin({methods: {route}});
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(VueSweetalert2);
Vue.use(PerfectScrollbar)

const app = document.getElementById('app');

new Vue({
    vuetify,
    store,
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);

InertiaProgress.init({
    // The delay after which the progress bar will
    // appear during navigation, in milliseconds.
    delay: 250,
    // The color of the progress bar.
    color: '#b7131c',
    // Whether to include the default NProgress styles.
    includeCSS: true,
    // Whether the NProgress spinner will be shown.
    showSpinner: false,
});
