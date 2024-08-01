<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { ref, watch } from "vue";
import { useRoute } from "vue-router";
defineProps({
    pessoas: Array,
    error: Boolean,
    success: Boolean,
    message: String,
});

const consulta = ref('')
const searchedPessoas = ref(null)
const createPessoaRota = ref('/create-pessoa')

//const route = useRoute()

async function search() {
    if (consulta.value) {
        try {
            const pessoasRequest = await axios.get("/search-pessoa", {
                params: { busca: consulta.value },
            });
            searchedPessoas.value = pessoasRequest.data;
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    } else {
        searchedPessoas.value = [];
    }
}

watch(consulta, search);

</script>

<template>
    <AppLayout title="Consulta de Pessoas">
        <v-main>
            <v-container :title="title">
                <v-alert closable v-if="$page.props.flash.result.error" title="Erro" color="red-lighten-1">
                    {{ $page.props.flash.result.message }}
                </v-alert>
                <v-alert closable v-if="$page.props.flash.result.success" title="Sucesso" color="green-lighten-1">
                    {{ $page.props.flash.result.message }}
                </v-alert>
                <v-row class="d-flex justify-end pa-6">
                    <v-btn rounded="lg" append-icon="mdi-account-circle" :href="createPessoaRota">Cadastrar</v-btn>
                </v-row>
                <v-row>
                    <v-text-field
                        clearable
                        label="Buscar"
                        prepend-icon="mdi-magnify"
                        variant="outlined"
                        v-model="consulta"
                        @input="handleInput"
                        placeholder="Ex.: Nome, CPF, Nº de Cadastro"
                    >
                    </v-text-field>
                </v-row>
                <v-row>
                    <v-data-table v-if="!searchedPessoas" :items="pessoas"></v-data-table>
                    <v-data-table v-else :items="searchedPessoas"></v-data-table>
                </v-row>
            </v-container>
        </v-main>
    </AppLayout>
</template>
