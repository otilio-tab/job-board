<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
        Sign in to your account
    </h1>
    <x-card>
        <form action="{{ route('auth.store') }}" method="post">
            @csrf
            <div class="mb-8">
                <label for="email"
                  class="mb-2 block text-sm font-medium text-slate-900">E-mail</label>
                <x-text-input name="email" type="email" />
            </div>
            <div class="mb-8">
                <x-label for="password" :required="true">
                  Password
                </x-label>
                <x-text-input name="password" type="password" />
            </div>
            <div class="mb-8 flex justify-between text-sm font-medium">
                <div>
                  <div class="flex items-center space-x-2">
                    <input type="checkbox" name="remember"
                      class="rounded-sm border border-slate-400">
                    <x-label for="remember" :required="true">Remember me</x-label>
                  </div>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">
                      Forget password?
                    </a>
                </div>
            </div>
            <x-button class="w-full bg-green-50">Login</x-button>
        </form>
    </x-card>
</x-layout>