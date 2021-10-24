<template>
    <app-layout>
        <bread-crumbs name="Servicios" :items="items"></bread-crumbs>
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
                text: 'Servicios',
                disabled: true,
                href: '/services',
            },
        ],
    })
}
</script>
