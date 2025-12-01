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

        <!-- Total Admins -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#1a1a2e]">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Total Admin</p>
                    <p class="text-3xl font-bold text-gray-800">{{ $stats['total_admins'] }}</p>
                </div>
                <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-user-shield text-[#1a1a2e] text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Total Creators -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Total Kreator</p>
                    <p class="text-3xl font-bold text-gray-800">{{ $stats['total_creators'] }}</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-palette text-green-500 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- New Users Today -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-yellow-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">User Baru Hari Ini</p>
                    <p class="text-3xl font-bold text-gray-800">{{ $stats['new_users_today'] }}</p>
                </div>
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-user-plus text-yellow-500 text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Quick Actions -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">
                <i class="fas fa-bolt text-[#0f3460] mr-2"></i>Aksi Cepat
            </h3>
            <div class="grid grid-cols-2 gap-3">
                <a href="#" class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-[#0f3460] hover:text-white transition group">
                    <i class="fas fa-user-plus text-[#0f3460] group-hover:text-white mr-3"></i>
                    <span class="font-medium">Tambah User</span>
                </a>
                <a href="#" class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-[#0f3460] hover:text-white transition group">
                    <i class="fas fa-folder-plus text-[#0f3460] group-hover:text-white mr-3"></i>
                    <span class="font-medium">Tambah Kategori</span>
                </a>
                <a href="#" class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-[#0f3460] hover:text-white transition group">
                    <i class="fas fa-chart-bar text-[#0f3460] group-hover:text-white mr-3"></i>
                    <span class="font-medium">Lihat Laporan</span>
                </a>
                <a href="#" class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-[#0f3460] hover:text-white transition group">
                    <i class="fas fa-cog text-[#0f3460] group-hover:text-white mr-3"></i>
                    <span class="font-medium">Pengaturan</span>
                </a>
            </div>
        </div>

        <!-- System Info -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-[#0f3460] mr-2"></i>Informasi Sistem
            </h3>
            <div class="space-y-3">
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-gray-600">Laravel Version</span>
                    <span class="font-medium text-gray-800">{{ app()->version() }}</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-gray-600">PHP Version</span>
                    <span class="font-medium text-gray-800">{{ phpversion() }}</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-gray-600">Environment</span>
                    <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-sm font-medium">{{ app()->environment() }}</span>
                </div>
                <div class="flex justify-between items-center py-2">
                    <span class="text-gray-600">Waktu Server</span>
                    <span class="font-medium text-gray-800">{{ now()->format('d M Y, H:i') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

