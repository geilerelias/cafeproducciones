<template>
    <app-layout>
        <bread-crumbs name="Gallery" :items="items"></bread-crumbs>
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
                text: 'Galeria',
                disabled: true,
                href: '/gallery',
            },
        ],
    })
}
</script>
