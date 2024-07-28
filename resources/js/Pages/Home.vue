<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
defineProps({
    pessoas: Array,
});
</script>

<template>
    <AppLayout title="Consulta de Pessoas">
        <v-main>
            <v-container :title="title">
                <v-row>
                    <v-text-field
                        clearable
                        label="Buscar"
                        prepend-icon="mdi-magnify"
                        variant="outlined"
                        v-model="query"
                        @input="handleInput"
                        placeholder="Ex.: Nome, CPF, Nº de Cadastro"
                    >
                    </v-text-field>
                </v-row>
                <v-row>
                    <v-data-table :items="pessoas"></v-data-table>
                </v-row>
            </v-container>
        </v-main>
    </AppLayout>
</template>
