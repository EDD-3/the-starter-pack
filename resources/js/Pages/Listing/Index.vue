<template>
  <div v-for="listing in listings" :key="listing.id">
    <div>
      <Link :href="route('listing.show', {listing:listing.id})">
        <ListingAddress :listing="listing" />
      </Link>
    </div>
    <Link :href="route('listing.edit', {listing:listing.id})" as="button"> Edit </Link>
    <Link :href="route('listing.destroy', {listing:listing.id})" method="DELETE" as="button">Delete</Link>
  </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import ListingAddress from '@/Components/ListingAddress.vue'

defineProps({
  listings: Array,
})

</script>