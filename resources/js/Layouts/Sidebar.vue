<script setup>
    import MainNav from '@/Components/MainNav.vue'
    import { ref } from 'vue';
    import { Link } from '@inertiajs/vue3';

    const showingNavigationDropdown = ref(false);

    let width = ref('w-[250px]')
    let hidden = ref("")
    let isCollapsed = ref(false)

    function toggleWidth() {
        if(width.value == 'w-[250px]') {
            width.value = 'w-[70px]'
            hidden.value = "hidden"
            isCollapsed.value =!isCollapsed.value

        }else {
            width.value = ['w-[250px]']
            hidden.value = ""
            isCollapsed.value =!isCollapsed.value

        }
    }
</script>

<template>

<div class="flex min-h-screen">
    <div id="sidebar" class="bg-purple-900 p-6 duration-500" :class="width" style="position: relative;">
        <button class="text-xl text-tahiti" @click="toggleWidth" style="position: absolute; right: 10px; top:10px">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div id="branding" :class="hidden">
            <img src="/images/logo.png" alt="Logo"
                class="w-[170px] h-[170px] mx-auto rounded-full object-cover">
            <h1 class="text-3xl text-center text-white my-6">Eunizel Gabas</h1>

        </div>
        <MainNav :collapse="isCollapsed"/>
        
    </div>
    
    <div id="container" class="flex-1 ">
        
        <header class="bg-white shadow" v-if="$slots.header">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <slot name="header" />
            </div>
        </header>

            <!-- Page Content -->
        <main>
            <slot />
        </main>
    </div>
</div>

</template>