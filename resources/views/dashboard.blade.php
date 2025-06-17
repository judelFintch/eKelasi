<x-layouts.app :title="__('Dashboard')">
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
        <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.665 3.756a.75.75 0 01.671 0l6.445 3.223a.75.75 0 010 1.342l-6.445 3.223a.75.75 0 01-.671 0L5.22 8.321a.75.75 0 010-1.342l6.445-3.223z" fill="currentColor" />
                </svg>
            </div>
            <div class="mt-5 flex items-end justify-between">
                <div>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Customers</span>
                    <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">3,782</h4>
                </div>
                <span class="flex items-center gap-1 rounded-full bg-success-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
                    11.01%
                </span>
            </div>
        </div>
    </div>
</x-layouts.app>
