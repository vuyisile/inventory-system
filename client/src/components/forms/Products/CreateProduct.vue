<template>
    <div class="q-pa-md">
        <q-form @submit.prevent="submitForm">
            <q-input v-model="product_name" label="Product Name" required />
            <q-input v-model="product_code" label="Product Code/UPC" required />
            <q-input v-model="description" label="Description" />
            <q-input v-model="quantity_on_hand" label="Quantity on Hand" required />
            <q-input v-model="reorder_level" label="Reorder Level" required />
            <q-input v-model="cost" label="Cost" required />
            <q-input v-model="selling_price" label="Selling Price" required />
            <q-input v-model="supplier_information" label="Supplier Information" />
            <q-input v-model="location" label="Location" required />
            <q-date v-model="date_received" label="Date Received" required />
            <q-input v-model="sales_channel" label="Sales Channel" />
            <q-input v-model="sales_order_number" label="Sales Order Number" />
            <q-input v-model="serial_number" label="Serial Number" />
            <q-btn type="submit" label="Submit" class="q-mt-md" />
        </q-form>
    </div>
</template>
  
<script>
import { defineComponent } from 'vue';
import { saveNewProduct } from '../../../http/index';
export default defineComponent({
    data() {
        return {
            product_name: '',
            product_code: '',
            description: '',
            quantity_on_hand: '',
            reorder_level: '',
            cost: '',
            selling_price: '',
            supplier_information: '',
            location: '',
            date_received: '',
            sales_channel: '',
            sales_order_number: '',
            serial_number: ''
        }
    },
    methods: {
        submitForm() {
            const formData = {
                name: this.product_name,
                code: this.product_code,
                description: this.description,
                quantity_on_hand: this.quantity_on_hand,
                reorder_level: this.reorder_level,
                cost: this.cost,
                selling_price: this.selling_price,
                supplier_information: this.supplier_information,
                location: this.location,
                date_received: this.date_received,
                sales_channel: this.sales_channel,
                sales_order_number: this.sales_order_number,
                serial_number: this.serial_number,
            }
            // Send form data to server using Axios or other HTTP library
            saveNewProduct(formData);
        }
    }
}
</script>
  