<div class="text-center">
    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-indigo-50 text-indigo-600 mb-4">
        <i data-lucide="shield-check" class="w-10 h-10"></i>
    </div>
    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">ZYX / BASE</h2>
    <p class="mt-2 text-sm text-slate-500">Sign in to your management console</p>
</div>

<form class="mt-8 space-y-6" action="/auth/login" method="POST">
    <div class="rounded-md shadow-sm -space-y-px">
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-slate-700 mb-1">Username</label>
            <input id="username" name="username" type="text" required class="appearance-none relative block w-full px-3 py-3 border border-slate-300 placeholder-slate-400 text-slate-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm transition-all" placeholder="Enter your username">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Password</label>
            <input id="password" name="password" type="password" required class="appearance-none relative block w-full px-3 py-3 border border-slate-300 placeholder-slate-400 text-slate-900 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm transition-all" placeholder="••••••••">
        </div>
    </div>

    <div>
        <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all shadow-md shadow-indigo-200">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <i data-lucide="lock" class="w-4 h-4 text-indigo-300 group-hover:text-indigo-200"></i>
            </span>
            Sign in
        </button>
    </div>
</form>

<div class="text-center text-xs text-slate-400 mt-6">
    &copy; 2026 ZYX TEO. All rights reserved.
</div>
