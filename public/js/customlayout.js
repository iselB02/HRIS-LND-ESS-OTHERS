// Selecting the sidebar and buttons
const sidebar = document.querySelector(".sidebar");
const sidebarOpenBtn = document.querySelector("#sidebar-open");
const sidebarCloseBtn = document.querySelector("#sidebar-close");
const sidebarLockBtn = document.querySelector("#lock-icon");
const navbar = document.querySelector(".navbar");
const page_container = document.querySelector(".page_container");


// Function to toggle the lock state of the sidebar
const toggleLock = () => {
  sidebar.classList.toggle("locked");

  // If the sidebar is not locked
  if (!sidebar.classList.contains("locked")) {
    sidebar.classList.add("hoverable");
    sidebarLockBtn.classList.replace("bx-lock-alt", "bx-lock-open-alt");
  } else {
    sidebar.classList.remove("hoverable");
    sidebarLockBtn.classList.replace("bx-lock-open-alt", "bx-lock-alt");
  }

  // Adjust navbar positioning based on sidebar state
  adjustNavbarPosition();
};

// Function to hide the sidebar when the mouse leaves
const hideSidebar = () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
    adjustNavbarPosition();
  }
};

// Function to show the sidebar when the mouse enters
const showSidebar = () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
    adjustNavbarPosition();
  }
};

// Function to show and hide the sidebar
const toggleSidebar = () => {
  sidebar.classList.toggle("close");
  adjustNavbarPosition(); // Adjust navbar position immediately after toggling sidebar
};

// Function to adjust the navbar positioning based on sidebar state
const adjustNavbarPosition = () => {
  if (window.innerWidth <= 800) {
    navbar.style.left = "0";
    page_container.style.left = "0";
  } else if (sidebar.classList.contains("close")) {
    navbar.style.left = "75px"; // Adjust this value based on your closed sidebar width
    page_container.style.left = "75px";
  } else {
    navbar.style.left = "270px"; // Adjust this value based on your open sidebar width
    page_container.style.left = "270px";
  }
};

// Function to handle window resize
const handleWindowResize = () => {
  adjustNavbarPosition();
};

// If the window width is less than or equal to 800px, close the sidebar and remove hoverability and lock
if (window.innerWidth <= 800) {
  sidebar.classList.add("close");
  sidebar.classList.remove("locked");
  sidebar.classList.remove("hoverable");
} else {
  // Adjust navbar position immediately when the window is wider than 800px
  adjustNavbarPosition();
}

// Adding event listeners to buttons and sidebar for the corresponding actions
sidebarLockBtn.addEventListener("click", toggleLock);
sidebar.addEventListener("mouseleave", hideSidebar);
sidebar.addEventListener("mouseenter", showSidebar);
sidebarOpenBtn.addEventListener("click", toggleSidebar);
sidebarCloseBtn.addEventListener("click", toggleSidebar);

// Event listener for window resize
window.addEventListener("resize", handleWindowResize);

const toggleDropdown = () => {
  const dropdownMenu = document.querySelector('.user-pic-container .dropdown-menu');
  const chevronIcon = document.getElementById('chevron-icon');

  dropdownMenu.classList.toggle('open');
  chevronIcon.classList.toggle('rotate');
};

const closeDropdownOnOutsideClick = (event) => {
  const dropdownMenu = document.querySelector('.user-pic-container .dropdown-menu');
  const chevronIcon = document.getElementById('chevron-icon');
  const userProfile = document.getElementById('user-profile');

  if (!userProfile.contains(event.target) && !dropdownMenu.contains(event.target)) {
    dropdownMenu.classList.remove('open');
    chevronIcon.classList.remove('rotate');
  }
};

// Event listener for clicking the user-profile
document.getElementById('user-profile').addEventListener('click', toggleDropdown);

// Event listener for clicking outside the user-profile or dropdown
document.body.addEventListener('click', closeDropdownOnOutsideClick);

const toggleNotificationsDropdown = () => {
  const notificationsContainer = document.querySelector('.notifications-container');
  const notificationsDropdown = document.querySelector('.notifications-dropdown');
  
  notificationsDropdown.classList.toggle('open');
  notificationsContainer.classList.toggle('active');
};

// Event listener for clicking the notifications icon
document.querySelector('.notifications-container').addEventListener('click', toggleNotificationsDropdown);

// Event listener for clicking outside the notifications dropdown
document.addEventListener('click', (event) => {
  const notificationsContainer = document.querySelector('.notifications-container');
  const notificationsDropdown = document.querySelector('.notifications-dropdown');

  // Check if the clicked element is not within the notifications container or dropdown
  if (!notificationsContainer.contains(event.target) && !notificationsDropdown.contains(event.target)) {
    notificationsDropdown.classList.remove('open');
    notificationsContainer.classList.remove('active');
  }
});

// Function to set the active menu item based on the current URL
const setActiveMenuItem = () => {
  const currentUrl = window.location.href;
  const menuItems = document.querySelectorAll('.menu_item .item');

  menuItems.forEach(item => {
    const link = item.querySelector('a');
    const linkUrl = link.getAttribute('href');

    // Check if the current URL includes the menu item's URL
    if (currentUrl.includes(linkUrl)) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  });
};

// Add an event listener for when the DOM content is loaded
document.addEventListener("DOMContentLoaded", setActiveMenuItem);