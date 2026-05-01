<?php 
$pageTitle = 'Book Appointment | Shri Balaji Clinic Kanpur';
$activePage = 'appointment';
include 'includes/header.php'; 
?>

<section class="page-hero pt-32 pb-20 text-center text-white">
  <div class="max-w-7xl mx-auto px-4 relative z-10 animate-fadeInUp">
    <h1 class="text-4xl md:text-5xl font-bold font-poppins mb-4">Book Your Appointment</h1>
    <p class="text-lg text-sky-100 max-w-2xl mx-auto">Schedule a visit with our specialists online and skip the waiting room queue.</p>
  </div>
</section>

<section class="py-20 bg-sky-50 relative overflow-hidden">
  <div class="absolute inset-0 z-0 opacity-40" style="background-image: radial-gradient(#0ea5e9 1px, transparent 1px); background-size: 30px 30px;"></div>

  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="bg-white rounded-[2rem] shadow-2xl p-8 md:p-12 animate-fadeInUp">
      
      <div id="formSuccess" class="hidden bg-green-50 border-l-4 border-green-500 p-4 mb-8 rounded-r-lg">
        <div class="flex">
          <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
          </div>
          <div class="ml-3">
            <p class="text-sm text-green-700 font-medium">Appointment request submitted successfully! We will contact you shortly to confirm the time.</p>
          </div>
        </div>
      </div>

      <form id="appointmentForm" class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-2 font-poppins">Full Name *</label>
            <input type="text" name="name" required class="form-control w-full px-4 py-3 rounded-xl bg-slate-50 text-slate-800" placeholder="John Doe">
          </div>
          
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-2 font-poppins">Phone Number *</label>
            <input type="tel" name="phone" required class="form-control w-full px-4 py-3 rounded-xl bg-slate-50 text-slate-800" placeholder="+91 99364 43366">
          </div>
          
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-2 font-poppins">Select Service *</label>
            <select name="service" required class="form-control w-full px-4 py-3 rounded-xl bg-slate-50 text-slate-800">
              <option value="">-- Choose a Service --</option>
              <option value="physiotherapy">Physiotherapy</option>
              <option value="ayurvedic">Ayurvedic Treatment</option>
              <option value="dental">Dental Treatment</option>
              <option value="skin">Skin Care & Laser</option>
              <option value="general">General Medicine</option>
            </select>
          </div>
          
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-2 font-poppins">Preferred Doctor</label>
            <select name="doctor" class="form-control w-full px-4 py-3 rounded-xl bg-slate-50 text-slate-800">
              <option value="any">Any Available Doctor</option>
              <option value="ritesh">Dr. Ritesh Tiwari</option>
              <option value="arti">Dr. Arti Tiwari</option>
            </select>
          </div>

          <div>
            <label class="block text-sm font-medium text-slate-700 mb-2 font-poppins">Preferred Date *</label>
            <input type="date" id="apptDate" name="date" required class="form-control w-full px-4 py-3 rounded-xl bg-slate-50 text-slate-800">
          </div>

          <div>
            <label class="block text-sm font-medium text-slate-700 mb-2 font-poppins">Preferred Time</label>
            <select name="time" class="form-control w-full px-4 py-3 rounded-xl bg-slate-50 text-slate-800">
              <option value="morning">Morning (09:00 AM - 01:00 PM)</option>
              <option value="afternoon">Afternoon (01:00 PM - 05:00 PM)</option>
              <option value="evening">Evening (05:00 PM - 08:00 PM)</option>
            </select>
          </div>

        </div>

        <div>
          <label class="block text-sm font-medium text-slate-700 mb-2 font-poppins">Additional Notes / Symptoms</label>
          <textarea name="message" rows="4" class="form-control w-full px-4 py-3 rounded-xl bg-slate-50 text-slate-800" placeholder="Briefly describe your health concern..."></textarea>
        </div>

        <div class="pt-4">
          <button type="submit" class="btn-primary w-full py-4 rounded-xl text-white font-bold text-lg font-poppins shadow-lg flex items-center justify-center gap-2">
            Confirm Appointment <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
