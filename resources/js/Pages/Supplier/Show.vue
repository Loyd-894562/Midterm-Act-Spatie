<script setup>
import Sidebar from '@/Layouts/Sidebar.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    suppliers: Object
})

const page = usePage()

const user = computed(() => page.props.auth.user)
</script>
<template>
    <Head title="View Supplier" />

    <Sidebar>
        <template #header>
            <div class="flex">
                <h2 class="flex-1 font-semibold text-xl text-gray-800 leading-tight">View Supplier | {{ suppliers.name }}</h2>
                <Link class="px-4 py-2 bg-gray-100 shadow border-gray-300 border hover:bg-white rounded" as="button" :href="'/suppliers'">Back</Link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="p-6 text-gray-900 flex">
                       <img src="data:image/png;base64,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" alt="Profile pic" class="aspect-square w-[40%] object-cover mb-4">
                        <div class="flex-1 ml-4">
                            <div class="flex">
                                <h3 class="text-2xl flex-1">Name: {{ suppliers.name }}</h3>
                                <!-- <div>
                                    <Link class="px-4 py-2 bg-red-600 text-white rounded shadow hover:bg-red-700 mr-2 mb-2" :href="'/suppliers/' + suppliers.id" method="delete" as="button">Delete</Link>
                                    <Link class="px-4 py-2 bg-blue-600 rounded shadow hover:bg-blue-700" :href="'/suppliers/edit/' + suppliers.id" as="button">Edit</Link>
                                </div> -->
                            </div>
                            <hr>
                            <div class="mt-4"> Email: {{ suppliers.email }}</div>
                            <div> Contact no: {{ suppliers.contact_no }}</div>
                            <div class="py-4"> Address: {{ suppliers.address }}</div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Sidebar>
</template>


