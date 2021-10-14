<template>
    <div>
        <v-app-bar
            app
            clipped-left
            class="align-center"
            :class="flat&&route().current('home') ? 'bgTranparente' : 'white'"
            :flat="flat"
        >


            <inertia-link :href="route('home')"
                          class="d-flex align-center justify-center text-decoration-none mr-1">
                <v-avatar flat size="50" color="transparent" :aspect-ratio="1">
                    <v-img
                        style="max-height:50px"
                        :aspect-ratio="1"
                        contain
                        :src="logo"
                    />
                </v-avatar>
                <span class="font-weight-black font-weight-bold ml-2 hidden-sm-and-down"
                      :class="{'white--text':flat,'primary--text':!flat}" href="/">
                    CaFe Producciones
                </span>
            </inertia-link>


            <v-spacer></v-spacer>


            <v-toolbar-items>
                <nav class="d-flex justify-end text-end align-center">
                    <inertia-link v-for="item in links" :key="item.name" :href="route(item.route)"
                                  :class="{'active': route().current(item.route)}"
                                  v-if="$vuetify.breakpoint.mdAndUp||route().current(item.route)">

                        <v-hover
                            v-slot="{ hover }"
                        >
                            <v-btn :text="!route().current(item.route) || $vuetify.breakpoint.smAndDown"
                                   depressed
                                   rounded
                                   class="text-none"
                                   :class="{ 'active primary--text font-weight-bold grey lighten-3 mr-2': route().current(item.route) && $vuetify.breakpoint.mdAndUp,'black--text':!flat, 'white--text':flat}"
                            >
                                <v-icon :left="$vuetify.breakpoint.mdAndUp">
                                    {{ item.icon }}
                                </v-icon>
                                <v-expand-x-transition>
                                    <span transition="fab-transition"
                                          v-if="$vuetify.breakpoint.lgAndUp || hover || route().current(item.route)">
                                       {{ item.title }}
                                    </span>
                                </v-expand-x-transition>
                            </v-btn>
                        </v-hover>

                    </inertia-link>
                </nav>
            </v-toolbar-items>


            <!-- Settings Dropdown -->
            <div v-if="$page.user!==null" class="text-center hidden-xs-only">
                <v-menu
                    offset-y
                    :close-on-content-click="false"
                >
                    <!--                                <template v-slot:activator="{ on, attrs }">
                                                        <v-btn text
                                                               v-bind="attrs"
                                                               v-on="on"
                                                               class="px-1 ml-2 mr-n2 rounded-pill">
                                                            <v-avatar class="transparent" size="35" v-if="$page.jetstream.managesProfilePhotos">
                                                                <v-img cover :src="$page.user.profile_photo_url" :alt="$page.user.name"></v-img>
                                                            </v-avatar>

                                                            <span
                                                                class="text-none font-weight-regular ml-3 hidden-sm-and-down text-truncate"
                                                                style="max-width: 100px;">{{ $page.user.name }}</span>
                                                            <v-icon>mdi-chevron-down</v-icon>
                                                        </v-btn>
                                                    </template> -->
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn v-if="$page.jetstream.managesProfilePhotos"
                               fab
                               dark
                               text
                               v-bind="attrs"
                               v-on="on"
                               large
                        >
                            <v-img style="max-height: 48px;max-width: 48px" class="rounded-circle" cover
                                   :src="$page.user.profile_photo_url"
                                   :alt="$page.user.name"></v-img>
                        </v-btn>
                    </template>

                    <v-card class="pa-5">
                        <v-list>
                            <v-list-item>
                                <v-list-item-avatar v-if="$page.jetstream.managesProfilePhotos">
                                    <img
                                        :src="$page.user.profile_photo_url"
                                        :alt="$page.user.name"
                                    >
                                </v-list-item-avatar>

                                <v-list-item-content>
                                    <v-list-item-title>{{ $page.user.name }}</v-list-item-title>
                                    <v-list-item-subtitle>{{ $page.user.email }}</v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>
                        </v-list>

                        <v-divider></v-divider>


                        <!-- Responsive Settings Options -->
                        <v-list v-if="$page.user!==null" dense>
                            <v-subheader>Settings Options</v-subheader>
                            <v-list-item-group
                                color="primary"
                            >
                                <inertia-link :href="route('profile.show')">
                                    <v-list-item
                                        :dark="route().current('profile.show')"
                                        :class="route().current('profile.show')?'active primary  white--text':''">
                                        <v-list-item-icon>
                                            <v-icon>mdi-account-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <v-list-item-title> Profile</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </inertia-link>
                                <inertia-link :href="route('api-tokens.index')"
                                              v-if="$page.jetstream.hasApiFeatures">
                                    <v-list-item
                                        :dark="route().current('api-tokens.index')"
                                        :class="route().current('api-tokens.index')?'active primary  white--text':''"
                                    >
                                        <v-list-item-icon>
                                            <v-icon>mdi-lan</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <v-list-item-title> API Tokens</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </inertia-link>
                                <v-subheader>Manage Team</v-subheader>
                                <inertia-link :href="route('teams.show', $page.user.current_team)">
                                    <v-list-item
                                        :dark="route().current('teams.show')"
                                        :class="route().current('teams.show')?'active primary  white--text':''"
                                    >
                                        <v-list-item-icon>
                                            <v-icon>mdi-account-group</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <v-list-item-title> Team Settings</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </inertia-link>

                                <inertia-link :href="route('teams.create')">
                                    <v-list-item
                                        :dark="route().current('teams.create')"
                                        :class="route().current('teams.create')?'active primary  white--text':''"
                                    >
                                        <v-list-item-icon>
                                            <v-icon>mdi-account-multiple-plus</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content>
                                            <v-list-item-title>Create New Team</v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </inertia-link>
                            </v-list-item-group>
                        </v-list>

                        <div v-if="$page.user!==null" class="pt-4 pb-1 border-t border-gray-200">

                            <div class="mt-3 space-y-1">

                                <!-- Team Management -->
                                <template v-if="$page.jetstream.hasTeamFeatures">

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Switch Teams
                                    </div>

                                    <template v-for="team in $page.user.all_teams">
                                        <form @submit.prevent="switchToTeam(team)" :key="team.id">
                                            <jet-responsive-nav-link as="button">
                                                <div class="flex items-center">
                                                    <svg v-if="team.id == $page.user.current_team_id"
                                                         class="mr-2 h-5 w-5 text-green-400" fill="none"
                                                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                         stroke="currentColor" viewBox="0 0 24 24">
                                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <div>{{ team.name }}</div>
                                                </div>
                                            </jet-responsive-nav-link>
                                        </form>
                                    </template>
                                </template>
                            </div>
                        </div>
                    </v-card>
                </v-menu>
            </div>

            <div class="text-center" v-if="$page.user==null">
                <v-menu
                    :close-on-content-click="false"
                    :nudge-width="200"
                    offset-y
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-app-bar-nav-icon
                            v-bind="attrs"
                            v-on="on"
                            class="ml-2 hidden-sm-and-down"
                            :class="{'white--text': flat,'black--text': flat}"
                        >
                        </v-app-bar-nav-icon>
                    </template>

                    <v-card>
                        <v-list>
                            <template v-if="$page.user==null">
                                <v-subheader>Authentication</v-subheader>
                                <v-divider></v-divider>
                                <v-list-item
                                    v-for="item in items"
                                    :key="item.title"
                                    :href="item.route"
                                >
                                    <v-list-item-icon>
                                        <v-icon>{{ item.icon }}</v-icon>
                                    </v-list-item-icon>

                                    <v-list-item-content>
                                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>

                            </template>
                        </v-list>
                    </v-card>
                </v-menu>
            </div>

            <v-app-bar-nav-icon
                class="hidden-md-and-up"
                :class="{'white--text': flat,'black--text': flat}"
                @click="drawer?setDrawer(false):setDrawer(true)"
            ></v-app-bar-nav-icon>
        </v-app-bar>

        <v-btn
            v-scroll="onScroll"
            v-show="fab"
            fab
            dark
            fixed
            bottom
            right
            @click="toTop"
            color="primary"
        >
            <v-icon>mdi-chevron-up</v-icon>
        </v-btn>
    </div>
</template>

<script>
import {mapMutations, mapState} from "vuex";
import logo from '@/../images/logoCircular.png'

export default {
    name: "Header",
    data() {
        return {
            logo: logo,
            fab: false,
            flat: false,
            localApp: false,
            item: 1,
            authenticated: null,
            user: null,
            items: [
                {title: 'Login', icon: 'mdi-account-lock', route: "/login"},
                {title: 'Sign Up', icon: 'mdi-account-plus', route: "/register"},
            ],

        };
    },
    computed: {
        ...mapState(["drawer", "numero", "menu", "links"]),

        desplazamiento() {
            return document.documentElement.clientHeight - 200;
        },
        getRoute() {
            return this.route.path;
        },
    },
    methods: {
        ...mapMutations(["setDrawer", "aumentar"]),
        logout() {

        },
        chainFlat() {
            //console.log('ejecuto chainFlat');
            if (this.route().current('home')) {
                this.flat = true;
            }
        },
        toTop() {
            this.$vuetify.goTo(0);
        },

        onScroll(e) {
            //console.log('ejecuto onScroll');

            if (typeof window === "undefined") return;

            const top = window.pageYOffset || e.target.scrollTop || 0;
            if (top > 50) {
                this.fab = true;
            } else {
                this.fab = false;
            }

            if (this.route().current('home')) {
                if (top > this.desplazamiento) {
                    this.flat = false;
                } else {
                    this.flat = true;
                }
            }
        }
    },
    mounted() {
        this.chainFlat();
    }
};
</script>

<style>
.bgTranparente {
    background-color: transparent !important;
}

.expand-x-transition-enter-active, .fade-enter-active, .fade-leave-active {
    transition: opacity .5s
}

.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
{
    opacity: 0
}

</style>
