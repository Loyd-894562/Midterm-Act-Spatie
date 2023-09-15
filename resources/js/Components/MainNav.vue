<script setup>
    import { Link } from '@inertiajs/vue3';
    import { defineProps } from 'vue';
    defineProps({
    collapse:Boolean
  })

</script>

<template>

<div class="main-nav" :class="collapse">
    <Link href="/dashboard" class="ml-0">
        <i class="fa fa-home"></i>
         <span v-show="!collapse" >Dashboard</span> 
    </Link>
    <Link href="/clients">
        <i class="fa-solid fa-address-book"></i>
        <span v-show="!collapse">Client List</span> 
    </Link>
</div>

</template>
