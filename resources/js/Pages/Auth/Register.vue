<template>
    <v-app>
        <v-row class="my-0 py-0">
            <v-col class="d-none d-md-flex align-center justify-center col-lg-7 col-xl-6 col-12 my-0 py-0">
                <v-img :src="bg"
                       gradient="to top, rgba(13, 3, 29, 0.85), rgba(25, 25, 38, 0.85)"
                       :height="'100vh'"
                       class="my-0 py-0">
                    <v-row class="fill-height">
                        <v-col
                            class="transparent d-md-flex align-center justify-center">
                            <v-container>
                                <div class="pa-10">
                                    <v-row class="justify-center">
                                        <v-col class="col-xl-5 col-8">
                                            <div>
                                                <h2 class="display-1 white--text font-weight-medium">
                                                    CaFe Producciones
                                                </h2>
                                                <h6
                                                    class="subtitle-1 mt-4 white--text op-5 font-weight-regular">
                                                    Somos tu empresa de producción,
                                                    planificación y acompañamiento
                                                    <span class="font-weight-bold">
                                                      para todo tipo evento
                                                    </span>
                                                </h6>
                                                <inertia-link href="/about-us">
                                                    <v-btn depressed outlined x-large
                                                           class="mt-4 text-capitalize white--text">
                                                        Saber más
                                                    </v-btn>
                                                </inertia-link>
                                            </div>
                                        </v-col>
                                    </v-row>
                                </div>
                            </v-container>
                        </v-col>
                    </v-row>
                </v-img>
            </v-col>
            <v-col class="d-flex align-center col-lg-5 col-xl-6 col-12">
                <v-container>
                    <div class="pa-7 pa-sm-12">
                        <v-row>
                            <v-col class="col-lg-9 col-xl-6 col-12">

                                <inertia-link
                                    :href="route('home')"
                                    class="d-flex align-center text-decoration-none mr-2 router-link-exact-active router-link-active"
                                    aria-current="page">
                                    <v-avatar color="white" size="70">
                                        <v-img cover :src="logo" alt="logo"></v-img>
                                    </v-avatar>
                                </inertia-link>

                                <h2 class="font-weight-bold mt-4 blue-grey--text text--darken-2">Registrarse</h2>
                                <h6 class="subtitle-1 mb-4"> ¿Ya tienes cuenta?
                                    <inertia-link href="/login">Inicia sesión</inertia-link>
                                </h6>

                                <v-form @submit.prevent="submit"
                                        ref="form"
                                        v-model="valid"
                                >

                                    <v-alert
                                        v-if="$page.errors.email"
                                        text
                                        prominent
                                        type="error"
                                        icon="mdi-alert"
                                        dismissible
                                    >
                                        {{$page.errors.email[0]}}
                                    </v-alert>



                                    <v-text-field
                                        dense
                                        v-model="form.name"
                                        :rules="nameRules"
                                        label="Name"
                                        outlined
                                        required
                                        autofocus
                                        autocomplete="name"
                                    ></v-text-field>

                                    <v-text-field
                                        dense
                                        v-model="form.email"
                                        :rules="emailRules"
                                        label="E-mail"
                                        outlined
                                        name="email"
                                        required
                                    ></v-text-field>

                                    <v-text-field
                                        dense
                                        v-model="form.password"
                                        :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                                        :rules="passwordRules"
                                        :type="show ? 'text' : 'password'"
                                        label="password"
                                        outlined
                                        hint="At least 8 characters"
                                        @click:append="show = !show"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                    ></v-text-field>

                                    <v-text-field
                                        dense
                                        v-model="form.password_confirmation"
                                        :append-icon="show2 ? 'mdi-eye' : 'mdi-eye-off'"
                                        :rules="confirmPasswordRules"
                                        :type="show2 ? 'text' : 'password'"
                                        label="Confirm Password"
                                        outlined
                                        hint="At least 8 characters"
                                        @click:append="show2 = !show2"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                    ></v-text-field>


                                    <v-checkbox
                                        v-model="checkbox"
                                        :rules="[v => !!v || 'You must agree to continue!']"
                                        label="¿Estás de acuerdo?"
                                        required
                                    ></v-checkbox>

                                    <v-btn @click="submit" block contained depressed :disabled="!valid"
                                           class="mr-4 text-none primary">
                                        Registrarse
                                    </v-btn>

                                </v-form>
                            </v-col>
                        </v-row>
                    </div>
                </v-container>
            </v-col>
        </v-row>
    </v-app>
</template>

<script>
import logo from '@/../images/logoCircular.png'
import bg from '@/../images/bg/6.jpg';

export default {
    name: "Register",
    props: ['errors'],
    data: () => ({
        bg: bg,
        logo: logo,
        show: null,
        show2: null,
        valid: true,
        form: {
            name: '',
            email: '',
            password: '',
            password_confirmation: ''
        },
        nameRules: [
            v => !!v || 'Name is required',
        ],
        emailRules: [
            v => !!v || 'E-mail is required',
            v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
        ],
        passwordRules: [
            value => !!value || 'Required.',
            v => v.length >= 8 || 'Min 8 characters',
        ],
        checkbox: false,
    }),
    computed: {
        confirmPasswordRules() {
            return [
                v => !!v || 'Required.',
                v => v.length >= 8 || 'Min 8 characters',
                v => v === this.form.password || 'The confirm password incorrect',
            ]
        }
    },
    methods: {
        validate() {
            this.$refs.form.validate()
        },
        reset() {
            this.$refs.form.reset()
        },
        resetValidation() {
            this.$refs.form.resetValidation()
        },
        submit() {
            this.$inertia.post(route('register'), this.form);
        },
    },
}
</script>

<style scoped>
</style>
