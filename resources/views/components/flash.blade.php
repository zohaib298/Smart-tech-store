@if (session()->has('message'))
<style>
    @keyframes toast-progress {
    from { width: 100%; }
    to { width: 0%; }
}

.animate-toast-progress {
    animation: toast-progress 3.5s linear forwards;
}

</style>
    <div
        id="toast"
        class="fixed top-6 right-6 z-50 transition-opacity duration-500"
    >
        <div class="relative bg-white text-slate-800 px-5 py-4 rounded-xl shadow-2xl w-80">
            <p class="text-sm font-medium">
                {{ session('message') }}
            </p>

            <div class="absolute bottom-0 left-0 h-1 bg-emerald-500 rounded-b-xl animate-toast-progress"></div>
        </div>
    </div>

    <script>
        setTimeout(() => {
            const toast = document.getElementById('toast')
            toast.classList.add('opacity-0')

            setTimeout(() => toast.remove(), 500)
        }, 3500)
    </script>
@endif
