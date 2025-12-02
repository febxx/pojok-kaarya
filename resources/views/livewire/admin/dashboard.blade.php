<div>
    <!-- Welcome Section -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Selamat Datang, {{ auth()->user()->name }}!</h2>
        <p class="text-gray-600">Berikut adalah ringkasan aktivitas platform PojokKaarya.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-8">
        <!-- Total Users -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#0f3460]">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Total Users</p>
                    <p class="text-3xl font-bold text-gray-800">{{ $stats['total_users'] }}</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-users text-[#0f3460] text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Total Kreasi -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Total Kreasi</p>
                    <p class="text-3xl font-bold text-gray-800">{{ $stats['total_kreasi'] }}</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-images text-green-500 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Total Tags -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-purple-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Total Tag</p>
                    <p class="text-3xl font-bold text-gray-800">{{ $stats['total_tags'] }}</p>
                </div>
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-tags text-purple-500 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Kreasi Hari Ini -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-yellow-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Kreasi Hari Ini</p>
                    <p class="text-3xl font-bold text-gray-800">{{ $stats['kreasi_today'] }}</p>
                </div>
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-calendar-plus text-yellow-500 text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Kreasi 7 Hari Terakhir -->
    <div class="bg-white rounded-xl shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">
            <i class="fas fa-chart-bar text-[#0f3460] mr-2"></i>Kreasi 7 Hari Terakhir
        </h3>
        <div class="h-64">
            <canvas id="kreasiChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('kreasiChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($chartData['labels']),
                    datasets: [{
                        label: 'Jumlah Kreasi',
                        data: @json($chartData['data']),
                        backgroundColor: 'rgba(15, 52, 96, 0.8)',
                        borderColor: 'rgba(15, 52, 96, 1)',
                        borderWidth: 1,
                        borderRadius: 6,
                        barThickness: 40,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1,
                                precision: 0
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });
    </script>
</div>

