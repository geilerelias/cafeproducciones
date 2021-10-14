<template>
    <page-layout>

        <section style="margin-top: -64px;">
            <v-sheet>
                <v-img :src="bg6"
                       gradient="to top, rgba(13, 3, 29, 0.85), rgba(25, 25, 38, 0.85)"
                       :height="'90vh'">
                    <div class=" fill-height">
                        <v-responsive class="d-flex align-end  fill-height"
                                      style="height: 100%; width: 100%;">
                            <v-row class="align-end"
                                   style="height: 100%; width: 100%; margin: 0px !important;padding: 0px !important;">
                                <v-col class="col-12 d-flex align-end flex-column pt-12"
                                       style="margin: 0px !important;padding: 0px !important;">
                                    <v-container class="px-5 pt-12 mt-12 d-flex align-center justify-center">

                                        <v-row class="align-end align-bottom">
                                            <v-col class="col-md-6 col-12">
                                                <p :class="$vuetify.breakpoint.smAndDown?'display-1':'display-2'"
                                                   class="mb-4 text-left white--text">
                                                    CaFe Producciones
                                                </p>
                                                <p class="title font-weight-light mb-4 text-left white--text ">

                                                    Somos tu empresa de producción,
                                                    planificación y acompañamiento
                                                    <span class="font-weight-bold">
                                                        para todo tipo evento
                                                    </span>
                                                </p>
                                                <inertia-link :href="route('about-us')">
                                                    <v-btn class="primary--text font-weight-bold  mr-4 mb-1  white"
                                                           contained dark
                                                           outlined
                                                           rounded style="height: 50px;">
                                                        saber más
                                                    </v-btn>
                                                </inertia-link>
                                                <inertia-link :href="route('contact-us')">
                                                    <v-btn
                                                        class="font-weight-bold  mr-4 mb-1  v-btn--depressed white--text"
                                                        dark
                                                        outlined
                                                        rounded
                                                        style="height: 50px;">
                                                        Contáctenos
                                                    </v-btn>
                                                </inertia-link>
                                            </v-col>

                                        </v-row>

                                    </v-container>
                                    <svg style="height: 100% !important; width:100% !important;"
                                         viewBox="0 0 1428 174"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                            <g fill="#FFFFFF" fill-rule="nonzero"
                                               transform="translate(-2.000000, 44.000000)">
                                                <path
                                                    d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                                                    opacity="0.100000001"></path>
                                                <path
                                                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                                                    opacity="0.100000001"></path>
                                                <path id="Path-4"
                                                      d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                                                      opacity="0.200000003"></path>
                                            </g>
                                            <g fill="#FFFFFF" fill-rule="nonzero"
                                               transform="translate(-4.000000, 76.000000)">
                                                <path
                                                    d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </v-col>
                            </v-row>
                        </v-responsive>
                    </div>
                </v-img>
            </v-sheet>

            <div class="text-center mb-12">

                <div class="d-inline-flex mb-4">
                    <v-avatar size="56" class="primary">
                        <v-avatar size="50" class="white">
                            <v-img contain :src="logo"></v-img>
                        </v-avatar>
                    </v-avatar>
                </div>

                <h1 class="text-h5 font-weight-bold mb-2 text-center">
                    Bienvenidos
                </h1>

                <div class="v-responsive base-divider primary mx-auto mb-6" style="max-width: 28px;">
                    <v-divider style="padding-bottom: 1px"></v-divider>
                </div>

            </div>

            <v-container>
                Somos una empresa dedicada a la asesoría, producción y logística de
                todo tipo de evento, con alta experiencia a nivel Nacional, ofreciéndole gran calidad, inspección y
                extremado profesionalismo con más de 5 años de experiencia en el Área.

                Disponemos de todo tipo de mobiliario
                le ofrecemos todo tipo de decoración, tipos de escenarios, centros de mesa, montajes de Stands entre
                otros.

                Poseemos todo lo concerniente al entretenimiento de su evento.
                tenemos los dispositivos tecnológicos para Audio, Sonido y Luces de todo tipo.

            </v-container>
        </section>


        <v-container class="white mt-12">
            <section>
                <h1 class="text-h5 font-weight-bold mb-2">
                    Nuestras principales características
                </h1>

                <div class="v-responsive base-divider primary  mb-6" style="max-width: 28px;">
                    <v-divider style="padding-bottom: 1px"></v-divider>
                </div>

                <v-container class="pt-5 px-0 mb-12">
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
                </v-container>
            </section>
        </v-container>

        <team-component></team-component>


        <v-sheet light class="rounded-0" style="padding: 96px 0px;">
            <div class="base-section-heading text-center mb-12">
                <h1 class="text-uppercase text-h5 font-weight-bold mb-2 text-center">
                    Últimas noticias
                </h1>

                <v-responsive class="primary mx-auto mb-6" style="max-width: 28px;">
                    <v-divider light class=""/>
                </v-responsive>

                <p class="text-body-1 mx-auto grey--text text--darken-1 text-center mb-10"
                   style="max-width: 700px;">
                    estas son algunas de noticias de nuestros ultimos acontecimientos.
                </p></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div><a href="/news/lorem-ipsum-dolor-sit-amet-consectetur" class="d-block">
                            <div class="v-image v-responsive theme--light" flat="" tile="" height="250"
                                 src="/img/article-1.bfc29386.jpg" style="height: 250px;">
                                <div class="v-responsive__sizer" style="padding-bottom: 66.5625%;"></div>
                                <div class="v-image__image v-image__image--cover"
                                     style="background-image: url(&quot;https://zero-theme-pro.vuetifyjs.com/img/article-1.bfc29386.jpg&quot;); background-position: center center;"></div>
                                <div class="v-responsive__content" style="width: 640px;">
                                    <div class="row ma-0 fill-height align-end justify-end">
                                        <div
                                            class="pa-2 d-inline-flex align-center justify-center v-sheet theme--dark rounded-0 primary"
                                            style="height: 40px; width: 40px;"><i aria-hidden="true"
                                                                                  class="v-icon notranslate mdi mdi-image theme--dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                            <div class="d-flex v-sheet theme--dark rounded-0" style="max-width: 100%;">
                                <div class="grow pa-2 body-2">
                                    <div class="d-flex align-center fill-height"><span class="px-2">Jan 12, 2020</span>
                                        / <span class="px-2">Design</span> / <span class="px-2">5 Comments</span></div>
                                </div>
                            </div>
                            <div class="pa-4"><h3
                                class="text-truncate text-uppercase text-h6 font-weight-bold mb-4 text-left"> Lorem
                                ipsum dolor, sit amet consectetur </h3>
                                <p class="base-body text-body-1 grey--text text--darken-1 text-left mb-0">
                                <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, nulla voluptas
                                    sed[...]
                                </div>
                                </p></div><!----><!----></div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div><a href="/news/lorem-ipsum-dolor-sit-amet-consectetur" class="d-block">
                            <div class="v-image v-responsive theme--light" flat="" tile="" height="250"
                                 src="/img/article-2.48ca80f7.jpg" style="height: 250px;">
                                <div class="v-responsive__sizer" style="padding-bottom: 66.0938%;"></div>
                                <div class="v-image__image v-image__image--cover"
                                     style="background-image: url(&quot;https://zero-theme-pro.vuetifyjs.com/img/article-2.48ca80f7.jpg&quot;); background-position: center center;"></div>
                                <div class="v-responsive__content" style="width: 640px;">
                                    <div class="row ma-0 fill-height align-end justify-end">
                                        <div
                                            class="pa-2 d-inline-flex align-center justify-center v-sheet theme--dark rounded-0 primary"
                                            style="height: 40px; width: 40px;"><i aria-hidden="true"
                                                                                  class="v-icon notranslate mdi mdi-play theme--dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                            <div class="d-flex v-sheet theme--dark rounded-0" style="max-width: 100%;">
                                <div class="grow pa-2 body-2">
                                    <div class="d-flex align-center fill-height"><span class="px-2">Oct 19, 2019</span>
                                        / <span class="px-2">Strategy</span> / <span class="px-2">8 Comments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pa-4"><h3
                                class="text-truncate text-uppercase text-h6 font-weight-bold mb-4 text-left"> Lorem
                                ipsum dolor, sit amet consectetur </h3>
                                <p class="base-body text-body-1 grey--text text--darken-1 text-left mb-0">
                                <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, nulla voluptas
                                    sed[...]
                                </div>
                                </p></div><!----><!----></div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div><a href="/news/lorem-ipsum-dolor-sit-amet-consectetur" class="d-block">
                            <div class="v-image v-responsive theme--light" flat="" tile="" height="250"
                                 src="/img/article-3.31c0885e.jpg" style="height: 250px;">
                                <div class="v-responsive__sizer" style="padding-bottom: 66.7188%;"></div>
                                <div class="v-image__image v-image__image--cover"
                                     style="background-image: url(&quot;https://zero-theme-pro.vuetifyjs.com/img/article-3.31c0885e.jpg&quot;); background-position: center center;"></div>
                                <div class="v-responsive__content" style="width: 640px;">
                                    <div class="row ma-0 fill-height align-end justify-end">
                                        <div
                                            class="pa-2 d-inline-flex align-center justify-center v-sheet theme--dark rounded-0 primary"
                                            style="height: 40px; width: 40px;"><i aria-hidden="true"
                                                                                  class="v-icon notranslate mdi mdi-text theme--dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                            <div class="d-flex v-sheet theme--dark rounded-0" style="max-width: 100%;">
                                <div class="grow pa-2 body-2">
                                    <div class="d-flex align-center fill-height"><span class="px-2">Jul 24, 2019</span>
                                        / <span class="px-2">Business</span> / <span class="px-2">13 Comments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pa-4"><h3
                                class="text-truncate text-uppercase text-h6 font-weight-bold mb-4 text-left"> Lorem
                                ipsum dolor, sit amet consectetur </h3>
                                <p class="base-body text-body-1 grey--text text--darken-1 text-left mb-0">
                                <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, nulla voluptas
                                    sed[...]
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </v-sheet>
    </page-layout>
</template>

<script>
import bg6 from '@/../images/bg/6.jpg';
import logo from '@/../images/logoCircular.png'
import team from '@/../images/IMG-20210703-WA0006.jpg'
import PageLayout from "@/Layouts/PageLayout";
import TeamComponent from "@/components/TeamComponent";

export default {
    name: "AppBar",
    components: {
        PageLayout,
        TeamComponent
    },
    data: () => ({
        bg6: bg6,
        logo: logo,
        team: team,
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

<style scoped>

</style>
