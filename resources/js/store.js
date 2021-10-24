import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        drawer: null,
        expand:false,
        links: [
            {
                route: "home",
                icon: "mdi-home-outline",
                title: "Inicio",
                submenu: false
            },
            {
                route: "about-us",
                icon: "mdi-account-question-outline",
                title: "¿Quienes somos?",
                submenu: false
            },
            {
                route: "our-services",
                icon: "mdi-face-agent",
                title: "Nuestros Servicios",
                submenu: false
            },
            // {
            //     route: "gallery",
            //     icon: "mdi-movie-play-outline",
            //     title: "Galería",
            //     submenu: false
            // },
            {
                route: "contact-us",
                icon: "mdi-card-account-phone-outline",
                title: "Contáctenos",
                submenu: false
            },
        ],
        linksWithAuth: [
            {route: "dashboard", icon: 'mdi-view-dashboard', title: "Dashboard"},
        ]
    },
    getters: {
        getDrawer(state) {
            return state.drawer;
        },
        getExpand(state) {
            return state.expand;
        },
    },
    mutations: {
        setDrawer(state, v) {
            state.drawer = v;
        },
        setExpand(state, v) {
            state.expand = v;
        },
    },
});

export default store;
