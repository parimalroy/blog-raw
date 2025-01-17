<!-- Header -->
<?php
$title = "Category";
include('partial/header.php')
?>

<?php // include('partial/helper.php') 
?>

<!-- Hero Section -->
<section class="bg-sky-800 text-white py-20">
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
        <?php foreach ($categories as $category) : ?>
        <div class="bg-sky-200 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
            <!-- <img src="https://via.placeholder.com/400x200" alt="Blog Post" class="rounded-t-lg"> -->
            <div class="p-6">
                <h3 class="text-2xl font-bold text-slate-800 mb-2">
                    <?= $category['category_name'] ?>
                    <?php foreach ($counts as $count) : ?>
                    <?php if ($category['category_name'] === $count['category_name']): ?>
                    (<?= $count['count(category_id)']  ?>)
                    <?php endif ?>
                    <?php endforeach ?>

                </h3>
                <p class="text-gray-600 mb-4">Explore tips and tools for creating modern, scalable Vue.js apps.</p>
                <a href="/category-single?id=<?= $category['id'] ?>"
                    class="text-slate-600 font-medium hover:underline">Show All</a>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</main>

<!-- Footer -->
<?php include('partial/footer.php') ?>