<script setup>
    import { Link } from '@inertiajs/vue3';
    import { defineProps } from 'vue';
    defineProps({
    collapse:Boolean
  })

</script>

<template>

<div class="main-nav" :class="collapse">
    <Link href="/dashboard" class="ml-0" >
        <i class="fa fa-home"></i>
         <span v-show="!collapse" class="ml-2">Dashboard</span>
    </Link>
    <Link href="/clients">
        <i class="fa-solid fa-address-book"></i>
        <span v-show="!collapse" class="ml-2">Client List</span>
    </Link>
    <Link href="/suppliers">
        <i class="fa-solid fa-briefcase"></i>
        <span v-show="!collapse" class="ml-2">Suppliers</span>
    </Link>
    <Link href="/products" >
        <i class="fa-brands fa-product-hunt"></i>
        <span v-show="!collapse" class="ml-2">Products</span>
    </Link>
    <Link href="/users" v-if="$page.props.auth.permissions.includes('manage-users')">
        <i class="fa-regular fa-user"></i>
        <span v-show="!collapse" class="ml-2">Users</span>
    </Link>
</div>

</template>
