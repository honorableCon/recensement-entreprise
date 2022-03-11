<!--<div class="bg-grey-lighter min-h-screen flex w-full">

     <div class="container max-w-sm mx-auto flex-1 w-full flex flex-cold items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md flex-col text-black w-6/12">
            <h1 class="mb-8 text-3xl text-center">Entreprise</h1>
            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="fullname"
                placeholder="Nom" />

            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                placeholder="Siege" />

            <input type="number" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                placeholder="registre" />
            
            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                placeholder="NINEA" />

            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                placeholder="Site web" />
            
            <input type="date" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                placeholder="date creation" />
            <input type="number" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                placeholder="registre" />
            <button type="submit" class="w-full text-center py-3 rounded bg-blue-600 font-bold text-white hover:bg-green-dark focus:outline-none my-1">
                Save
            </button>

        </div>

    </div> 
</div>-->

<style>
    .rounded-semi{
        border-top-left-radius: 8rem !important;
        /* background-color: red; */
    }
</style>

<form method="POST" action="/entreprise/process" class="rounded-semi bg-grey-lighters bg-blue-100 min-h-screen flex w-full">
    <!-- ============================= Entreprise ====================== -->

    <div class="flex-1 w-64 bg-blue-600d justify-center items-center flex">
        <div class="bg-white px-6 py-8 rounded shadow-md flex-col text-black mx-6 w-full">
            <h1 class="mb-8 text-3xl text-center">Entreprise</h1>
            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="fullname"
                placeholder="Nom" />

            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="siege"
                placeholder="Siege" />

            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="siteweb"
                placeholder="Site web" />

            <input type="date" class="block border border-grey-light w-full p-3 rounded mb-4" name="datecreation"
                placeholder="date creation" />

                
            <div class="grid gap-4 grid-cols-2">
                <input type="number" class="inline border border-grey-light p-3 rounded mb-4" name="register"
                placeholder="registre" />
                
                <input type="text" class="inline border border-grey-light p-3 rounded mb-4" name="ninea"
                placeholder="NINEA" />
            </div>

            <div class="grid gap-4 grid-cols-2">
            <input type="text" class="inline border border-grey-light p-3 rounded mb-4" name="quartier"
                placeholder="Quartier/Village" />

            <input type="text" class="inline border border-grey-light p-3 rounded mb-4" name="commune"
                placeholder="Commune" />
            </div>
            <div class="grid gap-4 grid-cols-2">
                <input type="text" class="inline border border-grey-light p-3 rounded mb-4" name="password"
                placeholder="Domaine" />
                
                <input type="text" class="inline border border-grey-light p-3 rounded mb-4" name="password"
                placeholder="Regime Juridque" />
            </div>

        </div>
    </div>

    <!-- ============================= Repondant ====================== -->
    <div class="flex-1 w-64 bg-blue-600d justify-center items-center flex">
        <div class="bg-white px-6 py-8 rounded shadow-md flex-col text-black w-full mx-8">
            <h1 class="mb-8 text-3xl text-center">Repondant</h1>

            <!-- <div class="grid gap-4 grid-cols-2"> -->

            <input type="text" class="w-full border border-grey-light p-3 rounded mb-4" name="laststname"
                placeholder="Nom" />

            <input type="text" class="w-full border border-grey-light p-3 rounded mb-4" name="firstname"
                placeholder="Prenom" />
            <!-- </div> -->

            <input type="email" class="block border border-grey-light w-full p-3 rounded mb-4" name="emailRepondant"
                placeholder="couriel" />

            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="fonction"
                placeholder="fonction" />

            <input type="tel" class="block border border-grey-light w-full p-3 rounded mb-4" name="numberRepondant"
                placeholder="Numéro téléphone" />
            <button type="submit"
                class="w-full text-center py-3 rounded bg-blue-600 font-bold text-white hover:bg-green-dark focus:outline-none my-1">
                Enregistrer
            </button>

        </div>
    </div>
</form>