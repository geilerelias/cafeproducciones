<template>
    <app-layout>
        <bread-crumbs name="Noticias" :items="items"></bread-crumbs>
        <v-container>

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
    })
}
</script>
