<template>
  <div class="relative bg-gradient-to-r from-purple-600 to-blue-600 h-screen text-white overflow-hidden">
    <div class="absolute inset-0">
      <img src ="https://img.freepik.com/photos-gratuite/abbaye-senanque-rangees-fleuries-fleurs-lavande-vue-panoramique_268835-861.jpg" class="object-cover object-center w-full h-full">
      <div class="lg:absolute inset-0 w-1/2 bg-amber-50 opacity-50">
      </div>

    </div>
    <div class="relative flex flex-col items-center max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6 p-8">
      <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pr-10">
        <div class="text-left">
          <h2
              class="bonheur-royale-regular text-8xl font-extrabold leading-10 tracking-tight text-purple-950 sm:text-5xl sm:leading-none md:text-6xl">
            Hotel Artichaut

          </h2>
          <p class="luxurious-roman-regular max-w-md mx-auto mt-3 text-base text-slate-950 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate dignissim augue, Nullam vulputate dignissim augue.
          </p>
          <div class="mt-5 sm:flex md:mt-8">
            <div class="rounded-md shadow">
              <button @click="isOpen = true" class="flex items-center justify-center w-full px-8 py-3 luxurious-roman-regular font-medium leading-6 text-amber-50 transition duration-150 ease-in-out bg-lime-600 border border-transparent rounded-md hover:bg-purple-950 focus:outline-none focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
              Book now
            </button></div>
          </div>
        </div>
      </div>
      <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
        <div class="relative w-full p-3 rounded  md:p-8">

        </div>
      </div>
    </div>
    <UModal v-model="isOpen">
      <UCard :ui="{ ring: '', divide: 'divide-y divide-gray-100 dark:divide-gray-800' }">
        <div class="flex items-center justify-center p-12">
          <!-- Author: FormBold Team -->
          <div class="mx-auto w-full max-w-[550px] bg-white">
            <form>
              <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                  Full Name
                </label>
                <input type="text" name="name" id="name" placeholder="Full Name"
                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              </div>
              <div class="mb-5">
                <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                  Phone Number
                </label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              </div>
              <div class="mb-5">
                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                  Email Address
                </label>
                <input type="email" name="email" id="email" placeholder="Enter your email"
                       class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              </div>
              <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                  <div class="mb-5">
                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                      Date
                    </label>
                    <input type="date" name="date" id="date"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                  </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                  <div class="mb-5">
                    <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                      Time
                    </label>
                    <input type="time" name="time" id="time"
                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                  </div>
                </div>
              </div>

              <div class="mb-5 pt-3">
                <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
                  Address Details
                </label>
                <div class="-mx-3 flex flex-wrap">
                  <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                      <input type="text" name="area" id="area" placeholder="Enter area"
                             class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                  </div>
                  <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                      <input type="text" name="city" id="city" placeholder="Enter city"
                             class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                  </div>
                  <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                      <input type="text" name="state" id="state" placeholder="Enter state"
                             class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                  </div>
                  <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                      <input type="text" name="post-code" id="post-code" placeholder="Post Code"
                             class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                  </div>
                </div>
              </div>

              <div>
                <button
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                  Book Appointment
                </button>
              </div>
            </form>
          </div>
        </div>


      </UCard>
    </UModal>
  </div>
</template>
<script setup lang="ts">
const isOpen = ref(false)
</script>