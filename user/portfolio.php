<?php require_once("./partial/header.php");
require_once("./partial/navbar.php");
?>

<div class="w-screen flex justify-center items-end" style="height:70vh">


    <div class="card card-side bg-base-100 shadow-xl overflow-hidden mx-10">
        <div class="carousel carousel-vertical rounded-box h-96">
            <div class="carousel-item h-full w-64 overflow-hidden">
                <img src="./img/porfor1.png" class="object-cover" />
            </div>
            <div class="carousel-item h-full w-64 overflow-hidden">
                <img src="./img/porfor3.png" class="object-cover object-left" />
            </div>
            <div class="carousel-item h-full w-64 overflow-hidden">
                <img src="./img/porfor4.png" class="object-cover object-center" />
            </div>

            <div class="carousel-item h-full w-64 overflow-hidden bg-stone-300">
                <video src="./img/beloved-one.mp4" autoplay muted loop class="object-cover w-full"></video>
            </div>

        </div>
        <div class="card-body">
            <h2 class="card-title">About creator of this website</h2>
            <ul style="list-style-type: square;">
                <li>Win Pyae is a youth who is passionate on programming created this website with the purpose of
                    exploring the popular movies for movie enthusiasts.</li>
                <li>He has been learning programming six months ago.</li>
                <li>Mostly, he used two programming language, javascript and php.</li>

            </ul>

            <h4 class="mt-16">Contact me</h4>
            <div class="card-actions justify-start">

                <div class="avatar online">
                    <div class="w-10 rounded-full">
                        <a href="https://github.com/lerover"><img
                                src="https://t4.ftcdn.net/jpg/02/50/30/59/240_F_250305943_sDC6la1N1fDl3bLgfLxOkQwItIodsdMb.jpg" /></a>
                    </div>
                </div>
                <div class="avatar offline">
                    <div class="w-10 rounded-full">
                        <a href="https://www.facebook.com/profile.php?id=100057062921546"> <img
                                src="https://t4.ftcdn.net/jpg/03/00/24/59/240_F_300245953_Svih1DYJbw4v2t92EhDOTwW4LIqMghmy.jpg" />
                        </a>
                    </div>
                </div>
                <div class="avatar offline">
                    <div class="w-10 rounded-full">
                        <a href="#"><img
                                src="https://t3.ftcdn.net/jpg/04/69/02/56/240_F_469025636_lPhoP6qoW4sza9nVQ0yTyrVgpjSKsUar.jpg" /></a>
                    </div>
                </div>

                <div class="avatar offline">
                    <div class="w-10 rounded-full">
                        <a href="https://discord.com/channels/@me"><img
                                src="https://cdn-icons-png.flaticon.com/128/3670/3670157.png" /></a>
                    </div>
                </div>
            </div>


            <div class="mt-3">
                <small>
                    BTW, The last video of carousel is my beloved-one.
                </small>
            </div>
        </div>
    </div>
</div>


<?php include_once('./partial/footer.php'); ?>