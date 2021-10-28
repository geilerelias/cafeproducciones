<template>
    <page-layout>
        <gallery :pictureDatas="pictureDatas"/>

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
import Gallery from "@/components/Gallery/Gallery"

export default {
    components: {
        PageLayout,
        Lightbox,
        Gallery
    },

    data: () => ({

        pictureDatas: [],
        items: [

            {
                "title": "Transmisiones en vivo",
                "name": "envivo.jpg",
                "description": "" +
                    "Una transmisión en vivo o emisión en directo generalmente se refiere a varios tipos de medios de comunicación que se difunden al aire sin un retraso significativo"
            },
            {
                "title": "Foro",
                "name": "foro.jpg",
                "description": "" +
                    "Una vez más demostrando nuestra creatividad, responsabilidad y calidad de servicio a nuestros clientes. Producción del Foro mujeres tejedoras de nuevas realidades.\n" +
                    "Contactanos para diseñar tú evento a tú medida y capacidades.\n" +
                    "3004361660\n" +
                    "3003285091"
            },
            {
                "title": "Festival",
                "name": "festival.jpg",
                "description": "Seguimos brindando lo mejor de nosotros para complacer a nuestros clientes"
            },
            {
                "title": "Filmación",
                "name": "filmacion.jpg",
                "description": "Nosotros entendemos que el avance de la tecnología cambia constantemente y así mismo el uso de los equipos. Es por ello que en nuestro servicio de filmación de eventos empresariales,se actualiza constantemente para ofrecerles la más alta calidad en cada uno de nuestros servicios de filmación y poder realizar un buen registro audiovisual de su evento."
            },
            {
                "title": "Socialización MINTIC",
                "name": "mintic.jpg",
                "description": "Seguimos brindando lo mejor de nosotros para complacer a nuestros clientes"
            },
            {
                "title": "Protocolos de bioseguridad",
                "name": "bioseguridad.jpg",
                "description": "Seguimos brindando lo mejor de nosotros para complacer a nuestros clientes"
            },
            {
                "title": "Piso Led",
                "name": "pisoled.gif",
                "description": "Seguimos brindando lo mejor de nosotros para complacer a nuestros clientes"
            },
            {
                "title": "Evento de lanzamiento",
                "name": "caicedo.jpg",
                "description": "La Sonrisa del cliente al saber que superan todas las expectativas, el mejor equipo de trabajo y la mejor empresa de producción. #cafeproducciones"
            },
            {
                "title": "Ferias de saberes PESNU3",
                "name": "feriapesnu3.jpg",
                "description": "La Sonrisa del cliente al saber que superan todas las expectativas, el mejor equipo de trabajo y la mejor empresa de producción. #cafeproducciones"
            },
            {
                "title": "III jornadas de actualización pediátrica.",
                "name": "iijornadaactualizacionpediatrica.jpg",
                "description": "La Sonrisa del cliente al saber que superan todas las expectativas, el mejor equipo de trabajo y la mejor empresa de producción. #cafeproducciones"
            },
            {
                "title": "Joven elige Joven.",
                "name": "joveneligejoven.jpg",
                "description": "llevamos a cabo en su totalidad el evento Joven Elige Joven elecciones Concejos de juventud 2021, el mejor equipo de trabajo y la mejor empresa de producción. #cafeproducciones"
            },
            {
                "title": "Jornada de actualización en lineamientos con OIM",
                "name": "eventooim.jpg",
                "description": "llevamos a cabo en su totalidad la jornada de actualización en lineamientos del programa ampliado de inmunizaciones a refrentes PAI La Guajira con énfasis en flujos migratorios mixtos , el mejor equipo de trabajo y la mejor empresa de producción. #cafeproducciones"
            },
        ],
    }),

    created() {
        this.items.forEach(value => {
            value.src = `/src/gallery/null/${value.name}`;
            this.pictureDatas.push(value);
        });
    },

}
</script>

<style scoped>

</style>

