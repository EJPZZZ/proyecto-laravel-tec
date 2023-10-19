<script setup>
import HomeLayouts from '@/Layouts/HomeLayouts.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
    notification: {
        type: Boolean,
    },
    notification_message:{
        type : String,
    }
});
</script>

<template>
    <Head title="Welcome" />
    <HomeLayouts>
        <h1>Welcome</h1>
        
    </HomeLayouts>
</template>


