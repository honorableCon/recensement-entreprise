<section class="w-full bg-white">
    <div id="main" class="main-content flex-1 bg-gray-100s mt-12 md:mt-2 pb-24 md:pb-5">

        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <p class="text-2xl pb-3 flex items-center font-bold pl-2">
                    <i class="fas fa-list mr-3"></i> Table Entreprise
                </p>
            </div>
        </div>

        <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nom</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Siege</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">site web</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Creation</td>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                <?php require_once("tablerow.php")?>
                </tbody>
            </table>
        </div>
    </div>
</section>