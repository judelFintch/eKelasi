<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark" x-data="{ sidebarToggle: false }">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-black">
        <div class="flex h-screen overflow-hidden">
            <aside :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'" class="sidebar fixed left-0 top-0 z-50 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white px-5 duration-300 ease-linear dark:border-gray-800 dark:bg-black lg:static lg:translate-x-0">
                <div :class="sidebarToggle ? 'justify-center' : 'justify-between'" class="sidebar-header flex items-center gap-2 pb-7 pt-8">
                    <a href="{{ route('dashboard') }}">
                        <span class="logo" :class="sidebarToggle ? 'hidden' : ''">
                            <img class="dark:hidden" src="{{ asset('src/images/logo/logo.svg') }}" alt="Logo" />
                            <img class="hidden dark:block" src="{{ asset('src/images/logo/logo-dark.svg') }}" alt="Logo" />
                        </span>
                        <img class="logo-icon" :class="sidebarToggle ? 'lg:block' : 'hidden'" src="{{ asset('src/images/logo/logo-icon.svg') }}" alt="Logo" />
                    </a>
                    <button class="lg:hidden" @click="sidebarToggle = false">
                        <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 6l8 8M6 14L14 6" clip-rule="evenodd" /></svg>
                    </button>
                </div>
                <nav class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
                    <ul class="mb-6 flex flex-col gap-4">
                        <li>
                            <a href="{{ route('dashboard') }}" class="menu-item group menu-item-active">
                                <svg class="menu-item-icon-active" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 3.25C4.25736 3.25 3.25 4.25736 3.25 5.5V9C3.25 10.2426 4.25736 11.25 5.5 11.25H9C10.2426 11.25 11.25 10.2426 11.25 9V5.5C11.25 4.25736 10.2426 3.25 9 3.25H5.5ZM4.75 5.5C4.75 5.08579 5.08579 4.75 5.5 4.75H9C9.41421 4.75 9.75 5.08579 9.75 5.5V9C9.75 9.41421 9.41421 9.75 9 9.75H5.5C5.08579 9.75 4.75 9.41421 4.75 9V5.5ZM5.5 12.75C4.25736 12.75 3.25 13.7574 3.25 15V18.5C3.25 19.7426 4.25736 20.75 5.5 20.75H9C10.2426 20.75 11.25 19.7426 11.25 18.5V15C11.25 13.7574 10.2426 12.75 9 12.75H5.5ZM4.75 15C4.75 14.5858 5.08579 14.25 5.5 14.25H9C9.41421 14.25 9.75 14.5858 9.75 15V18.5C9.75 18.9142 9.41421 19.25 9 19.25H5.5C5.08579 19.25 4.75 18.9142 4.75 18.5V15ZM12.75 5.5C12.75 4.25736 13.7574 3.25 15 3.25H18.5C19.7426 3.25 20.75 4.25736 20.75 5.5V9C20.75 10.2426 19.7426 11.25 18.5 11.25H15C13.7574 11.25 12.75 10.2426 12.75 9V5.5ZM15 4.75C14.5858 4.75 14.25 5.08579 14.25 5.5V9C14.25 9.41421 14.5858 9.75 15 9.75H18.5C18.9142 9.75 19.25 9.41421 19.25 9V5.5C19.25 5.08579 18.9142 4.75 18.5 4.75H15ZM15 12.75C13.7574 12.75 12.75 13.7574 12.75 15V18.5C12.75 19.7426 13.7574 20.75 15 20.75H18.5C19.7426 20.75 20.75 19.7426 20.75 18.5V15C20.75 13.7574 19.7426 12.75 18.5 12.75H15ZM14.25 15C14.25 14.5858 14.5858 14.25 15 14.25H18.5C18.9142 14.25 19.25 14.5858 19.25 15V18.5C19.25 18.9142 18.9142 19.25 18.5 19.25H15C14.5858 19.25 14.25 18.9142 14.25 18.5V15Z" fill="" />
                                </svg>
                                <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>
            <div class="flex flex-1 flex-col">
                <header class="flex items-center justify-between bg-white dark:bg-black p-4 border-b border-gray-200 dark:border-gray-800 lg:hidden">
                    <button @click="sidebarToggle = true">
                        <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 5h12M4 10h12M4 15h12" clip-rule="evenodd" /></svg>
                    </button>
                    <x-app-logo />
                </header>
                <main class="flex-1 overflow-y-auto p-4">
                    {{ $slot }}
                </main>
            </div>
        </div>
        @fluxScripts
    </body>
</html>
