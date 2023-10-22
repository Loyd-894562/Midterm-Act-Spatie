<script setup>
import Sidebar from '@/Layouts/Sidebar.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    users: Object
})

const page = usePage()

const user = computed(() => page.props.auth.user)
</script>
<template>
    <Head title="View User" />

    <Sidebar>
        <template #header>
            <div class="flex">
                <h2 class="flex-1 font-semibold text-xl text-gray-800 leading-tight">View User | {{ users.name }}</h2>
                <Link class="px-4 py-2 bg-gray-100 shadow border-gray-300 border hover:bg-white rounded" as="button" :href="'/users'">Back</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="p-6 text-gray-900 flex">
                       <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Profile pic" class="aspect-square w-[40%] object-cover mb-4">
                        <div class="flex-1 ml-4">
                            <div class="flex">
                                <h3 class="text-2xl flex-1">Name: {{ users.name }}</h3>
                            </div>
                            <hr>
                            <div class="mt-4"> Email: {{ users.email }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Sidebar>
</template>


