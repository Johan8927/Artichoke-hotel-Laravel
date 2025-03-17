<script setup lang="ts">

</script>

<template>
  <div class="flex items-center justify-center h-screen">
    <div class="overflow-x-auto p-4 rounded-lg">
      <table class="w-full bg-white shadow-md rounded-lg border border-gray-200">
        <thead>
        <tr class="border-b">
          <th class="px-6 py-4 text-left text-gray-600">Product Name</th>
          <th class="px-6 py-4 text-left text-gray-600">Unit Price</th>
          <th class="px-6 py-4 text-left text-gray-600">Qty</th>
          <th class="px-6 py-4 text-left text-gray-600">Total</th>
        </tr>
        </thead>
        <tbody>
        <tr class="border-b">
          <td class="px-6 py-4 flex items-center gap-4">
            <img src="https://suitecosy.com/photo/461_1.jpg?2024-09-3002:35:02"
                 alt="Product" class="w-12 h-12 rounded-md">
            <div>
              <p class="text-gray-800 font-medium">Suite</p>
              <span class="text-green-500">UBL</span>
            </div>
          </td>
          <td class="px-6 py-4">$480</td>
          <td class="px-6 py-4">x1</td>
          <td class="px-6 py-4 text-gray-900">$480</td>
        </tr>
        <tr class="border-b">
          <td class="px-6 py-4 flex items-center gap-4">
            <img src="https://suitecosy.com/photo/461_2.jpg?2024-09-3002:35:02"
                 alt="Product" class="w-12 h-12 rounded-md">
            <div>
              <p class="text-gray-800 font-medium">Luxurious room</p>
              <span class="text-green-500">UBL</span>
            </div>
          </td>
          <td class="px-6 py-4">$250</td>
          <td class="px-6 py-4">x2</td>
          <td class="px-6 py-4 text-gray-900">$500</td>
        </tr>
        <tr>
          <td class="px-6 py-4 flex items-center gap-4">
            <img src="https://suitecosy.com/photo/461_3.jpg?2024-09-3002:35:02"
                 alt="Product" class="w-12 h-12 rounded-md">
            <div>
              <p class="text-gray-800 font-medium">Standard room</p>
              <span class="text-green-500">UBL</span>
            </div>
          </td>
          <td class="px-6 py-4">$100</td>
          <td class="px-6 py-4">x3</td>
          <td class="px-6 py-4 text-gray-900">$300</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style scoped>

</style>
