<script setup>
    import Sidebar from '@/Layouts/Sidebar.vue'
    import { useForm } from '@inertiajs/vue3';
    import { Head } from '@inertiajs/vue3';

    const form = useForm({
        name: '',
        qty: '',
      
      
    })
</script>

<template>
     <Head title="Create Supplier" />
      <Sidebar>
        <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Product</h2>
        </template>

        <div class="py-12">
            <div class="flex justify-center items-center">
                <div class="w-11/12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
       
                    <form class="w-full max-w-lg mt-5">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                                Name
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Qty
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-contact_no" type="number" placeholder="">
                            </div>
                        </div>
                       
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Button
                        </button>
                </form>
        </div>
      </div>
        <div>

        </div>
        </div>
        
      </Sidebar>
   
</template>