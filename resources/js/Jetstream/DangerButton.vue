<template>
    <v-btn :type="type"
           class="error inline-flex items-center justify-center px-4 py-2  rounded-md font-semibold text-xs  uppercase tracking-widest  focus:outline-none    transition ease-in-out duration-150 error red">
        <slot></slot>
    </v-btn>
</template>

<script>
export default {
    props: {
        type: {
            type: String,
            default: 'button',
        },
    }
}
</script>
