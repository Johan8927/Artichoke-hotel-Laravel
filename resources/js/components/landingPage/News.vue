<template>
  <body class="  text-purple-950 dark:text-white">
  <div class="max-w-7xl mx-auto p-6">
    <!-- Title -->
    <div class="text-center mb-6">
      <h1 class="bonheur-royale-regular text-6xl font-bold">News</h1>
      <p class="luxurious-roman-regular text-gray-600 dark:text-gray-400">Check the latest news from our resort</p>
    </div>

    <!-- Carousel Wrapper -->
    <div class="overflow-hidden rounded-lg shadow-lg">
      <!-- Carousel -->
      <div class="carousel  ">
        <!-- Slide 1 -->
        <div class="luxurious-roman-regular carousel-item bg-amber-50 dark:bg-gray-800 p-6">
          <div class="bg-gray-100  p-5 mb-10">
            <h1 class="font-bold  text-2xl mb-2">Tailwind Rocks!</h1>
            <p class="my-3 ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius eaque a ipsam aliquid omnis,
              beatae possimus recusandae illum rem. Minima sequi voluptas repudiandae id? Quae, facere quam suscipit sed,
              aperiam sapiente pariatur soluta enim perferendis illum veniam excepturi doloribus ducimus voluptatibus
              numquam officiis expedita culpa hic sequi quasi reprehenderit iste obcaecati nostrum. Consequuntur aliquam,
              assumenda architecto animi veniam dolore dolor?</p>
            <button class=" text-white font-semibold bg-purple-950 hover:bg-lime-600 p-2 my-1 rounded">Read More...</button>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="luxurious-roman-regular carousel-item  bg-amber-50 dark:bg-gray-800 p-6">
          <div class="bg-gray-100 p-5 mb-10">
            <h1 class=" font-bold text-2xl mb-2">Tailwind Rocks!</h1>
            <p class=" my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius eaque a ipsam aliquid omnis,
              beatae possimus recusandae illum rem. Minima sequi voluptas repudiandae id? Quae, facere quam suscipit sed,
              aperiam sapiente pariatur soluta enim perferendis illum veniam excepturi doloribus ducimus voluptatibus
              numquam officiis expedita culpa hic sequi quasi reprehenderit iste obcaecati nostrum. Consequuntur aliquam,
              assumenda architecto animi veniam dolore dolor?</p>
            <button class=" text-white font-semibold bg-purple-950 hover:bg-lime-600 p-2 my-1 rounded">Read More...</button>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="luxurious-roman-regularcarousel-item bg-white dark:bg-gray-800 p-6">
          <div class="bg-gray-100 p-5 mb-10">
            <h1 class="font-bold text-2xl mb-2">Tailwind Rocks!</h1>
            <p class="my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius eaque a ipsam aliquid omnis,
              beatae possimus recusandae illum rem. Minima sequi voluptas repudiandae id? Quae, facere quam suscipit sed,
              aperiam sapiente pariatur soluta enim perferendis illum veniam excepturi doloribus ducimus voluptatibus
              numquam officiis expedita culpa hic sequi quasi reprehenderit iste obcaecati nostrum. Consequuntur aliquam,
              assumenda architecto animi veniam dolore dolor?</p>
            <button class="text-white font-semibold bg-purple-950 hover:bg-lime-600 p-2 my-1 rounded">Read More...</button>
          </div>
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
<script setup lang="ts">
</script>