<template>
    <app-layout>
        <bread-crumbs name="Noticias" :items="items"></bread-crumbs>
        <v-container>
            <div class="hello">
                {{ msg }}
            </div>
        </v-container>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import BreadCrumbs from "@/components/BreadCrumbs";

export default {
    components: {
        AppLayout,
        BreadCrumbs,
    },
    data: () => ({
        msg: 'One',
        items: [
            {
                text: 'Dashboard',
                disabled: false,
                href: '/dashboard',
            },
            {
                text: 'Noticias',
                disabled: true,
                href: '/notices',
            },
        ],
    }),
    mounted() {
        this.msg = 'Two';

        this.$nextTick(() => {
            this.msg = 'Three';
        });
    }
}
</script>
