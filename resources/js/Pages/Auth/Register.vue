<template>
    <v-app>
        <v-row>
            <v-col class="primary d-none d-md-flex align-center justify-center col-lg-7 col-xl-6 col-12">
                <v-container>
                    <div class="pa-10">
                        <v-row class="justify-center">
                            <v-col class="col-xl-5 col-8">
                                <div>
                                    <h2 class="headline white--text font-weight-medium">
                                        CAFE producciones
                                    </h2>
                                    <h6
                                        class="subtitle-1 mt-4 white--text op-5 font-weight-regular">
                                        <p class="title font-weight-light mb-4 text-left white--text ">

                                            Somos tu empresa de producción,
                                            planificación y acompañamiento
                                            <span class="font-weight-bold">
                                                        para todo tipo evento
                                                    </span>
                                        </p>
                                    </h6>
                                    <v-btn depressed
                                           text
                                           outlined
                                           x-large
                                           class="mt-4 text-capitalize  white--text">
                                        Learn More
                                    </v-btn>
                                </div>
                            </v-col>
                        </v-row>
                    </div>
                </v-container>
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

                                <v-form
                                    ref="form"
                                    v-model="valid"
                                    lazy-validation
                                >
                                    <v-text-field
                                        dense
                                        v-model="name"
                                        :counter="10"
                                        :rules="nameRules"
                                        label="Name"
                                        outlined
                                        required
                                        autofocus
                                        autocomplete="name"
                                    ></v-text-field>

                                    <v-text-field
                                        dense
                                        v-model="email"
                                        :rules="emailRules"
                                        label="E-mail"
                                        outlined
                                        name="email"
                                        required
                                    ></v-text-field>

                                    <v-text-field
                                        dense
                                        v-model="password"
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
                                        v-model="password"
                                        :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                                        :rules="passwordRules"
                                        :type="show ? 'text' : 'password'"
                                        label="password"
                                        outlined
                                        hint="At least 8 characters"
                                        @click:append="show = !show"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                    ></v-text-field>


                                    <v-checkbox
                                        v-model="checkbox"
                                        :rules="[v => !!v || 'You must agree to continue!']"
                                        label="Do you agree?"
                                        required
                                    ></v-checkbox>

                                    <v-btn block contained depressed :disabled="!valid"
                                           class="mr-4">
                                        Sign In
                                    </v-btn>

                                    <v-btn
                                        :disabled="!valid"
                                        color="success"
                                        class="mr-4"
                                        @click="validate"
                                    >
                                        Validate
                                    </v-btn>

                                    <v-btn
                                        color="error"
                                        class="mr-4"
                                        @click="reset"
                                    >
                                        Reset Form
                                    </v-btn>

                                    <v-btn
                                        color="warning"
                                        @click="resetValidation"
                                    >
                                        Reset Validation
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

export default {
    name: "Register",
    data: () => ({
        logo: logo,
        show: null,
        valid: true,
        name: '',
        nameRules: [
            v => !!v || 'Name is required',
            v => (v && v.length <= 10) || 'Name must be less than 10 characters',
        ],
        email: '',
        emailRules: [
            v => !!v || 'E-mail is required',
            v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
        ],
        password: '',
        passwordRules: [
            value => !!value || 'Required.',
            v => v.length >= 8 || 'Min 8 characters',
            () => (`The email and password you entered don't match`),
        ],
        select: null,
        items: [
            'Item 1',
            'Item 2',
            'Item 3',
            'Item 4',
        ],
        checkbox: false,
    }),
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
    },
}
</script>

<style scoped>
</style>
