 @vite(['resources/css/app.css','resources/js/app.js'])
<div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl p-8">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
         Enregistrer un nouveau logement
    </h2>

    <form class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- TITRE -->
        <div>
            <label class="label-premium">Nom du logement</label>
            <input type="text" class="input-premium" >
        </div>

        <!-- TYPE -->
        <div>
            <label class="label-premium">Type de logement</label>
            <select class="input-premium">
                <option>Appartement</option>
                <option>Maison</option>
                <option>Studio</option>
                <option>Villa</option>
            </select>
        </div>

        <!-- PRIX -->
        <div>
            <label class="label-premium">Prix mensuel (€)</label>
            <input type="number" class="input-premium" placeholder="450">
        </div>

        <!-- STATUT -->
        <div>
            <label class="label-premium">Statut</label>
            <select class="input-premium">
                <option>Disponible</option>
                <option>Occupé</option>
            </select>
        </div>

        <!-- ADRESSE -->
        <div class="md:col-span-2">
            <label class="label-premium">Adresse complète</label>
            <input type="text" class="input-premium" placeholder="Conakry, Ratoma, quartier...">
        </div>

        <!-- DESCRIPTION -->
        <div class="md:col-span-2">
            <label class="label-premium">Description</label>
            <textarea rows="4" class="input-premium" placeholder="Décrivez le logement, ses avantages, équipements..."></textarea>
        </div>

        <!-- IMAGE -->
        <div class="md:col-span-2">
            <label class="label-premium">Photo du logement</label>
            <input type="file"
                class="block w-full text-sm text-slate-500
                       file:mr-4 file:py-2 file:px-4
                       file:rounded-lg file:border-0
                       file:bg-indigo-50 file:text-indigo-600
                       hover:file:bg-indigo-100">
        </div>

        <!-- BUTTON -->
        <div class="md:col-span-2 text-right">
            <button class="btn-primary px-8">
                Enregistrer le logement
            </button>
        </div>
        
    </form>
</div>
