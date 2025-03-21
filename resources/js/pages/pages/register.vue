<script setup lang="ts">
import { ref } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()

const clientName = ref('')
const clientEmail = ref('')
const clientPassword = ref('')
const confirmPassword = ref('')
const termsAccepted = ref(false)

async function handleFormSubmit() {
  if (!termsAccepted.value) {
    alert("You must accept the terms and conditions.")
    return
  }

  if (!clientEmail.value || !clientPassword.value || !clientName.value || !confirmPassword.value) {
    alert("All fields must be filled.")
    return
  }

  try {
    const res = await fetch('http://localhost:8000/register', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        name: clientName.value,
        email: clientEmail.value,
        password: clientPassword.value,
        confirm_password: confirmPassword.value,
        terms: true
      })
    })

    if (res.ok) {
      alert('Account created successfully!')
      await router.push('/account')
    } else {
      const errorData = await res.json()
      alert(`An error occurred: ${errorData.message}`)
    }
  } catch (error) {
    console.error("Network error:", error)
    alert('A network error occurred.')
  }
}
</script>

<template>
  <div class="mt-32">
    <h1 class="text-4xl text-black text-center luxurious-roman-regular">Welcome, please register to continue</h1>
  </div>
  <div class="mt-80">
  <div class="-mt-8 scale-x-125 scale-y-125">
  <div class="h-screen w-screen pt-10">
    <div class="max-w-xl mx-auto bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <form @submit.prevent="handleFormSubmit" class="flex-col space-y-4">

        <!-- Email Field -->
        <div class="flex flex-col space-y-2">
          <label class="block font-medium text-gray-700">E-Mail Address</label>
          <input
              type="email"
              v-model="clientEmail"
              class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"
              placeholder="E-Mail Address"
              required
          />
        </div>
        <!-- Password Field -->
        <div class="flex flex-col space-y-2">
          <label class="block font-medium text-gray-700">
            Password <span class="text-gray-500 font-base text-sm">(Min. 8 char)</span>
          </label>
          <input
              type="password"
              v-model="clientPassword"
              minlength="6"
              class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"
              placeholder="Password"
              required
          />
        </div>

        <!-- Confirm Password Field -->
        <div class="flex flex-col space-y-2">
          <label class="block font-medium text-gray-700">Confirm Password</label>
          <input
              type="password"
              v-model="confirmPassword"
              class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"
              placeholder="Confirm Password"
              required
          />
        </div>

        <!-- Name Field -->
        <div class="flex flex-col space-y-2">
          <label class="block font-medium text-gray-700">Name</label>
          <input
              type="text"
              v-model="clientName"
              class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"
              placeholder="Name"
              required
          />
        </div>

        <!-- Terms Checkbox -->
        <div class="flex flex-col space-y-2">
          <label class="block font-medium text-gray-600 items-start space-x-2">
            <input
                type="checkbox"
                v-model="termsAccepted"
                class="h-4 w-4 rounded border-gray-300 focus:ring-indigo-500 text-indigo-600"
                required
            />
            <span>
              I have read and agree to the
              <a href="/legal/privacy" target="_blank" class="text-primary-600 hover:text-primary-700">Privacy Policy</a>
              and
              <a href="/legal/terms" target="_blank" class="text-primary-600 hover:text-primary-700">Terms and Conditions</a>.
            </span>
          </label>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
          <button
              type="submit"
              class="inline-flex items-center justify-center px-4 py-2.5 border border-transparent text-sm font-medium rounded-md shadow-sm focus:outline-none ring-2 ring-offset-2 ring-transparent ring-offset-transparent disabled:bg-gray-400 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-white w-full"
          >
            <span>Sign up</span>
          </button>
        </div>
      </form>
    </div>
  </div>
  </div>*
  </div>
</template>
