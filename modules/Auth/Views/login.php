<div class="min-h-screen flex items-center justify-center bg-[#f5f6f8] px-6 py-12">
  <div class="w-full max-w-[420px]">

    <div class="rounded-2xl border border-slate-200 bg-white px-8 py-10 shadow-sm">

      <!-- Brand -->
      <div class="mb-10 text-center">
        <div class="mx-auto mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-50">
          <i data-lucide="shield-check" class="h-6 w-6 text-indigo-600"></i>
        </div>

        <h1 class="text-3xl font-bold tracking-tight text-slate-950">
          ZYX / BASE
        </h1>

        <p class="mt-2 text-sm text-slate-500">
          Sign in to your workspace
        </p>
      </div>

      <!-- Login form -->
      <form method="POST" action="/auth/login" class="space-y-6">
        <?php if (isset($error)): ?>
            <div class="p-3 rounded-lg bg-red-50 text-red-600 text-sm border border-red-100 mb-4">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <div>
          <label for="username" class="mb-2 block text-sm font-medium text-slate-700">
            Username
          </label>
          <input
            id="username"
            type="text"
            name="username"
            autocomplete="username"
            required
            placeholder="Enter your username"
            class="block h-12 w-full rounded-xl border border-slate-200 bg-white px-4 text-sm text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10"
          >
        </div>

        <div>
          <label for="password" class="mb-2 block text-sm font-medium text-slate-700">
            Password
          </label>
          <input
            id="password"
            type="password"
            name="password"
            autocomplete="current-password"
            required
            placeholder="Enter your password"
            class="block h-12 w-full rounded-xl border border-slate-200 bg-white px-4 text-sm text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10"
          >
        </div>

        <button
          type="submit"
          class="flex h-12 w-full items-center justify-center gap-2 rounded-xl bg-slate-950 text-sm font-semibold text-white transition hover:bg-slate-800 active:scale-[0.99]"
        >
          Sign in
          <i data-lucide="arrow-right" class="h-4 w-4"></i>
        </button>
      </form>
    </div>

    <p class="mt-8 text-center text-xs text-slate-400">
      © 2026 ZYX TEO. All rights reserved.
    </p>
  </div>
</div>
