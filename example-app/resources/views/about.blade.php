<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  </head>
  <body>
    <header class="bg-red-500 py-4 shadow-md">
      <nav class="container mx-auto p-4 flex justify-between items-center">
        <a href="#home" class="text-lg font-bold text-white no-underline hover:text-gray-200">My Website</a>
        <ul class="flex">
          <li class="mr-4"><a href="#about" class="text-white hover:text-gray-200 no-underline">About</a></li>
          <li><a href="#contact" class="text-white hover:text-gray-200 no-underline">Contact</a></li>
        </ul>
      </nav>
    </header>

    <main class="container mx-auto p-4 pt-6 md:pt-12 bg-gray-100 text-gray-700">
      <h1 class="text-3xl font-bold mb-4" id="home">Welcome to Boulevard Paradise!</h1>
      <p class="text-lg">This is the Home Page.</p>
    </main>

    <main class="container mx-auto p-4 pt-6 md:pt-12 bg-gray-200 text-gray-700" id="about">
      <h1 class="text-3xl font-bold mb-4">About Us</h1>
      <p class="text-lg">We are a team of passionate individuals who are dedicated to creating innovative solutions. Our mission is to make a positive impact in the world through our work.</p>
      <div class="flex justify-center mb-4">
        <img src="dreamybull.jpg" class="w-48 h-48 rounded-full mr-4" alt="Team Member 1">
        <img src="https://via.placeholder.com/150?text=Team+Member+2" class="w-48 h-48 rounded-full mr-4" alt="Team Member 2">
        <img src="https://via.placeholder.com/150?text=Team+Member+3" class="w-48 h-48 rounded-full" alt="Team Member 3">
      </div>
      <p class="text-lg">Meet our team members:</p>
      <ul class="list-disc pl-4">
        <li>Angelo D. Galulu, CEO</li>
        <li>Junsoy love Jun, CTO</li>
        <li>Yung Lean, Designer</li>
      </ul>
    </main>

    <main class="container mx-auto p-4 pt-6 md:pt-12 bg-red-400 text-grey" id="contact">
      <h1 class="text-3xl font-bold mb-4">Get in Touch</h1>
      <p class="text-lg">We'd love to hear from you! Whether you have a question, comment, or just want to say hello, please don't hesitate to reach out.</p>
      <form class="max-w-md mx-auto p-4 bg-white shadow-md">
        <label for="name" class="block mb-2">Name:</label>
        <input type="text" id="name" class="w-full p-2 mb-4">
        <label for="email" class="block mb-2">Email:</label>
        <input type="email" id="email" class="w-full p-2 mb-4">
        <label for="message" class="block mb-2">Message:</label>
        <textarea id="message" class="w-full p-2 mb-4"></textarea>
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Send</button>
      </form>
    </main>
  </body>
</html>