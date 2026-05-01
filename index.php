<?php 
$activePage = 'home';
include 'includes/header.php'; 
?>

<!-- ===== HERO SECTION ===== -->
<section class="hero-section min-h-[90vh] flex items-center pt-20 pb-16 relative">
  <div class="hero-blob hero-blob-1"></div>
  <div class="hero-blob hero-blob-2"></div>
  <div class="hero-blob hero-blob-3"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full z-10 relative">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      
      <!-- Text Content -->
      <div class="max-w-2xl">
        <div class="hero-text-1 inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/60 border border-sky-200 text-sky-700 text-sm font-medium mb-6 shadow-sm backdrop-blur-sm">
          <span class="w-2 h-2 rounded-full bg-saffron-500 animate-pulse"></span>
          Welcome to Kanpur's Premier Clinic
        </div>
        
        <h1 class="hero-text-2 font-poppins font-bold text-4xl md:text-5xl lg:text-6xl text-slate-800 leading-tight mb-6">
          Expert Healthcare,<br/>
          <span class="gradient-text">Compassionate</span> Healing
        </h1>
        
        <p class="hero-text-3 text-lg md:text-xl text-slate-600 mb-8 leading-relaxed">
          Trusted multi-specialty care including Physiotherapy, Ayurvedic Treatment, Dental Care, and Advanced Laser Skin Treatment under one roof.
        </p>
        
        <div class="hero-text-4 flex flex-wrap gap-4">
          <a href="/appointment.php" class="btn-primary px-8 py-3.5 rounded-xl text-white font-semibold font-poppins text-lg flex items-center gap-2">
            Book Appointment <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
          <a href="/services.php" class="px-8 py-3.5 rounded-xl bg-white text-sky-700 border-2 border-sky-100 hover:border-sky-300 font-semibold font-poppins text-lg transition-all hover:bg-sky-50 flex items-center gap-2 shadow-sm">
            Our Services
          </a>
        </div>
        
        <!-- Stats -->
        <div class="hero-text-4 mt-12 grid grid-cols-3 gap-6 pt-8 border-t border-sky-200/60">
          <div>
            <div class="text-3xl font-bold text-sky-600 font-poppins"><span class="counter" data-target="15">0</span>+</div>
            <div class="text-sm font-medium text-slate-500 mt-1">Years Experience</div>
          </div>
          <div>
            <div class="text-3xl font-bold text-saffron-500 font-poppins"><span class="counter" data-target="10" data-suffix="k+">0</span></div>
            <div class="text-sm font-medium text-slate-500 mt-1">Happy Patients</div>
          </div>
          <div>
            <div class="text-3xl font-bold text-sky-600 font-poppins"><span class="counter" data-target="5">0</span></div>
            <div class="text-sm font-medium text-slate-500 mt-1">Specialties</div>
          </div>
        </div>
      </div>

      <!-- Hero Image -->
      <div class="hero-text-2 relative lg:h-[600px] flex justify-center items-center">
        <div class="absolute inset-0 bg-gradient-to-tr from-sky-200 to-saffron-100 rounded-[3rem] rotate-3 scale-105 opacity-50 blur-lg animate-pulse-slow"></div>
        <img src="/assets/img/clinic_hero.png" alt="Modern Clinic Environment" class="relative z-10 w-full h-[400px] lg:h-full object-cover rounded-[3rem] shadow-2xl border-4 border-white object-top"/>
        
        <!-- Floating Elements -->
        <div class="absolute top-10 -left-6 z-20 bg-white p-4 rounded-2xl shadow-xl floating-badge flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-500 text-2xl">👨‍⚕️</div>
          <div>
            <div class="text-sm font-bold text-slate-800">Expert Doctors</div>
            <div class="text-xs text-slate-500">Available Daily</div>
          </div>
        </div>
        <div class="absolute bottom-20 -right-6 z-20 bg-white p-4 rounded-2xl shadow-xl floating-badge" style="animation-delay: 1.5s;">
          <div class="flex items-center gap-2 mb-1">
            <div class="flex text-yellow-400 text-sm">★★★★★</div>
            <span class="text-xs font-bold">4.8</span>
          </div>
          <div class="text-xs text-slate-500">Google Reviews</div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- ===== DIVIDER ===== -->
<div class="wave-divider">
  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-12 md:h-20 fill-sky-50">
    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
  </svg>
</div>

<!-- ===== QUICK INFO BOXES ===== -->
<section class="py-10 bg-sky-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-24 relative z-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <div class="bg-white rounded-2xl p-8 shadow-xl border-t-4 border-sky-500 reveal-left">
        <div class="w-14 h-14 bg-sky-100 text-sky-600 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="text-xl font-bold font-poppins text-slate-800 mb-3">Opening Hours</h3>
        <ul class="space-y-2 text-slate-600 mb-4 text-sm">
          <li class="flex justify-between border-b border-gray-100 pb-2"><span>Mon - Fri</span> <span class="font-medium">09:00 - 20:00</span></li>
          <li class="flex justify-between border-b border-gray-100 pb-2"><span>Saturday</span> <span class="font-medium">09:00 - 18:00</span></li>
          <li class="flex justify-between text-saffron-500 font-medium pb-1"><span>Sunday</span> <span>10:00 - 14:00</span></li>
        </ul>
      </div>

      <div class="bg-white rounded-2xl p-8 shadow-xl border-t-4 border-saffron-500 reveal">
        <div class="w-14 h-14 bg-orange-100 text-saffron-500 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m3-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
        </div>
        <h3 class="text-xl font-bold font-poppins text-slate-800 mb-3">Our Location</h3>
        <p class="text-slate-600 mb-4 text-sm leading-relaxed">
          Conveniently located in the heart of Kanpur. We provide a clean, safe, and modern environment for all your healthcare needs.
        </p>
        <a href="/contact.php" class="text-saffron-500 font-semibold hover:text-saffron-600 flex items-center gap-1 transition-colors">
          Get Directions <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <div class="bg-gradient-to-br from-sky-600 to-sky-800 rounded-2xl p-8 shadow-xl border-t-4 border-sky-400 text-white reveal-right">
        <div class="w-14 h-14 bg-sky-500/30 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        </div>
        <h3 class="text-xl font-bold font-poppins mb-3">Emergency Care</h3>
        <p class="text-sky-100 mb-6 text-sm leading-relaxed">
          For immediate medical attention, do not hesitate to call our emergency line available 24/7.
        </p>
        <a href="tel:+919936443366" class="block w-full py-3 bg-white text-sky-700 rounded-xl font-bold text-center hover:bg-sky-50 transition-colors shadow-md">
          Call +91-99364 43366
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ===== SERVICES OVERVIEW ===== -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <h4 class="text-saffron-500 font-semibold font-poppins tracking-wider uppercase text-sm mb-2">Our Departments</h4>
      <h2 class="text-3xl md:text-4xl font-bold font-poppins text-slate-800 mb-4">Comprehensive Clinic Services</h2>
      <p class="text-slate-600">We offer specialized medical treatments blending modern science with traditional healing approaches.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Service 1 -->
      <div class="service-card bg-white rounded-2xl p-8 border border-sky-100 shadow-lg reveal">
        <div class="w-16 h-16 rounded-2xl bg-sky-50 text-sky-600 flex items-center justify-center mb-6 relative z-10">
          <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
        </div>
        <h3 class="text-xl font-bold font-poppins text-slate-800 mb-3 relative z-10">Physiotherapy</h3>
        <p class="text-slate-600 mb-6 text-sm relative z-10">Expert rehabilitation for sports injuries, back pain, post-surgical recovery, and mobility issues.</p>
        <a href="/services.php#physio" class="text-sky-600 font-semibold flex items-center gap-2 group relative z-10">
          Read More <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>

      <!-- Service 2 -->
      <div class="service-card bg-white rounded-2xl p-8 border border-sky-100 shadow-lg reveal" style="transition-delay: 100ms;">
        <div class="w-16 h-16 rounded-2xl bg-green-50 text-green-600 flex items-center justify-center mb-6 relative z-10">
          <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
        </div>
        <h3 class="text-xl font-bold font-poppins text-slate-800 mb-3 relative z-10">Ayurvedic Treatment</h3>
        <p class="text-slate-600 mb-6 text-sm relative z-10">Holistic natural healing for chronic diseases, immunity boosting, and lifestyle disorders.</p>
        <a href="/services.php#ayurvedic" class="text-green-600 font-semibold flex items-center gap-2 group relative z-10">
          Read More <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>

      <!-- Service 3 -->
      <div class="service-card bg-white rounded-2xl p-8 border border-sky-100 shadow-lg reveal" style="transition-delay: 200ms;">
        <div class="w-16 h-16 rounded-2xl bg-orange-50 text-saffron-500 flex items-center justify-center mb-6 relative z-10">
          <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="text-xl font-bold font-poppins text-slate-800 mb-3 relative z-10">Skin Care & Laser</h3>
        <p class="text-slate-600 mb-6 text-sm relative z-10">Advanced dermatological treatments, acne solutions, and painless laser hair removal.</p>
        <a href="/services.php#skin" class="text-saffron-500 font-semibold flex items-center gap-2 group relative z-10">
          Read More <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>

    </div>
    
    <div class="mt-12 text-center reveal">
      <a href="/services.php" class="inline-flex items-center justify-center px-8 py-3 border border-sky-300 text-sky-700 font-semibold rounded-xl hover:bg-sky-50 transition-colors">
        View All Services
      </a>
    </div>
  </div>
</section>

<!-- ===== DOCTORS HIGHLIGHT ===== -->
<section class="py-20 bg-sky-50 relative overflow-hidden">
  <div class="absolute top-0 right-0 w-64 h-64 bg-sky-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
  <div class="absolute bottom-0 left-0 w-64 h-64 bg-saffron-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="flex flex-col md:flex-row justify-between items-end mb-12 reveal">
      <div class="max-w-2xl">
        <h4 class="text-saffron-500 font-semibold font-poppins tracking-wider uppercase text-sm mb-2">Expert Team</h4>
        <h2 class="text-3xl md:text-4xl font-bold font-poppins text-slate-800 mb-4">Meet Our Specialists</h2>
        <p class="text-slate-600">Highly qualified doctors dedicated to providing you with the best possible medical care.</p>
      </div>
      <a href="/doctors.php" class="hidden md:inline-flex btn-primary px-6 py-2.5 rounded-xl text-white font-semibold shadow-md">All Doctors</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      
      <!-- Dr Ritesh -->
      <div class="doctor-card bg-white rounded-[2rem] shadow-xl reveal-left">
        <div class="flex flex-col md:flex-row h-full">
          <div class="md:w-2/5 h-64 md:h-auto overflow-hidden rounded-t-[2rem] md:rounded-l-[2rem] md:rounded-tr-none">
            <img src="http://res.cloudinary.com/de7mh41io/image/upload/v1756809257/WhatsApp_Image_2025-09-02_at_10.53.10_0a7aae5b_j3r6oz.jpg" alt="Dr. Ritesh Tiwari" class="w-full h-full object-cover object-top"/>
          </div>
          <div class="p-8 md:w-3/5 flex flex-col justify-center">
            <div class="text-saffron-500 font-medium text-sm mb-1">Chief Physician</div>
            <h3 class="text-2xl font-bold font-poppins text-slate-800 mb-3">Dr. Ritesh Tiwari</h3>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-2.5 py-1 bg-sky-100 text-sky-700 text-xs font-semibold rounded-md">Physiotherapy</span>
              <span class="px-2.5 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-md">Ayurveda</span>
              <span class="px-2.5 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-md">Gen. Medicine</span>
            </div>
            <p class="text-slate-600 text-sm mb-6">Expert in pain management, post-injury rehabilitation, and holistic ayurvedic treatments.</p>
            <a href="/appointment.php?doctor=ritesh" class="text-sky-600 font-semibold hover:text-sky-700 flex items-center gap-2">
              Book Appointment <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Dr Arti -->
      <div class="doctor-card bg-white rounded-[2rem] shadow-xl reveal-right">
        <div class="flex flex-col md:flex-row h-full">
          <div class="md:w-2/5 h-64 md:h-auto overflow-hidden rounded-t-[2rem] md:rounded-l-[2rem] md:rounded-tr-none">
            <img src="/assets/img/dr_arti.jpeg" alt="Dr. Arti Tiwari" class="w-full h-full object-cover object-top"/>
          </div>
          <div class="p-8 md:w-3/5 flex flex-col justify-center">
            <div class="text-saffron-500 font-medium text-sm mb-1">Senior Specialist</div>
            <h3 class="text-2xl font-bold font-poppins text-slate-800 mb-3">Dr. Arti Tiwari</h3>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-2.5 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-md">Dental Care</span>
              <span class="px-2.5 py-1 bg-pink-100 text-pink-700 text-xs font-semibold rounded-md">Skin Care</span>
              <span class="px-2.5 py-1 bg-purple-100 text-purple-700 text-xs font-semibold rounded-md">Laser Trt.</span>
            </div>
            <p class="text-slate-600 text-sm mb-6">Specializing in advanced cosmetology, painless dentistry, and laser hair reduction.</p>
            <a href="/appointment.php?doctor=arti" class="text-sky-600 font-semibold hover:text-sky-700 flex items-center gap-2">
              Book Appointment <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </div>
      </div>

    </div>
    
    <div class="mt-8 text-center md:hidden reveal">
      <a href="/doctors.php" class="btn-primary inline-flex px-8 py-3 rounded-xl text-white font-semibold">View All Doctors</a>
    </div>
  </div>
</section>

<!-- ===== CTA SECTION ===== -->
<section class="py-20 relative">
  <div class="absolute inset-0 bg-sky-900">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
  </div>
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center reveal">
    <h2 class="text-3xl md:text-5xl font-bold font-poppins text-white mb-6">Need a Medical Consultation?</h2>
    <p class="text-sky-200 text-lg mb-10">Don't delay your health. Schedule a visit with our expert doctors today and take the first step towards a healthier life.</p>
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="/appointment.php" class="bg-white text-sky-700 px-8 py-4 rounded-xl font-bold font-poppins text-lg hover:bg-sky-50 transition-colors shadow-xl">
        Book Appointment Online
      </a>
      <a href="tel:+919936443366" class="btn-primary px-8 py-4 rounded-xl font-bold font-poppins text-white text-lg shadow-xl flex items-center justify-center gap-2">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        Call Us Now
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
