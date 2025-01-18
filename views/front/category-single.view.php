<!-- Header -->
<?php
$title = "List Page -";
include('partial/header.php')
?>



<!-- Blogs Section -->
<section class="py-16 bg-slate-50">
    <div class="container mx-auto">
        <h1 class="text-4xl font-extrabold text-slate-900 text-center mb-10">Explore Our Blogs</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php foreach ($categories as $category) { ?>
            <!-- Blog Card -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl overflow-hidden transition duration-300">
                <img src="images/<?php echo $category['cover_photo'] ?>" alt="Blog Post"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-slate-800 mb-2"><?= $category['blog_title'] ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo htmlspecialchars(substr($category['content'], 0, 100)) ?>
                    </p>
                    <a href="/details?id=<?php echo $category['id'] ?>"
                        class="text-slate-800 font-medium hover:underline">Read More</a>
                </div>
            </div>
            <!-- Repeat similar cards for other blogs -->
            <?php } ?>
        </div>

        <!-- Pagination -->

</section>

<!-- Footer -->
<?php include('partial/footer.php') ?>