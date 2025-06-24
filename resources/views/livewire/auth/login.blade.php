<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Sign In')" :description="__('Enter your email and password to sign in!')" />

    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit.prevent="login" class="flex flex-col gap-6">
        <!-- Email -->
        <flux:input
            wire:model.defer="email"
            :label="__('Email')"
            type="email"
            required
            autocomplete="email"
            placeholder="info@gmail.com"
        />

        <!-- Password -->
        <flux:input
            wire:model.defer="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="current-password"
            placeholder="Enter your password"
            viewable
        />

        <!-- Remember Me + Forgot -->
        <div class="flex items-center justify-between">
            <label class="flex items-center text-sm font-normal text-gray-700 cursor-pointer dark:text-gray-400">
                <input type="checkbox" wire:model.defer="remember" class="mr-2 rounded border-gray-300 dark:border-gray-600 text-brand-500 focus:ring-0" />
                {{ __('Keep me logged in') }}
            </label>
            @if (Route::has('password.request'))
                <flux:link :href="route('password.request')" class="text-sm text-brand-500 hover:text-brand-600 dark:text-brand-400" wire:navigate>
                    {{ __('Forgot password?') }}
                </flux:link>
            @endif
        </div>

        <!-- Button -->
        <flux:button type="submit" variant="primary" class="w-full">
            {{ __('Sign In') }}
        </flux:button>
    </form>

    @if (Route::has('register'))
        <div class="mt-5 text-center text-sm text-gray-700 dark:text-gray-400 sm:text-start">
            {{ __("Don't have an account?") }}
            <flux:link :href="route('register')" class="text-brand-500 hover:text-brand-600 dark:text-brand-400" wire:navigate>
                {{ __('Sign Up') }}
            </flux:link>
        </div>
    @endif
</div>
