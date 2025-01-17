<?php include('helper.php') ?>
<aside class="w-64 bg-sky-800 text-white flex flex-col">
    <div class="p-6 text-center font-bold text-2xl tracking-wide border-b border-slate-700"><a href="/admin">Admin
            Panel</a></div>
    <nav class="flex-grow">

        <ul class="space-y-2 p-4">

            <!-- Home page sidebar -->
            <!-- <?php if (urls("/admin")) { ?> -->
            <!-- <?php }; ?> -->
            <li><a href="/admin"
                    class="block px-4 py-2 rounded-md hover:bg-slate-800 <?php echo urls("/admin") ? "bg-slate-700 font-bold text-white" : ""; ?> ">Dashboard</a>
            </li>
            <li><a href="/admin/blog/create-blog"
                    class="block px-4 py-2 rounded-md hover:bg-slate-700 <?php echo urls("/admin/blog/create-blog") ? "bg-slate-700 font-bold text-white" : ""; ?>">Create
                    Blogs</a></li>
            <li><a href="/admin/blog/home-blog"
                    class="block px-4 py-2 rounded-md hover:bg-slate-700 text-white <?php echo urls("/admin/blog/home-blog") ? "bg-slate-700 font-bold text-white" : ""; ?>">Edit
                    Blog</a></li>
            <li><a href="/admin/category/create-category"
                    class="block px-4 py-2 rounded-md hover:bg-slate-700 <?php echo urls("/admin/category/create-category") ? "bg-slate-700 font-bold text-white" : ""; ?>">Add
                    Categories</a></li>
            <li><a href="/admin/setting" class="block px-4 py-2 rounded-md hover:bg-slate-700">Delete Categories</a>
            </li>


            <!-- create amd edit page sidebar -->
            <!-- <?php if (urls("/admin/create") || urls("/admin/edit") || urls("/admin/insert")) { ?>
            <li><a href="/admin" class="block px-4 py-2 rounded-md hover:bg-slate-700">Dashboard</a></li>
            <li><a href="#blogs-section"
                    class="block px-4 py-2 rounded-md hover:bg-slate-700 <?php echo urls("/admin/create") || urls("/admin/insert") ? "bg-slate-700 font-bold text-white" : ""; ?>">Manage
                    Blogs</a></li> -->
            <!-- <li><a href="#users-section" class="block px-4 py-2 rounded-md hover:bg-slate-700">Manage Users</a></li> -->
            <!-- <li><a href="/admin" class="block px-4 py-2 rounded-md hover:bg-slate-700"><?php echo $users ?></a></li>
            <li><a href="/admin/setting"
                    class="block px-4 py-2 rounded-md hover:bg-slate-700"><?php echo $setting ?></a></li>
            <?php }; ?> -->

            <!-- profile page sidebar -->

            <!-- <?php if (urls("/admin/profile")) { ?>
            <li><a href="/admin" class="block px-4 py-2 rounded-md hover:bg-slate-700">Dashboard</a></li>
            <li><a href="admin/create" class="block px-4 py-2 rounded-md hover:bg-slate-700">Manage Blogs</a></li> -->
            <!-- <li><a href="#users-section" class="block px-4 py-2 rounded-md hover:bg-slate-700">Manage Users</a></li> -->
            <!-- <li><a href="/admin" class="block px-4 py-2 rounded-md hover:bg-slate-700"><?php echo $users ?></a></li>
            <li><a href="#settings-section"
                    class="block px-4 py-2 rounded-md hover:bg-slate-700 <?php echo urls("/admin/profile") ? "bg-slate-700 font-bold text-white" : ""; ?>"><?php echo $editProfile ?></a>
            </li>
            <?php }; ?> -->

            <!-- setting page sidebar -->

            <!-- <?php if (urls("/admin/setting")) { ?>
            <li><a href="/admin" class="block px-4 py-2 rounded-md hover:bg-slate-700">Dashboard</a></li>
            <li><a href="/admin/create" class="block px-4 py-2 rounded-md hover:bg-slate-700">Manage Blogs</a></li> -->
            <!-- <li><a href="#users-section" class="block px-4 py-2 rounded-md hover:bg-slate-700">Manage Users</a></li> -->
            <!-- <li><a href="/admin" class="block px-4 py-2 rounded-md hover:bg-slate-700"><?php echo $users ?></a></li>
            <li><a href="/admin/profile"
                    class="block px-4 py-2 rounded-md hover:bg-slate-700"><?php echo $editProfile ?></a></li>
            <li><a href="/admin/setting"
                    class="block px-4 py-2 rounded-md hover:bg-slate-700 <?php echo urls("/admin/setting") ? "bg-slate-700 font-bold text-white" : ""; ?>"><?php echo $setting ?></a>
            </li>
            <?php }; ?> -->

        </ul>
    </nav>
    <form action="/logout" method="post">
        <div class="p-4">
            <button class="block px-4 py-2 text-center rounded-md bg-red-600 hover:bg-red-500">Logout</button>
        </div>
    </form>
</aside>