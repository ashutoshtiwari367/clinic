<?php 
$pageTitle = 'Gallery & Results | Shri Balaji Clinic Kanpur';
$activePage = 'gallery';
include 'includes/header.php'; 
?>

<section class="page-hero pt-32 pb-20 text-center text-white">
  <div class="max-w-7xl mx-auto px-4 relative z-10 animate-fadeInUp">
    <h1 class="text-4xl md:text-5xl font-bold font-poppins mb-4">Clinic Gallery</h1>
    <p class="text-lg text-sky-100 max-w-2xl mx-auto">Take a tour of our modern facilities and see real patient transformations.</p>
  </div>
</section>

<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    
    <!-- Tabs -->
    <div class="inline-flex bg-sky-50 rounded-xl p-1 mb-12 animate-fadeInUp">
      <button class="tab-btn active px-6 py-2.5 rounded-lg text-sm font-semibold font-poppins" data-tab="clinicTab">Clinic Ambiance</button>
      <button class="tab-btn px-6 py-2.5 rounded-lg text-sm font-semibold text-slate-600 font-poppins" data-tab="resultsTab">Before / After Results</button>
    </div>

    <!-- Clinic Tab -->
    <div id="clinicTab" class="tab-content active">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
        <div class="gallery-item rounded-2xl cursor-pointer shadow-md reveal">
          <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80&w=600" class="w-full h-64 object-cover" alt="Reception Area"/>
          <div class="gallery-overlay"><span class="text-white font-semibold font-poppins">Reception Area</span></div>
        </div>
        <div class="gallery-item rounded-2xl cursor-pointer shadow-md reveal" style="transition-delay: 100ms;">
          <img src="https://images.unsplash.com/photo-1538108149393-cebb47cdf504?auto=format&fit=crop&q=80&w=600" class="w-full h-64 object-cover" alt="Waiting Lounge"/>
          <div class="gallery-overlay"><span class="text-white font-semibold font-poppins">Waiting Lounge</span></div>
        </div>
        <div class="gallery-item rounded-2xl cursor-pointer shadow-md reveal" style="transition-delay: 200ms;">
          <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&q=80&w=600" class="w-full h-64 object-cover" alt="Dental Chamber"/>
          <div class="gallery-overlay"><span class="text-white font-semibold font-poppins">Dental Chamber</span></div>
        </div>
        <div class="gallery-item rounded-2xl cursor-pointer shadow-md reveal">
          <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&q=80&w=600" class="w-full h-64 object-cover" alt="Physiotherapy Room"/>
          <div class="gallery-overlay"><span class="text-white font-semibold font-poppins">Physiotherapy Room</span></div>
        </div>
        <div class="gallery-item rounded-2xl cursor-pointer shadow-md reveal" style="transition-delay: 100ms;">
          <img src="https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?auto=format&fit=crop&q=80&w=600" class="w-full h-64 object-cover" alt="Laser Treatment Room"/>
          <div class="gallery-overlay"><span class="text-white font-semibold font-poppins">Laser Treatment Room</span></div>
        </div>
        <div class="gallery-item rounded-2xl cursor-pointer shadow-md reveal" style="transition-delay: 200ms;">
          <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&q=80&w=600" class="w-full h-64 object-cover" alt="Ayurvedic Section"/>
          <div class="gallery-overlay"><span class="text-white font-semibold font-poppins">Ayurvedic Section</span></div>
        </div>
      </div>
    </div>

    <!-- Results Tab -->
    <div id="resultsTab" class="tab-content">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <div class="bg-sky-50 p-4 rounded-2xl">
          <div class="before-after w-full h-80 rounded-xl overflow-hidden shadow-md">
            <!-- Simulated before/after using split image logic in CSS or just a single composite image -->
            <img src="https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover" alt="Skin Treatment Before After"/>
            <div class="ba-label ba-before">Before</div>
            <div class="ba-label ba-after bg-saffron-500">After 3 Sessions</div>
          </div>
          <h3 class="font-bold font-poppins mt-4 text-slate-800">Acne & Scar Treatment</h3>
        </div>

        <div class="bg-sky-50 p-4 rounded-2xl">
          <div class="before-after w-full h-80 rounded-xl overflow-hidden shadow-md">
            <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover" alt="Teeth Whitening Before After"/>
            <div class="ba-label ba-before">Before</div>
            <div class="ba-label ba-after bg-saffron-500">After</div>
          </div>
          <h3 class="font-bold font-poppins mt-4 text-slate-800">Teeth Whitening & Scaling</h3>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- Lightbox -->
<div id="lightbox" class="fixed inset-0 z-[100] bg-black/90 hidden flex items-center justify-center p-4">
  <button id="lightboxClose" class="absolute top-6 right-6 text-white hover:text-saffron-500 transition-colors">
    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
  </button>
  <img id="lightboxImg" src="" class="max-w-full max-h-[90vh] rounded-lg shadow-2xl object-contain animate-bounceIn"/>
</div>

<?php include 'includes/footer.php'; ?>
