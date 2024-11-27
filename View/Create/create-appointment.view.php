<?php require 'View/Partials/header.php'; ?>
<?php require 'View/Partials/navbar.php'; ?>

<div class="text-center py-12 px-6 bg-gray-100">
  <h2 class="text-3xl font-semibold text-gray-900 mb-4">Please Register Your Visit</h2>
  <p class="mb-5 text-lg text-gray-600">Fill the form below to register your visit.</p>
  <div class="min-h-screen flex items-center justify-center">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    
    <form class="space-y-12 bg-white p-8 rounded-md shadow-md">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="reason" class="block text-sm/6 font-medium text-gray-900 text-left">Reason</label>
            <div class="mt-3">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="reason" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="Short reason about your visit.">
              </div>
            </div>
          </div>

          <div class="col-span-full">
            <label for="about" class="block text-sm/6 font-medium text-gray-900 text-left">About</label>
            <div class="mt-2">
              <textarea name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" placeholder="Provide some important information about your visit."></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="border-b border-gray-900/10 pb-12 mt-5">
        <h1 class="text-xl font-semibold text-gray-900">Visit Information</h1>
        <p class="mt-1 text-sm/10 text-gray-600">The target organisation will see this provided info </p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="first-name" class="text-left block text-sm/6 font-medium text-gray-900">Name</label>
            <div class="mt-2">
              <input type="text" name="name" class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="last-name" class="text-left block text-sm/6 font-medium text-gray-900">Last Name</label>
            <div class="mt-2">
              <input type="text" name="lastname" class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="email" class="text-left block text-sm/6 font-medium text-gray-900">Email address</label>
            <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" class="pl-2 block w-1/2 text-left rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
          </div>

          <div class="sm:col-span-2 sm:col-start-1">
            <label for="visit-date" class="block text-sm/6 font-medium text-gray-900">Visit Date</label>
            <div class="mt-2">
              <input type="date" name="visit-date" id="visit-date" class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
          </div>

          <div class="sm:col-span-4">
            <div class="flex items-center gap-4">
              <div class="flex-1">
                <label for="begin-time" class="text-sm/6 font-medium text-gray-900">Begins At:</label>
                <input id="begin-time" name="begin-time" type="time" class="mt-2 block w-full rounded-md pl-2 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
              </div>

              <div class="flex-1">
                <label for="end-time" class="text-sm/6 font-medium text-gray-900">Ends At:</label>
                <input id="end-time" name="end-time" type="time" class="mt-2 block w-full rounded-md pl-2 border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-center gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>
    </form>
  </div>
</div>
</div>



<?php require 'View/Partials/footer.php'; ?>
