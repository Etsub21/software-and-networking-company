<script setup>
const form = {
  name: '',
  email: '',
  message: ''
};
const status = ref('');
async function sendInquiry() {
    const { data, error } = await useFetch('http://127.0.0.1:8000/api/inquiry',{
        method: 'POST',
        body: form.value
    })
    if (!error.value) status.value ="success! Message sent."
}</script> 
<template>
    <div class="p-10">
        <h2>Contact Us</h2>
        <form @submit.prevent="sendInquiry">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" v-model="form.name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" v-model="form.email" required>
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea id="message" v-model="form.message" required></textarea>
            </div>
            <button type="submit">Send Inquiry</button>
        </form>
        <p v-if="status">{{ status }}</p>
    </div>
</template>
    
