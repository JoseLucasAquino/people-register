<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <AppLayout title="Consulta de Pessoas">
        <v-main>
            <v-container :title="title">
                <v-container>
                    <v-row>
                        <v-text-field
                            clearable
                            label="Buscar"
                            prepend-icon="mdi-magnify"
                            variant="outlined"
                        >
                        </v-text-field>
                    </v-row>
                </v-container>
            </v-container>
        </v-main>
    </AppLayout>
</template>
