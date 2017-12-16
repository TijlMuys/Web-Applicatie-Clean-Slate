<!--
The following snippet was copied from the internet under the MIT license
i-heart-php, (2017). "Simple Sidebar", bootsnipp.com, Geraadpleegd op [12-16-2017] via [https://bootsnipp.com/snippets/BDWlD]
-->
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Welkom Tijl!
                </a>
            </li>
            <li>
                <a href="/cleanslatewebapp/public/home">Home</a>
            </li>
            <li>
                <a href="/cleanslatewebapp/public/trainingen">Mijn Trainingen</a>
            </li>
            <li>
                <a href="/cleanslatewebapp/public/inschrijven">Inschrijven</a>
            </li>
            <li>
                <a href="/cleanslatewebapp/public/boeken">Boeken</a>
            </li>
            <li>
                <a href="#">Instellingen</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                 
                        @yield('content')

                    <!--<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
    <!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>