<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minecraft Inventory Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'mc-background': '#5B8C5A',
                        'mc-panel': '#3A6EA5',
                        'mc-text': '#E0E0E0',
                        'mc-button': '#8B4513',
                        'mc-button-hover': '#A0522D',
                        'mc-border': '#2F4F4F'
                    },
                    fontFamily: {
                        'minecraft': ['Minecraft', 'monospace']
                    }
                }
            }
        }
        </script>
    <style>
        @font-face {
            font-family: 'Minecraft';
            src: url('https://raw.githubusercontent.com/IdreesInc/Minecraft-Font/master/Minecraft.ttf') format('truetype');
        }
        body {
            image-rendering: pixelated;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Cg fill='%235B8C5A' fill-opacity='0.4'%3E%3Cpath d='M50 50c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10c0 5.523-4.477 10-10 10s-10-4.477-10-10c-5.523 0-10-4.477-10-10s4.477-10 10-10V0h20v20c5.523 0 10 4.477 10 10v20h-20V50z'/%3E%3C/g%3E%3C/svg%3E");
        }
        .text-pixelated {
        font-family: 'Minecraft', monospace;
        letter-spacing: 0.5px;
        }

        .overflow-y-auto::-webkit-scrollbar {
            width: 10px;
        }

        .overflow-y-auto::-webkit-scrollbar-track {
            background: #3A6EA5;
            border: 2px solid #2F4F4F;
        }

        .overflow-y-auto::-webkit-scrollbar-thumb {
            background: #c27945;
            border: 2px solid #2F4F4F;
        }

        .overflow-y-auto::-webkit-scrollbar-thumb:hover {
            background: #c78668;
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: #67481a #3A6EA5;
        }

        </style>
</head>
<body class="min-h-screen font-minecraft text-mc-text bg-mc-background">
    <div class="container mx-auto px-4 py-6 max-w-7xl">
        @yield('content')
    </div>
</body>
</html>
