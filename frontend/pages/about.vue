<template>
  <div class="about-page">
    <header class="about-header">
      <h1>Innovation Through Code</h1>
      <p>We bridge the gap between complex problems and elegant digital solutions.</p>
    </header>

    <section class="mission">
      <div class="container">
        <h2>Our Mission</h2>
        <p>
          Founded in 2024, our goal is to empower businesses with scalable, 
          high-performance software. We don't just write code; we build tools 
          that drive growth and efficiency.
        </p>
      </div>
    </section>

    <section class="process">
      <div class="container">
        <h2>Our 3-Step Process</h2>
        <div class="process-steps">
          <div class="step">
            <span class="step-number">01</span>
            <h3>Consultation</h3>
            <p>We dive deep into your requirements to understand your business goals.</p>
          </div>
          <div class="step">
            <span class="step-number">02</span>
            <h3>Development</h3>
            <p>Using Laravel and Nuxt, we build fast, secure, and modern applications.</p>
          </div>
          <div class="step">
            <span class="step-number">03</span>
            <h3>Delivery</h3>
            <p>Rigorous testing followed by a smooth launch and ongoing support.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="about-cta">
      <p>Ready to bring your idea to life?</p>
      <NuxtLink to="/contact" class="cta-link">Work With Us</NuxtLink>
    </section>
  </div>
</template>

<style scoped>
.about-page {
  line-height: 1.6;
  color: #333;
}

.container {
  max-width: 1000px;
  margin: 0 auto;
  padding: 0 20px;
}

.about-header {
  background-color: #f8fafc;
  padding: 80px 20px;
  text-align: center;
  border-bottom: 1px solid #e2e8f0;
}

.about-header h1 { font-size: 2.5rem; color: #1e3a8a; }
.about-header p { font-size: 1.2rem; color: #64748b; }

.mission {
  padding: 60px 0;
  text-align: center;
}

.mission h2 { color: #1e3a8a; margin-bottom: 20px; }
.mission p { max-width: 700px; margin: 0 auto; font-size: 1.1rem; }

.process {
  background-color: #ffffff;
  padding: 60px 0;
}

.process h2 { text-align: center; margin-bottom: 40px; color: #1e3a8a; }

.process-steps {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
}

.step {
  padding: 20px;
  background: #f1f5f9;
  border-radius: 12px;
  position: relative;
}

.step-number {
  font-weight: bold;
  color: #3b82f6;
  font-size: 1.5rem;
  display: block;
  margin-bottom: 10px;
}

.about-cta {
  text-align: center;
  padding: 80px 20px;
}

.cta-link {
  display: inline-block;
  margin-top: 20px;
  padding: 12px 30px;
  background: #1e3a8a;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
}

.cta-link:hover { background: #3b82f6; }
</style>