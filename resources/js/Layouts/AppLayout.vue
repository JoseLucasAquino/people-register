<script setup>
import { ref } from "vue";
import { Head, Link, router } from "@inertiajs/vue3";

defineProps({
    title: String,
});
</script>
<template>
    <v-responsive class="border rounded fill-height">
        <v-app>
            <v-app-bar class="bg-surface-variant" title="Cadastro de Pessoas">
                
            </v-app-bar>
            <slot></slot>
        </v-app>
    </v-responsive>
</template>
