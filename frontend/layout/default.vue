<template>
  <div>
    <Navbar />
    
    <main>
      <slot /> </main>

    <footer class="footer">
      <p>&copy; 2026 Software Company. All rights reserved.</p>
    </footer>
  </div>
</template>

<style>
/* Global Styles */
body {
  margin: 0;
  font-family: 'Inter', sans-serif;
  color: #333;
  background-color: #f9fafb;
}

.footer {
  text-align: center;
  padding: 2rem;
  background: #1e3a8a;
  color: white;
  margin-top: 4rem;
}
</style>