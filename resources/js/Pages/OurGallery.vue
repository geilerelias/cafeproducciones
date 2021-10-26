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
                "name": "caicedo.gif",
                "description": "La Sonrisa del cliente al saber que superan todas las expectativas, el mejor equipo de trabajo y la mejor empresa de producción. #cafeproducciones"
            },
            {
                "title": "Ferias de saberes PESNU3",
                "name": "feriapesnu3.gif",
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
        items2: [
            {
                "title": "朴素妍",
                "name": "piaosuyan.png",
                "description": "朴昭妍原名朴仁静，1987年10月5日出生于韩国京畿道安养市。2005年，就读于安养市艺术高等学校的朴昭妍，报名参加了韩国CMB频道的选秀节目《亲亲歌谣节》，获得了青少年歌谣比赛的金奖[19]  ；同年，朴昭妍进入韩国SM娱乐有限公司，成为练习生。"
            },
            {
                "title": "朴智妍",
                "name": "piaozhiyan.png",
                "description": "朴智妍（Park Ji Yeon），1993年6月7日出生于韩国首尔，韩国女歌手、演员、主持人、模特，女子演唱团体T-ara成员之一。"
            },
            {
                "title": "朴孝敏",
                "name": "piaoxiaomin.png",
                "description": "朴孝敏（Park Hyo Min），1989年5月30日出生于韩国釜山，毕业于成均馆大学，韩国女歌手、演员，女子演唱团体T-ara成员。"
            },
            {
                "title": "咸恩静",
                "name": "xianenjing.png",
                "description": "咸恩静，1988年12月12日出生于韩国，韩国女歌手、演员，韩国女子组合T-ara第一任队长，队内担当，Rapper、领舞、主唱，毕业于韩国东国大学。"
            },
            {
                "title": "李居丽",
                "name": "lijuli.png",
                "description": "李居丽（Lee Ji Hyun），1986年12月12日出生于韩国京畿道高阳市，毕业于明知大学视觉艺术及戏剧系，韩国女歌手、演员、模特，女子演唱团体T-ara成员兼队长。"
            },
            {
                "title": "全宝蓝",
                "name": "jinbaolan.png",
                "description": "全宝蓝，1986年3月22日出生于韩国首尔，毕业于明知专门大学，韩国女歌手、演员、模特，女子演唱团体T-ara成员之一。"
            },

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

