<template>
    <q-page class="login-page">
        <q-card>
            <q-card-section>
                <q-form @submit.prevent="login">
                    <q-input outlined v-model.trim="email" label="Email" type="email"
                        :rules="[val => !!val || 'Please enter your email']" />

                    <q-input outlined v-model="password" label="Password" type="password"
                        :rules="[val => !!val || 'Please enter your password']" />

                    <q-checkbox v-model="rememberMe" label="Remember me" />

                    <q-btn color="primary" type="submit" :disable="submitting" :loading="submitting"
                        :label="submitting ? 'Logging in...' : 'Log in'" />
                </q-form>
            </q-card-section>
        </q-card>
    </q-page>
</template>
  
<script>
  import { defineComponent } from 'vue'

export default defineComponent({
    data() {
        return {
            email: '',
            password: '',
            rememberMe: false,
            submitting: false
        }
    },

    methods: {

    }
}
</script>
  