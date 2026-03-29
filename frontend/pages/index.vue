<template>
  <div class="home-container">
    <section class="hero">
      <h1>Building the Digital Future</h1>
      <p>Custom software solutions tailored to your business needs.</p>
      <NuxtLink to="/contact" class="cta-button">Start a Project</NuxtLink>
    </section>

    <section class="services">
      <h2>Our Expertise</h2>
      <div class="services-grid">
        <ServiceCard 
          icon="💻" 
          title="Web Development" 
          description="High-performance web applications built with Vue, Nuxt, and Laravel." 
        />
        <ServiceCard 
          icon="📱" 
          title="Mobile Apps" 
          description="Native-feel mobile experiences for iOS and Android platforms." 
        />
        <ServiceCard 
          icon="☁️" 
          title="Cloud Solutions" 
          description="Scalable infrastructure and API integrations for modern businesses." 
        />
      </div>
    </section>
  </div>
</template>

<style scoped>
.hero {
  text-align: center;
  padding: 100px 20px;
  background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
  color: white;
}

.hero h1 { font-size: 3rem; margin-bottom: 1rem; }
.hero p { font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9; }

.cta-button {
  background: #fbbf24;
  color: #1e3a8a;
  padding: 12px 30px;
  border-radius: 50px;
  text-decoration: none;
  font-weight: bold;
  font-size: 1.1rem;
}

.services {
  max-width: 1200px;
  margin: 0 auto;
  padding: 80px 20px;
}

.services h2 {
  text-align: center;
  margin-bottom: 40px;
  font-size: 2rem;
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
}
</style>