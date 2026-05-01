<?php 
$pageTitle = 'Our Doctors | Shri Balaji Clinic Kanpur';
$activePage = 'doctors';
include 'includes/header.php'; 
?>

<section class="page-hero pt-32 pb-20 text-center text-white">
  <div class="max-w-7xl mx-auto px-4 relative z-10 animate-fadeInUp">
    <h1 class="text-4xl md:text-5xl font-bold font-poppins mb-4">Meet Our Experts</h1>
    <p class="text-lg text-sky-100 max-w-2xl mx-auto">Highly qualified specialists dedicated to your health, wellness, and aesthetic needs.</p>
  </div>
</section>

<section class="py-20 bg-sky-50">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Dr. Ritesh Tiwari -->
    <div class="bg-white rounded-[2rem] shadow-xl overflow-hidden mb-12 reveal">
      <div class="flex flex-col md:flex-row">
        <div class="md:w-1/3 h-80 md:h-auto">
          <img src="http://res.cloudinary.com/de7mh41io/image/upload/v1756809257/WhatsApp_Image_2025-09-02_at_10.53.10_0a7aae5b_j3r6oz.jpg" alt="Dr. Ritesh Tiwari" class="w-full h-full object-cover object-top"/>
        </div>
        <div class="md:w-2/3 p-8 md:p-12 flex flex-col justify-center">
          <div class="text-saffron-500 font-medium text-sm mb-1 tracking-widest uppercase">Chief Physician</div>
          <h2 class="text-3xl font-bold font-poppins text-slate-800 mb-4">Dr. Ritesh Tiwari</h2>
          
          <div class="flex flex-wrap gap-2 mb-6">
            <span class="px-3 py-1 bg-sky-100 text-sky-700 text-sm font-semibold rounded-lg">Physiotherapy Specialist</span>
            <span class="px-3 py-1 bg-green-100 text-green-700 text-sm font-semibold rounded-lg">Ayurvedic Expert</span>
            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm font-semibold rounded-lg">General Medicine</span>
          </div>
          
          <p class="text-slate-600 mb-6 leading-relaxed">
            Dr. Ritesh Tiwari brings over 15 years of experience in diagnosing and treating complex medical conditions. His unique approach combines modern physiotherapy techniques with ancient Ayurvedic wisdom to provide holistic healing solutions. Whether you're recovering from a sports injury or dealing with chronic pain, his customized treatment plans ensure rapid and sustainable recovery.
          </p>
          
          <div class="flex items-center gap-4 border-t border-gray-100 pt-6">
            <a href="/clinic/appointment.php?doctor=ritesh" class="btn-primary px-6 py-2.5 rounded-xl text-white font-semibold flex items-center gap-2">
              Book Consultation
            </a>
            <div class="flex gap-1 text-yellow-400 text-lg">
              ★★★★★ <span class="text-slate-500 text-sm ml-1">(4.9/5 based on 230 reviews)</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Dr. Arti Tiwari -->
    <div class="bg-white rounded-[2rem] shadow-xl overflow-hidden reveal">
      <div class="flex flex-col md:flex-row-reverse">
        <div class="md:w-1/3 h-80 md:h-auto">
          <img src="/clinic/assets/img/dr_arti.jpeg" alt="Dr. Arti Tiwari" class="w-full h-full object-cover object-top"/>
        </div>
        <div class="md:w-2/3 p-8 md:p-12 flex flex-col justify-center">
          <div class="text-saffron-500 font-medium text-sm mb-1 tracking-widest uppercase">Senior Specialist</div>
          <h2 class="text-3xl font-bold font-poppins text-slate-800 mb-4">Dr. Arti Tiwari</h2>
          
          <div class="flex flex-wrap gap-2 mb-6">
            <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm font-semibold rounded-lg">Dental Specialist</span>
            <span class="px-3 py-1 bg-pink-100 text-pink-700 text-sm font-semibold rounded-lg">Skin Care</span>
            <span class="px-3 py-1 bg-purple-100 text-purple-700 text-sm font-semibold rounded-lg">Laser Treatment</span>
          </div>
          
          <p class="text-slate-600 mb-6 leading-relaxed">
            Dr. Arti Tiwari is a renowned expert in cosmetic dentistry and advanced dermatology. With a passion for enhancing smiles and restoring skin health, she uses state-of-the-art laser technology for painless treatments. Her warm demeanor and meticulous attention to detail have made her one of the most trusted cosmetic specialists in Kanpur.
          </p>
          
          <div class="flex items-center gap-4 border-t border-gray-100 pt-6">
            <a href="/clinic/appointment.php?doctor=arti" class="btn-primary px-6 py-2.5 rounded-xl text-white font-semibold flex items-center gap-2">
              Book Consultation
            </a>
            <div class="flex gap-1 text-yellow-400 text-lg">
              ★★★★★ <span class="text-slate-500 text-sm ml-1">(4.8/5 based on 190 reviews)</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
