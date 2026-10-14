<div class="text-center py-12 space-y-4">
    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-red-50 text-red-600 mb-4">
        <i data-lucide="alert-circle" class="w-8 h-8"></i>
    </div>
    <h1 class="text-4xl font-extrabold text-slate-900">Error <?php echo $exception->getCode(); ?></h1>
    <p class="text-lg text-slate-500 max-w-md mx-auto">
        <?php echo $exception->getMessage(); ?>
    </p>
    <div class="pt-6">
        <a href="/" class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center justify-center gap-2">
            <i data-lucide="home" class="w-4 h-4"></i>
            Return to Safety
        </a>
    </div>
</div>
