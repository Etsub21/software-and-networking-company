<script setup>
// State to track if the overlay is visible
const isMenuOpen = ref(false);

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};

// Services Data
const homeServices = [
  { icon: '💻', title: 'Web Development', desc: 'High-performance web applications built with Vue, Nuxt, and Laravel.' },
  { icon: '📱', title: 'Mobile Apps', desc: 'Native-feel mobile experiences for iOS and Android platforms.' },
  { icon: '☁️', title: 'Cloud Solutions', desc: 'Scalable infrastructure and API integrations for modern businesses.' }
];
</script>

<template>
  <div class="home-wrapper">
    
    <header class="hero-section">
      <div class="hero-overlay"></div>
      <div class="hero-content">
        <h1 class="main-title">Building the Digital Future</h1>
        <p class="sub-title">Custom software solutions tailored to your business needs.</p>
        
        <div class="button-group">
          <NuxtLink to="/contact" class="btn btn-primary">Start a Project</NuxtLink>
          <button @click="toggleMenu" class="btn btn-outline">Explore Site Map</button>
        </div>
      </div>
    </header>

    <Transition name="fade">
      <div v-if="isMenuOpen" class="site-overlay">
        <div class="overlay-inner">
          <button @click="toggleMenu" class="close-x">×</button>
          <p class="overlay-label">Quick Navigation</p>
          <nav class="overlay-nav">
            <NuxtLink to="/" @click="toggleMenu">Home</NuxtLink>
            <NuxtLink to="/services" @click="toggleMenu">Services</NuxtLink>
            <NuxtLink to="/about" @click="toggleMenu">About Us</NuxtLink>
            <NuxtLink to="/contact" @click="toggleMenu">Contact</NuxtLink>
          </nav>
        </div>
      </div>
    </Transition>

    <section class="expertise-section">
      <div class="container">
        <h2 class="section-title">Our Expertise</h2>
        <div class="services-grid">
          <div v-for="service in homeServices" :key="service.title" class="service-card">
            <span class="service-icon">{{ service.icon }}</span>
            <h3>{{ service.title }}</h3>
            <p>{{ service.desc }}</p>
          </div>
        </div>
      </div>
    </section>

  </div>
</template>

<style scoped>
/* Reset and Container */
.home-wrapper {
  font-family: 'Inter', system-ui, sans-serif;
  color: #1e293b;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Hero Styles */
.hero-section {
  position: relative;
  height: 70vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
  color: white;
  overflow: hidden;
}

.hero-content {
  position: relative;
  z-index: 2;
  padding: 20px;
}

.main-title {
  font-size: clamp(2.5rem, 5vw, 4.5rem);
  font-weight: 800;
  margin-bottom: 1rem;
  letter-spacing: -1px;
}

.sub-title {
  font-size: 1.25rem;
  opacity: 0.9;
  margin-bottom: 2.5rem;
  max-width: 600px;
  margin-inline: auto;
}

/* Button UI Fixes */
.button-group {
  display: flex;
  gap: 15px;
  justify-content: center;
  flex-wrap: wrap;
}

.btn {
  padding: 16px 32px;
  border-radius: 12px;
  font-weight: 700;
  text-decoration: none;
  font-size: 1rem;
  transition: all 0.3s ease;
  cursor: pointer;
}

.btn-primary {
  background: #3b82f6;
  color: white;
  border: none;
  box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.3);
}

.btn-primary:hover {
  background: #2563eb;
  transform: translateY(-2px);
}

.btn-outline {
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.3);
  color: white;
}

.btn-outline:hover {
  background: rgba(255, 255, 255, 0.1);
  border-color: white;
}

/* Services Grid */
.expertise-section {
  padding: 80px 0;
  background: #f8fafc;
}

.section-title {
  text-align: center;
  font-size: 2.25rem;
  margin-bottom: 50px;
  color: #0f172a;
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
}

.service-card {
  background: white;
  padding: 40px;
  border-radius: 20px;
  border: 1px solid #e2e8f0;
  transition: all 0.3s ease;
}

.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
}

.service-icon {
  font-size: 2.5rem;
  display: block;
  margin-bottom: 20px;
}

/* Overlay Navigation */
.site-overlay {
  position: fixed;
  inset: 0;
  background: #0f172a;
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
}

.overlay-nav {
  display: flex;
  flex-direction: column;
  gap: 20px;
  text-align: center;
}

.overlay-nav a {
  color: white;
  font-size: 3rem;
  font-weight: 800;
  text-decoration: none;
  transition: color 0.3s;
}

.overlay-nav a:hover {
  color: #3b82f6;
}

.close-x {
  position: absolute;
  top: 40px;
  right: 40px;
  font-size: 3rem;
  color: white;
  background: none;
  border: none;
  cursor: pointer;
}

/* Animations */
.fade-enter-active, .fade-leave-active { transition: opacity 0.3s; }
.fade-enter-from, .fade-leave-to { opacity: 0; }
</style>