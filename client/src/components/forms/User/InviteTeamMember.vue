<template>
    <q-page class="invite-member-page">
      <q-form class="q-gutter-md" @submit="inviteMember">
        <q-input
          outlined
          v-model.trim="form.email"
          label="Email address"
          type="email"
          :rules="[val => !!val || 'Email is required', val => validateEmail(val) || 'Invalid email format']"
        />
        <q-select
          outlined
          v-model="form.role"
          label="Select a role"
          :options="roles"
          :rules="[val => !!val || 'Role is required']"
        />
        <q-btn
          color="primary"
          type="submit"
          :disable="!form.email || !form.role"
          :loading="isLoading"
          label="Invite"
        />
      </q-form>
    </q-page>
  </template>
  
  <script>
import { defineComponent } from 'vue'

  export default defineComponent({
    data() {
      return {
        form: {
          email: '',
          role: '',
        },
        roles: ['Admin', 'Sales', 'Manager'],
        isLoading: false,
      }
    },
    methods: {
      inviteMember() {
        this.isLoading = true;
        var company = 'auth.user.company';
        // Your invite member logic here
      },
      validateEmail(email) {
        // Email validation logic here
      },
    },
  }
  </script>
  