<?php 
$pageTitle = 'Our Services | Shri Balaji Clinic Kanpur';
$activePage = 'services';
include 'includes/header.php'; 
?>

<section class="page-hero pt-32 pb-20 text-center text-white">
  <div class="max-w-7xl mx-auto px-4 relative z-10 animate-fadeInUp">
    <h1 class="text-4xl md:text-5xl font-bold font-poppins mb-4">Comprehensive Clinic Services</h1>
    <p class="text-lg text-sky-100 max-w-2xl mx-auto">Providing a wide range of medical and aesthetic treatments tailored to your unique needs.</p>
  </div>
</section>

<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Physiotherapy -->
    <div id="physiotherapy" class="flex flex-col md:flex-row items-center gap-12 mb-20 reveal">
      <div class="md:w-1/2">
        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&q=80&w=800" alt="Physiotherapy" class="rounded-3xl shadow-xl w-full"/>
      </div>
      <div class="md:w-1/2">
        <div class="w-16 h-16 bg-sky-100 rounded-2xl flex items-center justify-center text-sky-600 mb-6">
          <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
        </div>
        <h2 class="text-3xl font-bold font-poppins text-slate-800 mb-4">Physiotherapy</h2>
        <p class="text-slate-600 mb-6 leading-relaxed">Our advanced physiotherapy programs are designed to restore movement and function. Dr. Ritesh Tiwari uses a combination of manual therapy, exercise prescription, and electrotherapy to treat sports injuries, chronic back pain, and post-operative stiffness.</p>
        <ul class="space-y-3 mb-8 text-slate-600">
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Sports Injury Rehabilitation</li>
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Neck & Back Pain Management</li>
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Post-Stroke Recovery Therapy</li>
        </ul>
        <a href="/clinic/appointment.php?service=physio" class="btn-primary inline-flex px-6 py-2.5 rounded-xl text-white font-semibold text-sm">Book Session</a>
      </div>
    </div>

    <!-- Ayurvedic -->
    <div id="ayurvedic" class="flex flex-col md:flex-row-reverse items-center gap-12 mb-20 reveal">
      <div class="md:w-1/2">
        <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&q=80&w=800" alt="Ayurvedic Treatment" class="rounded-3xl shadow-xl w-full"/>
      </div>
      <div class="md:w-1/2">
        <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 mb-6">
          <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
        </div>
        <h2 class="text-3xl font-bold font-poppins text-slate-800 mb-4">Ayurvedic Treatment</h2>
        <p class="text-slate-600 mb-6 leading-relaxed">Embrace the ancient science of life with our authentic Ayurvedic treatments. We focus on balancing the body's doshas (Vata, Pitta, Kapha) through customized herbal medicines, dietary modifications, and detoxification therapies to cure chronic illnesses at their root.</p>
        <ul class="space-y-3 mb-8 text-slate-600">
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Chronic Disease Management</li>
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Immunity Boosting & Detoxification</li>
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Joint Pain & Arthritis Care</li>
        </ul>
        <a href="/clinic/appointment.php?service=ayurveda" class="btn-primary inline-flex px-6 py-2.5 rounded-xl text-white font-semibold text-sm">Consult Doctor</a>
      </div>
    </div>

    <!-- Dental -->
    <div id="dental" class="flex flex-col md:flex-row items-center gap-12 mb-20 reveal">
      <div class="md:w-1/2">
        <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&q=80&w=800" alt="Dental Care" class="rounded-3xl shadow-xl w-full"/>
      </div>
      <div class="md:w-1/2">
        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 mb-6">
          <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h2 class="text-3xl font-bold font-poppins text-slate-800 mb-4">Dental Treatment</h2>
        <p class="text-slate-600 mb-6 leading-relaxed">Get the perfect smile you deserve with Dr. Arti Tiwari's painless dental care. Our clinic is equipped with the latest dental technology for precise diagnoses and comfortable treatments, ranging from routine checkups to complex cosmetic procedures.</p>
        <ul class="space-y-3 mb-8 text-slate-600">
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Root Canal & Tooth Extraction</li>
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Cosmetic Dentistry & Teeth Whitening</li>
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Dental Implants & Aligners</li>
        </ul>
        <a href="/clinic/appointment.php?service=dental" class="btn-primary inline-flex px-6 py-2.5 rounded-xl text-white font-semibold text-sm">Book Checkup</a>
      </div>
    </div>

    <!-- Skin Care & Laser -->
    <div id="skin" class="flex flex-col md:flex-row-reverse items-center gap-12 mb-10 reveal">
      <div class="md:w-1/2">
        <img src="https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?auto=format&fit=crop&q=80&w=800" alt="Skin Care and Laser" class="rounded-3xl shadow-xl w-full"/>
      </div>
      <div class="md:w-1/2">
        <div class="w-16 h-16 bg-pink-100 rounded-2xl flex items-center justify-center text-pink-600 mb-6">
          <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
        </div>
        <h2 class="text-3xl font-bold font-poppins text-slate-800 mb-4">Skin Care & Laser Treatment</h2>
        <p class="text-slate-600 mb-6 leading-relaxed">Experience flawless skin with our advanced dermatological treatments. We offer safe, FDA-approved laser technology for hair reduction, scar removal, and skin rejuvenation, ensuring beautiful results with minimal downtime.</p>
        <ul class="space-y-3 mb-8 text-slate-600">
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Painless Laser Hair Reduction</li>
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Acne & Scar Treatment</li>
          <li class="flex items-center gap-3"><svg class="w-5 h-5 text-saffron-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Anti-Aging & Skin Rejuvenation</li>
        </ul>
        <a href="/clinic/appointment.php?service=skin" class="btn-primary inline-flex px-6 py-2.5 rounded-xl text-white font-semibold text-sm">Consult Dermatologist</a>
      </div>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
