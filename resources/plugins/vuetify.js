import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify)


const opts = {
    icons: {
        iconfont: 'mdi', // default - only for display purposes
    },
    theme: {
        themes: {
            light: {
                primary: '#b7131c',
                secondary: '#700809',
                accent: '#a54b54',
                error: '#f44336',
                warning: '#ff9800',
                info: '#00bcd4',
                success: '#4caf50',
            },
            dark: {
                primary: '#b7131c',
                secondary: '#700809',
                accent: '#a54b54',
                error: '#f44336',
                warning: '#ff9800',
                info: '#00bcd4',
                success: '#4caf50',
            },
        },
    },
}

export default new Vuetify(opts)
