<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-amber-50 min-h-screen">
    <Header/>

    <!-- Conteneur principal -->
    <div class="mt-40 text-center p-4">
        <h1 class="text-4xl md:text-6xl lg:text-8xl text-black font-bonheur-royale">
            Welcome, nice to see you again!
        </h1>

        <div class="mt-60 md:mt-20 scale-90 md:scale-200 flex justify-center">
            <h1 class="text-4xl md:text-8xl lg:text-6xl text-black font-bonheur-royale">
                Booking Summary
            </h1>
        </div>


        <div class="flex justify-center mt-4">
            <BookingSummary/>
        </div>

        <h1 class="text-4xl md:text-6xl lg:text-4xl text-black font-bonheur-royale">
            Account modification form
        </h1>

        <div class="mt-6 md:mt-8 scale-100 md:scale-125">
            <UpdateProfilForm/>
        </div>
    </div>
</div>
