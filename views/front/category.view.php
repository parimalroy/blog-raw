<!-- Header -->
<?php
$title = "Category";
include('partial/header.php')
?>

<?php // include('partial/helper.php') 
?>

<!-- Hero Section -->
<section class="bg-slate-800 text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold mb-4">Blog Category</h1>
        <p class="text-lg font-medium mb-6">Discover the latest in tech, programming, and design inspired by Vue.js.</p>

    </div>
</section>

<!-- Blog Posts -->
<main id="posts" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-slate-900 text-center mb-10">All Blog Category</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Blog Card 1 -->
        <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <img src="https://via.placeholder.com/400x200" alt="Blog Post" class="rounded-t-lg">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-slate-800 mb-2">How to Build Vue.js Applications</h3>
                <p class="text-gray-600 mb-4">Explore tips and tools for creating modern, scalable Vue.js apps.</p>
                <a href="#" class="text-slate-600 font-medium hover:underline">Read More</a>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<?php include('partial/footer.php') ?>