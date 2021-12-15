<template>
    <app-layout>
        <bread-crumbs name="Create person" :items="items"></bread-crumbs>
        <v-container>
            <v-row>

                <v-col class="col col-12">
                    <v-alert
                        v-if="$page.errors.document_number"
                        text
                        prominent
                        type="error"
                        icon="mdi-alert"
                        dismissible
                    >
                        {{ $page.errors.document_number[0] }}
                    </v-alert>

                    <v-alert
                        v-if="$page.errors.email"
                        text
                        prominent
                        type="error"
                        icon="mdi-alert"
                        dismissible
                    >
                        {{ $page.errors.email[0] }}
                    </v-alert>
                    <v-alert
                        v-if="$page.errors.phone"
                        text
                        prominent
                        type="error"
                        icon="mdi-alert"
                        dismissible
                    >
                        {{ $page.errors.phone[0] }}
                    </v-alert>

                    <v-card class="shadow-sm br-8"
                            style="max-width: 100%;">
                        <div class="pa-5">
                            <v-form @submit.prevent="save"
                                    ref="form"
                                    v-model="valid">
                                <v-row>
                                    <v-col class="col-lg-6 col-12">
                                        <p class="text-14 mb-1">First Name</p>
                                        <v-text-field
                                            v-model="form.firstName"
                                            outlined
                                            dense
                                            required
                                        ></v-text-field>
                                    </v-col>
                                    <div class="col-lg-6 col-12">
                                        <p class="text-14 mb-1">Last Name</p>
                                        <v-text-field
                                            v-model="form.lastName"
                                            outlined
                                            dense
                                            required
                                        ></v-text-field>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <p class="text-14 mb-1">Document number</p>
                                        <v-text-field
                                            type="number"
                                            v-model="form.documentNumber"
                                            outlined
                                            dense
                                            required
                                            :rules="[rules.required, rules.max10,rules.min8,]"
                                        ></v-text-field>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <p class="text-14 mb-1">Email</p>
                                        <v-text-field
                                            type="email"
                                            v-model="form.email"
                                            outlined
                                            dense
                                            required
                                            :rules="[rules.required, rules.email]"
                                        ></v-text-field>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <p class="text-14 mb-1">Phone</p>
                                        <v-text-field
                                            type="tel"
                                            v-model="form.phone"
                                            outlined
                                            dense
                                            required
                                            :rules="[rules.required, rules.phone]"
                                        ></v-text-field>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <p class="text-14 mb-1">Type of person</p>
                                        <v-select
                                            v-model="form.type"
                                            :items="['employee','supplier','customer']"
                                            dense
                                            outlined
                                            :rules="[rules.required,]"
                                        ></v-select>
                                    </div>
                                    <div class="col col-12">
                                        <v-btn @click="save" :disabled="!valid"
                                               class="text-capitalize font-600 primary"> Save Changes
                                        </v-btn>
                                    </div>
                                </v-row>
                            </v-form>
                        </div>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import BreadCrumbs from "@/components/BreadCrumbs";

export default {
    name: "Create",
    components: {
        AppLayout,
        BreadCrumbs,
    },
    props: {
        errors: Object,
    },
    data: () => ({
        valid: true,
        items: [
            {
                text: 'Dashboard',
                disabled: false,
                href: '/dashboard',
            },
            {
                text: 'Person',
                disabled: false,
                href: '/person',
            },
            {
                text: 'Create',
                disabled: true,
                href: '/person.create',
            },
        ],

        form: {
            firstName: null,
            lastName: null,
            documentNumber: null,
            email: null,
            phone: null,
            type: null,
        },
        rules: {
            required: value => !!value || 'Required.',
            counter: value => value.length <= 20 || 'Max 20 characters',
            max10: value => value.length <= 10 || 'Max 10 characters',
            min8: value => value.length >= 8 || 'Min 8 characters',
            phone: value => {
                //const pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/
                const pattern = /^\(?(\d{3})\)?[-. ]?(\d{3})[- ]?(\d{4})$/
                return pattern.test(value) || 'Invalid Phone.'
            },
            email: value => {
                const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                return pattern.test(value) || 'Invalid e-mail.'
            },
        },
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
        save() {
            let data = {
                first_name: this.form.firstName,
                last_name: this.form.lastName,
                document_number: this.form.documentNumber,
                type: this.form.type,
                email: this.form.email,
                phone: this.form.phone,
            }

            console.log(data);

            if (this.valid) {
                this.$inertia.post(route('person.update'), data, {
                    onSuccess: (function (response) {
                        console.log(response);
                    }),
                    onError: (function (error) {
                        console.log(error);
                    })
                })
            } else {
                this.$swal(
                    ''
                )
            }

        },
    },
}
</script>

<style scoped>

</style>
