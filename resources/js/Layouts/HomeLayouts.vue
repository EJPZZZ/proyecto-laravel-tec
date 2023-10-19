<script setup>
import Siderbar from '@/Components/Siderbar.vue';
import Navbar from '@/Components/Navbar.vue';
import Contact from '@/Components/Contact.vue'
</script>

<template>
    <div>
       <Siderbar />

       

       <Navbar />

      

       <Contact />
       
        <div class="absolute top-40 left-80">
            
        <slot />

        </div>
    </div>
</template>



