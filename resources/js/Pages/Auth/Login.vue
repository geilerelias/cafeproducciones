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
                <v-container class="container">
                    <div class="pa-7 pa-sm-12">
                        <v-row class="">
                            <v-col class="col-lg-9 col-xl-6 col-12">
                                <div
                                    class="d-flex align-center text-decoration-none mr-2 router-link-exact-active router-link-active"
                                    aria-current="page">
                                    <inertia-link :href="route('home')">
                                        <v-avatar color="white" size="90">
                                            <v-img cover :src="logo" alt="logo"></v-img>
                                        </v-avatar>
                                    </inertia-link>
                                </div>

                                <h2 class="font-weight-bold mt-4 blue-grey--text text--darken-2">Ingresar</h2>
                                <h6
                                    class="subtitle-1 mb-2"> ¿No tienes cuenta?
                                    <inertia-link href="/register">
                                        registrarse
                                    </inertia-link>
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
                                        v-model="form.email"
                                        :rules="[
                                            emailRules.required,
                                            emailRules.valid
                                            ]"
                                        label="E-mail"
                                        outlined
                                        name="email"
                                        required
                                    >
                                    </v-text-field>

                                    <v-text-field
                                        dense
                                        v-model="form.password"
                                        :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                                        :rules="[passwordRules.required,passwordRules.min]"
                                        :type="show ? 'text' : 'password'"
                                        label="password"
                                        outlined
                                        hint="At least 8 characters"
                                        @click:append="show = !show"
                                        @keyup.enter="submit"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                    ></v-text-field>

                                    <div class="d-block d-sm-flex align-center mb-4 mb-sm-0">
                                        <v-checkbox
                                            v-model="form.remember"
                                            label="Recuerdame"
                                        ></v-checkbox>
                                        <div class="ml-auto">
                                            <inertia-link :href="route('password.request')">Olvidé mi contraseña
                                            </inertia-link>
                                        </div>

                                    </div>

                                    <v-btn block contained :disabled="!valid" @click="submit"
                                           class="mr-4 mb-4 primary">
                                        Ingresar
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
        valid: true,
        form: {
            email: '',
            password: '',
            remember: null
        },
        emailRules: {
            required: v => !!v || 'E-mail is required',
            valid: v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
        },
        passwordRules: {
            required: value => !!value || 'Required.',
            min: v => v.length >= 8 || 'Min 8 characters',
        },
    }),

    methods: {
        submit() {
            const isFormValid = this.$refs.form.validate();
            if (isFormValid) {
                this.$inertia.post(route('login'), this.form);
            }
        },
        validate() {
            this.$refs.form.validate()
        },
        reset() {
            this.$refs.form.reset()
        },
        resetValidation() {
            this.$refs.form.resetValidation()
        },
    },
}
</script>

<style scoped>
</style>
