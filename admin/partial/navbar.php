<!-- nav-bar -->
<div class="navbar bg-base-100 sticky top-0 z-10 rounded-box" style="box-shadow: 0px 5px 12px 0px rgba(0,0,0,0.5);">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a href="./index.php">Lists</a></li>
                <li><a href="./create.php?p=created">To Create</a></li>
                <li><a href="?logout=confirm">Logout
                        <?php
                        if (isset($_GET['logout'])) {
                            header('Location:../index.php');
                        }
                        ;
                        ?>
                    </a></li>
                <li><a href="../user/index.php">User Account</a></li>

            </ul>
        </div>


    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl" href="./index.php">
            <?php
            if (!isset($_GET['p']) && !isset($_GET['id'])) {

                echo "Admin-Panel(Movie-List)";
            } elseif ($_GET['p'] === 'created') {
                echo "Create New Movie";

            } elseif (isset($_GET["id"])) {
                    echo "Edit Movie List";
                
            } 
            
            ?>

        </a>
    </div>
    <div class="navbar-end">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn m-1">
                Theme
                <svg width="12px" height="12px" class="inline-block h-2 w-2 fill-current opacity-60"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
                    <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content bg-base-300 rounded-box z-[1] w-52 p-2 shadow-2xl">
                <li>
                    <input type="radio" name="theme-dropdown"
                        class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Default"
                        value="default" />
                </li>
                <li>
                    <input type="radio" name="theme-dropdown"
                        class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Retro"
                        value="retro" />
                </li>
                <li>
                    <input type="radio" name="theme-dropdown"
                        class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Cyberpunk"
                        value="cyberpunk" />
                </li>
                <li>
                    <input type="radio" name="theme-dropdown"
                        class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Valentine"
                        value="valentine" />
                </li>
                <li>
                    <input type="radio" name="theme-dropdown"
                        class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Aqua"
                        value="aqua" />
                </li>
            </ul>
        </div>
        <button class="btn btn-ghost btn-circle" id="search-btn">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
        <button class="btn btn-ghost btn-circle">
            <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span class="badge badge-xs badge-primary indicator-item"></span>
            </div>
        </button>


    </div>
</div>


<!-- search-box -->
<div class="w-screen px-12 mt-3" id="search-box" style="display:none">
    <form action="" class="flex h-full">
        <label class="input input-bordered flex items-center gap-2 w-full">
            <input type="text" class="grow" placeholder="Search" />
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                <path fill-rule="evenodd"
                    d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                    clip-rule="evenodd" />
            </svg>
        </label>
    </form>
</div>