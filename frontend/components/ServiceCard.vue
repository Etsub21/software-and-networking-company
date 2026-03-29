<script setup>
defineProps({
  title: String,
  description: String,
  icon: String
})
</script>

<template>
  <div class="service-card">
    <div class="icon">{{ icon }}</div>
    <h3>{{ title }}</h3>
    <p>{{ description }}</p>
  </div>
</template>

<style scoped>
.service-card {
  padding: 2rem;
  border: 1px solid #eee;
  border-radius: 8px;
  transition: transform 0.3s ease;
  background: white;
}
.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.05);
}
.icon { font-size: 2rem; margin-bottom: 1rem; }
h3 { color: #2c3e50; margin-bottom: 0.5rem; }
p { color: #666; line-height: 1.6; }
</style>