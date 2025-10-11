<x-layout.app title="Admin Dashboard">
    <h1 class="ml-4">Hallo Selamat Datang Admin</h1>
</x-layout.app>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button></form>