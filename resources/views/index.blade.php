<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Investbrain » Open source AI-powered investment portfolio tracker</title>
    <meta name="description" content="The smartest open source AI-powered investment portfolio tracker">

    <meta property="og:url" content="https://investbra.in">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Investbrain">
    <meta property="og:description" content="The smartest open source AI-powered investment portfolio tracker">
    <meta property="og:image" content="{{ asset('og.png') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="investbra.in">
    <meta property="twitter:url" content="https://investbra.in">
    <meta name="twitter:title" content="Investbrain">
    <meta name="twitter:description" content="The smartest open source AI-powered investment portfolio tracker">
    <meta name="twitter:image" content="{{ asset('og.png') }}">

    <link rel="icon" href="{{ asset('favicon.svg') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        border: "hsl(var(--border))",
                        input: "hsl(var(--input))",
                        ring: "hsl(var(--ring))",
                        background: "hsl(var(--background))",
                        foreground: "hsl(var(--foreground))",
                        primary: {
                            DEFAULT: "hsl(var(--primary))",
                            foreground: "hsl(var(--primary-foreground))",
                        },
                        secondary: {
                            DEFAULT: "hsl(var(--secondary))",
                            foreground: "hsl(var(--secondary-foreground))",
                        },
                        destructive: {
                            DEFAULT: "hsl(var(--destructive))",
                            foreground: "hsl(var(--destructive-foreground))",
                        },
                        muted: {
                            DEFAULT: "hsl(var(--muted))",
                            foreground: "hsl(var(--muted-foreground))",
                        },
                        accent: {
                            DEFAULT: "hsl(var(--accent))",
                            foreground: "hsl(var(--accent-foreground))",
                        },
                        popover: {
                            DEFAULT: "hsl(var(--popover))",
                            foreground: "hsl(var(--popover-foreground))",
                        },
                        card: {
                            DEFAULT: "hsl(var(--card))",
                            foreground: "hsl(var(--card-foreground))",
                        },
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            :root {
                --background: 0 0% 100%;
                --foreground: 222.2 84% 4.9%;
                --card: 0 0% 100%;
                --card-foreground: 222.2 84% 4.9%;
                --popover: 0 0% 100%;
                --popover-foreground: 222.2 84% 4.9%;
                --primary: 222.2 47.4% 11.2%;
                --primary-foreground: 210 40% 98%;
                --secondary: 210 40% 96.1%;
                --secondary-foreground: 222.2 47.4% 11.2%;
                --muted: 210 40% 96.1%;
                --muted-foreground: 215.4 16.3% 46.9%;
                --accent: 210 40% 96.1%;
                --accent-foreground: 222.2 47.4% 11.2%;
                --destructive: 0 84.2% 60.2%;
                --destructive-foreground: 210 40% 98%;
                --border: 214.3 31.8% 91.4%;
                --input: 214.3 31.8% 91.4%;
                --ring: 222.2 84% 4.9%;
                --radius: 0.5rem;
            }
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-white">
    <header class="px-6 lg:px-12 h-24 flex items-center">
        <div class="flex items-center justify-center">
            <a href="{{ config('app.url') }}">
                <div class="w-8 mr-3" title="Investbrain logo">
                    <x-glyph-only-logo />
                </div>
            </a>
            <a href="{{ config('app.url') }}"><span class="font-bold">Investbrain</span></a>
        </div>
        <nav class="ml-auto flex gap-4 sm:gap-6">
            <a class="text-sm font-medium hover:underline underline-offset-4" href="{{ route('dashboard') }}">Get started</a>
            <a class="text-sm font-medium hover:underline underline-offset-4" href="#key-features">Features</a>
            <a class="text-sm font-medium hover:underline underline-offset-4" href="https://github.com/investbrainapp/investbrain#self-hosting">Docs</a>
        </nav>
    </header>

    <main class="flex-1">
        <section class="w-full py-12 md:py-24 lg:py-32 xl:py-48">
            <div class="container px-4 md:px-6 mx-auto">
                <div class="flex flex-col items-center space-y-4 text-center">
                    <div class="space-y-2">
                        <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none">
                            Chat with your investments 
                        </h1>
                        <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl">
                            Investbrain offers casual investors the ability to make better informed decisions using AI-powered "chat with your holdings" feature grounded on your holdings
                        </p>
                    </div>
                    <div class="space-x-4">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none ring-offset-background bg-primary text-primary-foreground hover:bg-primary/90 h-10 py-2 px-4">
                            Get Started
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                        <a href="#key-features" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none ring-offset-background border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 py-2 px-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="key-features" class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 ">
            <div class="container px-4 md:px-6 mx-auto">
                <h2 class="text-3xl font-bold tracking-tighter sm:text-5xl text-center mb-12">Key features</h2>
                <div class="space-y-24">
                    {{-- <div class="grid gap-12 lg:grid-cols-2 lg:gap-x-8 lg:gap-y-24">
                        <div class="flex flex-col justify-center space-y-4">
                            <h3 class="text-2xl font-bold">Portfolio Tracking</h3>
                            <p class="text-gray-500">
                                Monitor your investments across multiple asset classes in real-time. Get a comprehensive view of your entire portfolio in one place.
                            </p>
                        </div>
                        <div class="order-first lg:order-last">
                            <img src="https://via.placeholder.com/600x400" alt="Portfolio Tracking" class="rounded-lg object-cover w-full h-[400px]">
                        </div>
                    </div>
                    <div class="grid gap-12 lg:grid-cols-2 lg:gap-x-8 lg:gap-y-24">
                        
                        <div class="flex flex-col justify-center space-y-4">
                            <h3 class="text-2xl font-bold">Portfolio Tracking</h3>
                            <p class="text-gray-500">
                                Monitor your investments across multiple asset classes in real-time. Get a comprehensive view of your entire portfolio in one place.
                            </p>
                        </div>
                        <div class="order-first">
                            <img src="https://via.placeholder.com/600x400" alt="Portfolio Tracking" class="rounded-lg object-cover w-full h-[400px]">
                        </div>
                    </div> --}}
                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                    Historic charts
                                </h3>
                            </div>
                            <div class="p-6 pt-0">Analyze past performance data to identify trends in your portfolios.</div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                    Real-time data
                                </h3>
                            </div>
                            <div class="p-6 pt-0">Multiple market data providers offer near real-time market data feeds.</div>
                        </div>
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                    Wishlists
                                </h3>
                            </div>
                            <div class="p-6 pt-0">Validate investment strategies using real market data without the risk.</div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                    Smart search
                                </h3>
                            </div>
                            <div class="p-6 pt-0">Search across your holdings, portfolios, or anything else.</div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                    One-click backup
                                </h3>
                            </div>
                            <div class="p-6 pt-0">Never stress about losing investment data. Easy recovery too!</div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    Collaboration
                                </h3>
                            </div>
                            <div class="p-6 pt-0">Grant friends or family view-only or full access to your portfolios.</div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                    Data privacy
                                </h3>
                            </div>
                            <div class="p-6 pt-0">Keep your investment data private using our self-hosting option.</div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                                    Mobile responsive
                                </h3>
                            </div>
                            <div class="p-6 pt-0">Your investments are always in your pocket using our mobile-first platform.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cta" class="w-full py-12 md:py-24 lg:py-32">
            <div class="container px-4 md:px-6 mx-auto">
                <div class="flex flex-col items-center space-y-4 text-center">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-bold tracking-tighter sm:text-5xl">Ready to get started?</h2>
                        <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl">
                            We offer a Cloud option for investors eager to get started quickly. But intrepid investors are encouraged to check out our open source chops!
                        </p>
                    </div>
                    <div class="space-x-4">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none ring-offset-background bg-primary text-primary-foreground hover:bg-primary/90 h-10 py-2 px-4">
                            Investbrain Cloud
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                        <a href="https://github.com/investbrainapp/investbrain#self-hosting" target="_blank" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none ring-offset-background border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 py-2 px-4">
                            Self Host <span class="ml-1"><x-github-icon /></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 items-center px-4 md:px-6 border-t bg-white">
        <p class="text-xs text-gray-500">© {{ now()->format('Y') }} Investbrain. All rights reserved.</p>
        <nav class="sm:ml-auto flex gap-4 sm:gap-6">
            <a class="text-xs hover:underline underline-offset-4" href="{{ route('terms.show') }}">Terms</a>
            <a class="text-xs hover:underline underline-offset-4" href="{{ route('policy.show') }}">Privacy</a>
        </nav>
    </footer>
</body>
</html>