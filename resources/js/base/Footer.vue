<template>
    <div>
        <svg data-v-49310640="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1442 163" class="logos-bg">
            <path data-v-49310640=""
                  d="m-3.90909,6l48.30303,16c48.30303,16 144.90908,48 241.51514,48c96.60606,0 193.21211,-32 289.81817,-32c96.60606,0 193.21211,32 289.81817,53.3c96.60606,21.7 193.21211,31.7 289.81817,16c96.60606,-16.3 193.21211,-58.3 241.51514,-80l48.30303,-21.3l0,160l-48.30303,0c-48.30303,0 -144.90908,0 -241.51514,0c-96.60606,0 -193.21211,0 -289.81817,0c-96.60606,0 -193.21211,0 -289.81817,0c-96.60606,0 -193.21211,0 -289.81817,0c-96.60606,0 -193.21211,0 -241.51514,0l-48.30303,0l0,-160z"></path>
        </svg>
        <v-footer class="">
            <v-container fluid class="py-5">
                <v-row>
                    <v-col class="col-md-4 col-12">
                        <div class="text-h6 text-lg-h5 font-weight-bold">Navegación</div>

                        <div class="v-responsive base-divider primary  mb-6" style="max-width: 28px;">
                            <v-divider style="padding-bottom: 1px"></v-divider>
                        </div>

                        <div class="d-flex flex-wrap">

                            <v-img gradient="to top, rgb(245 245 245), rgb(245 245 245 / 42%)"
                                   style="max-height:200px"
                                   :spect-ratio="5/4" contain
                                   :src="logo">

                                <div class="w-half body-1 mb-1" v-for="item in links"
                                     :key="item.title">
                                    <inertia-link :href="item.route"
                                                  class="text-decoration-none secondary--text text--lighten-2">
                                        {{ item.title }}
                                    </inertia-link>
                                </div>
                            </v-img>
                        </div>
                    </v-col>
                    <v-col class="col-md-4 col-12">
                        <div class="text-h6 text-lg-h5 font-weight-bold">
                            Información de contacto
                        </div>

                        <div class="v-responsive base-divider primary  mb-6" style="max-width: 28px;">
                            <v-divider style="padding-bottom: 1px"></v-divider>
                        </div>

                        <div class="d-flex mb-2 font-weight-bold">
                            <v-icon light class="secondary--text text--lighten-1">mdi-map-marker-outline</v-icon>
                            Carrera 10 # 41 A - 17 Los Almendros, Riohacha, Colombia
                        </div>

                        <div class="d-flex mb-2">
                            <v-icon light
                                    class="mr-2 secondary--text text--lighten-1">
                                mdi-phone-outline
                            </v-icon>
                            <div class="d-flex flex-column">
                                <a
                                    href="tel:3004361660" class="text-decoration-none secondary--text text--lighten-2">
                                    +57 300 436 1660
                                </a>
                                <a
                                    href="tel:3003285091" class="text-decoration-none secondary--text text--lighten-2">
                                    +57 300 328 5091
                                </a>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <v-icon light
                                    class="notranslate mr-2 mdi secondary--text text--lighten-1">
                                mdi-email-outline
                            </v-icon>
                            <a
                                href="mailto:contacto@cafeproducciones.com"
                                class="text-decoration-none secondary--text text--lighten-2">
                                contacto@cafeproducciones.com
                            </a>
                        </div>
                    </v-col>

                    <v-col class="col-md-4 col-12">
                        <div class="text-h6 text-lg-h5 font-weight-bold">
                            Mantenerme informado
                        </div>

                        <div class="v-responsive base-divider primary  mb-6" style="max-width: 28px;">
                            <v-divider style="padding-bottom: 1px"></v-divider>
                        </div>

                        <div class="d-flex flex-column flex-lg-row w-full">
                            <v-text-field dense single-line solo outlined enclosed is-booted light
                                          class="mr-lg-2" label="Your email">
                            </v-text-field>
                            <v-btn is-elevated light large
                                   class="secondary">
                                Subscribirse
                            </v-btn>
                        </div>
                        <div class=" d-flex text-center justify-end align-center text-md-right mt-4 mt-lg-2">
                            Conectar

                            <v-btn fab rounded dark small
                                   href="https://www.facebook.com/CAFE-Producciones-101286955178495"
                                   class="ml-2 blue darken-4" target="_blank">
                                <v-icon light>
                                    mdi-facebook
                                </v-icon>
                            </v-btn>

                            <!--                            <v-btn fab rounded dark small-->
                            <!--                                   href="https://api.whatsapp.com/send?phone=573004361660;"-->
                            <!--                                   class="ml-2 green darken-1" target="_blank">-->
                            <!--                                <v-icon light>-->
                            <!--                                    mdi-whatsapp-->
                            <!--                                </v-icon>-->
                            <!--                            </v-btn>-->
                            <whatsapp-message-button class="ml-2"></whatsapp-message-button>

                            <v-btn fab rounded dark small
                                   href="https://www.instagram.com/cafeproduccionesrio"
                                   class="ml-2 pink darken-1" target="_blank">
                                <v-icon light>
                                    mdi-instagram
                                </v-icon>
                            </v-btn>

                        </div>
                    </v-col>
                </v-row>
                <hr role="separator" aria-orientation="horizontal" class="my-3 v-divider theme--light">
                <div class="text-center caption"> © cafeproducciones.com 2021. todos los derechos reservados</div>
            </v-container>
        </v-footer>
    </div>
</template>
<script>
import {mapMutations, mapState} from "vuex";
import logo from "../../images/logo.png";
import WhatsappMessageButton from '@/components/WhatsappMessageButton'

export default {
    name: "Footer",
    components: {
        WhatsappMessageButton
    },
    data: () => ({
        logo: logo
    }),
    computed: {
        ...mapState(["links"]),
    },
}
</script>

<style>
.logos-bg {
    fill: whitesmoke;
}

.w-half {
    width: 50% !important;
}
</style>
