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
                        <v-card class="pa-2 secondary--text overline" :href="`#${item.name}`">
                            {{ item.title }}
                        </v-card>
                    </v-col>

                </v-row>
            </v-container>
        </v-sheet>
        <v-sheet class="" v-for="(item,n) in services" :key="item.id" :id="item.name">
            <div class="d-flex flex-column flex-md-row" :class="{'flex-md-row-reverse':n%2===0}">

                <div class="w-full w-md-half d-flex align-center">
                    <div class="pa-6 pa-md-12">

                        <h2 class="text-h3 text-lg-h2">{{ item.title }}</h2>
                        <div class="text-h6 text-lg-h5 mt-4">
                            {{ item.description }}
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores beatae consequuntur
                            dolore eveniet expedita impedit inventore iure iusto maiores maxime, molestiae nihil,
                            provident quae repellat saepe sapiente tempore totam, unde.
                        </div>
                    </div>
                </div>
                <div class="w-full w-md-half">
                    <lightbox :items="item.images" :cells="3"></lightbox>
                </div>
            </div>
        </v-sheet>

        <v-sheet light>
            <v-container class="container py-8">
                <div class="text-center">
                    <div>
                        <div class="text-h3 primary--text">¿Quieres hablar con nosotros?</div>
                        <div class="text-h3 mt-1">Nuestro equipo esta aqui para ayudar.</div>
                    </div>
                    <div class="mt-4">
                        <inertia-link href="/about-us">
                            <v-btn elevated x-large
                                   class="my-1 ">
                                Saber más
                            </v-btn>
                        </inertia-link>
                        <inertia-link href="/contact-us">
                            <v-btn elevated x-large
                                   class="my-1 mx-sm-2  primary">
                                Contactanos
                            </v-btn>
                        </inertia-link>
                    </div>
                </div>
            </v-container>
        </v-sheet>

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
            {name: 'transmision', title: "Transmisión de eventos en vivo o diferido", description: '', images: []},
            {name: 'sonido', title: "Sonido para auditorios y exteriores", description: '', images: []},
            {name: 'montaje', title: "Montaje de todo tipo de evento", description: '', images: []},
            {name: 'pirotecnia', title: "Pirotecnia de escenarios y aéreas", description: '', images: []},
            {name: 'vallas', title: "Vallas de contención de publico", description: '', images: []},
            {name: 'personal', title: "Personal logístico", description: '', images: []},
            {
                name: 'moviliarios',
                title: "Carpas, Sillas, Mesas, Computadores impresoras",
                description: '',
                images: []
            },
            {name: 'filmacion', title: "Filmación en general - Entrevistas", description: '', images: []},
            {name: 'refrigerios', title: "Refrigerios", description: '', images: []},
            {name: 'pantallas', title: "Pantallas", description: '', images: []},
            {name: 'iluminacion', title: "Iluminación", description: '', images: []},
            {name: 'piso-led', title: "Piso led", description: '', src: ''},
            {name: 'escenografia', title: "Escenografías", description: '', images: []},

        ],
        images: [
            "/services/vallas/01.jpg",
            "/services/vallas/02.jpg",
            "/services/vallas/03.jpg",
            "/services/vallas/04.jpg",
            // "https://i.wifegeek.com/200426/f9459c52.jpg",
            // "https://i.wifegeek.com/200426/5ce1e1c7.jpg",
            // "https://i.wifegeek.com/200426/5fa51df3.jpg",
            // "https://i.wifegeek.com/200426/663181fe.jpg",
            // "https://i.wifegeek.com/200426/2d110780.jpg",
            // "https://i.wifegeek.com/200426/e73cd3fa.jpg",
            // "https://i.wifegeek.com/200426/15160d6e.jpg",
            // "https://i.wifegeek.com/200426/d0c881ae.jpg",
            // "https://i.wifegeek.com/200426/a154fc3d.jpg",
            // "https://i.wifegeek.com/200426/71d3aa60.jpg",
            // "https://i.wifegeek.com/200426/d17ce9a0.jpg",
            // "https://i.wifegeek.com/200426/7c4deca9.jpg",
            // "https://i.wifegeek.com/200426/64672676.jpg",
            // "https://i.wifegeek.com/200426/de6ab9c6.jpg",
            // "https://i.wifegeek.com/200426/d8bcb6a7.jpg",
            // "https://i.wifegeek.com/200426/4085d03b.jpg",
            // "https://i.wifegeek.com/200426/177ef44c.jpg",
            // "https://i.wifegeek.com/200426/d74d9040.jpg",
            // "https://i.wifegeek.com/200426/81e24a47.jpg",
            // "https://i.wifegeek.com/200426/43e2e8bb.jpg"
        ],
    }),
    computed: {
        allservices: {
            get() {
                return this.services;
            },
            set(x) {
                this.services = x;
            }
        },
    },
    created() {

        var lista = [];
        for (let i = 0; i < this.services.length; i++) {
            let folder = this.services[i].name;
            console.log(folder)
            axios
                .get(`/services/${folder}`)
                .then(response => {
                    lista = response.data;
                    var images = [];
                    for (let i = 0; i < lista.length; i++) {
                        images.push(`/services/${folder}/${lista[i]}`);
                        console.log(`/services/${folder}/${lista[i]}`)
                    }
                    this.services[i].images = images;
                })
                .catch(error => {
                    console.log(error);
                });
        }

    },
    methods: {
        getImages(folder) {
            var images = [];
            var lista = [];
            console.log(folder)
            axios
                .get(`/services/${folder}`)
                .then(response => {
                    lista = response.data;
                    for (let i = 0; i < lista.length; i++) {
                        images.push(`/storage/${folder}/${lista[i]}`);
                        console.log(`/storage/${folder}/${lista[i]}`)
                    }
                    return images;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
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
