<?php include 'header.php'; ?>

<!-- Hero Section -->
<section id="hero" class="relative min-h-screen text-white pt-20 flex items-center justify-center">
  <!-- Background image -->
  <div class="inset-0 w-full h-full">
    <img src="./images/bckground.jpg" alt="Background" class="object-cover" />
  </div>

  <!-- Overlay with buttons -->
  <div class="absolute inset-0 flex items-center justify-center px-4">
    <div class="flex flex-col sm:flex-row gap-3 sm:gap-6 text-center animate__animated animate__fadeInUp">
      <a href="/registration" class="bg-white text-[#0066CC] px-2 py-1 sm:px-8 sm:py-3 text-sm sm:text-base rounded-full font-semibold hover:bg-opacity-90 transition duration-300 transform hover:scale-105">
        Register Now
      </a>
      <a href="#schedule" class="bg-white text-[#0066CC] px-2 py-1 sm:px-8 sm:py-3 text-sm sm:text-base rounded-full font-semibold hover:bg-opacity-90 transition duration-300 transform hover:scale-105">
        View Schedule
      </a>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-[#0066CC]">
  <div class="container mx-auto px-6">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-4xl font-bold text-center text-white mb-12 animate__animated animate__fadeInUp">
        About ACM SIGMOD
      </h2>
      <div class="bg-gray-50 p-8 rounded-lg shadow-lg animate__animated animate__fadeInUp">
        <p class="text-gray-700 leading-relaxed mb-6">
          SIGMOD (Special Interest Group on Management of Data) is ACM's premier international conference on the management of data. The annual conference brings together leading researchers, developers, practitioners, and users to explore cutting-edge ideas and results in data management.
        </p>
        <p class="text-gray-700 leading-relaxed mb-6">
          The conference includes research presentations, tutorials, demonstrations, and workshops that cover the latest innovations in database systems, data management, and related technologies.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
          <div class="text-center p-4">
            <div class="text-[#0066CC] text-4xl font-bold mb-2">30+</div>
            <div class="text-gray-600">Years of Excellence</div>
          </div>
          <div class="text-center p-4">
            <div class="text-[#0066CC] text-4xl font-bold mb-2">1000+</div>
            <div class="text-gray-600">Annual Attendees</div>
          </div>
          <div class="text-center p-4">
            <div class="text-[#0066CC] text-4xl font-bold mb-2">200+</div>
            <div class="text-gray-600">Research Papers</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sponsor Section -->
<section id="sponsors" class="py-20 bg-white">
  <div class="container mx-auto px-6">
    <h2 class="text-4xl font-bold text-center text-[#0066CC] mb-12 animate__animated animate__fadeInUp">
      Our Sponsors
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 items-center justify-items-center animate__animated animate__fadeInUp">
      
      <!-- Sponsor 1 -->
      <div class="text-center">
        <img src="./images/sponsor1.png" alt="Sponsor 1 Logo" class="h-20 mx-auto mb-4">
        <p class="text-lg font-semibold text-gray-700">Sponsor One</p>
      </div>

      <!-- Sponsor 2 -->
      <div class="text-center">
        <img src="./images/sponsor2.png" alt="Sponsor 2 Logo" class="h-20 mx-auto mb-4">
        <p class="text-lg font-semibold text-gray-700">Sponsor Two</p>
      </div>

      <!-- Sponsor 3 -->
      <div class="text-center">
        <img src="./images/sponsor3.png" alt="Sponsor 3 Logo" class="h-20 mx-auto mb-4">
        <p class="text-lg font-semibold text-gray-700">Sponsor Three</p>
      </div>

      <!-- Add more sponsors as needed -->
    </div>
  </div>
</section>


<!-- Schedule Section -->
<?php include 'schedule.php'; ?>

<script>
  const scheduleTabs = document.querySelectorAll('.schedule-tab');
  const scheduleContents = document.querySelectorAll('.schedule-content');

  scheduleTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Remove active styles
      scheduleTabs.forEach(t => {
        t.classList.remove('active', 'bg-[#0066CC]', 'text-white');
        t.classList.add('bg-gray-200', 'text-gray-700');
      });
      scheduleContents.forEach(content => {
        content.classList.remove('active');
        content.classList.add('hidden');
      });

      // Activate clicked tab and corresponding content
      tab.classList.add('active', 'bg-[#0066CC]', 'text-white');
      tab.classList.remove('bg-gray-200', 'text-gray-700');

      const target = document.getElementById(tab.dataset.tab);
      target.classList.remove('hidden');
      target.classList.add('active', 'animate__animated', 'animate__fadeIn');
    });
  });

  console.log('Page complete');
</script>

<?php include 'footer.php'; ?>
