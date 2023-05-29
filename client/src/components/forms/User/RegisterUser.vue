<template>
    <q-page>
      <q-form @submit.prevent="registerUser">
        <q-input v-model="name" label="Name" required></q-input>
        <q-input v-model="email" label="Email" type="email" required></q-input>
        <q-input v-model="password" label="Password" type="password" required></q-input>
        <q-input v-model="confirmPassword" label="Confirm Password" type="password" required></q-input>
        <q-btn type="submit" label="Register"></q-btn>
      </q-form>
    </q-page>
  </template>
  
  <script>
  import { defineComponent } from 'vue'

  export default defineComponent({
    data () {
      return {
        name: '',
        email: '',
        password: '',
        confirmPassword: ''
      }
    },
    methods: {
      registerUser () {
        // TODO: Implement user registration logic
      }
    }
  }
  </script>
  