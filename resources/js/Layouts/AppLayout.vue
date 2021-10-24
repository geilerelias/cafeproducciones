<template>
    <v-app id="inspire">
        <header-component :clippedLeft="false" :showItems="false"></header-component>
        <drawer-component></drawer-component>

        <v-main class="bg-gray-100">
            <div class="min-h-screen ">
                <slot></slot>
            </div>
            <footer-component></footer-component>
        </v-main>

    </v-app>
</template>

<script>

import Footer from "@/Base/AppFooter.vue";
import Header from "@/Base/AppHeader.vue";
import Drawer from "@/Base/AppDrawer.vue";

export default {
    components: {

        "footer-component": Footer,
        "header-component": Header,
        "drawer-component": Drawer
    },

    data() {
        return {
            showingNavigationDropdown: false,
            items: [
                {title: 'Dashboard', icon: 'mdi-view-dashboard'},
                {title: 'Photos', icon: 'mdi-image'},
                {title: 'About', icon: 'mdi-help-box'},
            ],
            right: null,
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
