<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">
  <title>Responsive Sidebar</title>
  <style>
    #sidebar.collapsed .group {
      position: relative;
    }

    #sidebar.collapsed .submenu {
      position: absolute;
      top: 50%;
      left: 1rem;
      background-color: white;
      color: black;
      min-width: 10rem;
      padding: 0.5rem;
      border: 1px solid #ccc;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      z-index: 50;
      display: none;
    }

    @media (max-width: 767px) {
      #sidebar.collapsed .submenu {
        position: static;
        background-color: transparent;
        color: inherit;
        min-width: auto;
        padding: 0;
        border: none;
        box-shadow: none;
        margin-left: 2.5rem;
        margin-top: 0.25rem;
      }
    }

    @media (min-width: 768px) {
      #sidebar.collapsed .group:hover .submenu,
      #sidebar.collapsed .submenu:hover {
        display: block;
      }
    }

    #sidebar.collapsed > div.p-4.pb-2.flex {
      flex-direction: column !important;
      align-items: flex-start;
      gap: 0.5rem;
    }

    #sidebar:not(.collapsed) > div.p-4.pb-2.flex {
      flex-direction: row !important;
      justify-content: space-between;
      align-items: center;
    }

    #sidebar:not(.collapsed) #desktopToggleBtn {
      margin-top: 0;
      align-self: flex-end;
    }

    #sidebar.collapsed #desktopToggleBtn {
      margin-top: 0.25rem;
      align-self: flex-start;
    }
  </style>
</head>

<body class="m-0 p-0">
  <aside class="h-screen">
    <button id="mobileToggleBtn" class="p-2 rounded-lg  fixed top-4 left-4 z-50 md:hidden">
      <i id="mobileToggleIcon" class="fa-solid fa-bars"></i>
    </button>

    <nav id="sidebar" class="fixed top-0 left-0 h-full flex flex-col bg-white border-r shadow-sm transition-all transform -translate-x-full md:translate-x-0 md:static w-64 z-40">
      <div class="p-4 pb-2 flex flex-col lg:flex-row lg:justify-between items-center">
        <img id="logo" src="{{ asset('assets/images/chess_logo.svg') }}" class="transition-all duration-300 !w-12 pl-2" alt="Logo" />
        <button id="desktopToggleBtn" class="p-1.5 rounded-lg mt-4 md:block hidden">
          <i id="desktopToggleIcon" class="fa-solid fa-bars"></i>
        </button>
      </div>

      <ul id="menu" class="flex-1 px-3 space-y-1">
        <li class="group relative flex items-center py-2 px-2 my-1 font-medium rounded-md cursor-pointer hover:bg-indigo-50 text-gray-600">
          <i class="fa-regular fa-clock"></i>
          <span class="label overflow-hidden transition-all duration-300 w-52 ml-3">Dashboard</span>
        </li>

        <li class="group relative flex flex-col text-gray-600">
          <div id="usersToggle" class="flex items-center justify-between py-2 px-2 my-1 font-medium rounded-md cursor-pointer hover:bg-indigo-50">
            <div class="flex items-center">
              <i class="fa-regular fa-user"></i>
              <span class="label overflow-hidden transition-all duration-300 w-52 ml-3">Users</span>
            </div>
            <i id="usersArrow" class="fa-solid fa-chevron-down -ml-24 lg:-ml-20 transition-transform duration-300"></i>
          </div>

          <ul id="usersSubmenu" class="submenu ml-10 mt-1 space-y-1 hidden transition-all duration-300 ease-in-out">
            <li class="py-1 px-2 rounded-md hover:bg-indigo-100 cursor-pointer text-sm">View Users</li>
            <li class="py-1 px-2 rounded-md hover:bg-indigo-100 cursor-pointer text-sm">Add User</li>
          </ul>
        </li>

        <li class="group relative flex items-center py-2 px-2 my-1 font-medium rounded-md cursor-pointer hover:bg-indigo-50 text-gray-600">
          <i class="fa-solid fa-gear"></i>
          <span class="label overflow-hidden transition-all duration-300 w-52 ml-3">Settings</span>
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
const desktopToggleBtn = document.getElementById("desktopToggleBtn");
const desktopToggleIcon = document.getElementById("desktopToggleIcon");
const logo = document.getElementById("logo");
const userInfo = document.getElementById("userInfo");
const labels = document.querySelectorAll(".label");
const usersToggle = document.getElementById("usersToggle");
const usersSubmenu = document.querySelector("#usersSubmenu.submenu");
const usersArrow = document.getElementById("usersArrow");
const mobileToggleBtn = document.getElementById("mobileToggleBtn");
const mobileToggleIcon = document.getElementById("mobileToggleIcon");

let expanded = true;

function updateIcon(iconElement) {
  iconElement.classList.toggle("fa-bars", !expanded);
  iconElement.classList.toggle("fa-x", expanded);
}

function toggleSidebar() {
  expanded = !expanded;

  if (expanded) {
    sidebar.classList.remove("collapsed");
    sidebar.classList.add("w-64");
    sidebar.classList.remove("w-24");

    logo.classList.replace("w-4", "w-12");
    userInfo.classList.replace("w-0", "w-52");
    userInfo.classList.replace("ml-0", "ml-3");

    labels.forEach(label => {
      label.classList.replace("w-0", "w-52");
      label.classList.replace("ml-0", "ml-3");
    });

  } else {
    sidebar.classList.add("collapsed");
    sidebar.classList.add("w-24");
    sidebar.classList.remove("w-64");

    logo.classList.replace("w-12", "w-4");
    userInfo.classList.replace("w-52", "w-0");
    userInfo.classList.replace("ml-3", "ml-0");

    labels.forEach(label => {
      label.classList.replace("w-52", "w-0");
      label.classList.replace("ml-3", "ml-0");
    });

    usersSubmenu.classList.add("hidden");
    usersArrow.classList.remove("rotate-180");
  }

  updateIcon(desktopToggleIcon);
}

window.addEventListener("DOMContentLoaded", () => {
  if (window.innerWidth < 768) {
    expanded = false;
    sidebar.classList.add("w-48", "-translate-x-full");
  } else {
    expanded = true;
    sidebar.classList.remove("collapsed", "w-24", "-translate-x-full");
    sidebar.classList.add("w-64");
  }

  updateIcon(desktopToggleIcon);
  updateIcon(mobileToggleIcon);
});

// Desktop sidebar toggle
desktopToggleBtn.addEventListener("click", toggleSidebar);

// Users submenu toggle
usersToggle.addEventListener("click", (e) => {
  e.preventDefault();

  if (window.innerWidth < 768 || (window.innerWidth >= 768 && expanded)) {
    usersSubmenu.classList.toggle("hidden");
    usersArrow.classList.toggle("rotate-180");
  }
});

// Mobile sidebar toggle
mobileToggleBtn.addEventListener("click", () => {
  const isOpening = sidebar.classList.contains("-translate-x-full");

  sidebar.classList.toggle("-translate-x-full");

  if (isOpening) {
    // Sidebar is opening
    mobileToggleBtn.classList.remove("left-4");
    mobileToggleBtn.classList.add("right-40");
    mobileToggleIcon.classList.remove("fa-bars");
    mobileToggleIcon.classList.add("fa-x");

    // X icon কে ডানে সরানোর জন্য মার্জিন দিন
    mobileToggleIcon.style.marginLeft = "auto";
    mobileToggleIcon.style.marginRight = "1rem";

    // এখানে কোন setTimeout নেই, তাই আইকন গায়েব হবে না
  } else {
    // Sidebar is closing
    mobileToggleBtn.classList.remove("right-40", "hidden");
    mobileToggleBtn.classList.add("left-4");
    mobileToggleIcon.classList.remove("fa-x");
    mobileToggleIcon.classList.add("fa-bars");

    // মার্জিন রিসেট করো
    mobileToggleIcon.style.marginLeft = "";
    mobileToggleIcon.style.marginRight = "";
  }

  // Sidebar বন্ধ হলে submenu বন্ধ রাখবে
  if (sidebar.classList.contains("-translate-x-full")) {
    usersSubmenu.classList.add("hidden");
    usersArrow.classList.remove("rotate-180");
  }
});


  </script>
</body>
</html>
