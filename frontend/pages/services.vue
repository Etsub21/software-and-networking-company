<template>
  <div class="services-page">
    <section class="services-hero">
      <h1>Our Services</h1>
      <p>We provide end-to-end digital transformation for modern enterprises.</p>
    </section>

    <section class="services-grid-section">
      <div class="container">
        <div class="grid">
          <ServiceCard 
            icon="🌐" 
            title="Custom Web Apps" 
            description="Scalable, SEO-friendly web applications built with Nuxt 3 and Vue.js for the ultimate user experience." 
          />
          <ServiceCard 
            icon="⚙️" 
            title="API Development" 
            description="Robust and secure backend systems powered by Laravel 11, ensuring your data flows seamlessly." 
          />
          <ServiceCard 
            icon="🎨" 
            title="UI/UX Design" 
            description="User-centric design focused on conversion and intuitive navigation for your digital products." 
          />
          <ServiceCard 
            icon="📱" 
            title="Mobile Solutions" 
            description="Cross-platform mobile applications that bring your business directly to your customers' pockets." 
          />
          <ServiceCard 
            icon="🛡️" 
            title="Security Audits" 
            description="Deep analysis of your existing codebase to identify and patch vulnerabilities before they become risks." 
          />
          <ServiceCard 
            icon="🚀" 
            title="DevOps & Cloud" 
            description="Automated deployment pipelines and cloud infrastructure management for 99.9% uptime." 
          />
        </div>
      </div>
    </section>

    <section class="tech-stack">
      <div class="container">
        <h2>Our Technology Stack</h2>
        <div class="tech-badges">
          <span>Laravel 11</span>
          <span>Nuxt 3</span>
          <span>Vue.js</span>
          <span>MySQL</span>
          <span>Tailwind CSS</span>
          <span>AWS</span>
        </div>
      </div>
    </section>

    <section class="bottom-cta">
      <h3>Have a specific requirement?</h3>
      <NuxtLink to="/contact" class="btn-primary">Request a Custom Quote</NuxtLink>
    </section>
  </div>
</template>

<style scoped>
.services-hero {
  background: #1e3a8a;
  color: white;
  text-align: center;
  padding: 80px 20px;
}

.services-hero h1 { font-size: 3rem; margin-bottom: 1rem; }

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 60px 20px;
}

.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
}

.tech-stack {
  background: #f8fafc;
  text-align: center;
  padding: 60px 0;
}

.tech-stack h2 { margin-bottom: 30px; color: #1e3a8a; }

.tech-badges {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 15px;
}

.tech-badges span {
  background: white;
  padding: 10px 20px;
  border-radius: 50px;
  border: 1px solid #e2e8f0;
  font-weight: 600;
  color: #475569;
}

.bottom-cta {
  text-align: center;
  padding: 100px 20px;
}

.btn-primary {
  display: inline-block;
  margin-top: 20px;
  background: #3b82f6;
  color: white;
  padding: 15px 35px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: bold;
}
</style>