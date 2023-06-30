<template>
<Link href="/">Main Page</Link>&nbsp;
<Link href="/hello">Show Page</Link>

<div>The page with {{ timer }}</div>
<slot>Default</slot>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3';
import {ref} from 'vue';

//Declaring and initializing a reactive 
//Proxy object
const timer = ref(0);
setInterval(() => timer.value++, 1000);
</script>