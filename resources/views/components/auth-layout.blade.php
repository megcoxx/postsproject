@include('partials.start')
<div
    class="auth-layout flex justify-center items-center h-screen bg-gradient-to-br from-primary via-purple-500 to-secondary">
    <div class="auth-card bg-white rounded-md">
        @if (!empty($header))
            <header class="auth-header p-4 border-2 border-b-primary">
                <h1 class="font-bold text-xl">
                    {{ $header }}
                </h1>
            </header>
        @endif

        <section class="auth-section p-4">
            {{ $slot }}
        </section>

        @if (!empty($footer))
            <footer class="auth-footer p-4 border-t-primary">

                <body>
                    {{ $footer }}
                </body>
            </footer>
        @endif
        
    </div>
</div>
@include('partials.end')
