<footer class="bg-gray-800 py-20 mt-20">
    <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2 border-gray-700">
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">Pages</h3>
            <ul class="py-4 sm:test-s pt-4 text-gray-400">
                <li class="pb-1"><a href="/">Home</a></li>
                <li class="pb-1"><a href="/blog">Blog</a></li>
                <li class="pb-1"><a href="/login">Login</a></li>
                <li class="pb-1"><a href="/register">Register</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">Find Us</h3>
            <ul class="py-4 sm:test-s pt-4 text-gray-400">
                <li class="pb-1"><a href="/">What we do</a></li>
                <li class="pb-1"><a href="/">Address</a></li>
                <li class="pb-1"><a href="/">Phone</a></li>
                <li class="pb-1"><a href="/">Contact</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">Latest posts</h3>
            <ul class="py-4 sm:test-s pt-4 text-gray-400">
                <li class="pb-1"><a href="/">Why we love tech</a></li>
                <li class="pb-1"><a href="/">Why we love design</a></li>
                <li class="pb-1"><a href="/">Why we use laravel</a></li>
                <li class="pb-1"><a href="/">Why php is the best</a></li>
            </ul>
        </div>
    </div>
    <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
        Copyright {{date('Y')}} SK Coding. All Rights Reserved
    </p>
</footer>
<script>
        // Navbar Toggle
    document.addEventListener('DOMContentLoaded', function () {

    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
        $el.addEventListener('click', function () {

        // Get the "main-nav" element
        var $target = document.getElementById('main-nav');

        // Toggle the class on "main-nav"
        $target.classList.toggle('hidden');

        });
    });
    }

    });
</script>