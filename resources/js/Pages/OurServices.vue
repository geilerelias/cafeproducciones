<template>
    <page-layout>
        <v-sheet>
            <v-container class="pt-6">


                <div class="text-center mb-6">
                    <div class="d-inline-flex mb-4">
                        <v-avatar class="primary"
                                  size="56">
                            <v-icon dark
                                    size="28">
                                mdi-face-agent
                            </v-icon>
                        </v-avatar>
                    </div>
                    <h1 class="text-uppercase text-h5 font-weight-bold mb-2 text-center">
                        Nuestros Servicios
                    </h1>
                    <v-responsive class="primary mx-auto mb-6" style="max-width: 28px;">
                        <v-divider role="separator" aria-orientation="horizontal" class=" theme--light"/>
                    </v-responsive>
                </div>

                <v-row dense>
                    <v-col v-for="item in services" :key="item.id"
                           class="col-md-6 col-lg-3 col-12">
                        <v-card class="pa-2 secondary--text overline ">
                            {{item.name}}
                        </v-card>
                    </v-col>

                </v-row>
            </v-container>
        </v-sheet>

        <v-sheet dark class="">
            <div class="d-flex flex-column flex-md-row">
                <div class="w-full w-md-half d-flex align-center">
                    <div class="pa-6 pa-md-12">
                        <div class="text-uppercase font-weight-bold body-2 primary--text mb-2">
                            Work with us
                        </div>
                        <h2 class="text-h3 text-lg-h2">Get your startup ready for business</h2>
                        <div class="text-h6 text-lg-h5 mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Natus impedit error labore doloremque fugit! Dolor fugit molestiae vero quos quisquam nobis,
                            eos debitis magni omnis ea incidunt amet voluptate dignissimos!
                        </div>
                        <div class="mt-7">
                            <v-btn outlined tile dark large class="">
                                Get in touch
                            </v-btn>
                        </div>
                    </div>
                </div>
                <div class="w-full w-md-half">
                    <lightbox :items="images" :cells="3"></lightbox>
                </div>
            </div>
        </v-sheet>

        <v-sheet dark class="">
            <div class="d-flex flex-column flex-md-row flex-md-row-reverse">
                <div class="w-full w-md-half d-flex align-center">
                    <div class="pa-6 pa-md-12">
                        <div class="text-uppercase font-weight-bold body-2 primary--text mb-2">
                            Work with us
                        </div>
                        <h2 class="text-h3 text-lg-h2">Get your startup ready for business</h2>
                        <div class="text-h6 text-lg-h5 mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Natus impedit error labore doloremque fugit! Dolor fugit molestiae vero quos quisquam nobis,
                            eos debitis magni omnis ea incidunt amet voluptate dignissimos!
                        </div>
                        <div class="mt-7">
                            <v-btn outlined tile dark large class="">
                                Get in touch
                            </v-btn>
                        </div>
                    </div>
                </div>
                <div class="w-full w-md-half">
                    <lightbox :items="images"></lightbox>
                </div>
            </div>
        </v-sheet>

        <div class="v-sheet theme--light">
            <div class="container py-8">
                <div class="text-center">
                    <div>
                        <div class="text-h3 primary--text">Ready to talk?</div>
                        <div class="text-h3 mt-1">Our team is here to help.</div>
                    </div>
                    <div class="mt-4"><a href="/ui/examples/landing/landing1#"
                                         class="my-1 w-full w-sm-auto v-btn v-btn--is-elevated v-btn--has-bg v-btn--router theme--light v-size--x-large"><span
                        class="v-btn__content">Learn More</span>
                    </a>
                        <a href="/ui/examples/landing/landing1#"
                           class="my-1 mx-sm-2 w-full w-sm-auto v-btn v-btn--is-elevated v-btn--has-bg v-btn--router theme--light v-size--x-large primary">
                        <span
                            class="v-btn__content">Contact Sales</span>
                        </a>
                    </div>
                    <div class="mt-3"><a href="/ui/examples/landing/landing1#" class="">Get started now with a FREE
                        trial</a></div>
                </div>
            </div>
        </div>
    </page-layout>
</template>

<script>
import PageLayout from "@/Layouts/PageLayout";
import Lightbox from "@/components/Lightbox";

export default {
    name: "OurServices",
    components: {
        PageLayout,
        Lightbox
    },
    data: () => ({
        services: [
            {name: "Transmisión de eventos en vivo o diferido", description: '', src: ''},
            {name: "Sonido para auditorios y exteriores", description: '', src: ''},
            {name: "Montaje de todo tipo de evento", description: '', src: ''},
            {name: "Pirotecnia de escenarios y aéreas", description: '', src: ''},
            {name: "Vallas de contención de publico", description: '', src: ''},
            {name: "Personal logístico", description: '', src: ''},
            {name: "Carpas, Sillas, Mesas, Computadores impresoras", description: '', src: ''},
            {name: "Filmación en general - Entrevistas", description: '', src: ''},
            {name: "Refrigerios", description: '', src: ''},
            {name: "Pantallas", description: '', src: ''},
            {name: "Iluminación", description: '', src: ''},
            {name: "Piso led", description: '', src: ''},
            {name: "Escenografías", description: '', src: ''},
        ],
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
    })
}
</script>

<style>
@media (min-width: 960px) {
    .v-application .w-md-half {
        width: 50% !important;
    }
}

.w-full {
    width: 100% !important;
}
</style>
