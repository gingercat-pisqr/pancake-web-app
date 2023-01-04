<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-danger dark:text-gray-100">
            {{ __('Hapus Akun') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Setelah akunmu dihapus, semua informasi dan data akan dihapus secara permanen. Sebelum menghapus akunmu, harap unduh data atau informasi apa pun yang ingin kamu pertahankan.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="rounded-4"
    >
        {{ __('Hapus akun') }}</x-danger-button>
    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Apakah kamu yakin mau menghapus akunmu?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Setelah akunmu dihapus, semua informasi dan data akan dihapus secara permanen. Mohon masukan kata sandi kamu untuk mengonfirmasi bahwa kamu ingin menghapus secara permanen akunmu.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="Password" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="Password"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')" class="rounded-4">
                    {{ __('Batal') }}
                </x-secondary-button>

                <x-danger-button class="ml-3 rounded-4">
                    {{ __('Hapus Akun') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
