<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">
</head>

<body class="m-0 p-0">

  <aside class="h-screen">
    <!-- Mobile Toggle Button -->
    <button id="mobileToggleBtn" class="p-2 rounded-lg bg-white shadow-md hover:bg-gray-100 fixed top-4 left-4 z-50 md:hidden">
      <i id="mobileToggleIcon" data-lucide="chevron-last"></i>
    </button>

    <!-- Sidebar -->
    <nav id="sidebar" class="fixed top-0 left-0 h-full flex flex-col bg-white border-r shadow-sm transition-all transform -translate-x-full md:translate-x-0 md:static w-64 z-40">

      <div class="p-4 pb-2 flex justify-between items-center">
        <img id="logo" src="{{ asset('assets/images/chess_logo.svg') }}" class="transition-all duration-300 w-4" alt="Logo" />
        <!-- Desktop Toggle Button -->
        <button id="desktopToggleBtn" class="p-1.5 rounded-lg bg-gray-50 hover:bg-gray-100 hidden md:block">
          <i id="desktopToggleIcon" data-lucide="chevron-first"></i>
        </button>
      </div>

      <ul id="menu" class="flex-1 px-3 space-y-1">
        <li class="group relative flex items-center py-2 px-3 my-1 font-medium rounded-md cursor-pointer hover:bg-indigo-50 text-gray-600">
          <i class="fa-regular fa-clock"></i>
          <span class="label overflow-hidden transition-all duration-300 w-52 ml-3">Dashboard</span>
          <div class="absolute left-full ml-6 px-2 py-1 rounded-md bg-indigo-100 text-indigo-800 text-sm invisible opacity-0 -translate-x-3 transition-all duration-300 group-hover:visible group-hover:opacity-100 group-hover:translate-x-0">
            Dashboard
          </div>
        </li>
        <li class="group relative flex items-center py-2 px-3 my-1 font-medium rounded-md cursor-pointer hover:bg-indigo-50 text-gray-600">
          <i data-lucide="users"></i>
          <span class="label overflow-hidden transition-all duration-300 w-52 ml-3">Users</span>
          <div class="absolute left-full ml-6 px-2 py-1 rounded-md bg-indigo-100 text-indigo-800 text-sm invisible opacity-0 -translate-x-3 transition-all duration-300 group-hover:visible group-hover:opacity-100 group-hover:translate-x-0">
            Users
          </div>
        </li>
        <li class="group relative flex items-center py-2 px-3 my-1 font-medium rounded-md cursor-pointer hover:bg-indigo-50 text-gray-600">
          <i data-lucide="settings"></i>
          <span class="label overflow-hidden transition-all duration-300 w-52 ml-3">Settings</span>
          <div class="absolute left-full ml-6 px-2 py-1 rounded-md bg-indigo-100 text-indigo-800 text-sm invisible opacity-0 -translate-x-3 transition-all duration-300 group-hover:visible group-hover:opacity-100 group-hover:translate-x-0">
            Settings
          </div>
        </li>
      </ul>

      <div class="border-t flex p-3">
        <img src="https://ui-avatars.com/api/?background=c7d2fe&color=3730a3&bold=true" alt="User Avatar" class="w-10 h-10 rounded-md" />
        <div id="userInfo" class="flex justify-between items-center overflow-hidden transition-all duration-300 w-52 ml-3">
          <div class="leading-4">
            <h4 class="font-semibold">John Doe</h4>
            <span class="text-xs text-gray-600">johndoe@gmail.com</span>
          </div>
          <i data-lucide="more-vertical" class="ml-2"></i>
        </div>
      </div>
    </nav>
  </aside>

  <script>
    const sidebar = document.getElementById("sidebar");
    const mobileToggleBtn = document.getElementById("mobileToggleBtn");
    const desktopToggleBtn = document.getElementById("desktopToggleBtn");
    const mobileToggleIcon = document.getElementById("mobileToggleIcon");
    const desktopToggleIcon = document.getElementById("desktopToggleIcon");
    const logo = document.getElementById("logo");
    const userInfo = document.getElementById("userInfo");
    const labels = document.querySelectorAll(".label");

    let expanded = true;

    function toggleSidebar() {
      expanded = !expanded;

      if (expanded) {
        sidebar.classList.remove("w-16", "-translate-x-full");
        sidebar.classList.add("w-64", "translate-x-0");

        logo.classList.replace("w-0", "w-32");
        userInfo.classList.replace("w-0", "w-52");
        userInfo.classList.replace("ml-0", "ml-3");

        labels.forEach(label => {
          label.classList.replace("w-0", "w-52");
          label.classList.replace("ml-0", "ml-3");
        });

        mobileToggleIcon.setAttribute("data-lucide", "chevron-last");
        desktopToggleIcon.setAttribute("data-lucide", "chevron-first");
        mobileToggleBtn.style.left = "16rem";
      } else {
        sidebar.classList.remove("w-64", "translate-x-0");
        sidebar.classList.add("w-16", "-translate-x-full");

        logo.classList.replace("w-32", "w-0");
        userInfo.classList.replace("w-52", "w-0");
        userInfo.classList.replace("ml-3", "ml-0");

        labels.forEach(label => {
          label.classList.replace("w-52", "w-0");
          label.classList.replace("ml-3", "ml-0");
        });

        mobileToggleIcon.setAttribute("data-lucide", "chevron-first");
        desktopToggleIcon.setAttribute("data-lucide", "chevron-last");
        mobileToggleBtn.style.left = "1rem";
      }

      lucide.createIcons();
    }

    mobileToggleBtn.addEventListener("click", toggleSidebar);
    desktopToggleBtn.addEventListener("click", toggleSidebar);

    // Initialize lucide icons on page load
    lucide.createIcons();
  </script>

</body>
</html>
