<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
    </style>
</head>
<body class="h-screen bg-gray-100">
   <header class="flex justify-between items-center py-4 px-6 bg-white shadow-md">
    <a href="#" class="logo text-2xl font-bold text-blue-600">Web Portfolio</a>
    <nav class="flex justify-between items-center">
        <a href="#" class="active text-blue-600 hover:text-blue-900 transition duration-300 ease-in-out">Home</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-300 ease-in-out">Skills</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-300 ease-in-out">Education</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-300 ease-in-out">Experience</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 transition duration-300 ease-in-out">Contact</a>
    </nav>
   </header>
   <section class="home flex flex-col justify-center items-center h-screen">
    <div class="home-img w-full h-64 bg-cover bg-center" style="background-image: url('image1.jpg');"></div>
    <div class="home-content p-6">
        <h1 class="text-3xl font-bold">Hi, I'm <span class="text-blue-600">Stephen Jay B. Gabion</span></h1>
        <h3 class="typing-text text-2xl font-bold">I'm a <span class="text-gray-600"></span></h3>
        <p class="text-gray-600">Hi, I am Stephen Jay B. Gabion a Web Developer From Davao City, Philippines,
            <br>currently a 3rd year CS Student from STI College Davao.  I am eager to explore
            <br>and contribute to innovative projects My academic journey has equipped me with
            <br>a solid foundation in web programming and I am constantly seeking opportunities
            <br>to apply my knowledge in real-world scenarios. With a keen interest in web development
            <br>I am committed to growing both personally and professionally to make a positive impact
            <br>in my field.
        </p>
        <div class="social-icons flex justify-center items-center">
            <a href="#" class="mr-4"><i class="fa-brands fa-facebook text-2xl text-blue-600 hover:text-blue-900 transition duration-300 ease-in-out"></i></a>
            <a href="#" class="mr-4"><i class="fa-brands fa-instagram text-2xl text-pink-600 hover:text-pink-900 transition duration-300 ease-in-out"></i></a>
            <a href="#" class="mr-4"><i class="fa-brands fa-twitter text-2xl text-blue-400 hover:text-blue-600 transition duration-300 ease-in-out"></i></a>
            <a href="#" class="mr-4"><i class="fa-brands fa-github text-2xl text-gray-600 hover:text-gray-900 transition duration-300 ease-in-out"></i></a>
        </div>
    </div>
   </section>
   <footer class="bg-gray-200 h-screen p-6">
       <p class="text-gray-600">&copy; <?php echo date('Y'); ?> Stephen Jay B. Gabion. All rights reserved.</p>
   </footer>
</body>
</html>