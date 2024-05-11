
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start" id="sidenav-main">
<div class="sidenav-header" style="height: 150px; display: flex; justify-content: center; align-items: center;">
  <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="align-items-center d-flex m-5" href="{{ route('dashboard') }}">
    <img src="{{ asset('assets/img/logo.png') }}" class=" w-75 h-75" alt="Logo">
  </a>
</div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse h-100 w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link {{ (Request::is('dashboard') ? 'active' : '') }}" href="{{ url('dashboard') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="16" height="16" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m11.6 11c0-.552-.448-1-1-1-1.655 0-4.945 0-6.6 0-.552 0-1 .448-1 1v9c0 .552.448 1 1 1h6.6c.552 0 1-.448 1-1 0-2.092 0-6.908 0-9zm9.4 6c0-.552-.448-1-1-1h-6c-.538 0-1 .477-1 1v3c0 .552.448 1 1 1h6c.552 0 1-.448 1-1zm0-13c0-.552-.448-1-1-1-1.537 0-4.463 0-6 0-.552 0-1 .448-1 1v9.6c0 .552.448 1 1 1h6c.552 0 1-.448 1-1 0-2.194 0-7.406 0-9.6zm-9.4 0c0-.552-.448-1-1-1-1.655 0-4.945 0-6.6 0-.552 0-1 .448-1 1v3.6c0 .552.448 1 1 1h6.6c.552 0 1-.448 1-1 0-1.017 0-2.583 0-3.6z" fill-rule="nonzero"/></svg>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li> -->
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Members</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link  {{ (Request::is('member') ? 'active' : '') }}" href="{{ url('member') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M17.997 18h-11.995l-.002-.623c0-1.259.1-1.986 1.588-2.33 1.684-.389 3.344-.736 2.545-2.209-2.366-4.363-.674-6.838 1.866-6.838 2.491 0 4.226 2.383 1.866 6.839-.775 1.464.826 1.812 2.545 2.209 1.49.344 1.589 1.072 1.589 2.333l-.002.619zm4.811-2.214c-1.29-.298-2.49-.559-1.909-1.657 1.769-3.342.469-5.129-1.4-5.129-1.265 0-2.248.817-2.248 2.324 0 3.903 2.268 1.77 2.246 6.676h4.501l.002-.463c0-.946-.074-1.493-1.192-1.751zm-22.806 2.214h4.501c-.021-4.906 2.246-2.772 2.246-6.676 0-1.507-.983-2.324-2.248-2.324-1.869 0-3.169 1.787-1.399 5.129.581 1.099-.619 1.359-1.909 1.657-1.119.258-1.193.805-1.193 1.751l.002.463z"/></svg>
          </div>
            <span class="nav-link-text ms-1">All Members</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Inventory</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('inventory') ? 'active' : '') }}" href="{{ url('inventory') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M22 24h-20l-2-10h24l-2 10zm-1.444-22.001l.439-1.999h-17.994l.439 1.999h17.116zm1.7 4.001l.37-2h-21.256l.371 2h20.515zm-19.731 6l-.254-2h19.45l-.262 2h2.017l.524-4h-24l.509 4h2.016z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Purchased</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('donation') ? 'active' : '') }}" href="{{ url('donation') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M11 24h-9v-12h9v12zm0-18h-11v4h11v-4zm2 18h9v-12h-9v12zm0-18v4h11v-4h-11zm4.369-6c-2.947 0-4.671 3.477-5.369 5h5.345c3.493 0 3.53-5 .024-5zm-.796 3.621h-2.043c.739-1.121 1.439-1.966 2.342-1.966 1.172 0 1.228 1.966-.299 1.966zm-9.918 1.379h5.345c-.698-1.523-2.422-5-5.369-5-3.506 0-3.469 5 .024 5zm.473-3.345c.903 0 1.603.845 2.342 1.966h-2.043c-1.527 0-1.471-1.966-.299-1.966z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Donation</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('all-inventory') ? 'active' : '') }}" href="{{ url('all-inventory') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M22 24h-20l-2-10h24l-2 10zm-1.444-22.001l.439-1.999h-17.994l.439 1.999h17.116zm1.7 4.001l.37-2h-21.256l.371 2h20.515zm-19.731 6l-.254-2h19.45l-.262 2h2.017l.524-4h-24l.509 4h2.016z"/></svg>
            </div>
            <span class="nav-link-text ms-1">All Items</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Finance</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('weekly_allowances') ? 'active' : '') }}" href="{{ url('/weekly_allowances') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M11 24h-9v-12h9v12zm0-18h-11v4h11v-4zm2 18h9v-12h-9v12zm0-18v4h11v-4h-11zm4.369-6c-2.947 0-4.671 3.477-5.369 5h5.345c3.493 0 3.53-5 .024-5zm-.796 3.621h-2.043c.739-1.121 1.439-1.966 2.342-1.966 1.172 0 1.228 1.966-.299 1.966zm-9.918 1.379h5.345c-.698-1.523-2.422-5-5.369-5-3.506 0-3.469 5 .024 5zm.473-3.345c.903 0 1.603.845 2.342 1.966h-2.043c-1.527 0-1.471-1.966-.299-1.966z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Allowances</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('counting_services') ? 'active' : '') }}" href="{{ url('/counting_services') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M11 24h-9v-12h9v12zm0-18h-11v4h11v-4zm2 18h9v-12h-9v12zm0-18v4h11v-4h-11zm4.369-6c-2.947 0-4.671 3.477-5.369 5h5.345c3.493 0 3.53-5 .024-5zm-.796 3.621h-2.043c.739-1.121 1.439-1.966 2.342-1.966 1.172 0 1.228 1.966-.299 1.966zm-9.918 1.379h5.345c-.698-1.523-2.422-5-5.369-5-3.506 0-3.469 5 .024 5zm.473-3.345c.903 0 1.603.845 2.342 1.966h-2.043c-1.527 0-1.471-1.966-.299-1.966z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Giver</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('accounting') ? 'active' : '') }}" href="{{ url('accounting') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12 0c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm.25 7.474v.526h-.5v-.499c-.518-.009-1.053-.132-1.5-.363l.228-.822c.478.186 1.114.383 1.612.271.574-.131.692-.722.057-1.006-.465-.217-1.889-.402-1.889-1.621 0-.682.52-1.292 1.492-1.426v-.534h.5v.509c.361.01.768.073 1.221.21l-.181.824c-.384-.135-.808-.258-1.222-.232-.744.043-.81.688-.29.958.855.402 1.972.7 1.972 1.772.002.859-.672 1.316-1.5 1.433zm-.25 6.526c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm0 9c-2.205 0-4-1.795-4-4s1.795-4 4-4c2.206 0 4 1.795 4 4s-1.794 4-4 4zm9.577-13.613c1.233 2.352 1.548 6.801-2.585 9.756.019-.882-.113-1.706-.436-2.572 2.113-1.744 2.051-4.264 1.193-6.234l-2.377 1.236 1.596-5.182 5.032 1.737-2.423 1.259zm-19.154 5.611c-1.233-2.352-1.46-7.146 2.672-10.101-.019.882.114 1.707.436 2.572-2.114 1.745-2.139 4.609-1.281 6.58l2.377-1.236-1.596 5.182-5.031-1.738 2.423-1.259zm9.576 7.002v-.756h-.248v.756h-.502v-.756h-1.242l.127-.744h.27c.219 0 .347-.213.347-.427v-2.222c0-.208-.122-.351-.341-.351h-.41v-.75h1.249v-.75h.502v.75h.248v-.75h.502v.763c1.078.037 1.506.445 1.629.907.143.545-.216 1.002-.525 1.114.375.096.896.373.896 1.013 0 .871-.673 1.454-1.999 1.454v.749h-.503zm-.248-2.751v1.251c.991 0 1.671-.094 1.671-.629 0-.575-.734-.622-1.671-.622zm0-.499c.552 0 1.395-.04 1.395-.626 0-.499-.521-.625-1.395-.625v1.251z"/></svg>
            </div>
            <span class="nav-link-text ms-1">ACSF</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ (Request::is('request') ? 'active' : '') }}" href="{{ route('request.index') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12 0c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm.25 7.474v.526h-.5v-.499c-.518-.009-1.053-.132-1.5-.363l.228-.822c.478.186 1.114.383 1.612.271.574-.131.692-.722.057-1.006-.465-.217-1.889-.402-1.889-1.621 0-.682.52-1.292 1.492-1.426v-.534h.5v.509c.361.01.768.073 1.221.21l-.181.824c-.384-.135-.808-.258-1.222-.232-.744.043-.81.688-.29.958.855.402 1.972.7 1.972 1.772.002.859-.672 1.316-1.5 1.433zm-.25 6.526c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm0 9c-2.205 0-4-1.795-4-4s1.795-4 4-4c2.206 0 4 1.795 4 4s-1.794 4-4 4zm9.577-13.613c1.233 2.352 1.548 6.801-2.585 9.756.019-.882-.113-1.706-.436-2.572 2.113-1.744 2.051-4.264 1.193-6.234l-2.377 1.236 1.596-5.182 5.032 1.737-2.423 1.259zm-19.154 5.611c-1.233-2.352-1.46-7.146 2.672-10.101-.019.882.114 1.707.436 2.572-2.114 1.745-2.139 4.609-1.281 6.58l2.377-1.236-1.596 5.182-5.031-1.738 2.423-1.259zm9.576 7.002v-.756h-.248v.756h-.502v-.756h-1.242l.127-.744h.27c.219 0 .347-.213.347-.427v-2.222c0-.208-.122-.351-.341-.351h-.41v-.75h1.249v-.75h.502v.75h.248v-.75h.502v.763c1.078.037 1.506.445 1.629.907.143.545-.216 1.002-.525 1.114.375.096.896.373.896 1.013 0 .871-.673 1.454-1.999 1.454v.749h-.503zm-.248-2.751v1.251c.991 0 1.671-.094 1.671-.629 0-.575-.734-.622-1.671-.622zm0-.499c.552 0 1.395-.04 1.395-.626 0-.499-.521-.625-1.395-.625v1.251z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Disbursement Reqs</span>
        </a>
      </li> 

      <li class="nav-item">
        <a class="nav-link {{ (Request::is('disbursement') ? 'active' : '') }}" href="{{ url('disbursement') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12 0c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm.25 7.474v.526h-.5v-.499c-.518-.009-1.053-.132-1.5-.363l.228-.822c.478.186 1.114.383 1.612.271.574-.131.692-.722.057-1.006-.465-.217-1.889-.402-1.889-1.621 0-.682.52-1.292 1.492-1.426v-.534h.5v.509c.361.01.768.073 1.221.21l-.181.824c-.384-.135-.808-.258-1.222-.232-.744.043-.81.688-.29.958.855.402 1.972.7 1.972 1.772.002.859-.672 1.316-1.5 1.433zm-.25 6.526c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm0 9c-2.205 0-4-1.795-4-4s1.795-4 4-4c2.206 0 4 1.795 4 4s-1.794 4-4 4zm9.577-13.613c1.233 2.352 1.548 6.801-2.585 9.756.019-.882-.113-1.706-.436-2.572 2.113-1.744 2.051-4.264 1.193-6.234l-2.377 1.236 1.596-5.182 5.032 1.737-2.423 1.259zm-19.154 5.611c-1.233-2.352-1.46-7.146 2.672-10.101-.019.882.114 1.707.436 2.572-2.114 1.745-2.139 4.609-1.281 6.58l2.377-1.236-1.596 5.182-5.031-1.738 2.423-1.259zm9.576 7.002v-.756h-.248v.756h-.502v-.756h-1.242l.127-.744h.27c.219 0 .347-.213.347-.427v-2.222c0-.208-.122-.351-.341-.351h-.41v-.75h1.249v-.75h.502v.75h.248v-.75h.502v.763c1.078.037 1.506.445 1.629.907.143.545-.216 1.002-.525 1.114.375.096.896.373.896 1.013 0 .871-.673 1.454-1.999 1.454v.749h-.503zm-.248-2.751v1.251c.991 0 1.671-.094 1.671-.629 0-.575-.734-.622-1.671-.622zm0-.499c.552 0 1.395-.04 1.395-.626 0-.499-.521-.625-1.395-.625v1.251z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Disbursement</span>
        </a>
      </li> 

      <li class="nav-item">
        <a class="nav-link {{ (Request::is('monthly-report') ? 'active' : '') }}" href="{{ route('accounting.report')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12 0c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm.25 7.474v.526h-.5v-.499c-.518-.009-1.053-.132-1.5-.363l.228-.822c.478.186 1.114.383 1.612.271.574-.131.692-.722.057-1.006-.465-.217-1.889-.402-1.889-1.621 0-.682.52-1.292 1.492-1.426v-.534h.5v.509c.361.01.768.073 1.221.21l-.181.824c-.384-.135-.808-.258-1.222-.232-.744.043-.81.688-.29.958.855.402 1.972.7 1.972 1.772.002.859-.672 1.316-1.5 1.433zm-.25 6.526c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm0 9c-2.205 0-4-1.795-4-4s1.795-4 4-4c2.206 0 4 1.795 4 4s-1.794 4-4 4zm9.577-13.613c1.233 2.352 1.548 6.801-2.585 9.756.019-.882-.113-1.706-.436-2.572 2.113-1.744 2.051-4.264 1.193-6.234l-2.377 1.236 1.596-5.182 5.032 1.737-2.423 1.259zm-19.154 5.611c-1.233-2.352-1.46-7.146 2.672-10.101-.019.882.114 1.707.436 2.572-2.114 1.745-2.139 4.609-1.281 6.58l2.377-1.236-1.596 5.182-5.031-1.738 2.423-1.259zm9.576 7.002v-.756h-.248v.756h-.502v-.756h-1.242l.127-.744h.27c.219 0 .347-.213.347-.427v-2.222c0-.208-.122-.351-.341-.351h-.41v-.75h1.249v-.75h.502v.75h.248v-.75h.502v.763c1.078.037 1.506.445 1.629.907.143.545-.216 1.002-.525 1.114.375.096.896.373.896 1.013 0 .871-.673 1.454-1.999 1.454v.749h-.503zm-.248-2.751v1.251c.991 0 1.671-.094 1.671-.629 0-.575-.734-.622-1.671-.622zm0-.499c.552 0 1.395-.04 1.395-.626 0-.499-.521-.625-1.395-.625v1.251z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Report</span>
        </a>
      </li> 
      
    
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Events</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('events') ? 'active' : '') }} " href="{{ url('events') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M17 3v-2c0-.552.447-1 1-1s1 .448 1 1v2c0 .552-.447 1-1 1s-1-.448-1-1zm-12 1c.553 0 1-.448 1-1v-2c0-.552-.447-1-1-1-.553 0-1 .448-1 1v2c0 .552.447 1 1 1zm13 13v-3h-1v4h3v-1h-2zm-5 .5c0 2.481 2.019 4.5 4.5 4.5s4.5-2.019 4.5-4.5-2.019-4.5-4.5-4.5-4.5 2.019-4.5 4.5zm11 0c0 3.59-2.91 6.5-6.5 6.5s-6.5-2.91-6.5-6.5 2.91-6.5 6.5-6.5 6.5 2.91 6.5 6.5zm-14.237 3.5h-7.763v-13h19v1.763c.727.33 1.399.757 2 1.268v-9.031h-3v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-9v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-3v21h11.031c-.511-.601-.938-1.273-1.268-2z"/></svg>
            </div>
            <span class="nav-link-text ms-1">All Events</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('attendance') ? 'active' : '') }} " href="{{ url('attendance') }}">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m20 20h-15.25c-.414 0-.75.336-.75.75s.336.75.75.75h15.75c.53 0 1-.47 1-1v-15.75c0-.414-.336-.75-.75-.75s-.75.336-.75.75zm-1-17c0-.478-.379-1-1-1h-15c-.62 0-1 .519-1 1v15c0 .621.52 1 1 1h15c.478 0 1-.379 1-1zm-12.751 8.306c-.165-.147-.249-.351-.249-.556 0-.411.333-.746.748-.746.178 0 .355.062.499.19l2.371 2.011 4.453-4.962c.149-.161.35-.243.554-.243.417 0 .748.336.748.746 0 .179-.065.359-.196.503l-4.953 5.508c-.148.161-.35.243-.553.243-.177 0-.356-.063-.498-.19z" fill-rule="nonzero"/></svg>
              </div>
              <span class="nav-link-text ms-1">Attendance</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('/attendance/view') ? 'active' : '') }} " href="{{ url('/attendance/view') }}">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M17 3v-2c0-.552.447-1 1-1s1 .448 1 1v2c0 .552-.447 1-1 1s-1-.448-1-1zm-12 1c.553 0 1-.448 1-1v-2c0-.552-.447-1-1-1-.553 0-1 .448-1 1v2c0 .552.447 1 1 1zm13 13v-3h-1v4h3v-1h-2zm-5 .5c0 2.481 2.019 4.5 4.5 4.5s4.5-2.019 4.5-4.5-2.019-4.5-4.5-4.5-4.5 2.019-4.5 4.5zm11 0c0 3.59-2.91 6.5-6.5 6.5s-6.5-2.91-6.5-6.5 2.91-6.5 6.5-6.5 6.5 2.91 6.5 6.5zm-14.237 3.5h-7.763v-13h19v1.763c.727.33 1.399.757 2 1.268v-9.031h-3v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-9v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-3v21h11.031c-.511-.601-.938-1.273-1.268-2z"/></svg>
              </div>
              <span class="nav-link-text ms-1">Attendance Record</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('log_activities') ? 'active' : '') }} " href="{{ url('log-activities') }}">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M17 3v-2c0-.552.447-1 1-1s1 .448 1 1v2c0 .552-.447 1-1 1s-1-.448-1-1zm-12 1c.553 0 1-.448 1-1v-2c0-.552-.447-1-1-1-.553 0-1 .448-1 1v2c0 .552.447 1 1 1zm13 13v-3h-1v4h3v-1h-2zm-5 .5c0 2.481 2.019 4.5 4.5 4.5s4.5-2.019 4.5-4.5-2.019-4.5-4.5-4.5-4.5 2.019-4.5 4.5zm11 0c0 3.59-2.91 6.5-6.5 6.5s-6.5-2.91-6.5-6.5 2.91-6.5 6.5-6.5 6.5 2.91 6.5 6.5zm-14.237 3.5h-7.763v-13h19v1.763c.727.33 1.399.757 2 1.268v-9.031h-3v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-9v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-3v21h11.031c-.511-.601-.938-1.273-1.268-2z"/></svg>
              </div>
              <span class="nav-link-text ms-1">LOGS</span>
        </a>
        <li class="nav-item">
        <a class="nav-link {{ (Request::is('deleted_records') ? 'active' : '') }} " href="{{ url('deleted-records') }}">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                       </div>
              <span class="nav-link-text ms-1">Recycle Bin</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
