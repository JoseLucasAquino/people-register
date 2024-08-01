<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useForm } from "@inertiajs/vue3";
import { reactive, ref } from "vue";


const valid = ref(false);
/* const nome = ref("");
const nomeSocial = ref("");
const cpf = ref("");
const nomePai = ref("");
const nomeMae = ref("");
const telefone = ref("");
const email = ref(""); */
const rules = reactive({
    required: (value) => !!value || "Obrigatório.",
    cpf: (value) => /^\d{11}$/.test(value) || "CPF Inválido",
    telefone: (value) =>
        /^\d{11}$/.test(value) || "Telefone Inválido",
    email: (value) =>
        /.+@.+\..+/.test(value) || value + " Não é um E-mail válido.",
});

const form = useForm({
    nome: '',
    nome_social: '',
    cpf: '',
    nome_pai: '',
    nome_mae: '',
    telefone: '',
    email: '',
});
</script>

<template>
    <AppLayout>
        <v-main>
            <v-container>
                <v-form @submit.prevent="form.post('/pessoas')" v-model="valid">
                    <v-text-field
                        v-model="form.nome"
                        :rules="[rules.required]"
                        label="Nome"
                        required
                    ></v-text-field>

                    <v-text-field
                        v-model="form.nome_social"
                        label="Nome Social"
                    ></v-text-field>

                    <v-text-field
                        v-model="form.cpf"
                        :rules="[rules.required, rules.cpf]"
                        label="CPF"
                        required
                    ></v-text-field>

                    <v-text-field
                        v-model="form.nome_pai"
                        label="Nome do Pai"
                    ></v-text-field>

                    <v-text-field
                        v-model="form.nome_mae"
                        label="Nome da Mãe"
                    ></v-text-field>

                    <v-text-field
                        v-model="form.telefone"
                        :rules="[rules.required, rules.telefone]"
                        label="Telefone"
                        required
                    ></v-text-field>

                    <v-text-field
                        v-model="form.email"
                        :rules="[rules.required, rules.email]"
                        label="Email"
                        required
                    ></v-text-field>

                    <v-btn type="submit" :disabled="!valid">Submit</v-btn>
                </v-form>
            </v-container>
        </v-main>
    </AppLayout>
</template>
