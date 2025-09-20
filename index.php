<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- Google Fonts: Merriweather (headings), Inter (body) -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Merriweather:wght@700&display=swap" rel="stylesheet">
        <!-- Tailwind CSS CDN with custom font config -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'ui-sans-serif', 'system-ui'],
                            serif: ['Merriweather', 'ui-serif', 'Georgia'],
                        }
                    }
                }
            }
        </script>
        <style>
            body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; }
        </style>
</head>
<body class="min-h-screen flex items-center justify-center relative" style="background-image: url('background/bg-law.jpg'); background-size: cover; background-position: center;">
    <!-- Black overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8 relative z-10">
        <h2 class="text-2xl font-bold mb-6 text-center font-serif">Login</h2>
        <form action="login_process.php" method="POST" class="space-y-4">
            <?php if (isset($_GET['error']) && $_GET['error'] === 'invalid'): ?>
    <div class="mb-4 p-3 text-sm text-red-700 bg-red-100 rounded">
        ❌ Invalid email or password. <br>
        If you don’t have an account yet, please <a href="registration.php" class="text-blue-600 underline">register here</a>.
    </div>
<?php endif; ?>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 font-semibold">Login</button>
        </form>
        <div class="mt-4 text-center">
            <a href="registration.php" class="text-blue-600 underline">Don't have an account? Register</a>
        </div>
    </div>
</body>
</html>