<title>Globos</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Globos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="mt-4 text-lg text-gray-900 dark:text-white">
                        Calcula y Reduce tu Consumo de Agua con Raxya
                    </h1>
                    <h2 class="mt-4 text-md text-gray-900 dark:text-gray-100">
                        La Importancia de Calcular el Consumo de Agua
                    </h2>
                    <p class="mt-4 text-sm text-gray-900 dark:text-gray-100">
                        Entender cuánta agua utilizas es esencial para una gestión eficiente y sostenible del recurso.
                        El cálculo preciso del consumo de agua proporciona información valiosa sobre tus hábitos y
                        permite tomar decisiones informadas para reducir el desperdicio.
                    </p>
                </div>
            </div>
            <br>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('globos.store') }}">
                        @csrf
                        <label for="bano">Tiempo que tardas en tomar un baño (en minutos):</label><br>
                        <input type="number" name="bano" id="bano" min="0" max="300" value="0"
                            class="bg-transparent"><br>

                        <label for="ducha">¿Cuántas veces a la semana?</label><br>
                        <input type="number" name="ducha" id="ducha" min="0" max="7" value="0"
                            class="bg-transparent"><br>

                        <label for="tomar">¿Cuánta agua tomas diariamente (litros)?</label><br>
                        <input type="number" name="tomar" id="tomar" min="0" max="10" value="0"
                            class="bg-transparent"><br>

                        <label for="lavar">¿Cuánta veces a la semana lavas tu ropa?</label><br>
                        <input type="number" name="lavar" id="lavar" min="0" max="20" value="0"
                            class="bg-transparent"><br>
                        <x-input-error :messages="$errors->get('bano')" /><br>
                        <x-primary-button>Enviar</x-primary-button>
                    </form>
                </div>
            </div>

            <div class="mt-6 bg-white dark:bg-gray-800 shadow-sm rounded-lg divide-y dark:divide-gray-900">
                <h1 class="mt-4 text-lg text-gray-900 dark:text-gray-100 p-2">Datos mensuales en litros:</h1>
                @foreach($globos as $globo)
                <div class="p-6 flex space-x-2">
                    <svg class="h-6 w-6 text-gray-600 dark:text-gray-400 -scale-x-100"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>

                    <div class="flex-1">
                        <div class="flex justify-beetwen items-center">
                            <div>
                                <span class="text-gray-800 dark:text-gray-200">
                                    {{ $globo->user->name }}
                                </span>
                                <small class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{
                                    $globo->created_at->format('j M Y, g:i a') }}</small>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">Agua de baño: {{ $globo->ducha_mes }}
                        </p>
                        <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">Agua tomada: {{ $globo->tomar_mes }}
                        </p>
                        <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">Agua usada para lavar: {{
                            $globo->lavar_mes }}</p>
                        <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">Agua total: {{ $globo->producto }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>