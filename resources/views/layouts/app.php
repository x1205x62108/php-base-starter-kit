<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'PHP Base Starter Kit'; ?></title>
    <link rel="stylesheet" href="/assets/css/app.css">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="h-full">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-950 text-slate-300 flex flex-col border-r border-slate-800">
            <div class="p-6">
                <h2 class="text-xl font-bold text-white tracking-tight flex items-center gap-2">
                    <i data-lucide="box" class="w-6 h-6 text-indigo-500"></i>
                    ZYX / BASE
                </h2>
            </div>
            
            <nav class="flex-1 px-4 space-y-1">
                <a href="/" class="flex items-center gap-3 px-3 py-2 text-sm font-medium rounded-md hover:bg-slate-900 hover:text-white transition-colors">
                    <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
                    Dashboard
                </a>
                <a href="/auth/login" class="flex items-center gap-3 px-3 py-2 text-sm font-medium rounded-md hover:bg-slate-900 hover:text-white transition-colors">
                    <i data-lucide="log-in" class="w-4 h-4"></i>
                    Login
                </a>
            </nav>
            
            <div class="p-4 border-t border-slate-800">
                <div class="flex items-center gap-3 px-3 py-2 text-xs font-medium text-slate-500">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                    System Online
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col">
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8">
                <div class="text-sm text-slate-500">
                    V0.2.2 Runtime
                </div>
                <div class="flex items-center gap-4">
                    <button class="text-slate-400 hover:text-slate-600">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                    </button>
                    <div class="w-8 h-8 rounded-full bg-slate-200 border border-slate-300"></div>
                </div>
            </header>
            
            <div class="p-8">
                <div class="max-w-7xl mx-auto">
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-8">
                        {{content}}
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script>
      lucide.createIcons();
    </script>
</body>
</html>
