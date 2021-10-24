<template>
    <page-layout>
        <v-form @submit.prevent="submit">
            <v-container>
                <v-row>
                    <v-col
                        cols="12"
                        md="4"
                    >
                        <v-text-field
                            v-model="form.name"
                            label="Name"
                            required
                        ></v-text-field>
                    </v-col>

                    <v-col
                        cols="12"
                        md="4"
                    >
                        <v-text-field
                            v-model="form.price"
                            label="Price"
                            prefix="$"
                            required
                        ></v-text-field>
                    </v-col>
                    <v-col>
                        <v-btn @click="submit">registrar</v-btn>
                    </v-col>
                </v-row>
            </v-container>
        </v-form>
    </page-layout>
</template>

<script>
import PageLayout from "@/Layouts/PageLayout";

export default {
    components: {
        PageLayout,
    },
    props: {
        errors: Object,
    },
    data() {
        return {
            form: {
                name: null,
                price: null,
            },
        };
    },
    methods: {
        submit() {
            this.$inertia.post(route('products.store'), this.form);
        },
    },
};
</script>
