<template>
    <app-layout>
        <bread-crumbs name="Person" :items="items"></bread-crumbs>
        <v-container fluid class="">
            <v-row class="ma-0">
                <v-card class="ma-1" style="width: 100%;">
                    <v-card-text class="">
                        <v-row class=" no-gutters">
                            <div class="d-flex justify-space-between justify-md-start col-md-6 col-12">
                                <inertia-link :href="route('person.create')">
                                    <v-btn
                                        class="mr-3 success">
                                        <v-icon class="notranslate mr-2">
                                            mdi-plus
                                        </v-icon>
                                        Add
                                    </v-btn>
                                </inertia-link>

                                <v-btn outlined
                                       class="button-shadow primary--text">
                                    <v-icon aria-hidden="true"
                                            class="notranslate mr-2">
                                        mdi-filter-variant
                                    </v-icon>
                                    Filters
                                </v-btn>
                            </div>
                            <v-spacer></v-spacer>

                            <div style="max-width: 250px;" class="mx-auto mt-4 mt-md-0">
                                <v-text-field hide-details dense enclosed outlined
                                              append-icon="mdi-magnify"
                                              placeholder="search"
                                              v-model="search"
                                ></v-text-field>
                            </div>
                        </v-row>
                    </v-card-text>
                </v-card>
            </v-row>

            <v-row class="ma-0">
                <v-card class="ma-1" style="width: 100%;">
                    <v-card-text class="">
                        <v-data-table
                            v-model="selectedUser"
                            :headers="headers"
                            :items="data"
                            sort-by="name"
                            :search="search"
                            single-select
                            show-select
                        >
                            <template v-slot:item.status="{ item }">
                                <div class="text-center">
                                    <v-menu
                                        :close-on-content-click="false"
                                        :nudge-width="200"
                                        offset-x
                                    >
                                        <template v-slot:activator="{ on, attrs }">
                                            <v-chip :ripple="false"
                                                    :color="item.status=='inactive'?'':'success'"
                                                    v-bind="attrs"
                                                    v-on="on">
                                                {{ item.status }}
                                            </v-chip>
                                        </template>

                                        <v-card>
                                            <v-list>
                                                <v-list-item>
                                                    <v-list-item-content>
                                                        <v-list-item-title>
                                                            {{ item.first_name }} {{ item.last_name }}
                                                        </v-list-item-title>
                                                        <v-list-item-subtitle>
                                                            {{ item.email }}
                                                        </v-list-item-subtitle>
                                                    </v-list-item-content>
                                                </v-list-item>
                                            </v-list>

                                            <v-divider></v-divider>

                                            <v-list>
                                                <v-list-item>
                                                    <v-list-item-action>
                                                        <v-switch
                                                            v-model="message"
                                                            color="purple"
                                                        ></v-switch>
                                                    </v-list-item-action>
                                                    <v-list-item-title>Enable messages</v-list-item-title>
                                                </v-list-item>

                                                <v-list-item>
                                                    <v-list-item-action>
                                                        <v-switch
                                                            v-model="hints"
                                                            color="purple"
                                                        ></v-switch>
                                                    </v-list-item-action>
                                                    <v-list-item-title>Enable hints</v-list-item-title>
                                                </v-list-item>
                                            </v-list>

                                            <v-card-actions>
                                                <v-spacer></v-spacer>

                                                <v-btn
                                                    text
                                                    v-bind="attrs"
                                                    v-value="false"
                                                >
                                                    Cancel
                                                </v-btn>
                                                <v-btn
                                                    color="primary"
                                                    text
                                                    @click="menu = false"
                                                >
                                                    Save
                                                </v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-menu>
                                </div>
                            </template>

                            <template v-slot:item.actions="{ item }">
                                <div class="d-flex align-center py-4">
                                    <inertia-link :href="route('person.edit', item.id)">
                                        <v-btn icon
                                               class="primary--text">
                                            <v-icon>
                                                mdi-pencil-outline
                                            </v-icon>
                                        </v-btn>
                                    </inertia-link>
                                    <v-btn icon
                                           class="primary--text">
                                        <v-icon>
                                            mdi-information-outline
                                        </v-icon>
                                    </v-btn>
                                    <v-btn icon
                                           @click="deleteItem(item)"
                                           class="primary--text">
                                        <v-icon>
                                            mdi-delete-outline
                                        </v-icon>
                                    </v-btn>
                                </div>
                            </template>
                        </v-data-table>
                    </v-card-text>
                </v-card>
            </v-row>
        </v-container>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import BreadCrumbs from "@/components/BreadCrumbs";

export default {
    name: "Index",
    components: {
        AppLayout,
        BreadCrumbs,
    },
    props: ['data', 'errors', 'message'],
    data: () => ({
        fav: true,
        menu: false,
        message: false,
        hints: true,


        headers: [
            {text: 'First Name', value: 'first_name'},
            {text: 'Last Name', value: 'last_name'},
            {text: 'Type', value: 'type'},
            {text: 'Email', value: 'email'},
            {text: 'Phone', value: 'phone'},
            {text: 'Status', value: 'status'},
            {text: 'Actions', value: 'actions', sortable: false},
        ],
        search: '',
        selectedUser: [],
        items: [
            {
                text: 'Dashboard',
                disabled: false,
                href: '/dashboard',
            },
            {
                text: 'Person',
                disabled: true,
                href: '/person',
            },

        ],
    }),
    methods: {
        deleteItem(item) {
            item._method = 'DELETE';
            this.$swal({
                title: 'Are you sure you want to delete this item?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.$inertia.delete(route('person.destroy', item.id), {
                        onSuccess: (page) => {
                            this.$swal(
                                'Deleted!',
                                'Your item has been deleted.',
                                'success'
                            )
                        },
                        onError: (errors) => {
                            this.$swal(
                                'Opps...!',
                                'Excuse me, an error occurred.',
                                'warning'
                            )
                        }
                    })
                    this.$nextTick(() => {
                        this.editedItem = Object.assign({}, this.defaultItem)
                        this.editedIndex = -1
                    })
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
