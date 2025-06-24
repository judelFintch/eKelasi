<div class="flex flex-col gap-6">
   <form wire:submit.prevent="login">
  <div class="space-y-5">
    <!-- Email -->
    <div>
      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
        Email<span class="text-error-500">*</span>
      </label>
      <input
        type="email"
        wire:model.defer="email"
        placeholder="info@gmail.com"
        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
        required
        autocomplete="email"
      />
      @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>

    <!-- Password -->
    <div>
      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
        Password<span class="text-error-500">*</span>
      </label>
      <div x-data="{ showPassword: false }" class="relative">
        <input
          :type="showPassword ? 'text' : 'password'"
          wire:model.defer="password"
          placeholder="Enter your password"
          class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pl-4 pr-11 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"
          required
          autocomplete="current-password"
        />
        <span @click="showPassword = !showPassword" class="absolute z-30 text-gray-500 -translate-y-1/2 cursor-pointer right-4 top-1/2 dark:text-gray-400">
          <!-- SVGs pour l'œil -->
        </span>
      </div>
      @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>

    <!-- Remember Me + Forgot -->
    <div class="flex items-center justify-between">
      <label class="flex items-center text-sm font-normal text-gray-700 cursor-pointer dark:text-gray-400">
        <input type="checkbox" wire:model.defer="remember" class="mr-2 rounded border-gray-300 dark:border-gray-600 text-brand-500 focus:ring-0" />
        Keep me logged in
      </label>
      @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="text-sm text-brand-500 hover:text-brand-600 dark:text-brand-400">Forgot password?</a>
      @endif
    </div>

    <!-- Button -->
    <div>
      <button
        type="submit"
        class="flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600"
      >
        Sign In
      </button>
    </div>
  </div>
</form>

<!-- Register Link -->
@if (Route::has('register'))
  <div class="mt-5">
    <p class="text-sm font-normal text-center text-gray-700 dark:text-gray-400 sm:text-start">
      Don't have an account?
      <a href="{{ route('register') }}" class="text-brand-500 hover:text-brand-600 dark:text-brand-400">
        Sign Up
      </a>
    </p>
  </div>
@endif

</div>
