<!-- Preloader -->
<div id="preloader">
    <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<div class="chat-bot">
    <div class="chat_head">
        <div class="imgbox">
            <img src="{{ asset('images/customer-service.png') }}" alt="icon" />
        </div>
        <div>
            <h5>Chat with us</h5>
            <small>Online</small>
        </div>

        <div class="close chat-bot-close">
            <img src="{{ asset('images/close-window.png') }}" alt="icon" />
        </div>
    </div>

    <div class="chat_body">
        <div class="chat_message bot">
            <span>Support Bot</span>
            <p>Hello! How can I assist you today?</p>
        </div>
        <div class="chat_message user">
            <span>Customer</span>
            <p>What are your hours of operation?</p>
        </div>
    </div>
    <div class="chat_input">
        <input type="text" placeholder="Type a message" />
        <button>Send</button>
    </div>
</div>

<div class="chat-bot-icon">
    <img src="{{ asset('images/customer-service.png') }}" alt="icon" />
</div>

<div class="sticky-social">
    <div class="sticky-social-link facebook">
        <i class="fa-brands fa-facebook-f"></i>
    </div>
    <div class="sticky-social-link twitter">
        <i class="fa-brands fa-x-twitter"></i>
    </div>
    <div class="sticky-social-link instagram">
        <i class="fab fa-instagram"></i>
    </div>
    <div class="sticky-social-link linkedin">
        <i class="fa-brands fa-linkedin-in"></i>
    </div>
    <div class="sticky-social-link youtube">
        <i class="fa-brands fa-youtube"></i>
    </div>
</div>

<div class="top-header">
    <ul class="container">
        <div class="header_logo">
            <img class="img-fluid" src="{{ asset('images/logosm.jpg') }}" alt="logo" />
        </div>
        <li class="menu_icon">
            <img src="{{ asset('images/menu.png') }}" alt="menu" />
        </li>
        <li class="d-none d-md-block">
            <a href="#">A<sup><i class="fa-solid fa-minus"></i></sup></a>

            <a href="#"><span class="mx-2">A</span></a>

            <a href="#">A<sup><i class="fa-solid fa-plus"></i></sup></a>
        </li>

        <li><a href="#">English</a> | <a href="#"> Hindi</a></li>
        <li class="d-none d-md-block search">
            <input type="text" /> <i class="fa-solid fa-magnifying-glass"></i>
        </li>
    </ul>
</div>

<!-- <div class="logo">
    <img class="img-fluid" src="./images/logo.jpg" alt="logo" />
  </div> -->

<div class="header-overlay"></div>
