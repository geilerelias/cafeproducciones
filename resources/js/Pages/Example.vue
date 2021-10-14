<template>
    <v-app>
        example

        <gallery cells="4" :items="images"></gallery>
        <v-row>
            <v-col
                v-for="n in 9"
                :key="n"
                class="d-flex child-flex"
                cols="4"
            >
                <v-img
                    :src="`https://picsum.photos/500/300?image=${n * 5 + 10}`"
                    :lazy-src="`https://picsum.photos/10/6?image=${n * 5 + 10}`"
                    aspect-ratio="1"
                    class="grey lighten-2"
                >
                    <template v-slot:placeholder>
                        <v-row
                            class="fill-height ma-0"
                            align="center"
                            justify="center"
                        >
                            <v-progress-circular
                                indeterminate
                                color="grey lighten-5"
                            ></v-progress-circular>
                        </v-row>
                    </template>
                </v-img>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols="3">

            </v-col>
        </v-row>

    </v-app>
</template>

<script>
import gallery from '@/components/ImageGallery'

export default {
    name: "Example",
    components: {
        gallery,

    },
    data: () => ({
        images: [
            "https://i.wifegeek.com/200426/f9459c52.jpg",
            "https://i.wifegeek.com/200426/5ce1e1c7.jpg",
            "https://i.wifegeek.com/200426/5fa51df3.jpg",
            "https://i.wifegeek.com/200426/663181fe.jpg",
            "https://i.wifegeek.com/200426/2d110780.jpg",
            "https://i.wifegeek.com/200426/e73cd3fa.jpg",
            "https://i.wifegeek.com/200426/15160d6e.jpg",
            "https://i.wifegeek.com/200426/d0c881ae.jpg",
            "https://i.wifegeek.com/200426/a154fc3d.jpg",
            "https://i.wifegeek.com/200426/71d3aa60.jpg",
            "https://i.wifegeek.com/200426/d17ce9a0.jpg",
            "https://i.wifegeek.com/200426/7c4deca9.jpg",
            "https://i.wifegeek.com/200426/64672676.jpg",
            "https://i.wifegeek.com/200426/de6ab9c6.jpg",
            "https://i.wifegeek.com/200426/d8bcb6a7.jpg",
            "https://i.wifegeek.com/200426/4085d03b.jpg",
            "https://i.wifegeek.com/200426/177ef44c.jpg",
            "https://i.wifegeek.com/200426/d74d9040.jpg",
            "https://i.wifegeek.com/200426/81e24a47.jpg",
            "https://i.wifegeek.com/200426/43e2e8bb.jpg"

        ],
    }),
}
</script>

<style scoped>

</style>
