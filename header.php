<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="ACM SIGMOD Conference 2026 - The premier international conference on the management of data." />
  <meta name="theme-color" content="#ffffff" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="robots" content="{{project.meta.robotsMeta}}" />
  <title>sigmod2026</title>

  <script id="header-scripts">
    if (window.scripts && window.scripts.head) {
      document.getElementById('header-scripts').outerHTML = window.scripts.head;
    }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.8/handlebars.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/x-icon" href="./images/sigmod_symbol.png">
</head>

<body class="antialiased text-gray-800 min-h-screen flex flex-col">
  <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 focus:z-50 focus:p-4 focus:bg-white focus:text-black">Skip to main content</a>

  <!-- Header -->
  <header class="relative z-50 bg-white dark:bg-gray-900">
    <!-- Additional header content if any -->
  </header>

  <!-- Navigation Bar -->
  <div id="root">
    <header id="header" class="fixed w-full z-50 bg-white shadow-md">
      <nav class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <a href="/" class="flex items-center text-3xl font-bold text-[#0066CC]">
              <img src="./images/sigmod_symbol.png" alt="SIGMOD Logo" class="h-10 w-auto mr-2" style="width: 150px; height: 50px;" />
            </a>
          </div>

          <!-- Hamburger Button (Mobile) -->
          <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>

          <!-- Desktop Menu -->
          <div id="menu" class="hidden md:flex items-center space-x-4 flex-col md:flex-row absolute md:static top-full left-0 w-full md:w-auto bg-white ">
            <?php
            $menus = [
              "Organisation" => [
                "Warmup" => "warmup.php",
                "Inclusion and Diversity" => "inclusion_diversity.php",
                "Organization" => "organization.php",
                "SIGMOD PC" => "sigmod_pc.php",
                "PODS PC" => "pods_pc.php",
                "SIGMOD Industry PC" => "sigmod_industry_pc.php",
                "SIGMOD Demo PC" => "sigmod_demo_pc.php",
                "Sponsor Opportunities" => "sponsors.php",
                "ACM SIGMOD Online" => "https://sigmod.org/"
              ],
              "SIGMOD Program" => [
                "Accepted Papers" => "accepted_papers.php",
                "Accepted Demos" => "accepted_demos.php",
                "Accepted Workshops" => "accepted_workshops.php",
                "Accepted Tutorials" => "accepted_tutorials.php",
                "Accepted Panels" => "accepted_panels.php",
                "Accepted Industry Papers" => "accepted_industry_papers.php"
              ],
              "PODS Program" => [
                "Reproducibility" => "https://reproducibility.sigmod.org/",
                "Research Papers" => "pods_research.php",
                "Keynote Talk" => "pods_keynote.php",
                "Invited Tutorials" => "pods_tutorials.php",
                "Awards" => "pods_awards.php",
                "Gems of PODS" => "pods_gems.php"
              ],
              "Participant Information" => [
                "Registration" => "registration.php",
                "Conference Venue" => "venue.php",
                "Accomodation" => "accomodation.php",
                "Childcare" => "childcare.php",
                "Banquet" => "banquet.php",
                "Visa" => "visa.php",
                "Travel to India" => "travel_india.php",
                "Tourism" => "tourism.php",
                "About India" => "about_india.php",
                "Student Travel Grants" => "student_grants.php"
              ],
              "Call for Submissions" => [
                "Important Dates" => "important_dates.php",
                "SIGMOD Call for Research Papers" => "sigmod_research_call.php",
                "PODS Call for Research Papers" => "pods_research_call.php",
                "SIGMOD Call for Tutorial Proposals" => "sigmod_tutorial_call.php",
                "SIGMOD Call for Industrial Track Papers" => "sigmod_industrial_call.php",
                "SIGMOD Call for Workshop Proposals" => "sigmod_workshop_call.php",
                "SIGMOD Call for Demonstration Proposals" => "sigmod_demo_call.php",
                "SIGMOD Call for Award Nomination" => "sigmod_award_call.php",
                "SIGMOD Call for Doctoral Dissertation Award" => "https://sigmod.org/sigmod-awards/doctoral-dissertation-award/",
                "SIGMOD Programming Contest" => "https://sigmod-contest-2025.github.io/index.html"
              ]
            ];

            foreach ($menus as $title => $items) {
              echo '<div class="relative group">';
              echo '<button class="flex items-center justify-between w-full md:w-auto text-gray-700 hover:text-[#0066CC] px-3 py-2">';
              echo $title;
              echo '<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>';
              echo '</button>';
              
              // FIX: dropdown directly touches the button and stays on hover
              echo '<div class="hidden absolute top-full left-0 group-hover:block bg-white w-full md:w-56 shadow-lg rounded-md py-2 z-10">';
              foreach ($items as $item => $link) {
                echo '<a href="' . $link . '" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">' . $item . '</a>';
              }
              echo '</div></div>';
            }
            ?>
          </div>
        </div>
      </nav>
    </header>
  </div>

  <script>
    const toggleBtn = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    toggleBtn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
