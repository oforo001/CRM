<?php require 'View/Partials/header.php'; ?>
<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="flex md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="/CRM/" class=" <?php echo urlIS('/CRM/') ? 'bg-gray-900 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white'; ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
            </div>
          </div>
        </div>
        
  </nav>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register for a new account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" method="POST">
      <!-- Form Fields (business_name, email, NIP, password) -->

      <div>
        <label for="business_name" class="block text-sm/6 font-medium text-gray-900">Organisation Name</label>
        <div class="mt-2">
          <input type="text" name="business_name" id="business_name" required
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
        <?php if (isset($errors['business_name'])): ?>
        <p class="text-left text-red-500 text-sm/6">
          <?= htmlspecialchars($errors['business_name']); ?>
        </p>
        <?php endif; ?>
      </div>

      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
        <div class="mt-2">
          <input type="email" name="email" id="email" required
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
        <?php if (isset($errors['email'])): ?>
        <p class="text-left text-red-500 text-sm/6">
          <?= htmlspecialchars($errors['email']); ?>
        </p>
        <?php endif; ?>
      </div>

      <div>
        <label for="NIP" class="block text-sm/6 font-medium text-gray-900">NIP Number</label>
        <div class="mt-2">
          <input type="text" name="NIP" id="NIP" pattern="[0-9]+" required
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
        <?php if (isset($errors['NIP'])): ?>
        <p class="text-left text-red-500 text-sm/6">
          <?= htmlspecialchars($errors['NIP']); ?>
        </p>
        <?php endif; ?>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
        </div>
        <div class="mt-2">
          <input type="password" name="password" id="password" required minlength="7" maxlength="255"
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
        <?php if (isset($errors['password'])): ?>
        <p class="text-left text-red-500 text-sm/6">
          <?= htmlspecialchars($errors['password']); ?>
        </p>
        <?php endif; ?>
      </div>

      <div>
        <?php if (isset($accountAlradyExist_ERROR)): ?>
        <p class="text-left text-red-500 text-sm/6 mb-2">
          <?= htmlspecialchars($accountAlradyExist_ERROR); ?>
        </p>
        <a href="/CRM/for-businesses/login" class="text-indigo-600 hover:text-indigo-500 text-sm underline mb-2">Log In</a>
        <?php endif; ?>

        <button type="submit"
          class="mt-2 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
      </div>
    </form>

    <!-- Modal -->
   
</div>

<script src="View/js/registration.js"></script>
