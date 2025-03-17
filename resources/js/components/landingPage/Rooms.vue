<template>
  <body class="  text-purple-950 dark:text-white">
  <div class="max-w-7xl mx-auto p-6">
    <!-- Title -->
    <div class="text-center mb-6">
      <h1 class="bonheur-royale-regular text-6xl font-bold">Luxurious rooms</h1>
      <p class="luxurious-roman-regular text-gray-600 dark:text-gray-400">All rooms are designed for your comfort</p>
    </div>

    <!-- Carousel Wrapper -->
    <div class="overflow-hidden rounded-lg shadow-lg">
      <!-- Carousel -->
      <div class="carousel text-center">
        <!-- Slide 1 -->
        <div class="luxurious-roman-regular carousel-item bg-amber-50 dark:bg-gray-800 p-6">
          <img src="https://res.cloudinary.com/djv4xa6wu/image/upload/v1735722161/AbhirajK/Abhirajk2.webp" alt="Slide 1" class="w-full h-64 object-cover rounded-md">
          <h2 class="text-xl font-semibold mt-4">Room 1</h2>
          <p class=" dark:text-gray-400">Television set, Extra sheets</p>
        </div>

        <!-- Slide 2 -->
        <div class="luxurious-roman-regular carousel-item  bg-amber-50 dark:bg-gray-800 p-6">
          <img src="https://res.cloudinary.com/djv4xa6wu/image/upload/v1735722161/AbhirajK/Abhirajk3.webp" alt="Slide 2" class="w-full h-64 object-cover rounded-md">
          <h2 class=" text-xl font-semibold mt-4">Room 2</h2>
          <p class="text-gray-600 dark:text-gray-400">This is the second slide of the carousel.</p>
        </div>

        <!-- Slide 3 -->
        <div class="luxurious-roman-regular carousel-item bg-white dark:bg-gray-800 p-6">
          <img src="https://res.cloudinary.com/djv4xa6wu/image/upload/v1735722163/AbhirajK/Abhirajk%20mykare.webp" alt="Slide 3" class="w-full h-64 object-cover rounded-md">
          <h2 class="text-xl font-semibold mt-4">Our Suite</h2>
          <p class="text-gray-600 dark:text-gray-400">This is the third slide of the carousel.</p>
        </div>
      </div>
    </div>
  </div>
  </body>

</template>
<style>
/* Carousel animation */
@keyframes slide {
  0% {
    transform: translateX(0%);
  }
  20% {
    transform: translateX(0%);
  }
  25% {
    transform: translateX(-100%);
  }
  45% {
    transform: translateX(-100%);
  }
  50% {
    transform: translateX(-200%);
  }
  70% {
    transform: translateX(-200%);
  }
  75% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(0%);
  }
}

.carousel {
  display: flex;
  animation: slide 12s infinite;
}

.carousel-item {
  flex: 0 0 100%;
}
</style>