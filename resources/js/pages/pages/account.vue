<template>
  <Header/>

  <!-- Conteneur avec padding-top ajusté pour éviter tout chevauchement -->
  <div class="mt-40 text-center">
    <h1 class="text-8xl text-black font-bonheur-royale">Welcome, nice to see you again!</h1>

    <div class="-mt-8 scale-150">
      <booking-summary/>
    </div>

    <div class="scale-150 mt-8">
      <update-profil-form/>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import UpdateProfilForm from "~/components/userAccount/updateProfilForm.vue"
import BookingSummary from "~/components/userAccount/bookingSummary.vue"

const clientName = ref('')
const clientEmail = ref('')
const clientPassword = ref('')

const submitForm = () => {
  if (clientName.value && clientEmail.value && clientPassword.value) {
    alert(`Account for ${clientName.value} has been created!`)
  } else {
    alert('Please fill in all fields.')
  }
}
</script>

<style scoped>
/* Assure-toi que le header reste bien en haut */
header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 50; /* Pour s'assurer que le header reste au-dessus du contenu */
  background-color: #FFFBEB; /* Couleur de fond pour le header */
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Ajout d'une légère ombre */
}

.font-bonheur-royale {
  font-family: 'Bonheur Royale', cursive;
}


body {
  padding-top: 4rem; /* Ajuste cette valeur selon la hauteur de ton header */
}
</style>
