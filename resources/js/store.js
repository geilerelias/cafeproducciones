import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        drawer: false,
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
            {route: "category.index", icon: 'mdi-briefcase', title: "Category"},
            {route: "business.list", icon: 'mdi-store', title: "Business"},
            {route: "subcategory.index", icon: 'mdi-ballot', title: "Subategory"},
            {route: "product.index", icon: 'mdi-cart', title: "Product"},
        ]
    },
    getters: {
        getDrawer(state) {
            return state.drawer;
        },
    },
    mutations: {
        setDrawer(state, v) {
            state.drawer = v;
        },
    },
});

export default store;
