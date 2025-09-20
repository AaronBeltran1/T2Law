<?php
include __DIR__ . "/../db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Merriweather:wght@700&display=swap" rel="stylesheet">
  <!-- Tailwind CSS -->
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
<body class="min-h-screen flex items-center justify-center bg-cover bg-center relative" 
      style="background-image: url('background/bg-law.jpg');">
  
  <!-- Black overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>

  <!-- Centered Card -->
  <div class="relative z-10 w-full max-w-md bg-white rounded-lg shadow-md p-8 flex flex-col justify-center">
    <h2 class="text-2xl font-bold mb-6 text-center font-serif">Register</h2>
    <form action="register_process.php" method="POST" class="space-y-4">
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" id="name" name="name" required 
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                      focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" required 
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                      focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div>
        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
        <input type="tel" id="phone" name="phone" required 
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                      focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div class="relative">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required maxlength="7"
               pattern="^(?=.*[0-9])(?=.*[!@#$%^&*]).{1,7}$"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                      focus:ring-blue-500 focus:border-blue-500"
               title="Password must be max 7 characters, include at least 1 number and 1 special character."
               onfocus="document.getElementById('pw-tooltip').classList.remove('hidden')"
               onblur="document.getElementById('pw-tooltip').classList.add('hidden')"
               onmouseover="document.getElementById('pw-tooltip').classList.remove('hidden')"
               onmouseout="document.getElementById('pw-tooltip').classList.add('hidden')">
        
        <div id="pw-tooltip" class="hidden absolute left-0 top-full mt-2 w-64 
                                   bg-gray-800 text-white text-xs rounded 
                                   px-3 py-2 shadow-lg z-20">
          Password must be max 7 characters, include at least 1 number and 1 special character.
        </div>
      </div>

      <div class="flex items-center">
        <input id="consent" name="consent" type="checkbox" required 
               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
        <label for="consent" class="ml-2 block text-sm text-gray-900">
          I agree to the 
          <a href="privacy-policy.php" class="text-blue-600 underline" target="_blank">Privacy Policy</a>
        </label>
      </div>

      <button type="submit" 
              class="w-full py-2 px-4 bg-blue-600 text-white rounded-md 
                     hover:bg-blue-700 font-semibold">
        Register
      </button>

      <div class="mt-4 text-center">
        <a href="index.php" class="text-blue-600 underline">Already have an account? Login</a>
      </div>
    </form>
  </div>
</body>
</html>
