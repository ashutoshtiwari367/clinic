<?php 
$pageTitle = 'Contact Us | Shri Balaji Clinic Kanpur';
$activePage = 'contact';
include 'includes/header.php'; 
?>

<section class="page-hero pt-32 pb-20 text-center text-white">
  <div class="max-w-7xl mx-auto px-4 relative z-10 animate-fadeInUp">
    <h1 class="text-4xl md:text-5xl font-bold font-poppins mb-4">Get In Touch</h1>
    <p class="text-lg text-sky-100 max-w-2xl mx-auto">Have questions? We are here to help you. Reach out to us via phone, email, or visit our clinic.</p>
  </div>
</section>

<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
      
      <!-- Contact Info -->
      <div class="reveal-left">
        <h2 class="text-3xl font-bold font-poppins text-slate-800 mb-6">Contact Information</h2>
        <p class="text-slate-600 mb-10 leading-relaxed">
          We welcome your inquiries and feedback. Whether you need to schedule an appointment or have questions about our treatments, our friendly staff is ready to assist you.
        </p>

        <div class="space-y-8">
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 bg-sky-100 rounded-xl flex items-center justify-center text-sky-600 shrink-0">
              <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div>
              <h4 class="font-bold text-slate-800 font-poppins text-lg">Clinic Location</h4>
              <p class="text-slate-600">Shri Balaji Clinic Services<br/>Kanpur, Uttar Pradesh 208001</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="w-14 h-14 bg-saffron-100 rounded-xl flex items-center justify-center text-saffron-600 shrink-0">
              <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <div>
              <h4 class="font-bold text-slate-800 font-poppins text-lg">Phone Number</h4>
              <p class="text-slate-600 mb-1">For appointments & emergencies:</p>
              <a href="tel:+919936443366" class="text-sky-600 font-bold text-xl hover:text-sky-700">+91-99364 43366</a>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-green-600 shrink-0">
              <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div>
              <h4 class="font-bold text-slate-800 font-poppins text-lg">Email Address</h4>
              <a href="mailto:info@shribalajicliniclkanpur.in" class="text-sky-600 hover:text-sky-700">info@shribalajicliniclkanpur.in</a>
            </div>
          </div>
        </div>

      </div>

      <!-- Contact Form -->
      <div class="bg-sky-50 rounded-[2rem] p-8 md:p-10 shadow-lg border border-sky-100 reveal-right">
        <h3 class="text-2xl font-bold font-poppins text-slate-800 mb-6">Send us a Message</h3>
        
        <div id="contactSuccess" class="hidden bg-green-50 border-l-4 border-green-500 p-4 mb-6 rounded-r-lg">
          <p class="text-sm text-green-700 font-medium">Thank you! Your message has been sent successfully.</p>
        </div>

        <form id="contactForm" class="space-y-5">
          <div>
            <input type="text" name="name" required class="form-control w-full px-4 py-3 rounded-xl bg-white text-slate-800 shadow-sm" placeholder="Your Name">
          </div>
          <div>
            <input type="email" name="email" required class="form-control w-full px-4 py-3 rounded-xl bg-white text-slate-800 shadow-sm" placeholder="Your Email">
          </div>
          <div>
            <input type="tel" name="phone" class="form-control w-full px-4 py-3 rounded-xl bg-white text-slate-800 shadow-sm" placeholder="Your Phone Number">
          </div>
          <div>
            <textarea name="message" rows="4" required class="form-control w-full px-4 py-3 rounded-xl bg-white text-slate-800 shadow-sm" placeholder="How can we help you?"></textarea>
          </div>
          <button type="submit" class="btn-primary w-full py-4 rounded-xl text-white font-bold text-lg shadow-md hover:shadow-lg transition-all">
            Send Message
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
