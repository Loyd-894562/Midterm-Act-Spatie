<script setup>
import Sidebar from '@/Layouts/Sidebar.vue';
import ClientCard from '@/Components/ClientCard.vue'
import Pagination from '@/Components/Pagination.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import { Head , Link} from '@inertiajs/vue3';

const props = defineProps({
    clients: Object
})
</script>

<template>
     <Head title="Client" />

    <div>
        <Sidebar>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Client List</h2>
            </template>

            <div class="py-12">
                <div class="flex justify-between">
                    <h1 class="text-3xl font-medium text-gray-700 "></h1>
                    <Link href="clients/create" class="btn-primary inline-flex items-center mr-20 px-2 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Create Client</Link>
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-wrap">


                    <ClientCard v-for=" client in props.clients.data" :client="client" :key="client.id"/>
                </div>
                <Pagination :links="clients.links" class="mt-6 text-center"/>
            </div>

        </Sidebar>


    </div>
</template>
