 
 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav" role="navigation">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="../assets/images/Asset4@4x.png" style="width:4.5em" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a wire:navigate href="/">Home</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/about-us">About</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/jobs">job</a></li>
                        <li><a wire:navigate href="/contact">Contact</a></li> 
                        <li class="scroll-to-section"><a wire:navigate href="/marketing">Marketing</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/sales">Sales</a></li>

                        @if (Session::has('loginId'))
                            <li class=" li-header"><a href="#" style=" color: #fff;">{{$data -> first_name}}</a></li>
                            <li><a href="applicant-logout"><i class="fa fa-right-from-bracket"></i></a></li>
                        @else
                            <li class="scroll-to-section"><a wire:navigate href="/applicant-logout" style=" color: #fff;">Login</a></li>
                        @endif
                    </ul>  
                        {{--  --}}
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- ***** Header Area End ***** -->

<style>

.li-header {
    border: 1px solid #043E76;
    background-color: #043E76;
    /* color: #fff; */
    border-radius: 10px;
}

.h6-header {
    border: 1px solid #fff;
    padding: 10px;
    margin-left: 20px;
    background-color: #fff;
    border-radius: 10px;
}

</style>