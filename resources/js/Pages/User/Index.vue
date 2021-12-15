<template>
    <app-layout>
        <bread-crumbs name="Users" :items="items"></bread-crumbs>

        <v-container class="d-flex justify-center">
            <div>
                <v-data-table
                    v-model="selectedUser"
                    :headers="headers"
                    :items="data"
                    sort-by="name"
                    :search="search"
                    class="elevation-1"
                    single-select
                    single-expand
                    show-select
                    show-expand
                >
                    <template v-slot:top>
                        <v-toolbar
                            flat
                        >
                            <v-text-field
                                class="mr-3"
                                v-model="search"
                                append-icon="mdi-magnify"
                                label="Search"
                                single-line
                                hide-details
                            ></v-text-field>
                            <v-divider
                                class="mx-4"
                                inset
                                vertical
                            ></v-divider>
                            <v-spacer></v-spacer>
                            <inertia-link :href="route('user.create')">
                                <v-btn
                                    color="primary"
                                    dark
                                    class="mb-2"
                                >
                                    New Item
                                </v-btn>
                            </inertia-link>
                        </v-toolbar>
                    </template>

                    <template v-slot:item.profile_photo_url="{ item }">
                        <div class="d-flex align-center py-4">
                            <v-btn
                                fab
                                dark
                                text
                                small
                            >
                                <v-img style="max-height: 35px;max-width: 35px" class="rounded-circle" cover
                                       :src="item.profile_photo_url"
                                       :alt="item.name"></v-img>
                            </v-btn>
                        </div>
                    </template>
                </v-data-table>
            </div>
        </v-container>

    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import BreadCrumbs from "@/components/BreadCrumbs";

export default {
    name: "User",
    components: {
        AppLayout,
        BreadCrumbs,
    },
    props: ['data', 'errors'],
    data: () => ({
        headers: [
            {text: 'Photo', value: 'profile_photo_url'},
            {text: 'Name', value: 'name'},
            {text: 'Email', value: 'email'},
            //{text: 'Actions', value: 'actions', sortable: false},
        ],
        search: '',
        items: [
            {
                text: 'Dashboard',
                disabled: false,
                href: '/dashboard',
            },
            {
                text: 'Users',
                disabled: true,
                href: '/user',
            },
        ],
        selectedUser: []
    })
}
</script>

<style scoped>

</style>
