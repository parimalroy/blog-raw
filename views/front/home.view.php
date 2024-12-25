<!-- Header -->
<?php
$title = "Home Page";
include('partial/header.php')
?>

<?php //include('partial/helper.php') 
?>
<!-- Hero Section -->
<section class="bg-slate-800 text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold mb-4">Welcome to Blogify</h1>
        <p class="text-lg font-medium mb-6">Discover the latest in tech, programming, and design inspired by Vue.js.</p>
        <a href="#posts"
            class="px-6 py-3 bg-slate-700 text-white font-bold rounded-lg shadow-md hover:bg-slate-600 transition duration-300">
            Browse Posts
        </a>
    </div>
</section>

<!-- Blog Posts -->
<main id="posts" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-slate-900 text-center mb-10">Latest Blog Posts</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Blog Card 1 -->
        <?php foreach ($posts as $post) : ?>
        <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <img src="images/<?php echo $post['cover_photo'] ?>" alt="Blog Post" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-slate-800 mb-2"><?= $post['blog_title'] ?></h3>
                <p class="text-gray-600 mb-4"><?= htmlspecialchars(substr($post['content'], 0, 100)) ?></p>
                <a href="/details?id=<?php echo $post['id'] ?>" class="text-slate-600 font-medium hover:underline">Read
                    More</a>
            </div>
        </div>
        <?php endforeach ?>


</main>

<!-- Footer -->
<?php include('partial/footer.php') ?>