<template>
    <page-layout>

        <section>
            <v-sheet light class="transparent pb-6">
                <div class="py-2">
                    <div class="text-center my-2">
                        <div class="d-inline-flex mb-4">
                            <v-avatar class="primary"
                                      size="56">
                                <v-icon dark
                                        size="28">
                                    mdi-account-question-outline
                                </v-icon>
                            </v-avatar>
                        </div>
                        <h1 class="text-uppercase text-h5 font-weight-bold mb-2 text-center">
                            ¿Quienes somos?
                        </h1>
                        <v-responsive class="primary mx-auto mb-2" style="max-width: 28px;">
                            <v-divider role="separator" aria-orientation="horizontal" class=" theme--light"/>
                        </v-responsive>
                    </div>
                    <v-container>
                        <v-sheet class="theme--light">
                            <div class="d-flex flex-column flex-md-row">
                                <div class="w-full w-md-half d-flex align-center">
                                    <div class="pr-6 pr-md-12">
                                        <h1 class="text-h6 text-lg-h5 font-weight-bold mt-xl-4">
                                            Una mejor
                                            forma para construir su próximo
                                            <span class="primary--text">evento</span>
                                        </h1>
                                        <div class=" text-lg-h6 mt-5 text-justify">
                                            Somos tu empresa de acompañamiento en la logística de sus eventos, CaFe
                                            producciones
                                            Ofrece
                                            nuestro portafolio de servicios para cubrir sus necesidades a nivel Local,
                                            Regional y Nacional.
                                        </div>
                                        <div class="my-4">
                                            <inertia-link href="/contact-us"
                                                          class="text-decoration-none font-weight-bold text-h6 mt-3">
                                                Contactanos
                                            </inertia-link>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full w-md-half">
                                    <v-img :src="gifCafe" cover class="rounded-lg"
                                           style="max-height: 60vh;">
                                    </v-img>
                                </div>
                            </div>
                        </v-sheet>
                    </v-container>
                </div>
            </v-sheet>
        </section>
        <section>
            <v-sheet class="primary  py-6">
                <v-container class="py-4 py-lg-8">
                    <div>
                        <v-row>
                            <v-col class="col-lg-6 col-12">
                                <div class="mb-6">
                                    <h1 class="text-h5 font-weight-bold mb-2 white--text">
                                        Misión
                                    </h1>
                                    <v-responsive class="white mb-2" style="max-width: 28px;">
                                        <v-divider role="separator" aria-orientation="horizontal"
                                                   class=" theme--light"/>
                                    </v-responsive>
                                </div>
                                <div class="text-lg-h6 mt-5 white--text">
                                    Brindar a todos nuestros clientes una experiencia única e innovadora en cada uno
                                    de
                                    sus
                                    eventos, ofreciendo el más alto nivel de excelencia y calidad en nuestros
                                    servicios.
                                </div>
                            </v-col>

                            <v-col class="col-lg-6 col-12">
                                <div class="mb-6">
                                    <h1 class="text-h5 font-weight-bold mb-2 white--text">
                                        Visión
                                    </h1>
                                    <v-responsive class="white  mb-2" style="max-width: 28px;">
                                        <v-divider role="separator" aria-orientation="horizontal"
                                                   class=" theme--light"/>
                                    </v-responsive>
                                </div>
                                <div class=" text-lg-h6 mt-5 white--text">
                                    Ser la empresa líder en el mercado de producción y logística para todo tipo
                                    eventos.
                                </div>
                            </v-col>


                        </v-row>
                    </div>
                </v-container>
            </v-sheet>
            <v-sheet class="lighten-4">

                <v-container class=" gray py-4 py-lg-8">
                    <div class="mt-12">
                        <h1 class="text-h5 font-weight-bold mb-2">
                            Nuestras principales características
                        </h1>

                        <div class="v-responsive base-divider primary  mb-6" style="max-width: 28px;">
                            <v-divider style="padding-bottom: 1px"></v-divider>
                        </div>


                        <v-row>
                            <v-col class="col-md-6 col-12" v-for="item in features" :key="item.id">
                                <v-row class="row pa-0 ma-0 text-center text-sm-left justify-center">
                                    <v-col class="col">
                                        <v-icon size="56" :class="`${item.color}--text`">
                                            {{ item.icon }}
                                        </v-icon>
                                    </v-col>

                                    <v-col class="col-md-10 col-12">
                                        <h3
                                            class="title font-weight-regular mb-3 mt-2">
                                            {{ item.name }}
                                        </h3>
                                        <p class="body-1 font-weight-light">
                                            {{ item.description }}
                                        </p>
                                    </v-col>
                                </v-row>
                            </v-col>
                        </v-row>
                    </div>
                </v-container>
            </v-sheet>
        </section>
        <team-component></team-component>

    </page-layout>
</template>

<script>
import PageLayout from '@/Layouts/PageLayout'
import TeamComponent from "@/components/TeamComponent";
import bg6 from "../../images/bg/6.jpg";
import logo from "../../images/logoCircular.png";
import team from "../../images/IMG-20210703-WA0006.jpg";
import gifCafe from '@/../videos/vid-cafe.gif';
import abs from '../../images/splinters/abs-footer-red.png'
// import abs from '../../images/splinters/footer-topper.png'
// import abs from '../../images/splinters/footer-swish-red.png'
// import abs from '../../images/splinters/footer-curve.png'
// import abs from '../../images/splinters/footer-bg.png'


export default {
    name: "AboutUs",

    components: {
        PageLayout,
        TeamComponent
    },
    data: () => ({
        // videocafe: videocafe,
        gifCafe: gifCafe,
        abs: abs,
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

        features: [
            {
                color: 'indigo',
                name: 'Dedicados',
                icon: 'mdi-puzzle-heart-outline',
                description:
                    'La pasión por lo que hacemos es lo que nos mantiene motivado ' +
                    'para realizar con dedicación nuestro trabajo'
            }, {
                color: 'teal',
                name: 'Precavidos',
                icon: 'mdi-sign-caution',
                description:
                    'Como empresa siempre tenemos un plan A, B, C… ' +
                    'La improvisación no suele dar buenos resultados.'
            }, {
                color: 'cyan',
                name: 'Detallistas',
                icon: 'mdi-code-tags-check',
                description:
                    'Cuidamos los detalles. Supervisamos las necesidades que ' +
                    'puedan tener los asistentes antes y durante la celebración del evento.'
            }, {
                color: 'green',
                name: 'Innovador',
                icon: 'mdi-responsive',
                description: 'la tecnología hace parte de nuestro éxito. ' +
                    'Es imprescindible y un elemento diferenciador que dejará ' +
                    'un recuerdo satisfactorio del evento.'
            }, {
                color: 'orange',
                name: 'Organizados',
                icon: 'mdi-order-bool-ascending-variant',
                description:
                    'La anticipación y correcta gestión del tiempo es nuestra prioridad.'
            }, {
                color: 'pink',
                name: 'Personalizable',
                icon: 'mdi-cogs',
                description:
                    'La colaboración con el cliente sobre negociación contractual.'
            },
        ],
    })
}
</script>

<style>
.logos-bg {
    fill: whitesmoke;
}
</style>
