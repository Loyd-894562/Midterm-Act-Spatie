<script setup>

    const props = defineProps({
        client: Object
    })
</script>
<template>
    <div class="mx-auto w-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-2">
        <div class=" flex flex-col items-center pb-10 m-2" >
            <img class=" mt-3 w-24 h-24 mb-3 rounded-full shadow-lg" src="https://i.pinimg.com/236x/bc/9f/e8/bc9fe8f89b4faca289355ed948f3a165.jpg" alt="Bonnie image"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ client.first_name }} {{ client.last_name }}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ client.address }}</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ client.phone }}</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">Level : {{ client.level }}</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</a>
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-red-200 dark:bg-red-800 dark:text-white dark:border-red-600 dark:hover:bg-red-700 dark:hover:border-red-700 dark:focus:ring-red-700">Delete</a>
            </div>
        </div>
    </div>
                
    

</template>