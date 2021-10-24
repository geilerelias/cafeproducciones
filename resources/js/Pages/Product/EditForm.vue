<template>
    <app-layout>
        <form @submit.prevent="submit">
            <div>
                <label for="name">Nombre:</label>
                <input id="name" v-model="form.name"/>
                <div v-if="errors.name">El Nombre es Requerido</div>
            </div>
            <div>
                <label for="price">Precio:</label>
                <input id="price" v-model="form.price"/>
                <div v-if="errors.price">El Precio es Requerido</div>
            </div>
            <button type="submit"> Añadir</button>
        </form>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/PageLayout";

export default {
    components: {
        AppLayout,
    },
    props: ['data', 'errors','product'],
    data() {
        return {
            form: {
                name: this.$props.product.name,
                price: this.$props.product.price,
            },
        };
    },
    methods: {
        submit() {
            this.$inertia.put(
                route("products.update", this.$props.product.id),
                this.form
            );
        },
    },
};
</script>
