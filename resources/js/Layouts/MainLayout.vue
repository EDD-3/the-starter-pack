<template>
  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full"> 
    <div class="container mx-auto"> 
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link href="route('listing.index')">Listings</Link>&nbsp;
        </div>
        <div class="text-xl text-indigo-900 dark:text-indigo-600 ">  
          <Link href="route('listing.index')">LaraZillow</Link>
        </div>
        <div>          
          <Link href="route('listing.create') " class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">+ New Listing</Link>
        </div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm bprder-green-200 bg-green-50 p-2 dark:border-green-800 dark:bg-green-800">
      {{ flashSuccess }}
    </div>
    <slot>Default</slot>
  </main>
</template>

<script setup>
import {Link, usePage} from '@inertiajs/inertia-vue3'
import {computed} from 'vue'

// page.props.value.flash.success
const page = usePage()
//Using a computed property
const flashSuccess = computed(() => page.props.value.flash.success )
// import {ref} from 'vue'

//Declaring and initializing a reactive 
//Proxy object
// const timer = ref(0)
// setInterval(() => timer.value++, 1000)
</script>

<style scoped>
.success {
  background-color: green;
  color: white;
}
</style>