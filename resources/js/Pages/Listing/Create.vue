<template>
  <form @submit.prevent="create">
    <div>
      <div>
        <label>Beds</label>
        <input v-model.number="form.beds" type="text" />
      </div>
  
      <div>
        <label>Baths</label>
        <input v-model.number="form.baths" type="text" />
      </div>
  
      <div>
        <label>Area</label>
        <input v-model.number="form.area" type="text" />
      </div>
  
      <div>
        <label>City</label>
        <input v-model="form.city" type="text" />
      </div>
  
      <div>
        <label>Post Code</label>
        <input v-model="form.code" type="text" />
      </div>
  
      <div>
        <label>Street</label>
        <input v-model="form.street" type="text" />
      </div>
  
      <div>
        <label>Street Nr</label>
        <input v-model.number="form.street_nr" type="text" />
      </div>
  
      <div>
        <label>Price</label>
        <input v-model.number="form.price" type="text" />
      </div>
  
      <div>
        <button type="submit">Create</button>
      </div>
    </div>
  </form>
</template>

<script setup>
//Reactive is just like ref, only difference is that ref is for primitive data types or single values
//Reactive is used for Objects
/**  const form = reactive({
  beds:0,
  baths: 0,
  area: 0,
  city: null,
  street: null,
  code: null,
  street_nr: 0,
  price:0,
})*/
import {useForm} from '@inertiajs/inertia-vue3'
const form = useForm({
  beds:0,
  baths: 0,
  area: 0,
  city: null,
  street: null,
  code: null,
  street_nr: 0,
  price:0,
})

const create = () => form.post('/listing', form)

//Losing reactivity
// const x = form.bed
</script>
  
  <style scoped>
  label {
    margin-right: 2em;
  }
  
  div {
    padding: 2px
  }
  </style>