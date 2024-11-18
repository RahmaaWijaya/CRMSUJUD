<div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white dark:bg-gray-800 shadow-sm rounded-xl h-40">
    <div class="px-5 pt-5">
        <header class="flex justify-between items-start mb-2">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">My Leads</h2>
        </header>
        <div class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase mb-1">Jumlah Data</div>
        <div class="flex justify-center items-center">
            <div class="text-5xl font-bold text-gray-800 dark:text-gray-100 mr-2">{{ number_format(\App\Models\Lead::count(), 0) }}</div>
        </div>
    </div>
    <!-- Chart built with Chart.js 3 -->
    <!-- Check out src/js/components/dashboard-card-02.js for config -->
    <!-- <div class="grow max-sm:max-h-[128px] xl:max-h-[128px]">
        Change the height attribute to adjust the chart height
        <canvas id="dashboard-card-02" width="389" height="128"></canvas>
    </div> -->
</div>
