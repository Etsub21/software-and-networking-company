<script setup>
const formData = ref({
  name: '',
  email: '',
  message: ''
});

const statusMessage = ref('');
const fieldErrors = ref({}); // To store specific errors for each input

const submitForm = async () => {
  statusMessage.value = 'Sending...';
  fieldErrors.value = {}; // Reset errors

  const { data, error } = await useFetch('http://localhost:8000/api/inquiry', {
    method: 'POST',
    body: formData.value
  });

  if (error.value) {
    if (error.value.statusCode === 422) {
      // Capture the Laravel validation object
      fieldErrors.value = error.value.data.errors;
      statusMessage.value = 'Please fix the errors below.';
    } else {
      statusMessage.value = 'An unexpected error occurred.';
    }
  } else {
    statusMessage.value = 'Success! Your message was sent.';
    // Clear form
    formData.value = { name: '', email: '', message: '' };
  }
};
</script>

<template>
  <form @submit.prevent="submitForm">
    <div>
      <input v-model="formData.name" placeholder="Name" />
      <span v-if="fieldErrors.name" class="error">{{ fieldErrors.name[0] }}</span>
    </div>

    <div>
      <input v-model="formData.email" placeholder="Email" />
      <span v-if="fieldErrors.email" class="error">{{ fieldErrors.email[0] }}</span>
    </div>

    <button type="submit">Submit</button>
    <p>{{ statusMessage }}</p>
  </form>
</template>

<style scoped>
.error { color: red; font-size: 0.8rem; }
</style>