<?php require 'Partials/header.php'; ?>
<?php require 'Partials/navbar.php'; ?>
<main>
    <?php require 'Partials/grafic-effect.php'; ?>
    <header class="bg-white shadow">
  <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-1 lg:items-start lg:gap-y-10">
    <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-7xl lg:px-8">
      <div class="text-center">
        <!-- Header Content -->
        <h1 class="mt-8 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
          Show all planned appointments by your clients
        </h1>
        <p class="mt-8 text-xl/8 text-gray-700">
          Only with a couple of clicks you can see all registered appointments. If you dont have an account choose Register, if you have an account choose Login.  
        </p>
        
        <div class="mt-10 mr-5">
            <a href="/CRM/for-businesses/register"
              class="inline-flex items-center justify-center w-auto rounded-md bg-indigo-600 
              px-8 py-4 text-lg font-medium text-white hover:bg-indigo-700
              sm:px-6 sm:py-3 sm:text-base
              md:px-10 md:py-5 md:text-xl
              mb-20">
              Register
            </a>
          <a href="/CRM/for-businesses/login"
            class="inline-flex items-center justify-center w-auto rounded-md bg-indigo-600 
            px-8 py-4 text-lg font-medium text-white hover:bg-indigo-700
            sm:px-6 sm:py-3 sm:text-base
            md:px-10 md:py-5 md:text-xl
            mb-20">
              Login
          </a>
        </div>

      </div>
    </div>
  </div>
</header>

  </main>
</div>
<?php require 'Partials/footer.php'?>
</body>
</html>
