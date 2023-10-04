<script setup>
    import Sidebar from '@/Layouts/Sidebar.vue'
    import { useForm } from '@inertiajs/vue3';
    import { Head, Link } from '@inertiajs/vue3';

    const form = useForm({
        name: props.products.name,
        qty: props.products.qty,

    })

    let props = defineProps({
        products: Object
    })
    const submit = () =>{
        form.put('/products/' + props.products.id)
        form.name = ""
        form.qty = ""

    }
</script>

<template>
     <Head title="Create Product" />
      <Sidebar>
        <template #header>
          <div class="flex">
                <h2 class="flex-1 font-semibold text-xl text-gray-800 leading-tight">Update Product | {{ products.name }}</h2>
                <Link class="px-4 py-2 bg-gray-100 shadow border-gray-300 border hover:bg-white rounded" as="button" :href="'/products'">Back</Link>
            </div>
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
                                <label for="qty" class="block text-xs font-semibold text-gray-600 uppercase">qty</label>
                                <input v-model="form.qty" id="qty" type="number" name="qty" placeholder="" class="block w-full p-3 mt-2 text-gray-700" required />
                              </span>
                            </div>
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
