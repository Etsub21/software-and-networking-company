<script setup>
const formData = ref({
  name: '',
  email: '',
  message: ''
});

const statusMessage = ref('');
const fieldErrors = ref({});
const isSubmitting = ref(false);

const submitForm = async () => {
  isSubmitting.value = true;
  statusMessage.value = '';
  fieldErrors.value = {};

  try {
    const { data, error } = await useFetch('http://localhost:8000/api/inquiry', {
      method: 'POST',
      body: formData.value
    });

    if (error.value) {
      if (error.value.statusCode === 422) {
        fieldErrors.value = error.value.data.errors;
        statusMessage.value = 'Please check the highlighted fields.';
      } else {
        statusMessage.value = 'Server error. Please try again later.';
      }
    } else {
      statusMessage.value = 'Message sent successfully! We will be in touch.';
      formData.value = { name: '', email: '', message: '' };
    }
  } catch (err) {
    statusMessage.value = 'Connection failed.';
  } finally {
    isSubmitting.value = false;
  }
};
</script>

<template>
  <div class="contact-container">
    <div class="contact-grid">
      
      <div class="contact-info">
        <h2>Get in Touch</h2>
        <p>Have a project in mind? Let's discuss how we can help your business grow.</p>
        
        <div class="info-item">
          <span class="icon">📍</span>
          <div>
            <strong>Office</strong>
            <p>123 Tech Lane, Silicon Valley, CA</p>
          </div>
        </div>

        <div class="info-item">
          <span class="icon">✉️</span>
          <div>
            <strong>Email</strong>
            <p>hello@softwareco.com</p>
          </div>
        </div>
      </div>

      <div class="contact-form-card">
        <form @submit.prevent="submitForm">
          <div class="form-group">
            <label>Full Name</label>
            <input 
              v-model="formData.name" 
              type="text" 
              placeholder="John Doe"
              :class="{ 'input-error': fieldErrors.name }"
            />
            <span v-if="fieldErrors.name" class="error-text">{{ fieldErrors.name[0] }}</span>
          </div>

          <div class="form-group">
            <label>Email Address</label>
            <input 
              v-model="formData.email" 
              type="email" 
              placeholder="john@example.com"
              :class="{ 'input-error': fieldErrors.email }"
            />
            <span v-if="fieldErrors.email" class="error-text">{{ fieldErrors.email[0] }}</span>
          </div>

          <div class="form-group">
            <label>Message</label>
            <textarea 
              v-model="formData.message" 
              rows="5" 
              placeholder="Tell us about your project..."
              :class="{ 'input-error': fieldErrors.message }"
            ></textarea>
            <span v-if="fieldErrors.message" class="error-text">{{ fieldErrors.message[0] }}</span>
          </div>

          <button type="submit" :disabled="isSubmitting" class="submit-btn">
            {{ isSubmitting ? 'Sending...' : 'Send Message' }}
          </button>

          <p v-if="statusMessage" :class="['status-box', fieldErrors.name ? 'error-box' : 'success-box']">
            {{ statusMessage }}
          </p>
        </form>
      </div>

    </div>
  </div>
</template>

<style scoped>
.contact-container {
  max-width: 1100px;
  margin: 60px auto;
  padding: 0 20px;
}

.contact-grid {
  display: grid;
  grid-template-columns: 1fr 1.5fr;
  gap: 50px;
  background: white;
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

@media (max-width: 768px) {
  .contact-grid { grid-template-columns: 1fr; }
}

.contact-info h2 { color: #1e3a8a; font-size: 2rem; margin-bottom: 1rem; }
.info-item { display: flex; gap: 15px; margin-top: 25px; }
.icon { font-size: 1.5rem; }

.form-group { margin-bottom: 20px; }
label { display: block; margin-bottom: 8px; font-weight: 600; color: #444; }

input, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 8px;
  font-size: 1rem;
  transition: border-color 0.3s;
}

input:focus, textarea:focus {
  outline: none;
  border-color: #3b82f6;
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.input-error { border-color: #ef4444; }
.error-text { color: #ef4444; font-size: 0.85rem; margin-top: 5px; display: block; }

.submit-btn {
  width: 100%;
  padding: 14px;
  background: #1e3a8a;
  color: white;
  border: none;
  border-radius: 8px;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s;
}

.submit-btn:disabled { background: #94a3b8; cursor: not-allowed; }
.submit-btn:hover:not(:disabled) { background: #3b82f6; }

.status-box {
  margin-top: 20px;
  padding: 12px;
  border-radius: 8px;
  text-align: center;
}
.success-box { background: #dcfce7; color: #166534; }
.error-box { background: #fee2e2; color: #991b1b; }
</style>