<div class="space-y-6">
    <div class="border-b border-slate-100 pb-6">
        <h1 class="text-3xl font-bold text-slate-900 tracking-tight">
            Welcome to <?php echo $name; ?>
        </h1>
        <p class="mt-2 text-slate-500 text-lg">
            A modular, professional-grade PHP starter kit with Tailwind CSS v4.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 rounded-lg bg-slate-50 border border-slate-100">
            <div class="text-indigo-600 mb-4">
                <i data-lucide="database" class="w-8 h-8"></i>
            </div>
            <h3 class="font-semibold text-slate-900">SQLite Powered</h3>
            <p class="text-sm text-slate-500 mt-2">Zero-config database for fast local development and testing.</p>
        </div>
        
        <div class="p-6 rounded-lg bg-slate-50 border border-slate-100">
            <div class="text-indigo-600 mb-4">
                <i data-lucide="layers" class="w-8 h-8"></i>
            </div>
            <h3 class="font-semibold text-slate-900">Modular Logic</h3>
            <p class="text-sm text-slate-500 mt-2">Plug-and-play feature modules for rapid project expansion.</p>
        </div>
        
        <div class="p-6 rounded-lg bg-slate-50 border border-slate-100">
            <div class="text-indigo-600 mb-4">
                <i data-lucide="zap" class="w-8 h-8"></i>
            </div>
            <h3 class="font-semibold text-slate-900">Tailwind v4</h3>
            <p class="text-sm text-slate-500 mt-2">Next-gen styling engine built for speed and flexibility.</p>
        </div>
    </div>

    <div class="pt-6">
        <a href="/auth/login" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-medium transition-all shadow-sm shadow-indigo-200">
            Get Started
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</div>
