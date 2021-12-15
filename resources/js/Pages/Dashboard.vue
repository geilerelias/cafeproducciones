<template>
    <app-layout>
        <v-container fluid>
            <v-row dense xl>
                <v-col v-for="item in items" :key="item.title">
                    <v-hover
                        v-slot:default="{ hover }"
                        open-delay="100"
                        close-delay="100"
                    >
                        <v-card
                            :elevation="hover ? 16 : 2"
                            class="mx-auto"
                            max-width="344"
                        >
                            <v-img
                                :src="item.image"
                                :lazy-src="lazy"
                                height="200px"
                            ></v-img>
                            <v-card-title> {{ item.title }}</v-card-title>
                            <v-card-subtitle>{{
                                    item.subtitle
                                }}
                            </v-card-subtitle>
                            <v-card-actions>
                                <inertia-link :href="item.route">
                                    <v-btn
                                        color="purple"
                                        text
                                        link
                                    >
                                        Explorar
                                    </v-btn>
                                </inertia-link>

                                <v-spacer></v-spacer>

                                <v-btn icon @click="item.show = !item.show">
                                    <v-icon>{{
                                            item.show
                                                ? "mdi-chevron-up"
                                                : "mdi-chevron-down"
                                        }}
                                    </v-icon>
                                </v-btn>

                            </v-card-actions>

                            <v-expand-transition>
                                <div v-show="item.show">
                                    <v-divider></v-divider>

                                    <v-card-text>
                                        {{ item.description }}
                                    </v-card-text>
                                </div>
                            </v-expand-transition>
                        </v-card>
                    </v-hover>
                </v-col>
            </v-row>
        </v-container>

    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import BreadCrumbs from "@/components/BreadCrumbs";

import lazy from '@/../images/lazy.jpg'
import website from '@/../images/website (1).jpg'
import about from '@/../images/Quién-soy-yo.jpg'
import articles from '@/../images/articles.jpg'
import project from '@/../images/project.jpg'
import cursos from '@/../images/cursos.jpg'
import students from '@/../images/students.jpg'
import roles from '@/../images/roles.jpg'

export default {
    components: {
        AppLayout,
        BreadCrumbs,
    },
    data: () => ({
        lazy: lazy,
        show: false,
        items: [
            {
                image: website,
                title: "Noticias",
                subtitle: "Gestiona de noticias",
                description:
                    "En esta sesión podrás gestionar las noticias, agregar  nuevas, eliminar entre otros",
                route: "/dashboard/notices",
                show: false,
                rol: "admin"
            },
            {
                image: about,
                title: "¿Quién soy?",
                subtitle: "Edita el modulo ¿Quién soy?",
                description:
                    "En esta sesión podrás gestionar el contenido del modulo quien soy, podrás editar la información ya establecida de una manera muy fácil gracias al editor quill.",
                route: "/dashboard/about",
                show: false,
                rol: "admin"
            },
            {
                image: articles,
                title: "Artículos",
                subtitle: "Gestiona de artículos",
                description:
                    "En esta sesión podrás gestionar los artículos, agregar  nuevos, eliminar antiguos, podrás manipular las publicaciones y artículos entre otros",
                route: "/dashboard/articles",
                show: false,
                rol: "admin"
            },
            {
                image: project,
                title: "Proyectos",
                subtitle: "Gestiona tus proyectos",
                description:
                    "En esta sesión podrás gestionar los proyectos, agregar  nuevos, eliminar  entre otros",
                route: "/dashboard/project",
                show: false,
                rol: "admin"
            },
            {
                image: cursos,
                title: "Cursos impartidos",
                subtitle: "Gestión de cursos",
                description:
                    "En esta sesión podrás gestionar los cursos, agregar  nuevos contenidos y vincular estudiantes, entre otras cosas ",
                route: "/dashboard/courses",
                show: false,
                rol: "admin"
            },
            {
                image: students,
                title: "Estudiantes",
                subtitle: "Gestión de cursos",
                description:
                    "En esta sesión podrás gestionar los cursos, agregar  nuevos contenidos y vincular estudiantes, entre otras cosas ",
                route: "/dashboard/courses",
                show: false,
                rol: "admin"
            },
            {
                image: roles,
                title: "Roles",
                subtitle: "Gestión de cursos",
                description:
                    "En esta sesión podrás gestionar los cursos, agregar  nuevos contenidos y vincular estudiantes, entre otras cosas ",
                route: "/dashboard/courses",
                show: false,
                rol: "admin"
            }
        ]
    })
}
</script>
