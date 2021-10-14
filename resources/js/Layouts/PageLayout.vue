<template>
    <v-app>
        <header-component></header-component>
        <drawer-component></drawer-component>
        <v-main>
            <slot></slot>
        </v-main>

        <footer-component></footer-component>
    </v-app>
</template>

<script>

//base
import Header from "@/base/Header";
import Drawer from "@/base/Drawer";
import Footer from "@/base/Footer";

export default {
    components: {
        "header-component": Header,
        "drawer-component": Drawer,
        "footer-component": Footer
    },

    data() {
        return {
            showingNavigationDropdown: false,
        }
    },

    methods: {
        switchToTeam(team) {
            this.$inertia.put(route('current-team.update'), {
                'team_id': team.id
            }, {
                preserveState: false
            })
        },

        logout() {
            axios.post(route('logout').url()).then(response => {
                window.location = '/';
            })
        },
    }
}
</script>

<style>
.v-btn {
    outline: none !important;
}
</style>
