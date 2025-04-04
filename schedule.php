<section id="schedule" class="py-20 bg-white">
  <div class="container mx-auto px-6">
    <h2 class="text-4xl font-bold text-center text-[#0066CC] mb-12 animate__animated animate__fadeInUp">
      Conference Schedule
    </h2>

    <div class="max-w-5xl mx-auto">
      <div class="flex mb-8">
        <div class="w-full flex justify-center space-x-4" role="tablist">
          <button class="schedule-tab active px-6 py-2 rounded-full bg-[#0066CC] text-white" data-tab="day1">
            Day 1 - June 15
          </button>
          <button class="schedule-tab px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#0066CC] hover:text-white transition duration-300" data-tab="day2">
            Day 2 - June 16
          </button>
          <button class="schedule-tab px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#0066CC] hover:text-white transition duration-300" data-tab="day3">
            Day 3 - June 17
          </button>
        </div>
      </div>

      <!-- Day 1 Content -->
      <div id="day1" class="schedule-content active animate__animated animate__fadeIn">
        <div class="bg-gray-50 rounded-lg p-6 mb-4 hover:shadow-lg transition duration-300">
          <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
            <div>
              <span class="text-[#0066CC] font-semibold">9:00 AM - 10:30 AM</span>
              <h3 class="text-xl font-bold mt-2">Opening Keynote</h3>
              <p class="text-gray-600">Main Conference Hall</p>
            </div>
            <span class="mt-2 md:mt-0 bg-blue-100 text-[#0066CC] px-4 py-1 rounded-full">Keynote</span>
          </div>
        </div>

        <div class="bg-gray-50 rounded-lg p-6 mb-4 hover:shadow-lg transition duration-300">
          <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
            <div>
              <span class="text-[#0066CC] font-semibold">11:00 AM - 12:30 PM</span>
              <h3 class="text-xl font-bold mt-2">Research Track Session 1</h3>
              <p class="text-gray-600">Room A</p>
            </div>
            <span class="mt-2 md:mt-0 bg-green-100 text-green-700 px-4 py-1 rounded-full">Research</span>
          </div>
        </div>

        <div class="bg-gray-50 rounded-lg p-6 mb-4 hover:shadow-lg transition duration-300">
          <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
            <div>
              <span class="text-[#0066CC] font-semibold">2:00 PM - 3:30 PM</span>
              <h3 class="text-xl font-bold mt-2">Industry Track Presentations</h3>
              <p class="text-gray-600">Room B</p>
            </div>
            <span class="mt-2 md:mt-0 bg-purple-100 text-purple-700 px-4 py-1 rounded-full">Industry</span>
          </div>
        </div>
      </div>

      <!-- Day 2 and Day 3 placeholders -->
      <div id="day2" class="schedule-content hidden"></div>
      <div id="day3" class="schedule-content hidden"></div>
    </div>
  </div>
</section>

<script>
  const scheduleTabs = document.querySelectorAll('.schedule-tab');
  const scheduleContents = document.querySelectorAll('.schedule-content');

  scheduleTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      scheduleTabs.forEach(t => {
        t.classList.remove('active', 'bg-[#0066CC]', 'text-white');
        t.classList.add('bg-gray-200', 'text-gray-700');
      });
      scheduleContents.forEach(content => {
        content.classList.remove('active');
        content.classList.add('hidden');
      });

      tab.classList.add('active', 'bg-[#0066CC]', 'text-white');
      tab.classList.remove('bg-gray-200', 'text-gray-700');

      const target = document.getElementById(tab.dataset.tab);
      target.classList.remove('hidden');
      target.classList.add('active', 'animate__animated', 'animate__fadeIn');
    });
  });
</script>
