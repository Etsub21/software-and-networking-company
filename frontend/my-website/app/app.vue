<script setup>
// 1. Get the API base from our config
const config = useRuntimeConfig()
</script>
// 2. Fetch data from your Laravel API
// Replace '/posts' with your actual Laravel route (e.g., '/users' or '/products')
const { data: items, pending, error } = await useFetch(`${config.public.apiBase}/posts`)
<template>
  <div>
    <header>
      <nav>
        <NuxtLink to="/">Home</NuxtLink> | 
        <NuxtLink to="/about">About</NuxtLink>
      </nav>
    </header>

    <NuxtPage />
  </div>
</template>

<style scoped>
div { font-family: sans-serif; padding: 20px; }
nav { border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 20px; }
a { margin-right: 10px; text-decoration: none; color: #00dc82; font-weight: bold; }
</style>