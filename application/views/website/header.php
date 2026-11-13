<style>

/* Navbar Styles */
.navbar {
    margin-bottom: 0;
}
.navbar-brand{
    font-size:28px;
}

.navbar-brand img{
    height:50px;
    width:50px;
}



</style>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand m-0 p-0" href="<?=base_url("main");?>"><img src="https://cryptologos.cc/logos/basic-attention-token-bat-logo.png" alt="Mobile Repairing Logo" width="50"></a>
        <a class="navbar-brand ml-3" href="#">
            <h2>Mobile Repairing</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="btn btn-danger" href="#" id="logout_btn">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/assets/js/global.js"></script>
    <script>

    $("#logout_btn").click(function(e){
        e.preventDefault();
        deleteCookie("user");
        location.href="<?= base_url("main")?>";
    });
    </script>


