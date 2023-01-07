@extends('layouts.app')

@section('content')
    <style>
        .card {
            transition: box-shadow .3s;
            border: 1px solid rgb(133, 133, 133);
        }

        .card:hover {
            box-shadow: 5px 5px 11px rgba(33, 33, 33, 0.452)
        }

        .service {
            border-radius: 10px;
        }

        .service:hover {
            transition: 600ms all ease;
            color: white;
            background: #212529;
        }
    </style>

    <div class="container-fluid">
        <section class="mt-3" id="#home">
            {{-- <div class="contianer ml-5 row">
                <h1 class="mt-3 ml-1">
                    
                </h1>
            </div> --}}
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-6 order-lg-1 mt-4">
                        <h1 style="font-size:54px; font-weight:bolder;"><b>Next Gen Computex</b></h1><br><br> <br>
                        <h3 class="font-italic">IF YOU BUILD IT, THEY <br>
                            <h1 class="font-weight-bolder"> WILL LOSE.</h1>
                        </h3> <br>
                        <h5>USHERING A NEW DAWN FOR GAMING COMPUTERS</h5>
                        <br>
                        <br>
                        <a href="{{ url('/login') }}" role="button" class="btn bttn btn-outline-dark shadow w-50">Get
                            Started -></a>

                    </div>
                    <div class="col-lg-6 order-lg-2 p-5" style="margin-top:-5%">
                        <img src="https://cdn-icons-png.flaticon.com/512/771/771196.png" alt="landing image"
                            class="img-fluid rounded mx-auto d-block avatar">
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 mb-5" id="products">
            <div class="contianer ml-5 row">
                <h3>
                    <br><br>
                    <b>Products</b>
                    <hr class="mr-4 bg-dark">
                    <br>
                </h3>
            </div>
            <div class="container w-75 d-flex justify-content-center">
                <div class="row">
                    <div class="contianer ">
                        <div class="row row-cols-1 row-cols-md-3">

                            <div class="col mb-4">
                                <a href="" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://images.unsplash.com/photo-1552831388-6a0b3575b32a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fG1vbml0b3J8ZW58MHx8MHx8&w=1000&q=80"
                                            class="card-img-top" alt="Displays">
                                        <div class="card-body">
                                            <h5 class="card-title">Displays</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Dolor repellat nihil cumque dignissimos similique asperiores officiis iure,
                                                laudantium ipsum quasi?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col mb-4">
                                <a href="#" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Q1BVfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top" alt="CPU">
                                        <div class="card-body">
                                            <h5 class="card-title">CPU (Central Processing Unit)</h5>
                                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                Enim sit amet pariatur voluptates obcaecati maxime voluptatibus molestias
                                                corporis iure dolor.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col mb-4">
                                <a href="#" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://images.unsplash.com/photo-1591405351990-4726e331f141?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8R1BVfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top" alt="GPU">
                                        <div class="card-body">
                                            <h5 class="card-title">GPU (Graphics Processing Unit)</h5>
                                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                Natus saepe quos temporibus culpa consequatur ipsa quae qui voluptatem
                                                consectetur doloremque!</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="#" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://images.unsplash.com/photo-1600336757481-6185c4be6ff6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTAwfHxNb3RoZXJib2FyZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top" alt="Motherboard">
                                        <div class="card-body">
                                            <h5 class="card-title">Motherboard</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex
                                                incidunt modi labore corrupti dolorem, nulla natus perspiciatis odio.
                                                Provident,
                                                quis?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="#" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://images.unsplash.com/photo-1562976540-1502c2145186?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmFtfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top" alt="RAM">
                                        <div class="card-body">
                                            <h5 class="card-title">RAM (Random Access Memory)</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Veniam
                                                exercitationem voluptate doloremque? Delectus voluptas maxime sequi
                                                reprehenderit consequuntur eius nemo.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="#" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://images.unsplash.com/photo-1588420833265-28d5eec41d4f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGhhcmQlMjBkcml2ZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top" alt="HDD">
                                        <div class="card-body">
                                            <h5 class="card-title">HDD (Hard Disk Drive)</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Quia
                                                qui in, atque officiis consequuntur sint! Quas ut pariatur dolores
                                                distinctio?
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="#" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://images.unsplash.com/photo-1529961172671-d48e8280f846?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y29tcHV0ZXIlMjBwb3dlciUyMHN1cHBseXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top" alt="Power Supply Unit">
                                        <div class="card-body">
                                            <h5 class="card-title">PSU (Power Supply Unit)</h5>
                                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                Enim
                                                perferendis ipsa, tempora ut minus magni iusto laudantium quibusdam voluptas
                                                similique.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="#" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://media.istockphoto.com/id/1293918258/photo/computer-parts-inside-pc-with-ice-blue-led-liquid-cooling.jpg?b=1&s=170667a&w=0&k=20&c=0Z-daDHyzygkXoP0SFvoqALu0oJYWxSo63aEQUxRon4="
                                            class="card-img-top" alt="Cooling System">
                                        <div class="card-body">
                                            <h5 class="card-title">Cooling System</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                In
                                                explicabo natus cupiditate amet labore maiores eos accusamus eum deleniti
                                                aut?
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="#" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmlLHj9NPQb9dPKiqO-d5vdxiIBZBrTN_6rQ&usqp=CAU"
                                            class="card-img-top" alt="Computer Cases">
                                        <div class="card-body">
                                            <h5 class="card-title">Cases</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                At
                                                cumque tenetur omnis quae veniam? Placeat consectetur perferendis alias
                                                asperiores vero?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="#" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://images.unsplash.com/photo-1613141411244-0e4ac259d217?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGdhbWluZyUyMG1vdXNlfGVufDB8fDB8fA%3D%3D&w=1000&q=80"
                                            class="card-img-top" alt="Mouse">
                                        <div class="card-body">
                                            <h5 class="card-title">Mouse</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Quas
                                                deleniti delectus numquam, voluptatum aliquam mollitia enim laboriosam unde
                                                recusandae vero.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="#" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://images.unsplash.com/photo-1638909067462-1310c4011610?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODJ8fGtleWJvYXJkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top" alt="Keyboard">
                                        <div class="card-body">
                                            <h5 class="card-title">Keyboard</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                Vero
                                                nemo dolor dicta error corporis in sint voluptate, iure adipisci sequi!</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="#" class="card-link text-dark">
                                    <div class="card h-100">
                                        <img src="https://images.unsplash.com/photo-1610041321327-b794c052db27?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Z2FtaW5nJTIwaGVhZHBob25lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top" alt="Headphones">
                                        <div class="card-body">
                                            <h5 class="card-title">Headphone</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Laborum quibusdam quas quaerat doloremque architecto eaque nesciunt ipsam
                                                consequatur dolor odio.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
        </section>
        <section class="mt-5 mb-5" id="services">
            <div class="contianer ml-5 row">
                <h3>
                    <br><br>
                    <b>Services</b>
                    <hr class="mr-4 bg-dark">
                    <br>
                </h3>
            </div>

            <div class="container w-75 d-flex justify-content-center">
                <div class="row">
                    <div class="contianer ">
                        <div class="row row-cols-1 row-cols-md-3">

                            <div class="col mb-4">
                                <a href="{{ url('design') }}" class="card-link text-dark">
                                    <div class="card service h-100">
                                        <i class="fa-solid fa-computer card-img-top text-center p-4"
                                            style="font-size:68px;"></i>
                                        <div class="card-body">
                                            <h2 class="card-title font-weight-bold">Design Your Own</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="{{ url('ship') }}" class="card-link text-dark">
                                    <div class="card service h-100">
                                        <i class="fa-solid fa-truck-fast card-img-top text-center p-4"
                                            style="font-size:68px;"></i>
                                        <div class="card-body">
                                            <h2 class="card-title font-weight-bold text-center">Ready to ship</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=" col mb-4">
                                <a href="{{ url('choose') }}" class="card-link text-dark">
                                    <div class="card service h-100">
                                        <i class="fa-solid fa-question card-img-top text-center p-4"
                                            style="font-size:68px;"></i>
                                        <div class="card-body">
                                            <h2 class="card-title font-weight-bold text-center">Help me choose</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>



        <section class="mt-5 mb-5" id="#about">
            {{-- Subscribsion --}}

            <div class="subscribe">
                <div class="titles">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                    <h5 class="font-weight-bolder">GET THE LATEST TRENDS FIRST</h5>
                    <form action="{{ route('contact.us.store') }}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="ENTER YOUR EMAIL" autocomplete="off"
                            id="">
                        <button class="arrow" type="submit">→</button>
                        <br>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </form>
                </div>
                <div class="container mb-5 mt-3">
                    <nav class="navbar justify-content-center" style="background: none; !important">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a href="https://www.facebook.com" target="_blank" class="nav-link ">
                                    <i class=" social fa-brands fa-square-facebook"></a></i>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa-brands fa-tiktok"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa-brands fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
@endsection
