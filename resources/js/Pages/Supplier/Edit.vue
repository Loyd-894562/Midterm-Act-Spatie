<script setup>
    import Sidebar from '@/Layouts/Sidebar.vue'
    import { useForm } from '@inertiajs/vue3';
    import { Head } from '@inertiajs/vue3';

    let props = defineProps({
        suppliers : Object
    })


    const form = useForm({
        name: props.suppliers.name,
        contact_no: props.suppliers.contact_no,
        email: props.suppliers.email,
        address: props.suppliers.address,

    })


    const submit = () =>{
        form.put('/suppliers/' + props.suppliers.id)
        form.name = ""
        form.contact_no = ""
        form.email = ""
        form.address = ""
    }
</script>

<template>
     <Head title="Create Supplier" />
      <Sidebar>
        <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Supplier</h2>
        </template>

        <div class="py-6">
            <div class="flex flex-col justify-center items-center">
                <div class="relative flex flex-col items-center rounded-[20px] w-[500px] max-w-[95%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
                    <div class="mt-5 mb-10 w-full  rounded-sm px-4">
                        <form class="mt-6" @submit.prevent="submit">
                            <div class="flex justify-between gap-3">
                              <span class="w-1/2">
                                <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Name</label>
                                <input id="name" v-model="form.name" type="text" name="name"   class="block w-full p-3 mt-2 text-gray-700 " required />
                              </span>
                              <span class="w-1/2">
                                <label for="contact_no" class="block text-xs font-semibold text-gray-600 uppercase">contact_no</label>
                                <input v-model="form.contact_no" id="contact_no" type="number" name="contact_no" placeholder="" class="block w-full p-3 mt-2 text-gray-700" required />
                              </span>
                            </div>
                            <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                            <input id="email" v-model="form.email" type="email" name="email"   class="block w-full p-3 mt-2 text-gray-700" required />
                            <label for="address" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Address</label>
                            <input id="address" v-model="form.address" type="text" name="address" placeholder=""  class="block w-full p-3 mt-2 text-gray-700" required />
                            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                              Save
                            </button>

                          </form>
                    </div>
                </div>
            </div>

        </div>

      </Sidebar>

</template>
