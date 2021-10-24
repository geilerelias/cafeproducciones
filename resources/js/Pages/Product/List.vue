<template>
    <page-layout>
        <v-container>
            <v-data-table
                :headers="headers"
                :items="products"
                class="elevation-1"
            >
                <template v-slot:top>
                    <v-toolbar
                        flat
                    >
                        <v-toolbar-title>Products</v-toolbar-title>
                        <v-divider
                            class="mx-4"
                            inset
                            vertical
                        ></v-divider>
                        <v-spacer></v-spacer>
                        <inertia-link :href="route('products.create')">
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
                <template v-slot:item.actions="{ item }">
                    <inertia-link :href="route('products.edit', item.id)">
                        <v-icon
                            small
                            class="mr-2"
                        >
                            mdi-pencil
                        </v-icon>
                    </inertia-link>
                    <inertia-link
                        method="delete"
                        :href="route('products.destroy', item.id)">
                        <v-icon
                            small
                        >
                            mdi-delete
                        </v-icon>
                    </inertia-link>
                </template>
                <template v-slot:no-data>
                    <v-btn
                        color="primary"
                    >
                        Reset
                    </v-btn>
                </template>
            </v-data-table>
        </v-container>
    </page-layout>
</template>

<script>
import PageLayout from "@/Layouts/PageLayout";

export default {
    props: {
        products: Array,
    },
    components: {
        PageLayout,
    },
    data: () => ({
        items: null,
        headers: [
            {
                text: 'Producto',
                align: 'start',
                value: 'name',
            },
            {text: 'Precio ', value: 'price'},
            {text: 'Actions', value: 'actions', sortable: false},
        ],
    }),


};
</script>
