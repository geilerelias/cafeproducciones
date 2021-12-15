<template>
    <page-layout>

        <v-sheet>
            <v-container class="py-6">
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

                <v-row>
                    <v-col class="col col-12">
                        <div class="d-flex flex-column flex-sm-row justify-space-between align-sm-end flex-sm-wrap">
                            <div>
                                <h2>Explorar</h2>
                                <h6 class="grey--text grey--lighten-3 font-weight-regular trun">
                                    Listado de los principales servicios que ofrece CAFE producciones
                                </h6>
                            </div>
                            <div>
                                <v-text-field
                                    ref="search"
                                    v-model="search"
                                    full-width
                                    hide-details
                                    label="Search"
                                    single-line
                                    class="mx-auto"
                                ></v-text-field>

                            </div>
                        </div>
                    </v-col>
                </v-row>

                <v-row v-if="$vuetify.breakpoint.mdAndUp">
                    <v-col v-for="(item, index) in services" :key="item.id"
                           class="col-sm-6 col-md-4 col-lg-3 col-12">

                        <v-hover v-slot="{ hover }">
                            <v-card light class="br-10 " color="grey darken-2" :aspect-ratio="1/1"
                                    @click="$vuetify.goTo(`#${item.name}`,{duration: '900',offset: '0',easing: 'easeInOutCubic'})">
                                <v-img cover
                                       :aspect-ratio="1/1"
                                       style="transition: all 0.5s;"
                                       :class="hover ? 'zoom' : ''"
                                       @load="item.gradient=true"
                                       :gradient="item.gradient?'rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.65), rgb(0, 0, 0)':''"
                                       :src="item.firtImage">
                                    <div class="p-absolute bottom-0 pa-5">
                                        <h5 class="white--text">
                                            {{ item.title }}
                                        </h5>
                                        <div class="d-flex">
                                            <p class="text-sm white--text mb-0">{{ item.images.length }}
                                                Imagenes</p>
                                            <v-icon size="16"
                                                    class="white--text">
                                                mdi-chevron-right
                                            </v-icon>
                                        </div>
                                    </div>
                                    <template v-slot:placeholder>
                                        <v-skeleton-loader
                                            class="fill-height ma-0"
                                            type="image"
                                        ></v-skeleton-loader>
                                    </template>
                                </v-img>
                            </v-card>
                        </v-hover>
                    </v-col>
                </v-row>

                <v-list v-else two-line link>
                    <template v-for="(item, index) in services">
                        <v-list-item :key="item.title"
                                     @click=" $vuetify.goTo(`#${item.name}`,{duration:'900',offset: '0',easing: 'easeInOutCubic'})">
                            <v-list-item-avatar>
                                <v-img :src="item.firtImage">
                                    <template v-slot:placeholder>
                                        <v-row
                                            class="fill-height ma-0"
                                            align="center"
                                            justify="center"
                                        >
                                            <v-progress-circular
                                                indeterminate
                                                color="primary"
                                            ></v-progress-circular>
                                        </v-row>
                                    </template>
                                </v-img>
                            </v-list-item-avatar>

                            <v-list-item-content>
                                <v-list-item-title v-html="item.title"></v-list-item-title>
                                <v-list-item-subtitle
                                    v-html="`${item.images.length} imagenes`"></v-list-item-subtitle>
                            </v-list-item-content>

                            <v-list-item-action>
                                <v-icon size="16"
                                        class="white--text">
                                    mdi-chevron-right
                                </v-icon>
                            </v-list-item-action>
                        </v-list-item>

                        <v-divider></v-divider>

                    </template>
                </v-list>

            </v-container>
        </v-sheet>

        <section class="grey lighten-4 py-6">
            <v-container>
                <h1 class="text-h5 font-weight-bold mb-2">
                    Detalle de servicios
                </h1>

                <div class="v-responsive base-divider primary  mb-6" style="max-width: 28px;">
                    <v-divider style="padding-bottom: 1px"></v-divider>
                </div>


                <div class="" v-for="(item,n) in services" :key="item.id" :id="item.name">
                    <v-card outlined class="my-2" :color="$vuetify.breakpoint.smAndDown?'':'transparent'">
                        <div class="d-flex flex-column flex-md-row" :class="{'flex-md-row-reverse':n%2===0}">
                            <div class="w-full w-md-half d-flex align-center">
                                <div class="pa-6 pa-md-12">

                                    <h2 class="text-h5 text-lg-h4 font-weight-bold">{{ item.title }}</h2>
                                    <div class="text-h6  mt-4 text-justify">
                                        {{ item.description }}
                                    </div>
                                </div>
                            </div>
                            <v-sheet class="w-full w-md-half  rounded pa-5"
                                     :class="$vuetify.breakpoint.smAndDown?'':'elevation-6'" :aspect-ratio="1">
                                <lightbox :items="item.images" :cells="3"></lightbox>
                            </v-sheet>
                        </div>
                    </v-card>
                </div>
            </v-container>
        </section>
        <v-sheet light>
            <v-container class="container py-8">
                <div class="text-center">
                    <div>
                        <div class=" primary--text">¿Quieres hablar con nosotros?</div>
                        <div class=" mt-1">Nuestro equipo esta aqui para ayudar.</div>
                    </div>
                    <div class="mt-4">
                        <inertia-link href="/about-us">
                            <v-btn elevated
                                   class="my-1 ">
                                Saber más
                            </v-btn>
                        </inertia-link>
                        <inertia-link href="/contact-us">
                            <v-btn elevated
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
        search: '',
        allservices: [
            {
                name: 'transmision',
                title: "Transmisión de eventos en vivo o diferido",
                description: `Contamos con los equipos necesarios y de ultima tecnologia para Transmitir un evento en vivo,
                esto permite llegar a un público con el que antes
                no contaba. Aquellos que por su situación geográfica no pueden asistir encontraran en su
                página Web, su Blog o su cuenta en redes sociales las imágenes y el audio en vivo, en
                tiempo real del evento. De esta manera cualquier persona conectada a la Internet, de
                cualquier parte del mundo, podrá acompañar las actividades de forma práctica, original y
                atrayente.`,
                images: [],
                firtImage: '',
                gradient: false,
            },
            {
                name: 'sonido',
                title: "Sonido para auditorios y exteriores",
                description: 'le ofrecemos sistemas de sonido de la más alta calidad para todo tipo de eventos, ' +
                    'utilizamos equipos de última generación y contamos con la capacidad de satisfacer las necesidades ' +
                    'de cualquier evento según la ocasión y el espacio.',
                images: [],
                firtImage: ''
            },
            {
                name: 'montaje',
                title: "Montaje de todo tipo de evento",
                description: 'Nuestro equipo cuenta con la última tecnología de fácil ensamblaje, lo cual nos permite' +
                    ' optimizar los tiempos de montaje así como también los costos y es adaptable a casi cualquier tipo de superficie.'
                ,
                images: [],
                firtImage: '',
                gradient: false,
            },
            {
                name: 'pirotecnia',
                title: "Pirotecnia de escenarios y aéreas",
                description: 'un espectáculo de pirotecnia puede presentarse en diversos formatos en función de varios ' +
                    'factores: celebración, lugar eb el que se llevará a cabo, duracción, presupuesto... Todos los ' +
                    'momentos especiales de nuestros clientes pueden convertirse en extraordinarios con espectáculos ' +
                    'de pirotecnia sin importar el tamaño del festejo o la cantidad de invitados.',
                images: [],
                firtImage: '',
                gradient: false,
            },
            {
                name: 'vallas',
                title: "Vallas de contención de publico",
                description: 'Se colocan en lugares públicos abiertos y/o cerrados  para delimitar espacios con motivo ' +
                    'de eventos temporales, como espectaculos, desfiles o procesiones, son en tubo galvanizado de 1.40 de alto X 2 mts de ancho con base de 60 mm, calibre de 1 ¼ ',
                images: [],
                firtImage: '',
                gradient: false,
            },
            {
                name: 'personal',
                title: "Personal logístico",
                description: 'La logística de un evento incluye la gestión de los servicios de soporte técnico y la ' +
                    'gestión competente del flujo de visitantes el día del evento (transporte, coordinación de acciones, ' +
                    'etc.) Para hacer frente con éxito a múltiples tareas, debe comprender los diferentes componentes de' +
                    ' un plan de logística para un evento y elaborar un plan de logística de eventos efectivo.',
                images: [],
                firtImage: '',
                gradient: false,
            },
            {
                name: 'moviliarios',
                title: "Carpas, Sillas, Mesas, Computadores impresoras",
                description: 'sabemos que cada cliente así como cada actividad es diferente, Por tal motivo le ofrecemos' +
                    ' alternativas innovadoras en estructuras como toldos y carpas, pisos, trussesde aluminio, stands y más.',
                images: [],
                firtImage: '',
                gradient: false,
            },
            {
                name: 'filmacion',
                title: "Filmación en general - Entrevistas",
                description: 'Contamos  con una amplia trayectoria en el mundo de la producción audiovisual, abarcando todo' +
                    ' tipo de trabajos, en función de las necesidades del cliente. Desde servicio de grabación hasta ' +
                    'vídeo interactivo, pasando por todo un abanico de servicios con diferentes finalidades: promocionar ' +
                    'la empresa, un perfil profesional, presentaciones de proyectos.',
                images: [],
                firtImage: '',
                gradient: false,
            },
            {
                name: 'refrigerios',
                title: "Refrigerios",
                description: 'Ofrecemos servicios de Brunch o Refrigerios de todo tipo para su empresa, pensado específicamente para cursos, seminarios o reuniones empresariales, con alimentos que deleitarán el paladar de sus empleados y/o clientes.',
                images: [],
                firtImage: '',
                gradient: false,
            },
            {
                name: 'pantallas',
                title: "Pantallas",
                description: `Ponemos a su disposición el Servicio de Alquiler de Pantallas para brindarle soluciones a
                medida para su evento corporativo, cartelería digital, acto institucional o evento empresarial.
                <br/>
                Nuestro servicio de Alquiler de Pantallas  incluye el traslado, armado y desarmado de las pantallas y, opcionalmente, la operación de las mismas.`,
                images: [],
                firtImage: '',
                gradient: false,
            },
            {
                name: 'iluminacion',
                title: "Iluminación",
                description: `La iluminación para eventos es uno de los elementos de decoración con más relevancia a la
                hora de organizarlos. Necesitas tener claro qué atmósfera quieres crear, ya que de la manera que
                ilumines tu evento dependerá el ambiente que se genere.`,
                images: [],
                firtImage: '',
                gradient: false,
            },
            {
                name: 'piso-led',
                title: "Piso led",
                description: `diseñamos y disponemos de pistas y pisos Led para incorporar a cada evento. Nuestra
                tecnología permite manejo de color led, inscripción de texto en pista.
                Los Pisos LED brindan luces y colores permitiendo crear la ambientación necesaria para tu evento.
                Es ideal para escenarios o pistas de baile en discos, eventos, salones y fiestas, o pisos de stands en
                exposiciones, o pasarelas en desfiles. Transmiten todo tipo de contenido y efectos luminosos.`,
                images: [],
                firtImage: '',
                gradient: false,
            },
            {
                name: 'escenografia',
                title: "Escenografías",
                description: `Nuestra vasta experiencia nos permite liderar todas las áreas necesarias para desarrollar
                un proyecto escenográfico integral e impactante.
                Con mas de 5 años de trayectoria diseño & comunicación desarrollando proyectos de escenografía de alto
                nivel con un equipo multidisciplinario con vasta experiencia que garantizan el mejor de los resultados.`,
                images: [],
                firtImage: '',
                gradient: false,
            },

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
        active: null
    }),
    computed: {
        services() {
            const search = this.search.toLowerCase()

            if (!search) return this.allservices

            return this.allservices.filter(item => {
                return item.name.toLowerCase().indexOf(search) > -1
                    || item.title.toLowerCase().indexOf(search) > -1
                    || item.description.toLowerCase().indexOf(search) > -1
            })
        },
    },

    created() {
        var lista = [];
        for (let s = 0; s < this.allservices.length; s++) {
            let folder = this.allservices[s].name;
            console.log(folder)

            axios
                .get(`/find/services/${folder}`)
                .then(response => {
                    lista = response.data;
                    let images = [];
                    let firtImage = ``;
                    for (let i = 0; i < lista.length; i++) {
                        if (i == 0) {
                            firtImage = `/src/services/${folder}/${lista[i]}`;
                        }
                        images.push(`/src/services/${folder}/${lista[i]}`);
                        console.log(`/src/services/${folder}/${lista[i]}`)
                    }
                    this.allservices[s].images = images;
                    this.allservices[s].firtImage = firtImage;
                })
                .catch(error => {
                    console.log(error);
                });
        }

    },
    methods: {
        getImage(item) {
            if (item.images === undefined) {
                console.log("nada que mostrar")
            } else {
                console.log("esta es la imagen ", item.images[0])
            }
        }

    },

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

/*.v-card {*/
/*    transition: opacity .4s ease-in-out;*/
/*}*/

/*.v-card:not(.on-hover) {*/
/*    opacity: 0.6;*/
/*}*/

/*.show-btns {*/
/*    color: rgba(255, 255, 255, 1) !important;*/
/*}*/

.bottom-0 {
    bottom: 0 !important;
}

.p-absolute {
    position: absolute !important;
}

.bottom-gradient {
    /*background-image: linear-gradient(to top, rgba(0, 0, 0, 0.4) 70%, transparent 30%);*/

    /*background-image: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(0,0,0,1) 50%, transparent 100%);*/
}

/*zoom en imagenes*/
.v-image .v-image__image {
    transition: all 0.6s;
}

.v-image.zoom .v-image__image {
    transform: scale(1.2);
}

div.v-image__placeholder > div > div {
    height: 100% !important;
}

</style>
