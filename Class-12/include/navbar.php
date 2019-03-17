<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-sm bg-info navbar-dark">
                    <div class="container">
                        <div class="profile-pic">
                            <a href="view_profile.php?user_id=<?php echo $username; ?>" title="View profile">
                                <img src="uploads/<?php echo $after_assoc['photo']; ?>" alt="profile.jpg"/>
                                <?php
                                $_SESSION['my_profile'] = 'ProFile';
                                $_SESSION['user_id'] = $user_id;
                                ?>
                            </a>
                            <button type="button" class="border" data-target="#upload" data-toggle="modal">Edit</button>
                        </div>

                        <button type="button" class="navbar-toggler" data-target="#myMenu" data-toggle="collapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="myMenu">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a href="profile.php?user_id=<?php echo $username; ?>" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="my_profile.php?user_id=<?php echo $username; ?>" class="nav-link">About</a></li>
                                <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Service</a>
                                    <ul class="dropdown-menu bg-info text-center">
                                        <li class="nav-item"><a href="" class="nav-link">Service one</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Service two</a></li>
                                        <li class="nav-item"><a href="" class="nav-link">Service three</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="" class="nav-link">Gallery</a></li>
                                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
                            </ul>
                            <form class="form-inline">
                                <input type="search" name="search" id="searchData" class="form-control">
                                <input type="button" id="searchBtn" value="Search" class="btn btn-primary ml-2">
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>