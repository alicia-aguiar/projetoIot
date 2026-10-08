<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel IoT - Dashboard</title>
    <script src="https://jsdelivr.net"></script>
    <script src="https://jsdelivr.net"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="min-h-screen flex flex-col">
      >
        <header class="bg-blue-600 text-white shadow-md p-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-bold tracking-wide">Projeto IoT Dashboard</h1>
                <span class="bg-green-500 text-xs px-3 py-1 rounded-full font-semibold animate-pulse">
                    {{-- ● {{ $dadosIoT['status_sistema'] }} --}}
                </span>
            </div>
        </header>

        <main class="container mx-auto flex-1 p-6">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                
            
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-orange-500">
                    <div class="text-gray-500 text-sm font-medium uppercase">Temperatura Atual</div>
                    <div class="flex items-baseline mt-2">
                        {{-- <span class="text-3xl font-bold text-gray-800">{{ $dadosIoT['temperatura'] }}</span> --}}
                        <span class="text-xl font-semibold text-gray-500 ml-1">°C</span>
                    </div>
                </div>

            
                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-blue-500">
                    <div class="text-gray-500 text-sm font-medium uppercase">Umidade do Ar</div>
                    <div class="flex items-baseline mt-2">
                        {{-- <span class="text-3xl font-bold text-gray-800">{{ $dadosIoT['umidade'] }}</span> --}}
                        <span class="text-xl font-semibold text-gray-500 ml-1">%</span>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-green-500">
                    <div class="text-gray-500 text-sm font-medium uppercase">Dispositivos Conectados</div>
                    <div class="flex items-baseline mt-2">
                        {{-- <span class="text-3xl font-bold text-gray-800">{{ $dadosIoT['dispositivos_actifs'] ?? $dadosIoT['dispositivos_ativos'] }}</span> --}}
                        <span class="text-md text-gray-500 ml-2">online</span>
                    </div>
                </div>

            </div>

          
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Histórico de Leituras (Temperatura)</h2>
                <div class="relative h-64 w-full">
                    <canvas id="iotChart"></canvas>
                </div>
            </div>

        </main>

   
        <footer class="bg-gray-800 text-gray-400 text-center py-4 text-sm">
            &copy; {{ date('Y') }} - Projeto IoT 
        </footer>
    </div>

    
</body>
</html>
