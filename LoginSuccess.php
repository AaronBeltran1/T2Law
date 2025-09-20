<?php
require_once __DIR__ . '/../auth.php'; 
include __DIR__ . "/../db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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
    <div class="w-full max-w-lg bg-white rounded-lg shadow-md p-10 relative z-10 text-center">
        <h1 class="text-3xl font-bold font-serif mb-4">Welcome!</h1>
        <p class="text-lg mb-6">You have successfully logged in.</p>
        <a href="logout.php" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 font-semibold">Logout</a>
    </div>
</body>
</html>
